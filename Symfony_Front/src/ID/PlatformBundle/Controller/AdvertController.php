<?php

// src/ID/PlatformBundle/Controller/AdvertController.php

namespace ID\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy;

class AdvertController extends Controller
{

    public function indexAction()
    {
        $annonce=$this->getDoctrine()->getManager()->getRepository('IDOfferBundle:Offer')->findAll();

        return $this->render('IDPlatformBundle:Advert:index.html.twig',
            array('annonce' => $annonce));
    }

}