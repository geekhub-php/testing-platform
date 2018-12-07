<?php

namespace App\Entity;


class AnswerGroup {
	/**
	 * @var string
	 */
	private $name;
	private $answers;

	public function __construct()
	{
		$this->answers = [];
	}

	/**
	 * @return array
	 */
	public function getAnswers() {
		return $this->answers;
	}


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
	 * @param
	 */
	public function setAnswers( $answers ): void {
		$this->answers[] = $answers;
	}

}