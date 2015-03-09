<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }


    /*
     * A
     */

    /*
     * B
     */

    /**
     * @Route("/ciagle_pada.html", name="ciagle-pada")
     */
    public function  ciaglePadaAction()
    {
        return $this->render('default/ciagle_pada.html.twig');
    }

    /*
     * D
     */

    /**
     * @Route("/Dreamer.html", name="Dreamer")
     */
    public function DreamerAction()
    {
        return $this->render('default/Dreamer.html.twig');
    }
    
    /*
     * E
     */

    /*
     * F
     */

    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */
    /**
    * @Route("/Iridescent.html", name="iridescent")
    */
    public function iridescentAction()
    {
       return $this->render('default/Iridescent.html.twig');
    }
     /**
     * @Route("/juvenile.html", name="juvenile")
     */
    public function juvenileAction()
    {
        return $this->render('default/juvenile.html.twig');
    }

    /*
     * K
     */

    /*
     * L
     */
    /**
    * @Route("/lato.html", name="lato")
    */
    public function latoAction()
    {
    return $this->render('default/lato.html.twig');
    }

    /*
     * M
     */
    /**
     * @Route("/piosenka-mury.html", name="piosenka-mury")
     */
    public function piosenkaMuryAction()
    {
        return $this->render('default/piosenka-mury.html.twig');
    }

    /*
     * N
     */

    /**
     * @Route("/noMoreMrNiceGuy.html", name="noMoreMrNiceGuy")
     */
    public function noMoreMrNiceGuyAction()
    {
        return $this->render('default/noMoreMrNiceGuy.html.twig');
    }
    
    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

      /**
     * @Route("/Stop.html", name="Stop")
     */
    public function StopAction()
    {
        return $this->render('default/Stop.html.twig');
    }

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}
