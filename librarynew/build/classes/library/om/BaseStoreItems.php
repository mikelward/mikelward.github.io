<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'library/StoreItemsPeer.php';

/**
 * Base class that represents a row from the 'store_items' table.
 *
 * 
 *
 * This class was autogenerated by Propel on:
 *
 * Thu Feb 21 12:06:50 2008
 *
 * @package    library.om
 */
abstract class BaseStoreItems extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        StoreItemsPeer
	 */
	protected static $peer;


	/**
	 * The value for the store_id field.
	 * @var        int
	 */
	protected $store_id;


	/**
	 * The value for the item_id field.
	 * @var        int
	 */
	protected $item_id;


	/**
	 * The value for the store_item_id field.
	 * @var        int
	 */
	protected $store_item_id;

	/**
	 * @var        Store
	 */
	protected $aStore;

	/**
	 * @var        Item
	 */
	protected $aItem;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [store_id] column value.
	 * 
	 * @return     int
	 */
	public function getStoreId()
	{

		return $this->store_id;
	}

	/**
	 * Get the [item_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemId()
	{

		return $this->item_id;
	}

	/**
	 * Get the [store_item_id] column value.
	 * 
	 * @return     int
	 */
	public function getStoreItemId()
	{

		return $this->store_item_id;
	}

	/**
	 * Set the value of [store_id] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setStoreId($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->store_id !== $v) {
			$this->store_id = $v;
			$this->modifiedColumns[] = StoreItemsPeer::STORE_ID;
		}

		if ($this->aStore !== null && $this->aStore->getStoreId() !== $v) {
			$this->aStore = null;
		}

	} // setStoreId()

	/**
	 * Set the value of [item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setItemId($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->item_id !== $v) {
			$this->item_id = $v;
			$this->modifiedColumns[] = StoreItemsPeer::ITEM_ID;
		}

		if ($this->aItem !== null && $this->aItem->getItemId() !== $v) {
			$this->aItem = null;
		}

	} // setItemId()

	/**
	 * Set the value of [store_item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setStoreItemId($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->store_item_id !== $v) {
			$this->store_item_id = $v;
			$this->modifiedColumns[] = StoreItemsPeer::STORE_ITEM_ID;
		}

	} // setStoreItemId()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (1-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
	 * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->store_id = $rs->getInt($startcol + 0);

			$this->item_id = $rs->getInt($startcol + 1);

			$this->store_item_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 3; // 3 = StoreItemsPeer::NUM_COLUMNS - StoreItemsPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating StoreItems object", $e);
		}
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      Connection $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StoreItemsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			StoreItemsPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	/**
	 * Stores the object in the database.  If the object is new,
	 * it inserts it; otherwise an update is performed.  This method
	 * wraps the doSave() worker method in a transaction.
	 *
	 * @param      Connection $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StoreItemsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	/**
	 * Stores the object in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      Connection $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave($con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aStore !== null) {
				if ($this->aStore->isModified()) {
					$affectedRows += $this->aStore->save($con);
				}
				$this->setStore($this->aStore);
			}

			if ($this->aItem !== null) {
				if ($this->aItem->isModified()) {
					$affectedRows += $this->aItem->save($con);
				}
				$this->setItem($this->aItem);
			}


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = StoreItemsPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setNew(false);
				} else {
					$affectedRows += StoreItemsPeer::doUpdate($this, $con);
				}
				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aStore !== null) {
				if (!$this->aStore->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStore->getValidationFailures());
				}
			}

			if ($this->aItem !== null) {
				if (!$this->aItem->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aItem->getValidationFailures());
				}
			}


			if (($retval = StoreItemsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(StoreItemsPeer::DATABASE_NAME);

		if ($this->isColumnModified(StoreItemsPeer::STORE_ID)) $criteria->add(StoreItemsPeer::STORE_ID, $this->store_id);
		if ($this->isColumnModified(StoreItemsPeer::ITEM_ID)) $criteria->add(StoreItemsPeer::ITEM_ID, $this->item_id);
		if ($this->isColumnModified(StoreItemsPeer::STORE_ITEM_ID)) $criteria->add(StoreItemsPeer::STORE_ITEM_ID, $this->store_item_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(StoreItemsPeer::DATABASE_NAME);

		$criteria->add(StoreItemsPeer::STORE_ITEM_ID, $this->store_item_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getStoreItemId();
	}

	/**
	 * Generic method to set the primary key (store_item_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setStoreItemId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of StoreItems (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStoreId($this->store_id);

		$copyObj->setItemId($this->item_id);


		$copyObj->setNew(true);

		$copyObj->setStoreItemId(NULL); // this is a pkey column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     StoreItems Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     StoreItemsPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new StoreItemsPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Store object.
	 *
	 * @param      Store $v
	 * @return     void
	 * @throws     PropelException
	 */
	public function setStore($v)
	{


		if ($v === null) {
			$this->setStoreId(NULL);
		} else {
			$this->setStoreId($v->getStoreId());
		}


		$this->aStore = $v;
	}


	/**
	 * Get the associated Store object
	 *
	 * @param      Connection Optional Connection object.
	 * @return     Store The associated Store object.
	 * @throws     PropelException
	 */
	public function getStore($con = null)
	{
		// include the related Peer class
		include_once 'library/om/BaseStorePeer.php';

		if ($this->aStore === null && ($this->store_id !== null)) {

			$this->aStore = StorePeer::retrieveByPK($this->store_id, $con);

			/* The following can be used instead of the line above to
			   guarantee the related object contains a reference
			   to this object, but this level of coupling
			   may be undesirable in many circumstances.
			   As it can lead to a db query with many results that may
			   never be used.
			   $obj = StorePeer::retrieveByPK($this->store_id, $con);
			   $obj->addStores($this);
			 */
		}
		return $this->aStore;
	}

	/**
	 * Declares an association between this object and a Item object.
	 *
	 * @param      Item $v
	 * @return     void
	 * @throws     PropelException
	 */
	public function setItem($v)
	{


		if ($v === null) {
			$this->setItemId(NULL);
		} else {
			$this->setItemId($v->getItemId());
		}


		$this->aItem = $v;
	}


	/**
	 * Get the associated Item object
	 *
	 * @param      Connection Optional Connection object.
	 * @return     Item The associated Item object.
	 * @throws     PropelException
	 */
	public function getItem($con = null)
	{
		// include the related Peer class
		include_once 'library/om/BaseItemPeer.php';

		if ($this->aItem === null && ($this->item_id !== null)) {

			$this->aItem = ItemPeer::retrieveByPK($this->item_id, $con);

			/* The following can be used instead of the line above to
			   guarantee the related object contains a reference
			   to this object, but this level of coupling
			   may be undesirable in many circumstances.
			   As it can lead to a db query with many results that may
			   never be used.
			   $obj = ItemPeer::retrieveByPK($this->item_id, $con);
			   $obj->addItems($this);
			 */
		}
		return $this->aItem;
	}

} // BaseStoreItems