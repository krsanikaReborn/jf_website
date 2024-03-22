<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class HauntedController extends BaseController
{
    const hauntedNEWEST = 22;
    /**
     * @Route("/haunted", name="haunted_main")
     * @Template("")     
     */
    public function mainAction()
    {        
        return array();
    }
    /**
     * @Route("/haunted/comics", name="haunted_comics")
     * @Template("")     
     */
    public function comicsAction()
    {
        return array();
    }
    
    public function getComicTail() {
        $url = $this->getUrlName();
        $current = sprintf("%03d",$url);
        
        return $current;
    }
    
    public function getUrlName(){
        $url = substr($_SERVER['REQUEST_URI'], -3);
        $routeTail = (int)$url;

        return $routeTail;
    }

    /**
     * @Route("/haunted/before", name="comcicBefore")
     * @Template("")     
     */
    public function beforeAction()
    {
        $url = $this->getRequest()->get("url");        
        $urlTail = $url-1;
        $before = sprintf("%03d",$urlTail);
        $msg = "이전편이 존재하지 않습니다.";
        if($before > 0 ){
            $response = new Response(json_encode($this->generateUrl("comic_$before")));
            $response->headers->set('Content-Type', 'application/json');
            return $response;            
        }else if($before <= 0){
            $response = new Response(json_encode($msg));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        };
    }   
    /**
     * @Route("/haunted/after", name="comcicAfter")
     * @Template("")     
     */
    public function afterAction()            
    {
        $url = $this->getRequest()->get("url");
        $urlTail = $url+1;
        $after = sprintf("%03d",$urlTail);
        $new = self::hauntedNEWEST;
        $msg = "다음편이 존재하지 않습니다.";
        if($after <= $new ){
            $response = new Response(json_encode($this->generateUrl("comic_$after")));
            $response->headers->set('Content-Type', 'application/json');
            return $response;            
        }else if($after > $new){
            $response = new Response(json_encode($msg));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        };
    }   

    /**
     * @Route("/haunted/comics/comic001", name="comic_001")
     * @Template("AppBundle:Haunted/Comic:comic001.html.twig")     
     */
    public function comic_001Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic002", name="comic_002")
     * @Template("AppBundle:Haunted/Comic:comic002.html.twig")     
     */
    public function comic_002Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }     
    /**
     * @Route("/haunted/comics/comic003", name="comic_003")
     * @Template("AppBundle:Haunted/Comic:comic003.html.twig")     
     */
    public function comic_003Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic004", name="comic_004")
     * @Template("AppBundle:Haunted/Comic:comic004.html.twig")     
     */
    public function comic_004Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }            
    /**
     * @Route("/haunted/comics/comic005", name="comic_005")
     * @Template("AppBundle:Haunted/Comic:comic005.html.twig")     
     */
    public function comic_005Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic006", name="comic_006")
     * @Template("AppBundle:Haunted/Comic:comic006.html.twig")     
     */
    public function comic_006Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }     
    /**
     * @Route("/haunted/comics/comic007", name="comic_007")
     * @Template("AppBundle:Haunted/Comic:comic007.html.twig")     
     */
    public function comic_007Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic008", name="comic_008")
     * @Template("AppBundle:Haunted/Comic:comic008.html.twig")     
     */
    public function comic_008Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }          
    /**
     * @Route("/haunted/comics/comic009", name="comic_009")
     * @Template("AppBundle:Haunted/Comic:comic009.html.twig")     
     */
    public function comic_009Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }    
    /**
     * @Route("/haunted/comics/comic010", name="comic_010")
     * @Template("AppBundle:Haunted/Comic:comic010.html.twig")     
     */
    public function comic_010Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }    
    /**
     * @Route("/haunted/comics/comic011", name="comic_011")
     * @Template("AppBundle:Haunted/Comic:comic011.html.twig")     
     */
    public function comic_011Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic012", name="comic_012")
     * @Template("AppBundle:Haunted/Comic:comic012.html.twig")     
     */
    public function comic_012Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic013", name="comic_013")
     * @Template("AppBundle:Haunted/Comic:comic013.html.twig")     
     */
    public function comic_013Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
      /**
     * @Route("/haunted/comics/comic014", name="comic_014")
     * @Template("AppBundle:Haunted/Comic:comic014.html.twig")     
     */
    public function comic_014Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }            
    /**
     * @Route("/haunted/comics/comic015", name="comic_015")
     * @Template("AppBundle:Haunted/Comic:comic015.html.twig")     
     */
    public function comic_015Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic016", name="comic_016")
     * @Template("AppBundle:Haunted/Comic:comic016.html.twig")     
     */
    public function comic_016Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }     
    /**
     * @Route("/haunted/comics/comic017", name="comic_017")
     * @Template("AppBundle:Haunted/Comic:comic017.html.twig")     
     */
    public function comic_017Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic018", name="comic_018")
     * @Template("AppBundle:Haunted/Comic:comic018.html.twig")     
     */
    public function comic_018Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }          
    /**
     * @Route("/haunted/comics/comic019", name="comic_019")
     * @Template("AppBundle:Haunted/Comic:comic019.html.twig")     
     */
    public function comic_019Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }    
    /**
     * @Route("/haunted/comics/comic020", name="comic_020")
     * @Template("AppBundle:Haunted/Comic:comic020.html.twig")     
     */
    public function comic_020Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }    
    /**
     * @Route("/haunted/comics/comic021", name="comic_021")
     * @Template("AppBundle:Haunted/Comic:comic021.html.twig")     
     */
    public function comic_021Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic022", name="comic_022")
     * @Template("AppBundle:Haunted/Comic:comic022.html.twig")     
     */
    public function comic_022Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();        
        return array("url"=> $url, "tail"=>$tail);
    }        
    /**
     * @Route("/haunted/comics/comic023", name="comic_023")
     * @Template("AppBundle:Haunted/Comic:comic023.html.twig")     
     */
    public function comic_023Action()
    {
        $url = $this ->getUrlName();
        $tail = $this->getComicTail();
        
        return array("url"=> $url, "tail"=>$tail);
    }      

    
 }
