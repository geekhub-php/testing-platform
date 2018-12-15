<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
	public const TYPE_TEXT = 'text';
	public const TYPE_RADIO = 'radio';
	public const TYPE_CHECKBOX = 'checkbox';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
	protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
	protected $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
	protected $type;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
	protected $options;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }
}
