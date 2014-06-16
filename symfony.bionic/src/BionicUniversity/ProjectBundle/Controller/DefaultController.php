<?php

namespace BionicUniversity\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityProjectBundle:Default:index.html.twig');
    }
}
