<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Courshebdomadaire;
use AD\PresaisonBundle\Form\CourshebdomadaireType;

/**
 * Courshebdomadaire controller.
 *
 * @Route("/courshebdomadaire")
 */
class CourshebdomadaireController extends Controller
{
    /**
     * Lists all Courshebdomadaire entities.
     *
     * @Route("/", name="courshebdomadaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courshebdomadaires = $em->getRepository('ADPresaisonBundle:Courshebdomadaire')->findAll();

        return $this->render('courshebdomadaire/index.html.twig', array(
            'courshebdomadaires' => $courshebdomadaires,
        ));
    }

    /**
     * Creates a new Courshebdomadaire entity.
     *
     * @Route("/new", name="courshebdomadaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $courshebdomadaire = new Courshebdomadaire();
        $form = $this->createForm('AD\PresaisonBundle\Form\CourshebdomadaireType', $courshebdomadaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($courshebdomadaire);
            $em->flush();

            return $this->redirectToRoute('courshebdomadaire_show', array('id' => $courshebdomadaire->getId()));
        }

        return $this->render('courshebdomadaire/new.html.twig', array(
            'courshebdomadaire' => $courshebdomadaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Courshebdomadaire entity.
     *
     * @Route("/{id}", name="courshebdomadaire_show")
     * @Method("GET")
     */
    public function showAction(Courshebdomadaire $courshebdomadaire)
    {
        $deleteForm = $this->createDeleteForm($courshebdomadaire);

        return $this->render('courshebdomadaire/show.html.twig', array(
            'courshebdomadaire' => $courshebdomadaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Courshebdomadaire entity.
     *
     * @Route("/{id}/edit", name="courshebdomadaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Courshebdomadaire $courshebdomadaire)
    {
        $deleteForm = $this->createDeleteForm($courshebdomadaire);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\CourshebdomadaireType', $courshebdomadaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($courshebdomadaire);
            $em->flush();

            return $this->redirectToRoute('courshebdomadaire_edit', array('id' => $courshebdomadaire->getId()));
        }

        return $this->render('courshebdomadaire/edit.html.twig', array(
            'courshebdomadaire' => $courshebdomadaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Courshebdomadaire entity.
     *
     * @Route("/{id}", name="courshebdomadaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Courshebdomadaire $courshebdomadaire)
    {
        $form = $this->createDeleteForm($courshebdomadaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($courshebdomadaire);
            $em->flush();
        }

        return $this->redirectToRoute('courshebdomadaire_index');
    }

    /**
     * Creates a form to delete a Courshebdomadaire entity.
     *
     * @param Courshebdomadaire $courshebdomadaire The Courshebdomadaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Courshebdomadaire $courshebdomadaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('courshebdomadaire_delete', array('id' => $courshebdomadaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
