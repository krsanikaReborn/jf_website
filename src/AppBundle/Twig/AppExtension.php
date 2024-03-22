<?php
namespace AppBundle\Twig;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\SgkController;
use AppBundle\Controller\HauntedController;

class AppExtension extends \Twig_Extension {
    
    
    public function getName() {
        return 'app_extension';
    }
    
    //put your code here
    public function getFunctions() {        
        return array(
            'new1' => new \Twig_Function_Method($this, 'getSgk1Newest', array('is_safe'=> array('html'))),        
            'hauntedNEWST' => new \Twig_Function_Method($this, 'getHaunted', array('is_safe'=>array('html'))),
        );
    }
    
    public function getHaunted(){
        return HauntedController::hauntedNEWEST;
    }

    public function getSgk1Newest(){
        
        return SgkController::SGK1NEWEST;
    }
    
}
