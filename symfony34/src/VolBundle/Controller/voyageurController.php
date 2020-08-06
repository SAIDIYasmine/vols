<?php

namespace VolBundle\Controller;

use VolBundle\Entity\voyageur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Voyageur controller.
 *
 */
class voyageurController extends Controller
{
    /**
     * Lists all voyageur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $voyageurs = $em->getRepository('VolBundle:voyageur')->findAll();

        return $this->render('voyageur/index.html.twig', array(
            'voyageurs' => $voyageurs,
        ));
    }

    /**
     * Creates a new voyageur entity.
     *
     */
    public function newAction(Request $request)
    {
        $voyageur = new Voyageur();
        $form = $this->createForm('VolBundle\Form\voyageurType', $voyageur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($voyageur);
            $em->flush();

            return $this->redirectToRoute('voyageur_show', array('id' => $voyageur->getId()));
        }

        return $this->render('voyageur/new.html.twig', array(
            'voyageur' => $voyageur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a voyageur entity.
     *
     */
    public function showAction(voyageur $voyageur)
    {
        $deleteForm = $this->createDeleteForm($voyageur);

        return $this->render('voyageur/show.html.twig', array(
            'voyageur' => $voyageur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing voyageur entity.
     *
     */
    public function editAction(Request $request, voyageur $voyageur)
    {
        $deleteForm = $this->createDeleteForm($voyageur);
        $editForm = $this->createForm('VolBundle\Form\voyageurType', $voyageur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('voyageur_edit', array('id' => $voyageur->getId()));
        }

        return $this->render('voyageur/edit.html.twig', array(
            'voyageur' => $voyageur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a voyageur entity.
     *
     */
    public function deleteAction(Request $request, voyageur $voyageur)
    {
        $form = $this->createDeleteForm($voyageur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($voyageur);
            $em->flush();
        }

        return $this->redirectToRoute('voyageur_index');
    }

    /**
     * Creates a form to delete a voyageur entity.
     *
     * @param voyageur $voyageur The voyageur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(voyageur $voyageur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voyageur_delete', array('id' => $voyageur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	
	
	
}
