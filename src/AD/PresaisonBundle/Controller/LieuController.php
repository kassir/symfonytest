<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Lieu;
use AD\PresaisonBundle\Form\LieuType;

/**
 * Lieu controller.
 *
 * @Route("/lieu")
 */
class LieuController extends Controller
{
    /**
     * Lists all Lieu entities.
     *
     * @Route("/", name="lieu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lieus = $em->getRepository('ADPresaisonBundle:Lieu')->findAll();

        return $this->render('lieu/index.html.twig', array(
            'lieus' => $lieus,
        ));
    }

    /**
     * Creates a new Lieu entity.
     *
     * @Route("/new", name="lieu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lieu = new Lieu();
        $form = $this->createForm('AD\PresaisonBundle\Form\LieuType', $lieu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lieu);
            $em->flush();

            return $this->redirectToRoute('lieu_show', array('id' => $lieu->getId()));
        }

        return $this->render('lieu/new.html.twig', array(
            'lieu' => $lieu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lieu entity.
     *
     * @Route("/{id}", name="lieu_show")
     * @Method("GET")
     */
    public function showAction(Lieu $lieu)
    {
        $deleteForm = $this->createDeleteForm($lieu);

        return $this->render('lieu/show.html.twig', array(
            'lieu' => $lieu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lieu entity.
     *
     * @Route("/{id}/edit", name="lieu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lieu $lieu)
    {
        $deleteForm = $this->createDeleteForm($lieu);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\LieuType', $lieu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lieu);
            $em->flush();

            return $this->redirectToRoute('lieu_edit', array('id' => $lieu->getId()));
        }

        return $this->render('lieu/edit.html.twig', array(
            'lieu' => $lieu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lieu entity.
     *
     * @Route("/{id}", name="lieu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lieu $lieu)
    {
        $form = $this->createDeleteForm($lieu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lieu);
            $em->flush();
        }

        return $this->redirectToRoute('lieu_index');
    }

    /**
     * Creates a form to delete a Lieu entity.
     *
     * @param Lieu $lieu The Lieu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lieu $lieu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lieu_delete', array('id' => $lieu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
