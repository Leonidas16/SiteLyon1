<?php

namespace ID\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function annonceAction()
    {
        $annonce=$this->getDoctrine()->getManager()->getRepository('IDOfferBundle:Offer')->findAll();

        return $this->render('IDOfferBundle:Default:annonce.html.twig',
                    array('annonce' => $annonce));
    }


    public function stageAction()
    {
        $stages=$this->getDoctrine()->getManager()->getRepository('IDOfferBundle:Stages')->findAll();

        return $this->render('IDOfferBundle:Default:stages.html.twig',
            array('stages' => $stages));
    }
}
