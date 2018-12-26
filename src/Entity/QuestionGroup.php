<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity(repositoryClass="App\Repository\QuestionGroupRepository")
	 */
class QuestionGroup {
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $questions = [];

	public function getId(): ?int {
		return $this->id;
	}

	public function getQuestions(): ?array {
		return $this->questions;
	}

	public function setQuestions( ?array $questions ): self {
		$this->questions = $questions;
		return $this;
	}
}
