<?php


namespace App\Model;

use App\Service\TypeQuestion;

class Questions {

	private $id;
	private $question;
	private $type;

	public function __construct( $id, $question, TypeQuestion $type ) {

		$this->id = $id;
		$this->question = $question;
		$this->type = $type;
	}

	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ): void {
		$this->id = $id;
	}

	public function setQuestion( $question ): void {
		$this->question = $question;
	}

	public function getQuestion() {
		return $this->question;
	}

	/**
	 * @return TypeQuestion
	 */
	public function getType(): TypeQuestion {
		return $this->type;
	}

	/**
	 * @param TypeQuestion $type
	 */
	public function setType( TypeQuestion $type ): void {
		$this->type = $type;
	}

}