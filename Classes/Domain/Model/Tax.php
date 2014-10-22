<?php

/* * *************************************************************
*  Copyright notice
*
*  (c) 2011-2012 - wt_cart Development Team <info@wt-cart.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
* ************************************************************* */

/**
 * Plugin 'Cart' for the 'wt_cart' extension.
 *
 * @author    Daniel Lorenz <daniel.lorenz@capsicum-ug.de>
 * @package    TYPO3
 * @subpackage    tx_wtcart
 * @version    1.5.0
 */
class Tx_WtCart_Domain_Model_Tax {

	/**
	 * @var integer
	 * @validate NotEmpty
	 */
	private $id;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	private $value;

	/**
	 * @var integer
	 * @validate NotEmpty
	 */
	private $calc;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	private $name;

	/**
	 * __construct
	 *
	 * @param $id
	 * @param $value
	 * @param $calc
	 * @param $name
	 * @throws InvalidArgumentException
	 * @return \Tx_WtCart_Domain_Model_Tax
	 */
	public function __construct($id, $value, $calc, $name) {
		if ( !$id ) {
			throw new \InvalidArgumentException(
				'You have to specify a valid $id for constructor.',
				1413981328
			);
		}
		if ( !$value ) {
			throw new \InvalidArgumentException(
				'You have to specify a valid $value for constructor.',
				1413981329
			);
		}
		if ( !$calc ) {
			throw new \InvalidArgumentException(
				'You have to specify a valid $calc for constructor.',
				1413981330
			);
		}
		if ( !$name ) {
			throw new \InvalidArgumentException(
				'You have to specify a valid $name for constructor.',
				1413981331
			);
		}

		$this->id = $id;
		$this->value = str_replace($LocaleInfo["mon_decimal_point"] , ".", $value);
		$this->calc = $calc;
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed|string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getCalc() {
		return $this->calc;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
}

?>