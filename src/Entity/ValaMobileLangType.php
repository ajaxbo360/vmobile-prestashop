<?php
// src/Entity/ValaMobileTypeLang.php
namespace Mac\VMobile\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="ps_vala_mobile_type_lang")
 * @ORM\Entity()
 */
class ValaMobileTypeLang
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="ValaMobileType")
     * @ORM\JoinColumn(name="id_vala_mobile_type", referencedColumnName="id_vala_mobile_type", nullable=false)
     */
    private $valaMobileType;

    /**
     * @ORM\Id
     * @ORM\Column(name="id_lang", type="integer")
     */
    private $langId;

    /**
     * @ORM\Column(name="name", type="string", length=250)
     */
    private $name;

    /**
     * @ORM\Column(name="url_rewrite", type="string", length=250)
     */
    private $urlRewrite;

    //  getters, and setters


    public function getValaMobileType(): ?ValaMobileType
    {
        return $this->valaMobileType;
    }

    public function setValaMobileType(?ValaMobileType $valaMobileType): self
    {
        $this->valaMobileType = $valaMobileType;

        return $this;
    }

    public function getLangId(): ?int
    {
        return $this->langId;
    }

    public function setLangId(int $langId): self
    {
        $this->langId = $langId;

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

    public function getUrlRewrite(): ?string
    {
        return $this->urlRewrite;
    }

    public function setUrlRewrite(string $urlRewrite): self
    {
        $this->urlRewrite = $urlRewrite;

        return $this;
    }

    public function toArray()
    {
        return [
            'valaMobileType' => $this->getValaMobileType(),
            'langId' => $this->getLangId(),
            'name' => $this->getName(),
            'urlRewrite' => $this->getUrlRewrite(),
        ];
    }
}
