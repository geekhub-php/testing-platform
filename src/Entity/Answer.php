<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswerRepository")
 */
class Answer extends Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
	protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
	protected $answer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AnswerGroup", inversedBy="answers")
     */
    private $answerGroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getAnswerGroup(): ?AnswerGroup
    {
        return $this->answerGroup;
    }

    public function setAnswerGroup(?AnswerGroup $answerGroup): self
    {
        $this->answerGroup = $answerGroup;

        return $this;
    }

}
