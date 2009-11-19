<?php
/**
 * jbilling-php-api
 * Copyright (C) 2007-2009  Make A Byte, inc
 * http://www.makeabyte.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @package com.makeabyte.contrib.jbilling.php.test.mock
 */

/**
 * This file contains all of the data used by the Mock objects during unit testing.
 */

define( 'API_URL', 'http://localhost:8080/billing/cxf/soap.service?wsdl' );
define( 'API_USER', 'jhahn' );
define( 'API_PASS', '123qwe' );
define( 'API_TYPE', JBILLINGAPI_TYPE_CXF ); // Defined in src/JbillingAPIFactory.php

// InvoiceWS
define( 'INVOICE_ID', 507 );

// Item
define( 'ITEM_ID', 100 );
define( 'ITEM_DESCRIPTION', 'Test jbilling-php-api item' );
define( 'ITEM_PRICE', 29.95 );
define( 'ITEM_TYPES', array( 100 ) );  // Warning: Constants may only evaluate to scalar values
define( 'ITEM_PRICEMANUAL', 0 );

// Item Price
define( 'ITEMPRICE_NAME', 'jbilling-php-api unit test price' );
define( 'ITEMPRICE_CURRENCYID', 1 );
define( 'ITEMPRICE_PRICE', 29.95 );
define( 'ITEMPRICE_PRICEFORM', 29.95 );

// UserWS
define( 'USER_ID', 130 );  // TODO: MAKE SURE THIS IS YOUR USER ID!
define( 'USER_USERNAME', 'phpunit' );
define( 'USER_PASSWORD', '123qwe' );
define( 'USER_LANGUAGEID', 1 ); // English
define( 'USER_MAINROLEID', 5 ); // Customer
define( 'USER_ROLE', 'Customer' );
define( 'USER_ISPARENT', true );
define( 'USER_STATUSID', 1 ); // Active
define( 'USER_CURRENCYID', 1 );
define( 'USER_BALANCETYPE', 1 );
define( 'USER_SUBSCRIBERSTATUSID', 1 ); // Pre-paid

// ContactWS
define( 'CONTACT_FIRSTNAME', 'phpunit' );
define( 'CONTACT_LASTNAME', 'test' );
define( 'CONTACT_PHONENUMBER', '123-456-7890' );
define( 'CONTACT_EMAIL', 'php@unittest.com' );
define( 'CONTACT_FIELDNAMES', '1' );
define( 'CONTACT_FIELDVALUES', 'serial-from-ws' );
define( 'CONTACT_ADDRESS1', '123 anywhere st' );
define( 'CONTACT_ADDRESS2', 'suite 100' );
define( 'CONTACT_CITY', 'test city' );
define( 'CONTACT_STATEPROVINCE', 'test state' );
define( 'CONTACT_POSTALCODE', '12345' );

// CreditCardDTO
define( 'CC_NAME', 'phpunit' );
define( 'CC_NUMBER', '4012888888881881' );
define( 'CC_SECURITYCODE', 123 );
define( 'CC_TYPE', 2 ); // Visa
define( 'CC_EXPIRY', date( 'c', strtotime( 'now' ) ) );  // ISO 8601 date

// OrderLineWS
define( 'ORDERLINE_USEITEM', true );
define( 'ORDERLINE_ITEMID', 100 ); // TODO: MAKE SURE THIS ITEM MATCHES AN ITEM YOUR SYSTEM!
define( 'ORDERLINE_TYPEID', 1 ); // Item
define( 'ORDERLINE_QUANTITY', 1 );
define( 'ORDERLINE_DESCRIPTION', 'This is an order placed by the jbilling-php-api unit test.' );

// OrderWS
define( 'ORDER_ID', 501 );
define( 'ORDER_USERID', USER_ID );
define( 'ORDER_PERIOD', 1 ); // Monthly
define( 'ORDER_BILLINGTYPEID', 1 ); // Pre-paid
define( 'ORDER_CURRENCYID', 1 ); // US Dollar

// PaymentInfoChequeDTO
define( 'PAYMENTINFOCHEQUE_ID', 1 );
define( 'PAYMENTINFOCHEQUE_BANK', 'US Bank' );
define( 'PAYMENTINFOCHEQUE_NUMBER', '12345' );

// PaymentWS
define( 'PAYMENT_ID', 1 );
define( 'PAYMENT_AMOUNT', 15.00 );
define( 'PAYMENT_ISREFUND', false );
define( 'PAYMENT_METHODID', 1 ); // Cheque
define( 'PAYMENT_PAYMENTDATE', date( 'c', strtotime( 'now' ) ) );
define( 'PAYMENT_RESULTID', 4 ); // Result entered
define( 'PAYMENT_CURRENCYID', 1 ); // US Dollar
define( 'PAYMENT_USERID', USER_ID );
?>