<?php

namespace VolsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VolsBundle\Entity\voyageur;
use VolsBundle\Form\voyageurType;

class VoyageurController extends Controller
{
    public function ajoutVoyageurAction(Request $request)
    {
        $voyageur=new voyageur();
        $form=$this->createForm(voyageurType::class,$voyageur);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $cn=$this->getDoctrine()->getManager();
            $cn->persist($voyageur);
            $cn->flush();
            return $this->redirectToRoute('vols_afficheVoyageur');
        }
        return $this->render("@Vols/Voyageur/ajoutV.html.twig",array('form'=>$form->createView()));

    }
    public function afficheVoyageurAction()
    {
        $cn=$this->getDoctrine()->getManager();
        $voyageur=$cn->getRepository("VolsBundle:voyageur")->findAll();
        return $this->render("@Vols/Voyageur/AfficheV.html.twig",array('voyageur'=>$voyageur));
    }
    public function afficheBilletAction()
    {
        $cn=$this->getDoctrine()->getManager();
        $billet=$cn->getRepository("VolsBundle:billet")->findAll();
        return $this->render("@Vols/Billet/AfficheB.html.twig",array('billet'=>$billet));
    }

    public function supprimerBilletAction($id)
    {
        $cn=$this->getDoctrine()->getManager();
        $billet=$cn->getRepository("VolsBundle:billet")->find($id);
        $cn->remove($billet);
        $cn->flush();
        return $this->redirectToRoute('vols_afficheBillet');

    }
}
