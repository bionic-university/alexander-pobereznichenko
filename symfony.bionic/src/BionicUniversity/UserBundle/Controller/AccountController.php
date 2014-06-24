<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/15/14
 * Time: 2:39 PM
 */

namespace BionicUniversity\UserBundle\Controller;

use BionicUniversity\UserBundle\Entity\Role;
use BionicUniversity\UserBundle\Form\Model\Registration;
use BionicUniversity\UserBundle\Form\Type\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AccountController extends Controller
{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
            'BionicUniversityUserBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $factory = $this->get('security.encoder_factory');
            $user = $form->getData()->getUser();
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
            $user->setPassword($password);

            $role = $this->getDoctrine()->getRepository('BionicUniversityUserBundle:Role')->find(2);
            $user->addRole($role);

            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('account_register'));
        }

        return $this->render(
            'BionicUniversityUserBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }
}