<?php

namespace VolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * billet
 *
 * @ORM\Table(name="billet")
 * @ORM\Entity(repositoryClass="VolBundle\Repository\billetRepository")
 */
class billet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=255)
     */
    private $classe;


	/**
     * @ORM\ManyToOne(targetEntity="VolBundle\Entity\voyageur")
	 *
     * @ORM\JoinColumn(name="voyageur_id", referencedColumnName="id")
     */
    private $voyageur;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return billet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return billet
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return billet
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return billet
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set classe
     *
     * @param string $classe
     *
     * @return billet
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }
	
	
	 /**
     * Set voyageur
     *
     * @param voyageur $voyageur
     *
     * @return billet
     */
    public function setVoyageur($voyageur)
    {
        $this->voyageur = $voyageur;

        return $this;
    }

    /**
     * Get voyageur
     *
     * @return int
     */
    public function getVoyageur()
    {
        return $this->voyageur;
    }
}

