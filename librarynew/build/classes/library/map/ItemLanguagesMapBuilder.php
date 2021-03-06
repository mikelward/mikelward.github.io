<?php

require_once 'propel/map/MapBuilder.php';
include_once 'creole/CreoleTypes.php';


/**
 * This class adds structure of 'item_languages' table to 'library' DatabaseMap object.
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
class ItemLanguagesMapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'library.map.ItemLanguagesMapBuilder';

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

		$tMap = $this->dbMap->addTable('item_languages');
		$tMap->setPhpName('ItemLanguages');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignKey('ITEM_ID', 'ItemId', 'int', CreoleTypes::INTEGER, 'items', 'ITEM_ID', true, null);

		$tMap->addForeignKey('LANGUAGE_ID', 'LanguageId', 'int', CreoleTypes::INTEGER, 'languages', 'LANGUAGE_ID', true, null);

		$tMap->addColumn('MEDIUM_ID', 'MediumId', 'int', CreoleTypes::INTEGER, true, null);

	} // doBuild()

} // ItemLanguagesMapBuilder
