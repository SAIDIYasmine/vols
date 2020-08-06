<?php

namespace VolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voyageur
 *
 * @ORM\Table(name="voyageur")
 * @ORM\Entity(repositoryClass="VolBundle\Repository\voyageurRepository")
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
     * @ORM\Column(name="nationalire", type="string", length=255)
     */
    private $nationalire;

    /**
     * @var string
     *
     * @ORM\Column(name="num_passpot", type="string", length=255)
     */
    private $numPasspot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;


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
     * Set nationalire
     *
     * @param string $nationalire
     *
     * @return voyageur
     */
    public function setNationalire($nationalire)
    {
        $this->nationalire = $nationalire;

        return $this;
    }

    /**
     * Get nationalire
     *
     * @return string
     */
    public function getNationalire()
    {
        return $this->nationalire;
    }

    /**
     * Set numPasspot
     *
     * @param string $numPasspot
     *
     * @return voyageur
     */
    public function setNumPasspot($numPasspot)
    {
        $this->numPasspot = $numPasspot;

        return $this;
    }

    /**
     * Get numPasspot
     *
     * @return string
     */
    public function getNumPasspot()
    {
        return $this->numPasspot;
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

