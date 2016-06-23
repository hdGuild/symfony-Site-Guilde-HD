<?php

namespace GHD\HellUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HellUserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GHDHellUserBundle:HellUser:index.html.twig', array('name' => $name));
    }
}
