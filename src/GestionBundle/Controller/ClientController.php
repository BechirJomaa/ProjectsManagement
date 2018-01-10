<?php

namespace GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionBundle\Entity\Client;
use GestionBundle\Form\ClientType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Swift_Message;

/**
 * Client controller.
 *
 */
class ClientController extends Controller
{
    /**
     * Lists all Client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $logedUser = $this->get('security.context')->getToken()->getUser();
        $clients = $em->getRepository('GestionBundle:Client')->findAll();

        return $this->render('client/index.html.twig', array(
            'clients' => $clients,
             'us' => $logedUser,
        ));
    }
    
  
      public function sendEmailAction(Request $request, Client $client) {
          $logedUser = $this->get('security.context')->getToken()->getUser();
        
           $defaultData = array('message' => 'Type your message here');
            $form = $this->createFormBuilder($defaultData)
            ->add('sujet',TextType::class)
            ->add('message', TextareaType::class)
            ->add('envoyer', SubmitType::class)
            ->getForm();

              $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // data is an array with "name", "email", and "message" keys
                 $data = $form->getData();
                 $message = Swift_Message::newInstance()
                        ->setSubject($data["sujet"])
                        ->setFrom($logedUser->getEmail())
                        ->setTo($client->getEmail())
                        ->setBody($data["message"]);
                        $this->get('mailer')->send($message);
               return $this->redirectToRoute('client_index');
            }

            return $this->render('client/newemail.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
       
    }

    /**
     * Creates a new Client entity.
     *
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm(new ClientType(), $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_show', array('id' => $client->getId()));
        }

        return $this->render('client/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction(Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $logedUser = $this->get('security.context')->getToken()->getUser();
        return $this->render('client/show.html.twig', array(
            'client' => $client,
            'delete_form' => $deleteForm->createView(),
             'us' => $logedUser,
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm(new ClientType(), $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_edit', array('id' => $client->getId()));
        }

        return $this->render('client/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, Client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('client_index');
    }

    /**
     * Creates a form to delete a Client entity.
     *
     * @param Client $client The Client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
