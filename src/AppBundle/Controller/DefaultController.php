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

    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */

    /*
     * N
     */

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

    /*
     * S
     */

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
