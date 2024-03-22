<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TitleController extends Controller
{
    /**
     * @Route("/", name="title_index")
     * @Template("")     
     */
    public function indexAction()
    {

        return array();
    }
    
}
