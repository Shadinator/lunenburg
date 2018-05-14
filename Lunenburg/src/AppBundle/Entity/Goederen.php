<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goederen
 *
 * @ORM\Table(name="goederen")
 * @ORM\Entity
 */
class Goederen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hoeveelheid", type="integer", nullable=false, unique=false)
     */
    private $hoeveelheid;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="string", length=100, nullable=false, unique=false)
     */
    private $kwaliteit;

    /**
     * @var string
     *
     * @ORM\Column(name="beschrijving", type="text", length=65535, nullable=false, unique=false)
     */
    private $beschrijving;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ontvangstdatum", type="date", nullable=false, unique=false)
     */
    private $ontvangstdatum;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Leverancier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Leverancier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leverancier_fk_id", referencedColumnName="id")
     * })
     */
    private $leverancierFk;

    /**
     * @var \AppBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_fk_id", referencedColumnName="id")
     * })
     */
    private $statusFk;

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
     * Set hoeveelheid
     *
     * @param integer $hoeveelheid
     *
     * @return Goederen
     */
    public function setHoeveelheid($hoeveelheid)
    {
        $this->hoeveelheid = $hoeveelheid;

        return $this;
    }

    /**
     * Get hoeveelheid
     *
     * @return integer
     */
    public function getHoeveelheid()
    {
        return $this->hoeveelheid;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Goederen
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }

    /**
     * Set beschrijving
     *
     * @param string $beschrijving
     *
     * @return Goederen
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;

        return $this;
    }

    /**
     * Get beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * Set ontvangstdatum
     *
     * @param \DateTime $ontvangstdatum
     *
     * @return Goederen
     */
    public function setOntvangstdatum($ontvangstdatum)
    {
        $this->ontvangstdatum = $ontvangstdatum;

        return $this;
    }

    /**
     * Get ontvangstdatum
     *
     * @return \DateTime
     */
    public function getOntvangstdatum()
    {
        return $this->ontvangstdatum;
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
     * Set leverancierFk
     *
     * @param \AppBundle\Entity\Leverancier $leverancierFk
     *
     * @return Goederen
     */
    public function setLeverancierFk(\AppBundle\Entity\Leverancier $leverancierFk = null)
    {
        $this->leverancierFk = $leverancierFk;

        return $this;
    }

    /**
     * Get leverancierFk
     *
     * @return \AppBundle\Entity\Leverancier
     */
    public function getLeverancierFk()
    {
        return $this->leverancierFk;
    }

    /**
     * Set statusFk
     *
     * @param \AppBundle\Entity\Status $statusFk
     *
     * @return Goederen
     */
    public function setStatusFk(\AppBundle\Entity\Status $statusFk = null)
    {
        $this->statusFk = $statusFk;

        return $this;
    }

    /**
     * Get statusFk
     *
     * @return \AppBundle\Entity\Status
     */
    public function getStatusFk()
    {
        return $this->statusFk;
    }

    /**
     * Set idArtikelFk
     *
     * @param \AppBundle\Entity\Artikel $idArtikelFk
     *
     * @return Goederen
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
}

