<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Adherent;
use AD\PresaisonBundle\Form\AdherentType;

/**
 * Adherent controller.
 *
 * @Route("/adherent")
 */
class AdherentController extends Controller
{
    /**
     * Lists all Adherent entities.
     *
     * @Route("/", name="adherent_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adherents = $em->getRepository('ADPresaisonBundle:Adherent')->findAll();

        return $this->render('adherent/index.html.twig', array(
            'adherents' => $adherents,
        ));
    }

    /**
     * Creates a new Adherent entity.
     *
     * @Route("/new", name="adherent_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $adherent = new Adherent();
        $form = $this->createForm('AD\PresaisonBundle\Form\AdherentType', $adherent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adherent);
            $em->flush();

            return $this->redirectToRoute('adherent_show', array('id' => $adherent->getId()));
        }

        return $this->render('adherent/new.html.twig', array(
            'adherent' => $adherent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Adherent entity.
     *
     * @Route("/{id}", name="adherent_show")
     * @Method("GET")
     */
    public function showAction(Adherent $adherent)
    {
        $deleteForm = $this->createDeleteForm($adherent);

        return $this->render('adherent/show.html.twig', array(
            'adherent' => $adherent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Adherent entity.
     *
     * @Route("/{id}/edit", name="adherent_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Adherent $adherent)
    {
        $deleteForm = $this->createDeleteForm($adherent);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\AdherentType', $adherent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adherent);
            $em->flush();

            return $this->redirectToRoute('adherent_edit', array('id' => $adherent->getId()));
        }

        return $this->render('adherent/edit.html.twig', array(
            'adherent' => $adherent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Adherent entity.
     *
     * @Route("/{id}", name="adherent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Adherent $adherent)
    {
        $form = $this->createDeleteForm($adherent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adherent);
            $em->flush();
        }

        return $this->redirectToRoute('adherent_index');
    }

    /**
     * Creates a form to delete a Adherent entity.
     *
     * @param Adherent $adherent The Adherent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Adherent $adherent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adherent_delete', array('id' => $adherent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
