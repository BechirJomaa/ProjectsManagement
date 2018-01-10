<?php

namespace GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionBundle\Entity\Materiel;
use GestionBundle\Form\MaterielType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
/**
 * Materiel controller.
 *
 */
class MaterielController extends Controller
{
    /**
     * Lists all Materiel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
      
        $materiels = $em->getRepository('GestionBundle:Materiel')->findAll();

        return $this->render('materiel/index.html.twig', array(
            'materiels' => $materiels,
           
        ));
    }
    public function addMaterielToTacheAction(\GestionBundle\Entity\Tache $tache)
    {
        $em = $this->getDoctrine()->getManager();
        $logedUser = $this->get('security.context')->getToken()->getUser();
        $materiels = $em->getRepository('GestionBundle:Materiel')->findAll();

        return $this->render('materiel/addMaterielToTache.html.twig', array(
            'materiels' => $materiels,
            'tache' => $tache,
            'us' => $logedUser,
           
        ));
    }
    /**
     * @Route("/{idMateriel}-{idTache}/affecter")
     * @ParamConverter("materiel", options={"mapping": {"idMateriel" : "id"}})
     * @ParamConverter("tache", options={"mapping": {"idTache" : "id"}})
     * @Template()
     */
     public function affecterMaterielToTacheAction(Materiel $materiel,\GestionBundle\Entity\Tache $tache)
    {
        $em = $this->getDoctrine()->getManager();
        $logedUser = $this->get('security.context')->getToken()->getUser();
         $materiel = $em->getRepository('GestionBundle:Materiel')->find($materiel);
        if($materiel->getTache()==$tache){
              $materiel->setTache(null);
        }
          
        else{
             $materiel->setTache ($tache);
        }
           
        $em->persist($materiel);
        $em->flush();
       

        $materiels = $em->getRepository('GestionBundle:Materiel')->findAll();

        return $this->render('materiel/addMaterielToTache.html.twig', array(
            'materiels' => $materiels,
            'tache' => $tache,
            'us' => $logedUser,
        ));
    }
    
    
    
    /**
     * Lists Materiel by tache entities.
     *
     */
    public function materielByTacheAction(\GestionBundle\Entity\Tache $tache)
    {
        $logedUser = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM GestionBundle:Materiel p
            WHERE p.tache = :tacheId
            '
        )->setParameter('tacheId', $tache);    
        $materiels = $query->getResult();


        return $this->render('materiel/materielByTache.html.twig', array(
            'materiels' => $materiels,
            'tache' => $tache,
            'us' => $logedUser,
        ));
    }

    /**
     * Creates a new Materiel entity.
     *
     */
    public function newAction(Request $request)
    {
        $materiel = new Materiel();
        $form = $this->createForm(new MaterielType(), $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiel);
            $em->flush();

            return $this->redirectToRoute('materiel_show', array('id' => $materiel->getId()));
        }

        return $this->render('materiel/new.html.twig', array(
            'materiel' => $materiel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Materiel entity.
     *
     */
    public function showAction(Materiel $materiel)
    {
        $deleteForm = $this->createDeleteForm($materiel);
        $logedUser = $this->get('security.context')->getToken()->getUser();
        return $this->render('materiel/show.html.twig', array(
            'materiel' => $materiel,
            'delete_form' => $deleteForm->createView(),
            'us' => $logedUser,
        ));
    }

    /**
     * Displays a form to edit an existing Materiel entity.
     *
     */
    public function editAction(Request $request, Materiel $materiel)
    {
        $deleteForm = $this->createDeleteForm($materiel);
        $editForm = $this->createForm(new MaterielType(), $materiel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiel);
            $em->flush();

            return $this->redirectToRoute('materiel_edit', array('id' => $materiel->getId()));
        }

        return $this->render('materiel/edit.html.twig', array(
            'materiel' => $materiel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Materiel entity.
     *
     */
    public function deleteAction(Request $request, Materiel $materiel)
    {
        $form = $this->createDeleteForm($materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($materiel);
            $em->flush();
        }

        return $this->redirectToRoute('materiel_index');
    }

    /**
     * Creates a form to delete a Materiel entity.
     *
     * @param Materiel $materiel The Materiel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Materiel $materiel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('materiel_delete', array('id' => $materiel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
