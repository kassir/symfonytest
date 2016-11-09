<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Danse;
use AD\PresaisonBundle\Form\DanseType;

/**
 * Danse controller.
 *
 * @Route("/danse")
 */
class DanseController extends Controller
{
    /**
     * Lists all Danse entities.
     *
     * @Route("/", name="danse_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $danses = $em->getRepository('ADPresaisonBundle:Danse')->findAll();

        return $this->render('danse/index.html.twig', array(
            'danses' => $danses,
        ));
    }

    /**
     * Creates a new Danse entity.
     *
     * @Route("/new", name="danse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $danse = new Danse();
        $form = $this->createForm('AD\PresaisonBundle\Form\DanseType', $danse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($danse);
            $em->flush();

            return $this->redirectToRoute('danse_show', array('id' => $danse->getId()));
        }

        return $this->render('danse/new.html.twig', array(
            'danse' => $danse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Danse entity.
     *
     * @Route("/{id}", name="danse_show")
     * @Method("GET")
     */
    public function showAction(Danse $danse)
    {
        $deleteForm = $this->createDeleteForm($danse);

        return $this->render('danse/show.html.twig', array(
            'danse' => $danse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Danse entity.
     *
     * @Route("/{id}/edit", name="danse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Danse $danse)
    {
        $deleteForm = $this->createDeleteForm($danse);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\DanseType', $danse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($danse);
            $em->flush();

            return $this->redirectToRoute('danse_edit', array('id' => $danse->getId()));
        }

        return $this->render('danse/edit.html.twig', array(
            'danse' => $danse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Danse entity.
     *
     * @Route("/{id}", name="danse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Danse $danse)
    {
        $form = $this->createDeleteForm($danse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($danse);
            $em->flush();
        }

        return $this->redirectToRoute('danse_index');
    }

    /**
     * Creates a form to delete a Danse entity.
     *
     * @param Danse $danse The Danse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Danse $danse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('danse_delete', array('id' => $danse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
