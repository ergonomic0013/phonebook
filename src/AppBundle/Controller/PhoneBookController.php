<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\PhoneBook;

class PhoneBookController extends FOSRestController
{
    public function getAllAction()
    {
        $contact = $this->getDoctrine()->getRepository(PhoneBook::class)->findAll();

        $view = $this->view($contact, 200);
        return $this->handleView($view);
    }

    public function getAction($name)
    {       
        $em = $this->getDoctrine()->getManager();
        $contact = $this->getDoctrine()->getRepository(PhoneBook::class)->findOneBy(['firstName' => $name]);

        if ($contact == null) {
            return new View('There are no contact exist', Response::HTTP_NOT_FOUND);
        }
        $view = $this->view($contact, 200);
        return $this->handleView($view);
    }

    public function postAction(Request $request)
    {
        //  /api/users?firstname=misha&lastname=nemchenko&phonenumber1=0952940468&phonenumber2=&address=&email=ergonomic@ukr.net&contactgroup=user&other=bla
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

    public function putAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = $this->getDoctrine()->getRepository(PhoneBook::class)->find($id);

        if ($contact == null) {
            return new View('There are no contact exist', Response::HTTP_NOT_FOUND);
        }

        $data = $request->query->all();
        $contact->setFirstName($data['firstname']);
        $contact->setLastName($data['lastname']);
        $contact->setPhoneNumber1($data['phonenumber1']);
        $contact->setPhoneNumber2($data['phonenumber2']);
        $contact->setAddress($data['address']);
        $contact->setEmail($data['email']);
        $contact->setContactGroup($data['contactgroup']);
        $contact->setOther($data['other']);

        $em->flush();

        $view = $this->view('Contact updated!', 200);
        return $this->handleView($view);
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = $this->getDoctrine()->getRepository(PhoneBook::class)->find($id);
        
        if ($contact == null) {
            return new View('There are no contact exist', Response::HTTP_NOT_FOUND);
        }

        $em->remove($contact);
        $em->flush();

        $view = $this->view('Contact deleted', 200);
        return $this->handleView($view);        
    }

}
