<?php

namespace GHD\HellWikiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HellWikiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GHDHellWikiBundle:HellWiki:index.html.twig', array('name' => $name));
    }
}
