<?php
// src/Entity/ValaMobileType.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_mobile_type")
 * @ORM\Entity()
 */
class ValaMobileType
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id_vala_mobile_type", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(name="position", type="smallint")
     */
    private $position;

    /**
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $createdAt;

    // Add constructor, getters, and setters
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'active' => $this->active,
            'position' => $this->position,
            'updatedAt' => $this->updatedAt,
            'createdAt' => $this->createdAt,
        ];
    }
}
