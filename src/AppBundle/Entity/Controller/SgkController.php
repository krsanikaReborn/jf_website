<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SgkController extends Controller
{
    const SGK1NEWEST = 1;
    /**
     * @Route("/sgk/index", name="sgk_index")
     * @Template("")     
     */
    public function indexAction()
    {        
        return array();
    }
/**
     * @Route("/sgk/session", name="sgk_session")
     * @Template("")     
     */
    public function sessionAction()
    {
        return array();
    }
/**
     * @Route("/sgk/header", name="sgk_header")
     * @Template("")     
     */
    public function headerAction()
    {
        
        return array();
    }    
    /**
     * @Route("/sgk/world", name="sgk_world")
     * @Template("")     
     */
    public function worldAction()
    {
        
        return array();
    }
      /**
     * @Route("/sgk/character", name="sgk_character")
     * @Template("")     
     */
    public function characterAction()
    {
        return array();
    }
      /**
     * @Route("/sgk/staff", name="sgk_staff")
     * @Template("")     
     */
    public function staffAction()
    {
        return array();
    }
    /**
     * @Route("/sgk/download", name="sgk_download")
     * @Template("")     
     */
    public function downloadAction()
    {
        return array();
    }
    /**
     * @Route("/sgk/season/sgk00", name="sgk00")
     * @Template("AppBundle:Sgk/Season:sgk00.html.twig")     
     */
    public function sgk00Action()/** 설월화 0 세션링크 */
    {
        return array();
    }    
    /**
     * @Route("/sgk/season/sgk01/{chapter}", name="sgk01")
     * @Template("AppBundle:Sgk/Season:sgk01.html.twig")     
     */
    public function sgk01Action($chapter)/** 설월화 1 세션링크 */
    {
        $chap = sprintf('%02d', $chapter);
        return array("chapter"=>$chap);
    }
    /**
     * @Route("/sgk/season/sgk01/0/view", name="sgk01_00_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_00_view.html.twig")     
     */
    public function sgk01_00_viewAction()/** 설월화 1 세션 0화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }      
    /**
     * @Route("/sgk/season/sgk01/1/view", name="sgk01_01_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_01_view.html.twig")     
     */
    public function sgk01_01_viewAction()/** 설월화 1 세션 1화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }
    /**
     * @Route("/sgk/season/sgk01/2/view", name="sgk01_02_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_02_view.html.twig")     
     */
    public function sgk01_02_viewAction()/** 설월화 1 세션 2화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }        
    /**
     * @Route("/sgk/season/sgk01/3/view", name="sgk01_03_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_03_view.html.twig")     
     */
    public function sgk01_03_viewAction()/** 설월화 1 세션 3화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }            
    /**
     * @Route("/sgk/season/sgk01/4/view/{blah}", name="sgk01_04_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_04_view.html.twig")     
     */
    public function sgk01_04_viewAction($blah)/** 설월화 1 세션 4화 본문링크 */
    {
       
    /**$part = sprintf('%03d', $line);*/
//        return array(/**"line"=>$part*/);
        $blah = "01";
        return $this->render("AppBundle:Sgk/Season/Sgk1:sgk".$blah."_view.html.twig");
    }            
    /**
     * @Route("/sgk/season/sgk01/5/view", name="sgk01_05_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_05_view.html.twig")     
     */
    public function sgk01_05_viewAction()/** 설월화 1 세션 5화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }            
    /**
     * @Route("/sgk/season/sgk01/6/view", name="sgk01_06_view")
     * @Template("AppBundle:Sgk/Season/Sgk1:sgk01_06_view.html.twig")     
     */
    public function sgk01_06_viewAction()/** 설월화 1 세션 6화 본문링크 */
    {
    /**$part = sprintf('%03d', $line);*/
        return array(/**"line"=>$part*/);
    }            
    
    
    /**
     * @Route("/sgk/season/sgk02", name="sgk02")
     * @Template("AppBundle:Sgk/Season:sgk02.html.twig")     
     */
    public function sgk02Action()/** 설월화 2 세션링크 */
    {
        return array();
    }
    /**
     * @Route("/sgk/season/sgk03", name="sgk03")
     * @Template("AppBundle:Sgk/Season:sgk03.html.twig")     
     */
    public function sgk03Action()/** 설월화 3 세션링크 */
    {
        return array();
    }
    /**
     * @Route("/sgk/season/sgk04", name="sgk04")
     * @Template("AppBundle:Sgk/Season:sgk04.html.twig")     
     */
    public function sgk04Action()/** 설월화 4 세션링크 */
    {
        return array();
    }   
    /**
     * @Route("/sgk/season/sgk05", name="sgk05")
     * @Template("AppBundle:Sgk/Season:sgk05.html.twig")     
     */
    public function sgk05Action()/** 설월화 2 외전(Sgk_5) 세션링크 */
    {
        return array();
    }
    /**
     * @Route("/sgk/season/sgk06", name="sgk06")
     * @Template("AppBundle:Sgk/Season:sgk06.html.twig")     
     */
    public function sgk06Action()/** 요정의시각(Sgk_6) 세션링크 */
    {

        return array();
    }        
    
    
}
