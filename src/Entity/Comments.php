<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_post_comment", columns={"post"}), @ORM\Index(name="fk_user_comment", columns={"idUser"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="idC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuC", type="string", length=255, nullable=false)
     */
    private $contenuc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateC", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="reportC", type="integer", nullable=false)
     */
    private $reportc;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var \Posts
     *
     * @ORM\ManyToOne(targetEntity="Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post", referencedColumnName="idp")
     * })
     */
    private $post;

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getContenuc(): ?string
    {
        return $this->contenuc;
    }

    public function setContenuc(string $contenuc): self
    {
        $this->contenuc = $contenuc;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getReportc(): ?int
    {
        return $this->reportc;
    }

    public function setReportc(int $reportc): self
    {
        $this->reportc = $reportc;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getPost(): ?Posts
    {
        return $this->post;
    }

    public function setPost(?Posts $post): self
    {
        $this->post = $post;

        return $this;
    }


}
