<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cout", type="string", length=255)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;
    
    
     /**
     * @ORM\OneToMany(targetEntity="Tache", mappedBy="projet")
     */
    private $taches;
    
    
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="projets")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
     /**
     * Many projects have Many personnels.
     * @ORM\ManyToMany(targetEntity="User" , inversedBy="projects")
     * @ORM\JoinTable(name="project_personnel")
     */
    private $personnels;

    public function __construct()
    {
        $this->taches = new ArrayCollection();
        $this->personnels = new ArrayCollection();
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Projet
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Projet
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cout
     *
     * @param string $cout
     *
     * @return Projet
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Projet
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Projet
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add tach
     *
     * @param \GestionBundle\Entity\Tache $tach
     *
     * @return Projet
     */
    public function addTach(\GestionBundle\Entity\Tache $tach)
    {
        $this->taches[] = $tach;

        return $this;
    }

    /**
     * Remove tach
     *
     * @param \GestionBundle\Entity\Tache $tach
     */
    public function removeTach(\GestionBundle\Entity\Tache $tach)
    {
        $this->taches->removeElement($tach);
    }

    /**
     * Get taches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTaches()
    {
        return $this->taches;
    }

    /**
     * Set client
     *
     * @param \GestionBundle\Entity\Client $client
     *
     * @return Projet
     */
    public function setClient(\GestionBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \GestionBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add personnel
     *
     * @param \GestionBundle\Entity\User $personnel
     *
     * @return Projet
     */
    public function addPersonnel(\GestionBundle\Entity\User $personnel)
    {
        $personnel->addProjects($this);
        $this->personnels[] = $personnel;
        return $this;
    }

    /**
     * Remove personnel
     *
     * @param \GestionBundle\Entity\User $personnel
     */
    public function removePersonnel(\GestionBundle\Entity\User $personnel)
    {
        $this->personnels->removeElement($personnel);
    }

    /**
     * Get personnels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnels()
    {
        return $this->personnels;
    }
    
      public function __toString()
    {
        return $this->getId()."";
    }
}
