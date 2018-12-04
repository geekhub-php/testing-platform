<?php

namespace App\Entity;


class QuestionGroup {

	/**
	 * @var array $question
	 */
	private $question;


	/**
	 * @return mixed
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * @param mixed $question
	 */
	public function setQuestion( $question ): void {
		$this->question = $question;
	}

}