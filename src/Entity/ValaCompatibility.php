<?php
// src/Entity/ValaCompatibility.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_compatibility")
 * @ORM\Entity()
 */
class ValaCompatibility
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_product", type="integer")
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_vala_mobile", type="integer")
     */
    private $idValaMobile;

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="year", type="string", length=250)
     */
    private $year;

    /**
     * @var bool
     *
     * @ORM\Column(name="indexed", type="boolean")
     */
    private $indexed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    // Define getters and setters for each property

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdValaMobile(): ?int
    {
        return $this->idValaMobile;
    }

    public function setIdValaMobile(int $idValaMobile): self
    {
        $this->idValaMobile = $idValaMobile;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(bool $indexed): self
    {
        $this->indexed = $indexed;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function toArray()
    {
        return [
            'idProduct' => $this->idProduct,
            'idValaMobile' => $this->idValaMobile,
            'year' => $this->year,
            'indexed' => $this->indexed,
            'dateAdd' => $this->dateAdd
        ];
    }
}
