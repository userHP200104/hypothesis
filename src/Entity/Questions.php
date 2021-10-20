<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionsRepository::class)
 */
class Questions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=AuthorProfile::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?AuthorProfile
    {
        return $this->user;
    }

    public function setUser(?AuthorProfile $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getQuestionTitle(): ?string
    {
        return $this->question_title;
    }

    public function setQuestionTitle(string $question_title): self
    {
        $this->question_title = $question_title;

        return $this;
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

}
