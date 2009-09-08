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
 * @package com.makeabyte.contrib.jbilling.php
 */

/**
  * JavaDouble fixes data type issues between PHP and the Java API. PHP
  * treats doubles and floats as the same data type, which causes an issue
  * on the Java side. This is a hack so that the double gets passed as a double
  * and not a float.
  *  
  * @author Jeremy Hahn
  * @version 1.0
  * @copyright Make A Byte, inc
  * @package com.makeabyte.contrib.jbilling.php
  */

class JavaDouble {

      private $number;

      /**
       * Sets a new double
       * 
       * @param $number The number to be passed to the Java API as a double
       * @return void
       */
      public function JavaDouble( $number ) {

             $this->number = $number;
      }

      /**
       * Returns the JavaDouble number
       */
      public function getNumber() {

             return $this->number;
      }
}
?>
