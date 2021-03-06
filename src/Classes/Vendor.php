<?php namespace Fungku\NetSuite\Classes;

class Vendor extends Record {
	public $customForm;
	public $entityId;
	public $altName;
	public $isPerson;
	public $phoneticName;
	public $salutation;
	public $firstName;
	public $middleName;
	public $lastName;
	public $companyName;
	public $phone;
	public $fax;
	public $email;
	public $url;
	public $defaultAddress;
	public $isInactive;
	public $lastModifiedDate;
	public $dateCreated;
	public $category;
	public $title;
	public $printOnCheckAs;
	public $altPhone;
	public $homePhone;
	public $mobilePhone;
	public $altEmail;
	public $comments;
	public $globalSubscriptionStatus;
	public $image;
	public $emailPreference;
	public $subsidiary;
	public $representingSubsidiary;
	public $accountNumber;
	public $legalName;
	public $vatRegNumber;
	public $expenseAccount;
	public $payablesAccount;
	public $terms;
	public $creditLimit;
	public $balancePrimary;
	public $openingBalance;
	public $openingBalanceDate;
	public $openingBalanceAccount;
	public $balance;
	public $unbilledOrdersPrimary;
	public $bcn;
	public $unbilledOrders;
	public $currency;
	public $is1099Eligible;
	public $isJobResourceVend;
	public $laborCost;
	public $purchaseOrderQuantity;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantityDiff;
	public $receiptQuantity;
	public $receiptAmount;
	public $receiptQuantityDiff;
	public $workCalendar;
	public $taxIdNum;
	public $taxItem;
	public $giveAccess;
	public $sendEmail;
	public $billPay;
	public $isAccountant;
	public $password;
	public $password2;
	public $requirePwdChange;
	public $eligibleForCommission;
	public $emailTransactions;
	public $printTransactions;
	public $faxTransactions;
	public $pricingScheduleList;
	public $subscriptionsList;
	public $addressbookList;
	public $currencyList;
	public $rolesList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"entityId" => "string",
		"altName" => "string",
		"isPerson" => "boolean",
		"phoneticName" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"companyName" => "string",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"url" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"lastModifiedDate" => "dateTime",
		"dateCreated" => "dateTime",
		"category" => "RecordRef",
		"title" => "string",
		"printOnCheckAs" => "string",
		"altPhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"altEmail" => "string",
		"comments" => "string",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"image" => "RecordRef",
		"emailPreference" => "EmailPreference",
		"subsidiary" => "RecordRef",
		"representingSubsidiary" => "RecordRef",
		"accountNumber" => "string",
		"legalName" => "string",
		"vatRegNumber" => "string",
		"expenseAccount" => "RecordRef",
		"payablesAccount" => "RecordRef",
		"terms" => "RecordRef",
		"creditLimit" => "float",
		"balancePrimary" => "float",
		"openingBalance" => "float",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"balance" => "float",
		"unbilledOrdersPrimary" => "float",
		"bcn" => "string",
		"unbilledOrders" => "float",
		"currency" => "RecordRef",
		"is1099Eligible" => "boolean",
		"isJobResourceVend" => "boolean",
		"laborCost" => "float",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"workCalendar" => "RecordRef",
		"taxIdNum" => "string",
		"taxItem" => "RecordRef",
		"giveAccess" => "boolean",
		"sendEmail" => "boolean",
		"billPay" => "boolean",
		"isAccountant" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"eligibleForCommission" => "boolean",
		"emailTransactions" => "boolean",
		"printTransactions" => "boolean",
		"faxTransactions" => "boolean",
		"pricingScheduleList" => "VendorPricingScheduleList",
		"subscriptionsList" => "SubscriptionsList",
		"addressbookList" => "VendorAddressbookList",
		"currencyList" => "VendorCurrencyList",
		"rolesList" => "VendorRolesList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

