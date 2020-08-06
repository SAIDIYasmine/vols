<?php

namespace VolBundle\Controller;

use VolBundle\Entity\billet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Billet controller.
 *
 */
class billetController extends Controller
{	
	

    /**
     * Lists all billet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $billets = $em->getRepository('VolBundle:billet')->findAll();

        return $this->render('billet/index.html.twig', array(
            'billets' => $billets,
        ));
    }

    /**
     * Creates a new billet entity.
     *
     */
    public function newAction(Request $request)
    {
        $billet = new Billet();
        $form = $this->createForm('VolBundle\Form\billetType', $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($billet);
            $em->flush();

            return $this->redirectToRoute('billet_show', array('id' => $billet->getId()));
        }

        return $this->render('billet/new.html.twig', array(
            'billet' => $billet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a billet entity.
     *
     */
    public function showAction(billet $billet)
    {
        $deleteForm = $this->createDeleteForm($billet);

        return $this->render('billet/show.html.twig', array(
            'billet' => $billet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing billet entity.
     *
     */
    public function editAction(Request $request, billet $billet)
    {
        $deleteForm = $this->createDeleteForm($billet);
        $editForm = $this->createForm('VolBundle\Form\billetType', $billet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('billet_edit', array('id' => $billet->getId()));
        }

        return $this->render('billet/edit.html.twig', array(
            'billet' => $billet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a billet entity.
     *
     */
    public function deleteAction(Request $request, billet $billet)
    {
        $form = $this->createDeleteForm($billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($billet);
            $em->flush();
        }

        return $this->redirectToRoute('billet_index');
    }

    /**
     * Creates a form to delete a billet entity.
     *
     * @param billet $billet The billet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(billet $billet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('billet_delete', array('id' => $billet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	
	public function affectAction(int $id)
    {
		
        $em = $this->getDoctrine()->getManager();

        $voyageurs = $em->getRepository('VolBundle:voyageur')->findAll();

        return $this->render('billet/affect.html.twig', array(
            'voyageurs' => $voyageurs,'id'=>$id,
        ));
    }
	
	
	public function affectedAction(int $idv,int $idb)
    {
		$em = $this->getDoctrine()->getManager();
        $billet = $em->getRepository('VolBundle:billet')->find($idb);
		$voyageur = $em->getRepository('VolBundle:voyageur')->find($idv);
		if($voyageur!=null){

		$one_v=$voyageur;
		$billet->setVoyageur($one_v);
        $em->flush();
		}
        return $this->redirectToRoute('billet_index');
        

        
    }
}
