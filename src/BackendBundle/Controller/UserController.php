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
}
