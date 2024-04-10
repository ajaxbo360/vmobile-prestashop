<?php
// src/Entity/ValaMobileLang.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_mobile_lang")
 * @ORM\Entity()
 */
class ValaMobileLang
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id_vala_mobile", type="integer")
     */
    private $idValaMobile;

    /**
     * @ORM\Id
     * @ORM\Column(name="id_lang", type="integer")
     */
    private $idLang;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="url_rewrite", type="string", length=250)
     */
    private $urlRewrite;

    /**
     * @ORM\Column(name="meta_title", type="string", length=250)
     */
    private $metaTitle;

    /**
     * @ORM\Column(name="meta_desc", type="text")
     */
    private $metaDesc;

    // Define properties and methods for this entity

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id_vala_mobile' => $this->getIdValaMobile(),
            'id_lang' => $this->getIdLang(),
            'description' => $this->getDescription(),
            'url_rewrite' => $this->getUrlRewrite(),
            'meta_title' => $this->getMetaTitle(),
            'meta_desc' => $this->getMetaDesc(),
        ];
    }

    // Define getters and setters for private properties

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
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * @param mixed $idLang
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getUrlRewrite()
    {
        return $this->urlRewrite;
    }

    /**
     * @param mixed $urlRewrite
     */
    public function setUrlRewrite($urlRewrite)
    {
        $this->urlRewrite = $urlRewrite;
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @param mixed $metaTitle
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @return mixed
     */
    public function getMetaDesc()
    {
        return $this->metaDesc;
    }

    /**
     * @param mixed $metaDesc
     */
    public function setMetaDesc($metaDesc)
    {
        $this->metaDesc = $metaDesc;
    }
}
