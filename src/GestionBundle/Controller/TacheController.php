<?php

namespace GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionBundle\Entity\Tache;
use GestionBundle\Form\TacheType;

/**
 * Tache controller.
 *
 */
class TacheController extends Controller
{
    /**
     * Lists all Tache entities.
     *
     */
    public function indexAction(\GestionBundle\Entity\Projet $projet)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM GestionBundle:Tache p
            WHERE p.projet = :projectId
            '
        )->setParameter('projectId', $projet);    
        $taches = $query->getResult();
        $logedUser = $this->get('security.context')->getToken()->getUser();

      //  $taches = $em->getRepository('GestionBundle:Tache')->findBy($projet);

        return $this->render('tache/index.html.twig', array(
            'taches' => $taches,
            'projet' => $projet,
            'us' => $logedUser,
        ));
    }

    /**
     * Creates a new Tache entity.
     *
     */
    public function newAction(Request $request,\GestionBundle\Entity\Projet $projet)
    {
        $tache = new Tache();
        $tache->setProjet($projet);
        $form = $this->createForm(new TacheType(), $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tache);
            $em->flush();

            return $this->redirectToRoute('tache_show', array('id' => $tache->getId()));
        }

        return $this->render('tache/new.html.twig', array(
            'tache' => $tache,
            'projet' => $projet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tache entity.
     *
     */
    public function showAction(Tache $tache)
    {
        $deleteForm = $this->createDeleteForm($tache);
         $logedUser = $this->get('security.context')->getToken()->getUser();
        return $this->render('tache/show.html.twig', array(
            'tache' => $tache,
            'delete_form' => $deleteForm->createView(),
             'us' => $logedUser,
            
        ));
    }

    /**
     * Displays a form to edit an existing Tache entity.
     *
     */
    public function editAction(Request $request, Tache $tache)
    {
        $deleteForm = $this->createDeleteForm($tache);
        $editForm = $this->createForm(new TacheType(), $tache);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tache);
            $em->flush();

            return $this->redirectToRoute('tache_edit', array('id' => $tache->getId()));
        }

        return $this->render('tache/edit.html.twig', array(
            'tache' => $tache,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tache entity.
     *
     */
    public function deleteAction(Request $request, Tache $tache)
    {
        $form = $this->createDeleteForm($tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tache);
            $em->flush();
        }

        return $this->redirectToRoute('tache_index', array('id' => $tache->getProjet()->getId()));
    }

    /**
     * Creates a form to delete a Tache entity.
     *
     * @param Tache $tache The Tache entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tache $tache)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tache_delete', array('id' => $tache->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
