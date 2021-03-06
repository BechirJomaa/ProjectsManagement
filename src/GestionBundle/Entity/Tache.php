<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="DateFin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float")
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
     * @ORM\Column(name="progress", type="string", length=255)
     */
    private $progress;
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="taches")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $projet;
    
     /**
     * @ORM\OneToMany(targetEntity="Materiel", mappedBy="tache")
     */
    private $materiels;
    
      /**
     * Many projects have Many personnels.
     * @ORM\ManyToMany(targetEntity="User" , inversedBy="taches")
     * @ORM\JoinTable(name="tache_personnel")
     */
    private $personnels;
    
    

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
     * @return Tache
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
     * @return Tache
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
     * Set duree
     *
     * @param string $duree
     *
     * @return Tache
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set cout
     *
     * @param float $cout
     *
     * @return Tache
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return float
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
     * @return Tache
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
     * Set progress
     *
     * @param string $progress
     *
     * @return Tache
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set projet
     *
     * @param \GestionBundle\Entity\Projet $projet
     *
     * @return Tache
     */
    public function setProjet(\GestionBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \GestionBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materiels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personnels = new ArrayCollection();
    }

    /**
     * Add materiels
     *
     * @param \GestionBundle\Entity\Materiel $materiel
     *
     * @return Tache
     */
    public function addMateriels(\GestionBundle\Entity\Materiel $materiel)
    {
        $this->materiels[] = $materiel;

        return $this;
    }

    /**
     * Remove materiels
     *
     * @param \GestionBundle\Entity\Materiel $materiel
     */
    public function removeMateriels(\GestionBundle\Entity\Materiel $materiel)
    {
        $this->materiels->removeElement($materiel);
    }

    /**
     * Get materiels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMateriels()
    {
        return $this->materiels;
    }

    /**
     * Add materiel
     *
     * @param \GestionBundle\Entity\Materiel $materiel
     *
     * @return Tache
     */
    public function addMateriel(\GestionBundle\Entity\Materiel $materiel)
    {
        $this->materiels[] = $materiel;

        return $this;
    }

    /**
     * Remove materiel
     *
     * @param \GestionBundle\Entity\Materiel $materiel
     */
    public function removeMateriel(\GestionBundle\Entity\Materiel $materiel)
    {
        $this->materiels->removeElement($materiel);
    }

    /**
     * Add personnel
     *
     * @param \GestionBundle\Entity\User $personnel
     *
     * @return Tache
     */
    public function addPersonnel(\GestionBundle\Entity\User $personnel)
    {
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
}
