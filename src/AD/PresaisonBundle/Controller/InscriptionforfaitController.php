<?php

namespace AD\PresaisonBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AD\PresaisonBundle\Entity\Inscriptionforfait;
use AD\PresaisonBundle\Form\InscriptionforfaitType;

/**
 * Inscriptionforfait controller.
 *
 * @Route("/inscriptionforfait")
 */
class InscriptionforfaitController extends Controller
{
    /**
     * Lists all Inscriptionforfait entities.
     *
     * @Route("/", name="inscriptionforfait_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $inscriptionforfaits = $em->getRepository('ADPresaisonBundle:Inscriptionforfait')->findAll();

        return $this->render('inscriptionforfait/index.html.twig', array(
            'inscriptionforfaits' => $inscriptionforfaits,
        ));
    }

    /**
     * Creates a new Inscriptionforfait entity.
     *
     * @Route("/new", name="inscriptionforfait_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscriptionforfait = new Inscriptionforfait();
        $form = $this->createForm('AD\PresaisonBundle\Form\InscriptionforfaitType', $inscriptionforfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscriptionforfait);
            $em->flush();

            return $this->redirectToRoute('inscriptionforfait_show', array('id' => $inscriptionforfait->getId()));
        }

        return $this->render('inscriptionforfait/new.html.twig', array(
            'inscriptionforfait' => $inscriptionforfait,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Inscriptionforfait entity.
     *
     * @Route("/{id}", name="inscriptionforfait_show")
     * @Method("GET")
     */
    public function showAction(Inscriptionforfait $inscriptionforfait)
    {
        $deleteForm = $this->createDeleteForm($inscriptionforfait);

        return $this->render('inscriptionforfait/show.html.twig', array(
            'inscriptionforfait' => $inscriptionforfait,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Inscriptionforfait entity.
     *
     * @Route("/{id}/edit", name="inscriptionforfait_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscriptionforfait $inscriptionforfait)
    {
        $deleteForm = $this->createDeleteForm($inscriptionforfait);
        $editForm = $this->createForm('AD\PresaisonBundle\Form\InscriptionforfaitType', $inscriptionforfait);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscriptionforfait);
            $em->flush();

            return $this->redirectToRoute('inscriptionforfait_edit', array('id' => $inscriptionforfait->getId()));
        }

        return $this->render('inscriptionforfait/edit.html.twig', array(
            'inscriptionforfait' => $inscriptionforfait,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Inscriptionforfait entity.
     *
     * @Route("/{id}", name="inscriptionforfait_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscriptionforfait $inscriptionforfait)
    {
        $form = $this->createDeleteForm($inscriptionforfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscriptionforfait);
            $em->flush();
        }

        return $this->redirectToRoute('inscriptionforfait_index');
    }

    /**
     * Creates a form to delete a Inscriptionforfait entity.
     *
     * @param Inscriptionforfait $inscriptionforfait The Inscriptionforfait entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscriptionforfait $inscriptionforfait)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscriptionforfait_delete', array('id' => $inscriptionforfait->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
