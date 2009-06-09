<?php

# jbilling-php-api
# Copyright (C) 2007-2009  Make A Byte, inc
# http://www.makeabyte.com

# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.

# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

class MockUserWS extends MockObject {

	  private $UserWS;

	  public function MockUserWS() {

	  	     $UserWS = new UserWS();
	  	     
	  	     $UserWS->setUserName( "phpUnitTest" );
			 $UserWS->setPassword( "jbilling-php-api-007" );
			 $UserWS->setLanguageId( 1 ); // English
			 $UserWS->setMainRoleId( 5 ); // Customer
			 $UserWS->setRole( "Customer" );
			 $UserWS->setStatusId( 1 ); // Active
			 $UserWS->setSubscriberStatusId( 1 ); // Pre-paid

			 $this->UserWS = $UserWS;
	  }

	  public function getObject() {

			 return $this->UserWS;
	  }

	  public function setContact( ContactWS $ContactWS ) {

	  	     $this->UserWS->setContact( $ContactWS );
	  }

	  public function setCreditCard( CreditCardDTO $CreditCardDTO ) {

	  	     $this->UserWS->setCreditCard( $CreditCardDTO );
	  }
}
?>