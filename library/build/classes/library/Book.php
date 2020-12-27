<?php

require_once 'library/Item.php';

require_once 'library/om/BaseItem.php';


/**
 * Skeleton subclass for representing a row from one of the subclasses of the 'items' table.
 *
 * 
 *
 * This class was autogenerated by Propel on:
 *
 * Mon Sep  3 18:34:35 2007
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    library
 */
class Book extends Item {

	/**
	 * Constructs a new Book class, setting the class_key column to ItemPeer::CLASSKEY_1.
	 */
	public function __construct()
	{

		$this->setClassKey(ItemPeer::CLASSKEY_1);
	}

} // Book
