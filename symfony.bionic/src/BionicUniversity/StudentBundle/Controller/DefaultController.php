<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/20/14
 * Time: 5:28 PM
 */

namespace BionicUniversity\StudentBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityProjectBundle:Default:index.html.twig');
    }

} 