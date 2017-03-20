<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function loginAction(Request $request){

    	
    	//Authentication 
    	$authenticationUtils = $this->get("security.authentication_utils");

    	
    	$error = $authenticationUtils->getLastAuthenticationError();
    	$lastUsername = $authenticationUtils->getLastUsername();

    	return $this->render(
    		"BackendBundle:User:login.html.twig", array(
    			"error" => $error,
    			"last_username" => $lastUsername
    	));

    }

    public function listAction(Request $request){

        return $this->render("BackendBundle:User:index.html.twig");

    }

    public function createAction(Request $request){

        return $this->render("BackendBundle:User:create.html.twig");

    }
}
