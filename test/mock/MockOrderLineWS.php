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

class MockOrderLineWS extends MockObject {

	  public function MockOrderLineWS() { }

	  public function getObject() {

	  	     $OrderLineWS = new OrderLineWS();
	  	     $OrderLineWS->setUseItem( ORDERLINE_USEITEM );
			 $OrderLineWS->setItemId( ORDERLINE_ITEMID );
			 $OrderLineWS->setTypeId( ORDERLINE_TYPEID );
			 $OrderLineWS->setQuantity( ORDERLINE_QUANTITY );
			 $OrderLineWS->setDescription( ORDERLINE_DESCRIPTION );
			 $OrderLineWS->setDeleted( 0 );

			 return $OrderLineWS;
	  }
}
?>