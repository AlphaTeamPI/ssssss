<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="fk_user_post", columns={"idUser"})})
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var int
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuP", type="string", length=255, nullable=false)
     */
    private $contenup;

    /**
     * @var string
     *
     * @ORM\Column(name="imgpost", type="string", length=255, nullable=false)
     */
    private $imgpost;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcmt", type="integer", nullable=false)
     */
    private $nbcmt;

    /**
     * @var int
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views;

    /**
     * @var int
     *
     * @ORM\Column(name="likes", type="integer", nullable=false)
     */
    private $likes;

    /**
     * @var int
     *
     * @ORM\Column(name="report", type="integer", nullable=false)
     */
    private $report;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateP", type="datetime", nullable=false)
     */
    private $datep;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="IDUser")
     * })
     */
    private $iduser;

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function getContenup(): ?string
    {
        return $this->contenup;
    }

    public function setContenup(string $contenup): self
    {
        $this->contenup = $contenup;

        return $this;
    }

    public function getImgpost(): ?string
    {
        return $this->imgpost;
    }

    public function setImgpost(string $imgpost): self
    {
        $this->imgpost = $imgpost;

        return $this;
    }

    public function getNbcmt(): ?int
    {
        return $this->nbcmt;
    }

    public function setNbcmt(int $nbcmt): self
    {
        $this->nbcmt = $nbcmt;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getReport(): ?int
    {
        return $this->report;
    }

    public function setReport(int $report): self
    {
        $this->report = $report;

        return $this;
    }

    public function getDatep(): ?\DateTimeInterface
    {
        return $this->datep;
    }

    public function setDatep(\DateTimeInterface $datep): self
    {
        $this->datep = $datep;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
