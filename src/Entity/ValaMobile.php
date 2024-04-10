<?php
// src/Entity/ValaMobile.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_mobile")
 * @ORM\Entity()
 */
class ValaMobile
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id_vala_mobile", type="integer")
     */
    private $idValaMobile;

    /**
     * @ORM\Column(name="id_vala_manufacturer", type="integer")
     */
    private $idValaManufacturer;

    /**
     * @ORM\Column(name="id_vala_mobile_type", type="integer")
     */
    private $idValaMobileType;

    /**
     * @ORM\Column(name="model", type="string", length=250)
     */
    private $model;

    /**
     * @ORM\Column(name="year_start", type="integer")
     */
    private $yearStart;

    /**
     * @ORM\Column(name="year_end", type="integer")
     */
    private $yearEnd;

    /**
     * @ORM\Column(name="image", type="string", length=250)
     */
    private $image;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(name="index", type="boolean")
     */
    private $index;

    /**
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    // Define properties and methods for this entity


    /**
     * @return mixed
     */
    public function getIdValaMobile()
    {
        return $this->idValaMobile;
    }

    /**
     * @param mixed $idValaMobile
     */
    public function setIdValaMobile($idValaMobile)
    {
        $this->idValaMobile = $idValaMobile;
    }

    /**
     * @return mixed
     */
    public function getIdValaManufacturer()
    {
        return $this->idValaManufacturer;
    }

    /**
     * @param mixed $idValaManufacturer
     */
    public function setIdValaManufacturer($idValaManufacturer)
    {
        $this->idValaManufacturer = $idValaManufacturer;
    }

    /**
     * @return mixed
     */
    public function getIdValaMobileType()
    {
        return $this->idValaMobileType;
    }

    /**
     * @param mixed $idValaMobileType
     */
    public function setIdValaMobileType($idValaMobileType)
    {
        $this->idValaMobileType = $idValaMobileType;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getYearStart()
    {
        return $this->yearStart;
    }

    /**
     * @param mixed $yearStart
     */
    public function setYearStart($yearStart)
    {
        $this->yearStart = $yearStart;
    }


    /**
     * @return mixed
     */
    public function getYearEnd()
    {
        return $this->yearEnd;
    }

    /**
     * @param mixed $yearEnd
     */
    public function setYearEnd($yearEnd)
    {
        $this->yearEnd = $yearEnd;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function isIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * @param mixed $idParent
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;
    }

    /**
     * @return mixed
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * @param mixed $dateUpd
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;
    }

    /**
     * @return mixed
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id_vala_mobile' => $this->getIdValaMobile(),
            'id_vala_manufacturer' => $this->getIdValaManufacturer(),
            'id_vala_mobile_type' => $this->getIdValaMobileType(),
            'model' => $this->getModel(),
            'year_start' => $this->getYearStart(),
            'year_end' => $this->getYearEnd(),
            'image' => $this->getImage(),
            'active' => $this->isActive(),
            'index' => $this->isIndex(),
            'id_parent' => $this->getIdParent(),
            'date_upd' => $this->getDateUpd(),
            'date_add' => $this->getDateAdd(),
        ];
    }
}
