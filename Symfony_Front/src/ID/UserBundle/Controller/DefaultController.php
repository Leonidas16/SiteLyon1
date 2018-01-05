<?php

namespace ID\UserBundle\Controller;

use FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer;
use FOS\UserBundle\FOSUserBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\User\UserProviderInterface;


class DefaultController extends Controller
{

    public function loginAndRegisterAction(Request $request)
    {

        $login_response = $this->forward ('FOSUserBundle:Security:login', array($request));
        $register_response = $this->forward ('FOSUserBundle:Registration:register', array($request));

        return $this->render ('IDUserBundle:Default:index.html.twig', array(
            'login' => $login_response->getContent (),
            'register' => $register_response->getContent (),
        ));
    }

    public function CASAction(Request $request)
    {
        $target = urlencode($this->getParameter('cas_login_target'));
        $url = 'https://'.$this->getParameter('cas_host') . '/login?service=';

        /*// Full Hostname of your CAS Server
        $cas_host = 'cas.univ-lyon1.fr';
        // Context of the CAS Server
        $cas_context = 'cas';
        // Port of your CAS server. Normally for a https server it's 443
        $cas_port = 443;
        // Enable debugging
        \phpCAS::setDebug();
        // Enable verbose error messages. Disable in production!
        \phpCAS::setVerbose(true);
        // Initialize phpCAS
        \phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);

        // For quick testing you can disable SSL validation of the CAS server.
        // THIS SETTING IS NOT RECOMMENDED FOR PRODUCTION.
        // VALIDATING THE CAS SERVER IS CRUCIAL TO THE SECURITY OF THE CAS PROTOCOL!
        \phpCAS::setNoCasServerValidation();
        // force CAS authentication
        \phpCAS::forceAuthentication();*/


        // Extrait le user 'admin" de la base de données
        $user = $this->getDoctrine()->getManager()->getRepository("IDUserBundle:User")->findOneBy(array('username' => "admin"));

        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);

        // Si le firewall est autre que main
        // $this->get('session')->set('_security_XXXFIREWALLNAMEXXX', serialize($token));
        $this->get('session')->set('_security_main', serialize($token));

        // Login manuellement
        $event = new InteractiveLoginEvent($request, $token);
        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);


        return $this->redirect($url . $target . 'index');
    }


    public function forceAction() {

        if (!isset($_SESSION)) {
            session_start();
        }

        session_destroy();

        return $this->redirect($this->generateUrl('page_index'));
    }


}
