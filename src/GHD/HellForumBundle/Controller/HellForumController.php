<?php

namespace GHD\HellForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HellForumController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GHDHellForumBundle:HellForum:index.html.twig', array('name' => $name));
    }
}
