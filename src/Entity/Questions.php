<?php


namespace App\Entity;

use App\Service\TypeQuestion;

class Questions {


	protected $id;
	protected $question;
	protected $type;
	protected $options;
	public const TYPE_TEXT = 'text';
	public const TYPE_RADIO = 'radio';
	public const TYPE_CHECKBOX = 'checkbox';


//	public function __construct( $id, $question, TypeQuestion $type ) {
//
//		$this->id = $id;
//		$this->question = $question;
//		$this->type = $type;
//	}
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
	 * @return mixed
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ): void {
		$this->type = $type;
	}

	/**
	 * @return array|null
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * @param array|null $options
	 */
	public function setOptions( $options ): void {
		$this->options = $options;
	}

//	/**
//	 * @return TypeQuestion
//	 */
//	public function getType(): TypeQuestion {
//		return $this->type;
//	}
//
//	/**
//	 * @param TypeQuestion $type
//	 */
//	public function setType( TypeQuestion $type ): void {
//		$this->type = $type;
//	}

}