<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Traking_msg;

class SmsgController extends FOSRestController{

	public function indexAction(Request $request){
		$data = $request->request->all(); 
		
		
		if(empty($data['cid']) || empty($data['sid']) || empty($data['uid']) || empty($data['url'])){
			$view = $this->view('The input array is not completely filled', 400);
			return $this->handleView($view);
		}
		else{
			$traking = new Traking_msg();
			$traking->setCid($data['cid']);
			$traking->setSid($data['sid']);
			$traking->setUid($data['uid']);
			$traking->setUrl($data['url']);
			$traking->setEndpoint('smsg');
			$em = $this->getDoctrine()->getManager();
			$em->persist($traking);
			$em->flush();
			$view = $this->view('Data from request was successfully saved', 200);
			return $this->handleView($view);
		}
	}

}
