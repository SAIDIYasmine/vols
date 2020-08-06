<?php

namespace VolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voyageur
 *
 * @ORM\Table(name="voyageur")
 * @ORM\Entity(repositoryClass="VolsBundle\Repository\voyageurRepository")
 */
class voyageur
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;



    /**
     * @var int
     *
     * @ORM\Column(name="numPassport", type="integer")
     */
    private $numPassport;

    /**
     * @var date
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;



    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



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
     * Set nom
     *
     * @param string $nom
     *
     * @return voyageur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return voyageur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return voyageur
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set numPassport
     *
     * @param integer $numPassport
     *
     * @return voyageur
     */
    public function setNumPassport($numPassport)
    {
        $this->numPassport = $numPassport;

        return $this;
    }

    /**
     * Get numPassport
     *
     * @return int
     */
    public function getNumPassport()
    {
        return $this->numPassport;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return voyageur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
}

