<?php

require_once 'propel/map/MapBuilder.php';
include_once 'creole/CreoleTypes.php';


/**
 * This class adds structure of 'items' table to 'library' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel on:
 *
 * Thu Feb 21 18:54:31 2008
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    library.map
 */
class ItemMapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'library.map.ItemMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('library');

		$tMap = $this->dbMap->addTable('items');
		$tMap->setPhpName('Item');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ITEM_ID', 'ItemId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CLASS_KEY', 'ClassKey', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, true, 64);

		$tMap->addColumn('PURCHASED_ON', 'PurchasedOn', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('LASTUSED_ON', 'LastusedOn', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('RATING', 'Rating', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('JBID', 'Jbid', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('AUTHOR', 'Author', 'string', CreoleTypes::VARCHAR, false, 64);

		$tMap->addColumn('ISBN', 'Isbn', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('ISBN13', 'Isbn13', 'string', CreoleTypes::VARCHAR, false, 13);

		$tMap->addForeignKey('ARTIST_ID', 'ArtistId', 'int', CreoleTypes::INTEGER, 'artists', 'ARTIST_ID', false, null);

		$tMap->addColumn('LICENCE_KEY', 'LicenceKey', 'string', CreoleTypes::VARCHAR, false, 64);

		$tMap->addForeignKey('PLATFORM_ID', 'PlatformId', 'int', CreoleTypes::INTEGER, 'platforms', 'PLATFORM_ID', false, null);

	} // doBuild()

} // ItemMapBuilder
