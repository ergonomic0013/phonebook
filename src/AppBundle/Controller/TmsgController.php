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
use AppBundle\Entity\Visitors;
use AppBundle\Entity\UTM_params;

class TmsgController extends FOSRestController{
	
    public function indexAction(Request $request){
        $data = $request->request->all(); 
        
        if(empty($data['cid']) || empty($data['vst']) || empty($data['url']) || 
            empty($data['url']) ||  empty($data['vst']['ip']) || empty($data['vst']['lg']) || 
            empty($data['vst']['rf']) ||  empty($data['vst']['ua'])){

            $view = $this->view('The input array is not completely filled', 400);
            return $this->handleView($view);
        }
    	else{
            $traking = new Traking_msg();
            $visitors = new Visitors();

            $traking->setCid($data['cid']);
            $traking->setTrk($data['trk']);
            $traking->setUrl($data['url']);
            $traking->setSid($data['sid']);
            $traking->setUid($data['uid']);
            $traking->setEndpoint('tmsg');

            $visitors->setIp($data['vst']['ip']);
            $visitors->setLg($data['vst']['lg']);
            $visitors->setRf($data['vst']['rf']);
            $visitors->setUa($data['vst']['ua']);

            $traking->setVisitors($visitors);

            $em = $this->getDoctrine()->getManager();
            $em->persist($visitors);
            $em->persist($traking);
            $em->flush();

            $view = $this->view('Data from request was successfully saved', 200);
            return $this->handleView($view);
        }
    }


    public function compress(){
        //code

    }

    public function decompress(){
        //code
    	
    }
}
