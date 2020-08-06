<?php
namespace  AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class VolsController extends Controller
{
    /**
     * @Route("/", name="vols ")
     */
    public function volsAction(Request $request)
    {
        return $this->render('vols/index.html.twig');

    }

}
