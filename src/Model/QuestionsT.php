<?php


namespace App\Model;

class QuestionsT {

	private $id;
	private $name;
	private $question;
	private $type;

//	public function __construct( $id, $question ) {
//
//		$this->id = $id;
//		$this->question = $question;
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

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function __toString() {
		return $this->getName();
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