<?php

namespace App\Entity;

use App\Repository\SubjectsCourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubjectsCourseRepository::class)
 */
class SubjectsCourse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idsubject;

    /**
     * @ORM\Column(type="integer")
     */
    private $idcourse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdsubject(): ?int
    {
        return $this->idsubject;
    }

    public function setIdsubject(int $idsubject): self
    {
        $this->idsubject = $idsubject;

        return $this;
    }

    public function getIdcourse(): ?int
    {
        return $this->idcourse;
    }

    public function setIdcourse(int $idcourse): self
    {
        $this->idcourse = $idcourse;

        return $this;
    }
}
