<?php

namespace App\Entity;

use App\DTO\Add;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnoncementRepository")
 */
class Annoncement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @var string A "Y-m-d H:i:s" formatted value
     * @ORM\Column(type="datetime")
     */
    private $creatDat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatDat(): ?\DateTimeInterface
    {
        return $this->creatDat;
    }

    public function setCreatDat(\DateTimeInterface $creatDat): self
    {
        $this->creatDat = $creatDat;

        return $this;
    }
    public function __construct(Add $add)
    {
        $this->title=$add->getTitle();
        $this->price=$add->getPrice();
        $this->content=$add->getContent();
        $this->creatDat= new \DateTime();


    }
}
