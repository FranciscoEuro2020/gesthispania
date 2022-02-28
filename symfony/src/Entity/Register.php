<?php

namespace App\Entity;

use App\Repository\RegisterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegisterRepository::class)
 */
class Register
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idcourse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idsubject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdcourse(): ?int
    {
        return $this->idcourse;
    }

    public function setIdcourse(?int $idcourse): self
    {
        $this->idcourse = $idcourse;

        return $this;
    }

    public function getIdsubject(): ?int
    {
        return $this->idsubject;
    }

    public function setIdsubject(?int $idsubject): self
    {
        $this->idsubject = $idsubject;

        return $this;
    }
}
