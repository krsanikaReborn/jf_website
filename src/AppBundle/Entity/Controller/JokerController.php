<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JokerController extends Controller
{
    /**
     * @Route("/", name="joker_index")
     * @Template("")     
     */
    public function indexAction()
    {        
        return array();
    }
        
    
}
