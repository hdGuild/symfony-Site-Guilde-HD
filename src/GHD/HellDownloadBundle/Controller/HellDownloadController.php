<?php

namespace GHD\HellDownloadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HellDownloadController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GHDHellDownloadBundle:HellDownload:index.html.twig', array('name' => $name));
    }
}
