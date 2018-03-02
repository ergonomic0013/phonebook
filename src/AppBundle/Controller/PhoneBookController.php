<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\PhoneBook;

class PhoneBookController extends FOSRestController
{
    public function getAction(Request $request)
    {
        //http://vantino/web/api/get?firstName=misha&lastName=&phoneNumber1=&phoneNumber2=&address=&email=&contactgroup=&other=
        $data = $request->query->all(); 

        foreach ($data as $dk => $dv) {
            $contact = $this->getDoctrine()->getRepository(PhoneBook::class)->findOneBy([$dk => $dv]);
            if ($dv){
                break;
            }
        }
       
        if ($contact == null) {
            return new View('There are no contact exist', Response::HTTP_NOT_FOUND);
        }

        $view = $this->view($contact, 200);
        return $this->handleView($view);
    }

    public function postAction(Request $request)
    {
        //http://vantino/web/api/post?firstname=misha&lastname=nemchenko&phonenumber1=0952940468&phonenumber2=&address=&email=ergonomic@ukr.net&contactgroup=user&other=bla
        $data = $request->query->all(); 
        $em = $this->getDoctrine()->getManager();

        $PhoneBook = new PhoneBook();
        $PhoneBook->setFirstName($data['firstname']);
        $PhoneBook->setLastName($data['lastname']);
        $PhoneBook->setPhoneNumber1($data['phonenumber1']);
        $PhoneBook->setPhoneNumber2($data['phonenumber2']);
        $PhoneBook->setAddress($data['address']);
        $PhoneBook->setEmail($data['email']);
        $PhoneBook->setContactGroup($data['contactgroup']);
        $PhoneBook->setOther($data['other']);

        $em->persist($PhoneBook);
        $em->flush();

        $view = $this->view("Contact saved", 200);
        return $this->handleView($view);
    }

    public function putAction()
    {
        

        $view = $this->view($users, 200);
        return $this->handleView($view);
    }

    public function deleteAction()
    {


        $view = $this->view($users, 200);
        return $this->handleView($view);        
    }

}
