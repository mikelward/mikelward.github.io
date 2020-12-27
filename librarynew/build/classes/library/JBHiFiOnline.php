<?php

require_once 'library/Item.php';
require_once 'library/Store.php';
require_once 'library/Cache.php';

/**
 * JB Hi-Fi online store.
 * http://www.jbhifionline.com.au/
 *
 * Often their online prices match their bricks-and-mortar stores, and this is the only place they publish their prices.
 */
class JBHiFiOnline extends Store
{
	static $searchBase = "http://www.jbhifionline.com.au";
	static $searchPrefix = array(
		ItemPeer::CLASSKEY_BOOK			=> null,                 	// they don't have books... yet (their HTML source suggests they might one day)
		ItemPeer::CLASSKEY_MOVIE		=> "/dvds/search/all",
		ItemPeer::CLASSKEY_ALBUM		=> "/music/search/title",	// only matches album titles :-(
		ItemPeer::CLASSKEY_SOFTWARE		=> "/games/search/all"		// only games, not other apps, obviously :-)
	);

	static $itemViewBase = "http://www.jbhifionline.com.au";
	static $itemViewPrefix = array(
		ItemPeer::CLASSKEY_BOOK       => null,
		ItemPeer::CLASSKEY_MOVIE      => "/dvds/id/",
		ItemPeer::CLASSKEY_ALBUM      => "/music/id/",
		ItemPeer::CLASSKEY_SOFTWARE   => "/games/id/"
	);

	/**
	 * More Propel goodness >:-/
	 */
    public function __construct()
    {
        $this->setClassKey(StorePeer::CLASSKEY_JBHIFIONLINE);
    }

	/**
	 * Return a StoreItem.
	 */
	public function updateStoreItem($store_item, $class_key)
	{
		error_log("Updating JB item " . $store_item->getStoreItemId());
		$store_item_id = $store_item->getStoreItemId();
		$url = JBHiFiOnline::getItemDataURL($store_item_id, $class_key);
		$file = Cache::getFileForURL($url);
		$contents = file_get_contents($file);		// XXX Claims to be OK for large files, but double check
		if ($contents) {
			if (preg_match('/class="itemPriceRed".*?\$([0-9.]+)/', $contents, $matches)) {
				error_log("Special price: $matches[1]");
				$store_item->setPrice($matches[1] * 100);
			}
			elseif (preg_match('/class="itemPrice".*?\$([0-9.]+)/', $contents, $matches)) {
				error_log("Normal price: $matches[1]");
				$store_item->setPrice($matches[1] * 100);
			}
			else {
				error_log("No price found");
			}

			// Same page for human-readable and machine-readable
			$store_item->setViewURL($url);
			$store_item->save();
		}
		else {
			throw new Exception("Cannot read cached file for store item $store_item_id");
		}
	}

	/**
	 * Gets the price in cents.
	 */
	public function getItemPrice($store_item_id)
	{
		$storeItem = StorePeer::retrieveByPK($store_item_id);
		if ($storeItem) {
			return $storeItem->getPrice();
		}
		else {
			throw new Exception("Cannot get price for store item $store_item_id: Item not on file");
		}
	}

	/**
	 * Return the address of a user-visible document (e.g. HTML page) about this item.
	 */
	public function getItemViewURL($store_item_id)
	{
		$storeItem = StorePeer::retrieveByPk($store_item_id);
		if ($storeItem) {
			return $storeItem->getViewURL();
		}
		else {
			throw new Exception("Cannot get item view URL for store item $store_item_id: Item not on file");
		}
	}

	/**
	 * Get the machine-readable item URL for this supplied item.
	 *
	 * This might be HTML, XML, or something else.
	 *
	 * This is static.  Use it to populate the item.
	 */
	static public function getItemDataURL($store_item_id, $class_key)
	{
		if ($class_key != null) {
			$base = JBHiFiOnline::$itemViewBase;
			$prefix = JBHiFiOnline::$itemViewPrefix[$class_key];
			if ($prefix) {
				$url = $base . $prefix . $store_item_id;
				return $url;
			}
			else {
				throw new Exception("Cannot get item data URL: No prefix defined");
			}
		}
		else {
			throw new Exception("Cannot get item data URL: No class key supplied");
		}
	}
}

