
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- items
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `items`;


CREATE TABLE `items`
(
	`item_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`class_key` INTEGER  NOT NULL,
	`title` VARCHAR(64)  NOT NULL,
	`purchased_on` DATE,
	`lastused_on` DATE,
	`rating` INTEGER,
	`asin` VARCHAR(13),
	`author` VARCHAR(64),
	`isbn` VARCHAR(10),
	`isbn13` VARCHAR(13),
	`artist_id` INTEGER,
	`licence_key` VARCHAR(64),
	`platform_id` INTEGER,
	PRIMARY KEY (`item_id`),
	INDEX `items_FI_1` (`artist_id`),
	CONSTRAINT `items_FK_1`
		FOREIGN KEY (`artist_id`)
		REFERENCES `artists` (`artist_id`),
	INDEX `items_FI_2` (`platform_id`),
	CONSTRAINT `items_FK_2`
		FOREIGN KEY (`platform_id`)
		REFERENCES `platforms` (`platform_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- artists
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `artists`;


CREATE TABLE `artists`
(
	`artist_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`artist_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- countries
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;


CREATE TABLE `countries`
(
	`country_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	`code` VARCHAR(2)  NOT NULL,
	PRIMARY KEY (`country_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- languages
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `languages`;


CREATE TABLE `languages`
(
	`language_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	`code` VARCHAR(2)  NOT NULL,
	PRIMARY KEY (`language_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- item_languages
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `item_languages`;


CREATE TABLE `item_languages`
(
	`item_id` INTEGER  NOT NULL,
	`language_id` INTEGER  NOT NULL,
	`medium_id` INTEGER  NOT NULL,
	INDEX `item_languages_FI_1` (`item_id`),
	CONSTRAINT `item_languages_FK_1`
		FOREIGN KEY (`item_id`)
		REFERENCES `items` (`item_id`),
	INDEX `item_languages_FI_2` (`language_id`),
	CONSTRAINT `item_languages_FK_2`
		FOREIGN KEY (`language_id`)
		REFERENCES `languages` (`language_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- media
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `media`;


CREATE TABLE `media`
(
	`medium_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name=` VARCHAR(64)  NOT NULL,
	PRIMARY KEY (`medium_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- platforms
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `platforms`;


CREATE TABLE `platforms`
(
	`platform_id` INTEGER  NOT NULL,
	`name` VARCHAR(64)  NOT NULL,
	INDEX `I_referenced_items_FK_2_1` (`platform_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- regions
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `regions`;


CREATE TABLE `regions`
(
	`region_id` INTEGER  NOT NULL,
	`code` CHAR(1)  NOT NULL,
	`description` VARCHAR(64),
	INDEX `I_referenced_region_countries_FK_1_1` (`region_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- region_countries
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `region_countries`;


CREATE TABLE `region_countries`
(
	`region_id` INTEGER  NOT NULL,
	`country_id` INTEGER  NOT NULL,
	INDEX `region_countries_FI_1` (`region_id`),
	CONSTRAINT `region_countries_FK_1`
		FOREIGN KEY (`region_id`)
		REFERENCES `regions` (`region_id`),
	INDEX `region_countries_FI_2` (`country_id`),
	CONSTRAINT `region_countries_FK_2`
		FOREIGN KEY (`country_id`)
		REFERENCES `countries` (`country_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- stores
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `stores`;


CREATE TABLE `stores`
(
	`store_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(64)  NOT NULL,
	`country_id` INTEGER,
	`homepage_url` VARCHAR(255),
	PRIMARY KEY (`store_id`),
	INDEX `stores_FI_1` (`country_id`),
	CONSTRAINT `stores_FK_1`
		FOREIGN KEY (`country_id`)
		REFERENCES `countries` (`country_id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- store_items
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `store_items`;


CREATE TABLE `store_items`
(
	`store_id` INTEGER  NOT NULL,
	`item_id` INTEGER  NOT NULL,
	INDEX `store_items_FI_1` (`store_id`),
	CONSTRAINT `store_items_FK_1`
		FOREIGN KEY (`store_id`)
		REFERENCES `stores` (`store_id`),
	INDEX `store_items_FI_2` (`item_id`),
	CONSTRAINT `store_items_FK_2`
		FOREIGN KEY (`item_id`)
		REFERENCES `items` (`item_id`)
)Type=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
