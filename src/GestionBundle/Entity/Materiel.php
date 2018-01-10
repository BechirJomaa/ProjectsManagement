<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\MaterielRepository")
 */
class Materiel
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrMatReserve", type="integer")
     */
    private $nbrMatReserve=0;

     /**
     * @ORM\ManyToOne(targetEntity="Tache", inversedBy="materiels")
     * @ORM\JoinColumn(name="tache_id", referencedColumnName="id",  nullable=true,onDelete="SET NULL")
     */
    private $tache;
    
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
     * @return Materiel
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
     * Set type
     *
     * @param string $type
     *
     * @return Materiel
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Materiel
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set nbrMatReserve
     *
     * @param integer $nbrMatReserve
     *
     * @return Materiel
     */
    public function setNbrMatReserve($nbrMatReserve)
    {
        $this->nbrMatReserve = $nbrMatReserve;

        return $this;
    }

    /**
     * Get nbrMatReserve
     *
     * @return int
     */
    public function getNbrMatReserve()
    {
        return $this->nbrMatReserve;
    }

    /**
     * Set tache
     *
     * @param \GestionBundle\Entity\Tache $tache
     *
     * @return Materiel
     */
    public function setTache(\GestionBundle\Entity\Tache $tache = null)
    {
        $this->tache = $tache;

        return $this;
    }

    /**
     * Get tache
     *
     * @return \GestionBundle\Entity\Tache
     */
    public function getTache()
    {
        return $this->tache;
    }
}
