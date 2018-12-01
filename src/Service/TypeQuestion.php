<?php


namespace App\Service;

class TypeQuestion {
	private $type;

	public function __construct($type) {
		$this->type = $type;
	}

	/**
	 * @param array
	 *
	 * @return TypeQuestion
	 */
	public function setType( $type ) {
		$this->type = $type;
		return $this;
	}
}

