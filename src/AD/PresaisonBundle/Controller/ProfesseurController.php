<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Professeur;
use AD\PresaisonBundle\Form\ProfesseurType;

/**
 * Professeur controller.
 *
 * @Route("/professeur")
 */
class ProfesseurController extends Controller
{
    /**
     * Lists all Professeur entities.
     *
     * @Route("/", name="professeur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $professeurs = $em->getRepository('ADPresaisonBundle:Professeur')->findAll();

        return $this->render('professeur/index.html.twig', array(
            'professeurs' => $professeurs,
        ));
    }

    /**
     * Creates a new Professeur entity.
     *
     * @Route("/new", name="professeur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $professeur = new Professeur();
        $form = $this->createForm('AD\PresaisonBundle\Form\ProfesseurType', $professeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($professeur);
            $em->flush();

            return $this->redirectToRoute('professeur_show', array('id' => $professeur->getId()));
        }

        return $this->render('professeur/new.html.twig', array(
            'professeur' => $professeur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Professeur entity.
     *
     * @Route("/{id}", name="professeur_show")
     * @Method("GET")
     */
    public function showAction(Professeur $professeur)
    {
        $deleteForm = $this->createDeleteForm($professeur);

        return $this->render('professeur/show.html.twig', array(
            'professeur' => $professeur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Professeur entity.
     *
     * @Route("/{id}/edit", name="professeur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Professeur $professeur)
    {
        $deleteForm = $this->createDeleteForm($professeur);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\ProfesseurType', $professeur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($professeur);
            $em->flush();

            return $this->redirectToRoute('professeur_edit', array('id' => $professeur->getId()));
        }

        return $this->render('professeur/edit.html.twig', array(
            'professeur' => $professeur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Professeur entity.
     *
     * @Route("/{id}", name="professeur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Professeur $professeur)
    {
        $form = $this->createDeleteForm($professeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($professeur);
            $em->flush();
        }

        return $this->redirectToRoute('professeur_index');
    }

    /**
     * Creates a form to delete a Professeur entity.
     *
     * @param Professeur $professeur The Professeur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Professeur $professeur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('professeur_delete', array('id' => $professeur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
