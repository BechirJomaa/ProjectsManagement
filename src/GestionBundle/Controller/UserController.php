<?php

namespace GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionBundle\Entity\User;
use GestionBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('GestionBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $succesfullyRegistered = $this->register($user->getEmail(),$user->getUsername(),$user->getPassword(),$user->getRoles()[0]);
            if($succesfullyRegistered){
                // the user is now registered !
            }else{
                // the user exists already !
            }
            

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
    
     private function register($email,$username,$password,$Role){    
      $userManager = $this->get('fos_user.user_manager');

      // Or you can use the doctrine entity manager if you want instead the fosuser manager
      // to find 
      //$em = $this->getDoctrine()->getManager();
      //$usersRepository = $em->getRepository("mybundleuserBundle:User");
      // or use directly the namespace and the name of the class 
      // $usersRepository = $em->getRepository("mybundle\userBundle\Entity\User");
      //$email_exist = $usersRepository->findOneBy(array('email' => $email));
      
      $email_exist = $userManager->findUserByEmail($email);

      // Check if the user exists to prevent Integrity constraint violation error in the insertion
      if($email_exist){
          return false;
      }

      $user = $userManager->createUser();
      $user->addRole($Role);
      $user->setUsername($username);
      $user->setEmail($email);
      $user->setEmailCanonical($email); // don't lock the user
      $user->setEnabled(1); // enable the user or enable it later with a confirmation token in the email
      // this method will encrypt the password with the default settings :)
      $user->setPlainPassword($password);
      $userManager->updateUser($user);

      return true;
   }
   
     public function addClientToProjetAction(\GestionBundle\Entity\Projet $projet)
    {
        $em = $this->getDoctrine()->getManager();
        $fUsers= array();
        $users = $em->getRepository('GestionBundle:User')->findAll();
          for($i=0;$i<count($users);$i++){
              if($users[$i]->getRoles()[0]=="ROLE_RESPONSABLE" || $users[$i]->getRoles()[0]=="ROLE_CHEF"){
                  $fUsers[]=$users[$i];
              }
                  
          }

        return $this->render('user/addClientToProjet.html.twig', array(
            'users' => $fUsers,
            'projet' => $projet,
        ));
    }
    
    public function addFinancierToProjetAction(\GestionBundle\Entity\Projet $projet)
    {
        $em = $this->getDoctrine()->getManager();
        $fUsers= array();
        $users = $em->getRepository('GestionBundle:User')->findAll();
          for($i=0;$i<count($users);$i++){
              if($users[$i]->getRoles()[0]=="FINANCIER"){
                  $fUsers[]=$users[$i];
              }
                  
          }

        return $this->render('user/addFinancierToProjet.html.twig', array(
            'users' => $fUsers,
            'projet' => $projet,
        ));
    }
    /**
     * @Route("/{idProjet}-{idClient}/affecter_financier")
     * @ParamConverter("projet", options={"mapping": {"idProjet" : "id"}})
     * @ParamConverter("user", options={"mapping": {"idClient" : "id"}})
     * @Template()
     */
     public function affecterFinancierToProjetAction(\GestionBundle\Entity\Projet $projet, User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $bool=false;
        
         $projet = $em->getRepository('GestionBundle:Projet')->find($projet);
        for($i=0;$i<$user->getProjects()->count();$i++){
            if($user->getProjects()[$i]->getId()==$projet->getId()){
                $user->removeProject($projet);
                $projet->removePersonnel($user);       
                $bool=true;
            }
        }
          if($user->getRoles()[0]=="FINANCIER"){
            for($i=0;$i<$projet->getPersonnels()->count();$i++){
                $u = $em->getRepository('GestionBundle:User')->find($projet->getPersonnels()[$i]);
               if($u->getRoles()[0]=="FINANCIER"){
                   $projet->removePersonnel($projet->getPersonnels()[$i]);

               }
            }
        }
     
        
        
        
        if(!$bool){
            
            $user->addProject($projet);
            $projet->addPersonnel($user);
           
        }
         
         
       
        $em->persist($projet);
        $em->flush();
       

      

        return $this->redirectToRoute('financier_add_by_projet', array(
            'id' => $projet,
        ));
     
     
    }
    
    
    
    
      public function affecterClientToProjetAction(\GestionBundle\Entity\Projet $projet, User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $bool=false;
        
         $projet = $em->getRepository('GestionBundle:Projet')->find($projet);
        for($i=0;$i<$user->getProjects()->count();$i++){
            if($user->getProjects()[$i]->getId()==$projet->getId()){
                $user->removeProject($projet);
                $projet->removePersonnel($user);       
                $bool=true;
            }
        }
          if($user->getRoles()[0]=="ROLE_RESPONSABLE"){
            for($i=0;$i<$projet->getPersonnels()->count();$i++){
                $u = $em->getRepository('GestionBundle:User')->find($projet->getPersonnels()[$i]);
               if($u->getRoles()[0]=="ROLE_RESPONSABLE"){
                   $projet->removePersonnel($projet->getPersonnels()[$i]);

               }
            }
        }
        else 
            if($user->getRoles()[0]=="ROLE_CHEF"){
            for($i=0;$i<$projet->getPersonnels()->count();$i++){
               
                 $u = $em->getRepository('GestionBundle:User')->find($projet->getPersonnels()[$i]);
                 // var_dump($u->getRoles()[0]);
                //die();
               if($u->getRoles()[0] =="ROLE_CHEF"){
                   $projet->removePersonnel($projet->getPersonnels()[$i]);

               }
            }
        }
        
        if(!$bool){
            
            $user->addProject($projet);
            $projet->addPersonnel($user);
           
        }

        $em->persist($projet);
        $em->flush();
       
        return $this->redirectToRoute('client_add_by_projet', array(
            'id' => $projet,
        ));
     
     
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm(new UserType(), $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
