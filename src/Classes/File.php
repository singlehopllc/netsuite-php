<?php namespace Fungku\NetSuite\Classes;

class File extends Record {
	public $name;
	public $attachFrom;
	public $mediaTypeName;
	public $fileType;
	public $content;
	public $folder;
	public $fileSize;
	public $url;
	public $urlComponent;
	public $mediaFile;
	public $textFileEncoding;
	public $description;
	public $encoding;
	public $altTagCaption;
	public $isOnline;
	public $isInactive;
	public $class;
	public $bundleable;
	public $department;
	public $hideInBundle;
	public $isPrivate;
	public $owner;
	public $caption;
	public $storeDisplayThumbnail;
	public $siteDescription;
	public $featuredDescription;
	public $lastModifiedDate;
	public $createdDate;
	public $siteCategoryList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"attachFrom" => "FileAttachFrom",
		"mediaTypeName" => "string",
		"fileType" => "MediaType",
		"content" => "base64Binary",
		"folder" => "RecordRef",
		"fileSize" => "float",
		"url" => "string",
		"urlComponent" => "string",
		"mediaFile" => "RecordRef",
		"textFileEncoding" => "TextFileEncoding",
		"description" => "string",
		"encoding" => "FileEncoding",
		"altTagCaption" => "string",
		"isOnline" => "boolean",
		"isInactive" => "boolean",
		"class" => "string",
		"bundleable" => "boolean",
		"department" => "string",
		"hideInBundle" => "boolean",
		"isPrivate" => "boolean",
		"owner" => "RecordRef",
		"caption" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"siteDescription" => "string",
		"featuredDescription" => "string",
		"lastModifiedDate" => "dateTime",
		"createdDate" => "dateTime",
		"siteCategoryList" => "FileSiteCategoryList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

