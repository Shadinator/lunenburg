<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magazijn
 *
 * @ORM\Table(name="magazijn")
 * @ORM\Entity
 */
class Magazijn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="locatiecode", type="integer", length=6, nullable=false, unique=false)
     */
    private $locatiecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Set locatiecode
     *
     * @param string $locatiecode
     *
     * @return Magazijn
     */
    public function setLocatiecode($locatiecode)
    {
        $this->locatiecode = $locatiecode;

        return $this;
    }
    /**
     * Get locatiecode
     *
     * @return string
     */
    public function getLocatiecode()
    {
        return $this->locatiecode;
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
}

