<?php

namespace App\Entity;


class AnswerGroup {
	/**
	 * @var string
	 */
	private $name;
	private $answer;
	private $type;
	/**
	 * @var array
	 */
	public $answers = [];

//	public function __construct(Answer $answer)
//	{
//		$this->answers[] = $answer;
//	}

	/**
	 * @return mixed
	 */
	public function getAnswers() {
		return $this->answers;
	}
//	/**
//	 * @param Answer $answer
//	 */
//	public function setAnswers( Answer $answer ): void {
//		$answers = $this->answers;
//		$answers[] = $answer;
//	}


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ): void {
		$this->name = $name;
	}

	/**
	 * @param array $answers
	 */
	public function setAnswers( array $answers ): void {
		$this->answers = $answers;
	}

	/**
	 * @return mixed
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * @param mixed $answer
	 */
	public function setAnswer( $answer ): void {
		$this->answer = $answer;
	}

	/**
	 * @return mixed
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType( $type ): void {
		$this->type = $type;
	}

//	/**
//	 * @return mixed
//	 */
//	public function getAnswer() {
//		return $this->answer;
//	}
//
//	/**
//	 * @param mixed $answer
//	 */
//	public function setAnswer( $answer ): void {
//		$this->answer = $answer;
//	}

}