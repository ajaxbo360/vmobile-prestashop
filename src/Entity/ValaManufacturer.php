<?php
// src/Entity/ValaManufacturer.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_manufacturer")
 * @ORM\Entity()
 */
class ValaManufacturer
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id_vala_manufacturer", type="integer")
     */
    private $idValaManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=250)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=250)
     */
    private $website;

    /**
     * @var bool
     *
     * @ORM\Column(name="highlight", type="boolean")
     */
    private $highlight;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", options={"default" : true})
     */
    private $active = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    // Define getters and setters for each property

    public function getIdValaManufacturer(): ?int
    {
        return $this->idValaManufacturer;
    }

    public function setIdValaManufacturer(int $idValaManufacturer): self
    {
        $this->idValaManufacturer = $idValaManufacturer;

        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }


    public function getHighlight(): ?bool
    {
        return $this->highlight;
    }

    public function setHighlight(bool $highlight): self
    {
        $this->highlight = $highlight;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getDateUpd(): ?\DateTime
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function toArray()
    {
        return [
            'idValaManufacturer' => $this->getIdValaManufacturer(),
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'website' => $this->getWebsite(),
            'highlight' => $this->getHighlight(),
            'active' => $this->getActive(),
            'dateUpd' => $this->getDateUpd(),
            'dateAdd' => $this->getDateAdd(),
        ];
    }
}
