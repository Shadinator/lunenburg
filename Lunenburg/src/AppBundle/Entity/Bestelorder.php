<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelorder
 *
 * @ORM\Table(name="bestelorder")
 * @ORM\Entity
 */
class Bestelorder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aantal", type="integer", nullable=false, unique=false)
     */
    private $aantal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Artikel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artikel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_artikel_fk_id", referencedColumnName="id")
     * })
     */
    private $idArtikelFk;

    /**
     * @var \AppBundle\Entity\Leverancier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Leverancier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_leverancier_fk_id", referencedColumnName="id")
     * })
     */
    private $idLeverancierFk;


    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Bestelorder
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idArtikelFk
     *
     * @param \AppBundle\Entity\Artikel $idArtikelFk
     *
     * @return Bestelorder
     */
    public function setIdArtikelFk(\AppBundle\Entity\Artikel $idArtikelFk = null)
    {
        $this->idArtikelFk = $idArtikelFk;

        return $this;
    }

    /**
     * Get idArtikelFk
     *
     * @return \AppBundle\Entity\Artikel
     */
    public function getIdArtikelFk()
    {
        return $this->idArtikelFk;
    }

    /**
     * Set idLeverancierFk
     *
     * @param \AppBundle\Entity\Leverancier $idLeverancierFk
     *
     * @return Bestelorder
     */
    public function setIdLeverancierFk(\AppBundle\Entity\Leverancier $idLeverancierFk = null)
    {
        $this->idLeverancierFk = $idLeverancierFk;

        return $this;
    }

    /**
     * Get idLeverancierFk
     *
     * @return \AppBundle\Entity\Leverancier
     */
    public function getIdLeverancierFk()
    {
        return $this->idLeverancierFk;
    }
}

