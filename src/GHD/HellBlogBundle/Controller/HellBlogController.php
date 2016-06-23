<?php

namespace GHD\HellBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HellBlogController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GHDHellBlogBundle:HellBlog:index.html.twig', array('name' => $name));
    }

    public function homeAction($name)
    {
        return $this->render('GHDHellBlogBundle:HellBlog:home.html.twig', array('name' => $name));
    }
}
