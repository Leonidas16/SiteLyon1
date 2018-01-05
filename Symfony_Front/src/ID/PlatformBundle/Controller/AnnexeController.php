<?php

// src/ID/PlatformBundle/Controller/AdvertController.php

namespace ID\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use ID\PlatformBundle\Entity\Task;



class AnnexeController extends Controller
{

    public function reglagesAction()
    {
        return $this->render('IDPlatformBundle:Annexe:reglages.html.twig');

    }


    public function contactAction()
    {
        return $this->render('IDPlatformBundle:Annexe:contact.html.twig');

    }

    public function infoAction()
    {
        return $this->render('IDPlatformBundle:Annexe:infos.html.twig');

    }
}