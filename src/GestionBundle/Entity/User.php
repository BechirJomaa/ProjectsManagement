<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GestionBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use GestionBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * Many users have Many projects.
     * @ORM\ManyToMany(targetEntity="Projet", mappedBy="personnels")
     */
    private $projects;
    
     /**
     * Many users have Many tache.
     * @ORM\ManyToMany(targetEntity="Tache", mappedBy="personnels")
     */
    private $taches;
    
    public function __construct()
    {
        parent::__construct();
         $this->projects = new ArrayCollection();
         $this->taches = new ArrayCollection();
        
    }

    /**
     * Add project
     *
     * @param \GestionBundle\Entity\Projet $project
     *
     * @return User
     */
    public function addProjects(\GestionBundle\Entity\Projet $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \GestionBundle\Entity\Projet $project
     */
    public function removeProjects(\GestionBundle\Entity\Projet $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
    }

   

   

    /**
     * Add project
     *
     * @param \GestionBundle\Entity\Projet $project
     *
     * @return User
     */
    public function addProject(\GestionBundle\Entity\Projet $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \GestionBundle\Entity\Projet $project
     */
    public function removeProject(\GestionBundle\Entity\Projet $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Add tach
     *
     * @param \GestionBundle\Entity\Tache $tach
     *
     * @return User
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
    
}
