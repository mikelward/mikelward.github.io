<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'library/ItemPeer.php';

/**
 * Base class that represents a row from the 'items' table.
 *
 * 
 *
 * This class was autogenerated by Propel on:
 *
 * Thu Feb 21 18:54:31 2008
 *
 * @package    library.om
 */
abstract class BaseItem extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ItemPeer
	 */
	protected static $peer;


	/**
	 * The value for the item_id field.
	 * @var        int
	 */
	protected $item_id;


	/**
	 * The value for the class_key field.
	 * @var        int
	 */
	protected $class_key;


	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;


	/**
	 * The value for the purchased_on field.
	 * @var        int
	 */
	protected $purchased_on;


	/**
	 * The value for the lastused_on field.
	 * @var        int
	 */
	protected $lastused_on;


	/**
	 * The value for the rating field.
	 * @var        int
	 */
	protected $rating;


	/**
	 * The value for the jbid field.
	 * @var        int
	 */
	protected $jbid;


	/**
	 * The value for the author field.
	 * @var        string
	 */
	protected $author;


	/**
	 * The value for the isbn field.
	 * @var        string
	 */
	protected $isbn;


	/**
	 * The value for the isbn13 field.
	 * @var        string
	 */
	protected $isbn13;


	/**
	 * The value for the artist_id field.
	 * @var        int
	 */
	protected $artist_id;


	/**
	 * The value for the licence_key field.
	 * @var        string
	 */
	protected $licence_key;


	/**
	 * The value for the platform_id field.
	 * @var        int
	 */
	protected $platform_id;

	/**
	 * @var        Artist
	 */
	protected $aArtist;

	/**
	 * @var        Platform
	 */
	protected $aPlatform;

	/**
	 * Collection to store aggregation of collItemLanguagess.
	 * @var        array
	 */
	protected $collItemLanguagess;

	/**
	 * The criteria used to select the current contents of collItemLanguagess.
	 * @var        Criteria
	 */
	protected $lastItemLanguagesCriteria = null;

	/**
	 * Collection to store aggregation of collStoreItems.
	 * @var        array
	 */
	protected $collStoreItems;

	/**
	 * The criteria used to select the current contents of collStoreItems.
	 * @var        Criteria
	 */
	protected $lastStoreItemCriteria = null;

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
	 * Get the [item_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemId()
	{

		return $this->item_id;
	}

	/**
	 * Get the [class_key] column value.
	 * 
	 * @return     int
	 */
	public function getClassKey()
	{

		return $this->class_key;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{

		return $this->title;
	}

	/**
	 * Get the [optionally formatted] [purchased_on] column value.
	 * 
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the integer unix timestamp will be returned.
	 * @return     mixed Formatted date/time value as string or integer unix timestamp (if format is NULL).
	 * @throws     PropelException - if unable to convert the date/time to timestamp.
	 */
	public function getPurchasedOn($format = '%x')
	{

		if ($this->purchased_on === null || $this->purchased_on === '') {
			return null;
		} elseif (!is_int($this->purchased_on)) {
			// a non-timestamp value was set externally, so we convert it
			$ts = strtotime($this->purchased_on);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse value of [purchased_on] as date/time value: " . var_export($this->purchased_on, true));
			}
		} else {
			$ts = $this->purchased_on;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	/**
	 * Get the [optionally formatted] [lastused_on] column value.
	 * 
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the integer unix timestamp will be returned.
	 * @return     mixed Formatted date/time value as string or integer unix timestamp (if format is NULL).
	 * @throws     PropelException - if unable to convert the date/time to timestamp.
	 */
	public function getLastusedOn($format = '%x')
	{

		if ($this->lastused_on === null || $this->lastused_on === '') {
			return null;
		} elseif (!is_int($this->lastused_on)) {
			// a non-timestamp value was set externally, so we convert it
			$ts = strtotime($this->lastused_on);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse value of [lastused_on] as date/time value: " . var_export($this->lastused_on, true));
			}
		} else {
			$ts = $this->lastused_on;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	/**
	 * Get the [rating] column value.
	 * 
	 * @return     int
	 */
	public function getRating()
	{

		return $this->rating;
	}

	/**
	 * Get the [jbid] column value.
	 * 
	 * @return     int
	 */
	public function getJbid()
	{

		return $this->jbid;
	}

	/**
	 * Get the [author] column value.
	 * 
	 * @return     string
	 */
	public function getAuthor()
	{

		return $this->author;
	}

	/**
	 * Get the [isbn] column value.
	 * 
	 * @return     string
	 */
	public function getIsbn()
	{

		return $this->isbn;
	}

	/**
	 * Get the [isbn13] column value.
	 * 
	 * @return     string
	 */
	public function getIsbn13()
	{

		return $this->isbn13;
	}

	/**
	 * Get the [artist_id] column value.
	 * 
	 * @return     int
	 */
	public function getArtistId()
	{

		return $this->artist_id;
	}

	/**
	 * Get the [licence_key] column value.
	 * 
	 * @return     string
	 */
	public function getLicenceKey()
	{

		return $this->licence_key;
	}

	/**
	 * Get the [platform_id] column value.
	 * 
	 * @return     int
	 */
	public function getPlatformId()
	{

		return $this->platform_id;
	}

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
			$this->modifiedColumns[] = ItemPeer::ITEM_ID;
		}

	} // setItemId()

	/**
	 * Set the value of [class_key] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setClassKey($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->class_key !== $v) {
			$this->class_key = $v;
			$this->modifiedColumns[] = ItemPeer::CLASS_KEY;
		}

	} // setClassKey()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setTitle($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = ItemPeer::TITLE;
		}

	} // setTitle()

	/**
	 * Set the value of [purchased_on] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setPurchasedOn($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse date/time value for [purchased_on] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->purchased_on !== $ts) {
			$this->purchased_on = $ts;
			$this->modifiedColumns[] = ItemPeer::PURCHASED_ON;
		}

	} // setPurchasedOn()

	/**
	 * Set the value of [lastused_on] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setLastusedOn($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse date/time value for [lastused_on] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->lastused_on !== $ts) {
			$this->lastused_on = $ts;
			$this->modifiedColumns[] = ItemPeer::LASTUSED_ON;
		}

	} // setLastusedOn()

	/**
	 * Set the value of [rating] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setRating($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rating !== $v) {
			$this->rating = $v;
			$this->modifiedColumns[] = ItemPeer::RATING;
		}

	} // setRating()

	/**
	 * Set the value of [jbid] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setJbid($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->jbid !== $v) {
			$this->jbid = $v;
			$this->modifiedColumns[] = ItemPeer::JBID;
		}

	} // setJbid()

	/**
	 * Set the value of [author] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setAuthor($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->author !== $v) {
			$this->author = $v;
			$this->modifiedColumns[] = ItemPeer::AUTHOR;
		}

	} // setAuthor()

	/**
	 * Set the value of [isbn] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setIsbn($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->isbn !== $v) {
			$this->isbn = $v;
			$this->modifiedColumns[] = ItemPeer::ISBN;
		}

	} // setIsbn()

	/**
	 * Set the value of [isbn13] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setIsbn13($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->isbn13 !== $v) {
			$this->isbn13 = $v;
			$this->modifiedColumns[] = ItemPeer::ISBN13;
		}

	} // setIsbn13()

	/**
	 * Set the value of [artist_id] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setArtistId($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->artist_id !== $v) {
			$this->artist_id = $v;
			$this->modifiedColumns[] = ItemPeer::ARTIST_ID;
		}

		if ($this->aArtist !== null && $this->aArtist->getArtistId() !== $v) {
			$this->aArtist = null;
		}

	} // setArtistId()

	/**
	 * Set the value of [licence_key] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setLicenceKey($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->licence_key !== $v) {
			$this->licence_key = $v;
			$this->modifiedColumns[] = ItemPeer::LICENCE_KEY;
		}

	} // setLicenceKey()

	/**
	 * Set the value of [platform_id] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setPlatformId($v)
	{

		// Since the native PHP type for this column is integer,
		// we will cast the input value to an int (if it is not).
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->platform_id !== $v) {
			$this->platform_id = $v;
			$this->modifiedColumns[] = ItemPeer::PLATFORM_ID;
		}

		if ($this->aPlatform !== null && $this->aPlatform->getPlatformId() !== $v) {
			$this->aPlatform = null;
		}

	} // setPlatformId()

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

			$this->item_id = $rs->getInt($startcol + 0);

			$this->class_key = $rs->getInt($startcol + 1);

			$this->title = $rs->getString($startcol + 2);

			$this->purchased_on = $rs->getDate($startcol + 3, null);

			$this->lastused_on = $rs->getDate($startcol + 4, null);

			$this->rating = $rs->getInt($startcol + 5);

			$this->jbid = $rs->getInt($startcol + 6);

			$this->author = $rs->getString($startcol + 7);

			$this->isbn = $rs->getString($startcol + 8);

			$this->isbn13 = $rs->getString($startcol + 9);

			$this->artist_id = $rs->getInt($startcol + 10);

			$this->licence_key = $rs->getString($startcol + 11);

			$this->platform_id = $rs->getInt($startcol + 12);

			$this->resetModified();

			$this->setNew(false);

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 13; // 13 = ItemPeer::NUM_COLUMNS - ItemPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Item object", $e);
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
			$con = Propel::getConnection(ItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ItemPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ItemPeer::DATABASE_NAME);
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

			if ($this->aArtist !== null) {
				if ($this->aArtist->isModified()) {
					$affectedRows += $this->aArtist->save($con);
				}
				$this->setArtist($this->aArtist);
			}

			if ($this->aPlatform !== null) {
				if ($this->aPlatform->isModified()) {
					$affectedRows += $this->aPlatform->save($con);
				}
				$this->setPlatform($this->aPlatform);
			}


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ItemPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setItemId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ItemPeer::doUpdate($this, $con);
				}
				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collItemLanguagess !== null) {
				foreach($this->collItemLanguagess as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collStoreItems !== null) {
				foreach($this->collStoreItems as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->aArtist !== null) {
				if (!$this->aArtist->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aArtist->getValidationFailures());
				}
			}

			if ($this->aPlatform !== null) {
				if (!$this->aPlatform->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPlatform->getValidationFailures());
				}
			}


			if (($retval = ItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collItemLanguagess !== null) {
					foreach($this->collItemLanguagess as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collStoreItems !== null) {
					foreach($this->collStoreItems as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$criteria = new Criteria(ItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(ItemPeer::ITEM_ID)) $criteria->add(ItemPeer::ITEM_ID, $this->item_id);
		if ($this->isColumnModified(ItemPeer::CLASS_KEY)) $criteria->add(ItemPeer::CLASS_KEY, $this->class_key);
		if ($this->isColumnModified(ItemPeer::TITLE)) $criteria->add(ItemPeer::TITLE, $this->title);
		if ($this->isColumnModified(ItemPeer::PURCHASED_ON)) $criteria->add(ItemPeer::PURCHASED_ON, $this->purchased_on);
		if ($this->isColumnModified(ItemPeer::LASTUSED_ON)) $criteria->add(ItemPeer::LASTUSED_ON, $this->lastused_on);
		if ($this->isColumnModified(ItemPeer::RATING)) $criteria->add(ItemPeer::RATING, $this->rating);
		if ($this->isColumnModified(ItemPeer::JBID)) $criteria->add(ItemPeer::JBID, $this->jbid);
		if ($this->isColumnModified(ItemPeer::AUTHOR)) $criteria->add(ItemPeer::AUTHOR, $this->author);
		if ($this->isColumnModified(ItemPeer::ISBN)) $criteria->add(ItemPeer::ISBN, $this->isbn);
		if ($this->isColumnModified(ItemPeer::ISBN13)) $criteria->add(ItemPeer::ISBN13, $this->isbn13);
		if ($this->isColumnModified(ItemPeer::ARTIST_ID)) $criteria->add(ItemPeer::ARTIST_ID, $this->artist_id);
		if ($this->isColumnModified(ItemPeer::LICENCE_KEY)) $criteria->add(ItemPeer::LICENCE_KEY, $this->licence_key);
		if ($this->isColumnModified(ItemPeer::PLATFORM_ID)) $criteria->add(ItemPeer::PLATFORM_ID, $this->platform_id);

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
		$criteria = new Criteria(ItemPeer::DATABASE_NAME);

		$criteria->add(ItemPeer::ITEM_ID, $this->item_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getItemId();
	}

	/**
	 * Generic method to set the primary key (item_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setItemId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Item (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setClassKey($this->class_key);

		$copyObj->setTitle($this->title);

		$copyObj->setPurchasedOn($this->purchased_on);

		$copyObj->setLastusedOn($this->lastused_on);

		$copyObj->setRating($this->rating);

		$copyObj->setJbid($this->jbid);

		$copyObj->setAuthor($this->author);

		$copyObj->setIsbn($this->isbn);

		$copyObj->setIsbn13($this->isbn13);

		$copyObj->setArtistId($this->artist_id);

		$copyObj->setLicenceKey($this->licence_key);

		$copyObj->setPlatformId($this->platform_id);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach($this->getItemLanguagess() as $relObj) {
				$copyObj->addItemLanguages($relObj->copy($deepCopy));
			}

			foreach($this->getStoreItems() as $relObj) {
				$copyObj->addStoreItem($relObj->copy($deepCopy));
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setItemId(NULL); // this is a pkey column, so set to default value

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
	 * @return     Item Clone of current object.
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
	 * @return     ItemPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ItemPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Artist object.
	 *
	 * @param      Artist $v
	 * @return     void
	 * @throws     PropelException
	 */
	public function setArtist($v)
	{


		if ($v === null) {
			$this->setArtistId(NULL);
		} else {
			$this->setArtistId($v->getArtistId());
		}


		$this->aArtist = $v;
	}


	/**
	 * Get the associated Artist object
	 *
	 * @param      Connection Optional Connection object.
	 * @return     Artist The associated Artist object.
	 * @throws     PropelException
	 */
	public function getArtist($con = null)
	{
		// include the related Peer class
		include_once 'library/om/BaseArtistPeer.php';

		if ($this->aArtist === null && ($this->artist_id !== null)) {

			$this->aArtist = ArtistPeer::retrieveByPK($this->artist_id, $con);

			/* The following can be used instead of the line above to
			   guarantee the related object contains a reference
			   to this object, but this level of coupling
			   may be undesirable in many circumstances.
			   As it can lead to a db query with many results that may
			   never be used.
			   $obj = ArtistPeer::retrieveByPK($this->artist_id, $con);
			   $obj->addArtists($this);
			 */
		}
		return $this->aArtist;
	}

	/**
	 * Declares an association between this object and a Platform object.
	 *
	 * @param      Platform $v
	 * @return     void
	 * @throws     PropelException
	 */
	public function setPlatform($v)
	{


		if ($v === null) {
			$this->setPlatformId(NULL);
		} else {
			$this->setPlatformId($v->getPlatformId());
		}


		$this->aPlatform = $v;
	}


	/**
	 * Get the associated Platform object
	 *
	 * @param      Connection Optional Connection object.
	 * @return     Platform The associated Platform object.
	 * @throws     PropelException
	 */
	public function getPlatform($con = null)
	{
		// include the related Peer class
		include_once 'library/om/BasePlatformPeer.php';

		if ($this->aPlatform === null && ($this->platform_id !== null)) {

			$this->aPlatform = PlatformPeer::retrieveByPK($this->platform_id, $con);

			/* The following can be used instead of the line above to
			   guarantee the related object contains a reference
			   to this object, but this level of coupling
			   may be undesirable in many circumstances.
			   As it can lead to a db query with many results that may
			   never be used.
			   $obj = PlatformPeer::retrieveByPK($this->platform_id, $con);
			   $obj->addPlatforms($this);
			 */
		}
		return $this->aPlatform;
	}

	/**
	 * Temporary storage of collItemLanguagess to save a possible db hit in
	 * the event objects are add to the collection, but the
	 * complete collection is never requested.
	 * @return     void
	 */
	public function initItemLanguagess()
	{
		if ($this->collItemLanguagess === null) {
			$this->collItemLanguagess = array();
		}
	}

	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Item has previously
	 * been saved, it will retrieve related ItemLanguagess from storage.
	 * If this Item is new, it will return
	 * an empty collection or the current collection, the criteria
	 * is ignored on a new object.
	 *
	 * @param      Connection $con
	 * @param      Criteria $criteria
	 * @throws     PropelException
	 */
	public function getItemLanguagess($criteria = null, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseItemLanguagesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collItemLanguagess === null) {
			if ($this->isNew()) {
			   $this->collItemLanguagess = array();
			} else {

				$criteria->add(ItemLanguagesPeer::ITEM_ID, $this->getItemId());

				ItemLanguagesPeer::addSelectColumns($criteria);
				$this->collItemLanguagess = ItemLanguagesPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ItemLanguagesPeer::ITEM_ID, $this->getItemId());

				ItemLanguagesPeer::addSelectColumns($criteria);
				if (!isset($this->lastItemLanguagesCriteria) || !$this->lastItemLanguagesCriteria->equals($criteria)) {
					$this->collItemLanguagess = ItemLanguagesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastItemLanguagesCriteria = $criteria;
		return $this->collItemLanguagess;
	}

	/**
	 * Returns the number of related ItemLanguagess.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      Connection $con
	 * @throws     PropelException
	 */
	public function countItemLanguagess($criteria = null, $distinct = false, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseItemLanguagesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ItemLanguagesPeer::ITEM_ID, $this->getItemId());

		return ItemLanguagesPeer::doCount($criteria, $distinct, $con);
	}

	/**
	 * Method called to associate a ItemLanguages object to this object
	 * through the ItemLanguages foreign key attribute
	 *
	 * @param      ItemLanguages $l ItemLanguages
	 * @return     void
	 * @throws     PropelException
	 */
	public function addItemLanguages(ItemLanguages $l)
	{
		$this->collItemLanguagess[] = $l;
		$l->setItem($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Item is new, it will return
	 * an empty collection; or if this Item has previously
	 * been saved, it will retrieve related ItemLanguagess from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Item.
	 */
	public function getItemLanguagessJoinLanguage($criteria = null, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseItemLanguagesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collItemLanguagess === null) {
			if ($this->isNew()) {
				$this->collItemLanguagess = array();
			} else {

				$criteria->add(ItemLanguagesPeer::ITEM_ID, $this->getItemId());

				$this->collItemLanguagess = ItemLanguagesPeer::doSelectJoinLanguage($criteria, $con);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(ItemLanguagesPeer::ITEM_ID, $this->getItemId());

			if (!isset($this->lastItemLanguagesCriteria) || !$this->lastItemLanguagesCriteria->equals($criteria)) {
				$this->collItemLanguagess = ItemLanguagesPeer::doSelectJoinLanguage($criteria, $con);
			}
		}
		$this->lastItemLanguagesCriteria = $criteria;

		return $this->collItemLanguagess;
	}

	/**
	 * Temporary storage of collStoreItems to save a possible db hit in
	 * the event objects are add to the collection, but the
	 * complete collection is never requested.
	 * @return     void
	 */
	public function initStoreItems()
	{
		if ($this->collStoreItems === null) {
			$this->collStoreItems = array();
		}
	}

	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Item has previously
	 * been saved, it will retrieve related StoreItems from storage.
	 * If this Item is new, it will return
	 * an empty collection or the current collection, the criteria
	 * is ignored on a new object.
	 *
	 * @param      Connection $con
	 * @param      Criteria $criteria
	 * @throws     PropelException
	 */
	public function getStoreItems($criteria = null, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseStoreItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collStoreItems === null) {
			if ($this->isNew()) {
			   $this->collStoreItems = array();
			} else {

				$criteria->add(StoreItemPeer::ITEM_ID, $this->getItemId());

				StoreItemPeer::addSelectColumns($criteria);
				$this->collStoreItems = StoreItemPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(StoreItemPeer::ITEM_ID, $this->getItemId());

				StoreItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastStoreItemCriteria) || !$this->lastStoreItemCriteria->equals($criteria)) {
					$this->collStoreItems = StoreItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastStoreItemCriteria = $criteria;
		return $this->collStoreItems;
	}

	/**
	 * Returns the number of related StoreItems.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      Connection $con
	 * @throws     PropelException
	 */
	public function countStoreItems($criteria = null, $distinct = false, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseStoreItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(StoreItemPeer::ITEM_ID, $this->getItemId());

		return StoreItemPeer::doCount($criteria, $distinct, $con);
	}

	/**
	 * Method called to associate a StoreItem object to this object
	 * through the StoreItem foreign key attribute
	 *
	 * @param      StoreItem $l StoreItem
	 * @return     void
	 * @throws     PropelException
	 */
	public function addStoreItem(StoreItem $l)
	{
		$this->collStoreItems[] = $l;
		$l->setItem($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Item is new, it will return
	 * an empty collection; or if this Item has previously
	 * been saved, it will retrieve related StoreItems from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Item.
	 */
	public function getStoreItemsJoinStore($criteria = null, $con = null)
	{
		// include the Peer class
		include_once 'library/om/BaseStoreItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collStoreItems === null) {
			if ($this->isNew()) {
				$this->collStoreItems = array();
			} else {

				$criteria->add(StoreItemPeer::ITEM_ID, $this->getItemId());

				$this->collStoreItems = StoreItemPeer::doSelectJoinStore($criteria, $con);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(StoreItemPeer::ITEM_ID, $this->getItemId());

			if (!isset($this->lastStoreItemCriteria) || !$this->lastStoreItemCriteria->equals($criteria)) {
				$this->collStoreItems = StoreItemPeer::doSelectJoinStore($criteria, $con);
			}
		}
		$this->lastStoreItemCriteria = $criteria;

		return $this->collStoreItems;
	}

} // BaseItem
