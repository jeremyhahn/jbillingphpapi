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

class MockContactWS extends MockObject {

	  public function MockContactWS() { }

	  public function getObject() {

	  	     $ContactWS = new ContactWS();

			 $ContactWS->setFirstName( CONTACT_FIRSTNAME );
			 $ContactWS->setLastName( CONTACT_LASTNAME );
			 $ContactWS->setPhoneNumber( CONTACT_PHONENUMBER );
			 $ContactWS->setEmail( CONTACT_EMAIL );
			 $ContactWS->setFieldNames( CONTACT_FIELDNAMES );
			 $ContactWS->setFieldValues( CONTACT_FIELDVALUES );
			 $ContactWS->setAddress1( CONTACT_ADDRESS1 );
			 $ContactWS->setAddress2( CONTACT_ADDRESS2 );
			 $ContactWS->setCity( CONTACT_CITY );
			 $ContactWS->setStateProvince( CONTACT_STATEPROVINCE );
			 $ContactWS->setPostalCode( CONTACT_POSTALCODE );

			 return $ContactWS;
	  }
}
?>