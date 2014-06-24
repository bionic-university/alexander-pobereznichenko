<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/22/14
 * Time: 9:52 AM
 */

namespace BionicUniversity\ProjectBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BionicUniversityProject/Admin/index.html.twig');
    }
} 