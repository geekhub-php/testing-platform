<?php

namespace App\Entity;


use App\Service\TypeQuestion;
use Symfony\Component\Console\Question\Question;

class Answer extends Questions {

	protected $answer;
	protected $user;
	protected $options;

//	public function __construct( $id, $question, TypeQuestion $type, $user, $answer )
//	{
//		$this->id = $id;
//		$this->question = $question;
//		$this->type = $type;
//		$this->user = $user;
//		$this->answer = $answer;
//	}

//	public function getId() {
//		return $this->id;
//	}

	public function setUser( $user ) {
		$this->user = $user;
	}

	public function getUser() {
		return $this->user;
	}

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer( $answer ): void {
		$this->answer = $answer;
	}

	/**
	 * @return mixed
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * @param mixed $options
	 */
	public function setOptions( $options ): void {
		$this->options = $options;
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
}