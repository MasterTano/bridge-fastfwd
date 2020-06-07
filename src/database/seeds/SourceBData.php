<?php

use Illuminate\Support\Facades\Log;

class SourceBData
{
    static function get() {
        try {
            $tempDataArray = json_decode(self::data(), true);

            return $tempDataArray['response']['result']['Accounts']['row'];

        } catch (Throwable $exception) {

            Log::error("Invalid SourceB Data format");

            return [];
        }
    }

    static function data() {
        return '{
          "response": {
            "result": {
              "Accounts": {
                "row": [
                  {
                    "no": "1",
                    "FL": [
                      {
                        "content": "358176000000149089",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "24 Locks",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0800 085 3719",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:25",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:25",
                        "val": "Modified Time"
                      },
                      {
                        "content": "help@24locks.co.uk",
                        "val": "Billing Contact Email"
                      },
                      {
                        "content": "24locks.demopurposesonly",
                        "val": "Billing Contact Skype"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "2",
                    "FL": [
                      {
                        "content": "358176000000149087",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Suberashi",
                        "val": "Account Name"
                      },
                      {
                        "content": " 09876 543321",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:22",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:22",
                        "val": "Modified Time"
                      },
                      {
                        "content": "Becky",
                        "val": "Billing Contact First Name"
                      },
                      {
                        "content": "becky.smout@suberashi.co.uk",
                        "val": "Billing Contact Email"
                      },
                      {
                        "content": "Smout",
                        "val": "Billing Contact Last Name"
                      },
                      {
                        "content": " 07989 345555",
                        "val": "Billing Contact Mobile"
                      },
                      {
                        "content": "+44 01678 521926",
                        "val": "Billing Contact DDI"
                      },
                      {
                        "content": "2323232323",
                        "val": "Billing VAT Number"
                      },
                      {
                        "content": "Becky.Smout",
                        "val": "Billing Contact Skype"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "3",
                    "FL": [
                      {
                        "content": "358176000000149085",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Gable Print",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:15",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:15",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "4",
                    "FL": [
                      {
                        "content": "358176000000149083",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "ABC Furniture",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0800 124578",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:07",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:07",
                        "val": "Modified Time"
                      },
                      {
                        "content": "Trish",
                        "val": "Billing Contact First Name"
                      },
                      {
                        "content": "info@abfl.com",
                        "val": "Billing Contact Email"
                      },
                      {
                        "content": "Rawlings",
                        "val": "Billing Contact Last Name"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "5",
                    "FL": [
                      {
                        "content": "358176000000149081",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Bayside Wholesale",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:05",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:05",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "6",
                    "FL": [
                      {
                        "content": "358176000000149079",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Phone Exchanger",
                        "val": "Account Name"
                      },
                      {
                        "content": " 01678 222222",
                        "val": "Phone"
                      },
                      {
                        "content": " 01678 332332",
                        "val": "Fax"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:04",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:04",
                        "val": "Modified Time"
                      },
                      {
                        "content": "Street, Line, Row",
                        "val": "Billing Street"
                      },
                      {
                        "content": "Corwen",
                        "val": "Billing City"
                      },
                      {
                        "content": "Denbighshire",
                        "val": "Billing State"
                      },
                      {
                        "content": "CY23 6HY",
                        "val": "Billing Code"
                      },
                      {
                        "content": "Wales",
                        "val": "Billing Country"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "7",
                    "FL": [
                      {
                        "content": "358176000000149077",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "MCO Cleaning Services",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0245 8897445",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:03",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:03",
                        "val": "Modified Time"
                      },
                      {
                        "content": "sales@mco.co",
                        "val": "Billing Contact Email"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "8",
                    "FL": [
                      {
                        "content": "358176000000149075",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Marine Systems",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:01",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:01",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "9",
                    "FL": [
                      {
                        "content": "358176000000149073",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Thuxtos Property Management",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0134 8894550",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:00",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:00",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "10",
                    "FL": [
                      {
                        "content": "358176000000149071",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Woolworths Market",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:57",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:57",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "11",
                    "FL": [
                      {
                        "content": "358176000000149069",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Gateway Motors",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0123 8894567",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:52",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:52",
                        "val": "Modified Time"
                      },
                      {
                        "content": "workshop@gateway.co",
                        "val": "Billing Contact Email"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "12",
                    "FL": [
                      {
                        "content": "358176000000149067",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Brunswick Petals",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:46",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:46",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "13",
                    "FL": [
                      {
                        "content": "358176000000149065",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Coco Cafe",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:41",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:41",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "14",
                    "FL": [
                      {
                        "content": "358176000000149063",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Port & Philip\'s Freight",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0123 4456789",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:39",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:39",
                        "val": "Modified Time"
                      },
                      {
                        "content": " 0777 445667",
                        "val": "Billing Contact Mobile"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "15",
                    "FL": [
                      {
                        "content": "358176000000149061",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Bank West",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0123 4556678",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:38",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:38",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "16",
                    "FL": [
                      {
                        "content": "358176000000149059",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Melrose Parking",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:37",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:37",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "17",
                    "FL": [
                      {
                        "content": "358176000000149057",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Royal Mail",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:30",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:30",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "18",
                    "FL": [
                      {
                        "content": "358176000000148043",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Windsor Productions",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0123 5505678",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:14:17",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:14:17",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "19",
                    "FL": [
                      {
                        "content": "358176000000148041",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Swanston Security",
                        "val": "Account Name"
                      },
                      {
                        "content": " 0124 8891110",
                        "val": "Phone"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:54",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:54",
                        "val": "Modified Time"
                      },
                      {
                        "content": "swan",
                        "val": "Billing Contact Skype"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "20",
                    "FL": [
                      {
                        "content": "358176000000148039",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Test Company",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:42",
                        "val": "Created Time"
                      },
                      {
                        "content": "2011-04-14 14:13:42",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "21",
                    "FL": [
                      {
                        "content": "358176000000148019",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Test Company",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:42",
                        "val": "Created Time"
                      },
                      {
                        "content": "2020-04-14 14:13:42",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  },
                  {
                    "no": "22",
                    "FL": [
                      {
                        "content": "358176000008148019",
                        "val": "ACCOUNTID"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMOWNERID"
                      },
                      {
                        "content": "infobala",
                        "val": "Account Owner"
                      },
                      {
                        "content": "Bank West",
                        "val": "Account Name"
                      },
                      {
                        "content": "0",
                        "val": "Account Number"
                      },
                      {
                        "content": "0",
                        "val": "Employees"
                      },
                      {
                        "content": "0",
                        "val": "Annual Revenue"
                      },
                      {
                        "content": "0",
                        "val": "SIC Code"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "SMCREATORID"
                      },
                      {
                        "content": "infobala",
                        "val": "Created By"
                      },
                      {
                        "content": "358176000000040003",
                        "val": "MODIFIEDBY"
                      },
                      {
                        "content": "infobala",
                        "val": "Modified By"
                      },
                      {
                        "content": "2011-04-14 14:13:42",
                        "val": "Created Time"
                      },
                      {
                        "content": "2020-04-14 14:13:42",
                        "val": "Modified Time"
                      },
                      {
                        "content": "true",
                        "val": "Always Sync to XERO"
                      }
                    ]
                  }
                ]
              }
            },
            "uri": "/crm/private/json/Accounts/getRecords"
          }
        }';
    }
}
