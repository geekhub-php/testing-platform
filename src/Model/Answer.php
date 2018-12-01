<?php

namespace App\Model;


use App\Service\TypeQuestion;

class Answer {

	private $id;
	private $question;
	private $answer;
	private $user;
	private $type;

	public function __construct( $id, $question, TypeQuestion $type, $user, $answer )
	{
		$this->id = $id;
		$this->question = $question;
		$this->type = $type;
		$this->user = $user;
		$this->answer = $answer;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setQuestion( $question ): void {
		$this->question = $question;
	}

	public function getQuestion() {
		return $this->question;
	}

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer( $answer ): void {
		$this->answer = $answer;
	}
}