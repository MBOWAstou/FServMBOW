<?php

namespace App\Entity;

use App\Repository\AccessRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccessRepository::class)
 */
class Access
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $utilistateurid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $documentid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autorisationid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilistateurid(): ?string
    {
        return $this->utilistateurid;
    }

    public function setUtilistateurid(string $utilistateurid): self
    {
        $this->utilistateurid = $utilistateurid;

        return $this;
    }

    public function getDocumentid(): ?string
    {
        return $this->documentid;
    }

    public function setDocumentid(string $documentid): self
    {
        $this->documentid = $documentid;

        return $this;
    }

    public function getAutorisationid(): ?string
    {
        return $this->autorisationid;
    }

    public function setAutorisationid(string $autorisationid): self
    {
        $this->autorisationid = $autorisationid;

        return $this;
    }
}
