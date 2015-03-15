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

    /**
     * @Route("/autobiografia.html", name="autobiografia")
     */
    public function  autobiografiaAction()
    {
        return $this->render('default/autobiografia.html.twig');
    }
    /**
     * @Route("/melodia-ulotna.html", name="melodia-ulotna")
     */
    public function  melodiaUlotnaAction()
    {
        return $this->render('default/melodia-ulotna.html.twig');
    }

    /*
     * B
     */
    
    /**
     * @Route("/balkanica.html", name="balkanica")
     */
    public function balkanicaAction()
    {
        return $this->render('default/balkanica.html.twig');
    }
    /**
     * @Route("/ridingWithTheKing.html", name="Riding with the king")
     */
    public function ridingWithTheKingAction()
    {
        return $this->render('default/ridingWithTheKing.html.twig');
    }

    /**
     * @Route("/ciagle_pada.html", name="ciagle-pada")
     */
    public function  ciaglePadaAction()
    {
        return $this->render('default/ciagle_pada.html.twig');
    }
    /*
     * C
     */
/**
* @Route("/rozkwitaly-paki-bialych.html",name="rozkwitaly-paki-bialych")
*/
    public function rozkwitalypakiAction()
    {
        return $this->render('default/rozkwitaly-paki-bialych.html.twig');
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
    /**
     * @Route("/endless.html", name="Endless")
     */
    public function endlessAction()
    {
        return $this->render('default/endless.html.twig');
    }
    /*
     * F
     */

    /**
     * @Route("/bystra-woda.html", name="bystra-woda")
     */
    public function  bystraWodaAction()
    {
        return $this->render('default/bystra-woda.html.twig');
    }
    
    /**
    * @Route("/panie-janie.html", name="panie janie")
    */
    public function  panieJanieAction()
    {
        return $this->render('default/panie-janie.html.twig');
    }
    
    /*
     * G
     */
        /**
 * @Route("/goradol.html", name="goradol")
 */
public function goradolAction()
{
    return $this->render('default/goradol.html.twig');
}
    /*
     * H
     */
    
     /**
     * @Route("/we-are-the-champions.html", name="we-are-the-champions")
     */
    public function  wearethechampionsAction()
    {
        return $this->render('default/we-are-the-champions.html.twig');
    }

/**
     * @Route("/szklanka.html", name="szklanka")
     */
    public function  szklankaAction()
    {
        return $this->render('default/szklanka.html.twig');
    }
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

   
    /**
 * @Route("/korowody.html", name="korowody")
 */
public function korowodyAction()
{
   
    return $this->render('default/korowody.html.twig');
}
     
   /**
 * @Route("/kolorowe.html", name="kolorowe")
 */
public function koloroweAction()
{
   
    return $this->render('default/kolorowe.html.twig');
}
    

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
    
    /**
     * @Route("/onajestzesnu.html", name="onajestzesnu")
     */
    public function onajestzesnuAction()
    {
        return $this->render('default/onajestzesnu.html.twig');
    }

    /*
     * P
     */
    
     /**
     * @Route("/pszczolka-maja.html", name="pszczolka-maja")
     */
      public function  pszczolkamajaAction()
      {
         return $this->render('default/pszczolka-maja.html.twig');
      }

    /*
     * Q
     */
      /**
     * @Route("/jolka.html", name="jolka")
     */
      public function  jolkaAction()
      {
         return $this->render('default/jolka.html.twig');
      }

    /*
     * R
     */
    
    /**
     * @Route("/rplayboys.html", name="rplayboys")
     */
    public function rplayboysAction()
    {
        return $this->render('default/rplayboys.html.twig');
    }
    
    /**
     * @Route("/Stop.html", name="Stop")
     */
    public function StopAction()
    {
        return $this->render('default/Stop.html.twig');
    }

    /**
     * S
     */

    /**
     * @Route("/cash-hurt.html", name="cash-hurt")
     */
    public function cashhurtAction() {
        return $this->render('default/cash-hurt.html.twig');
    }

    /**
     * @Route("/qotsa-first.html", name="qotsa-first")
     */
    public function qotsafirstAction() {
        return $this->render('default/qotsa-first.html.twig');
    }

    /*
     * T
     */

    /**
     * @Route("/dont-stop-believin.html", name="dont-stop-believin")
     */
    public function dontStopBelievinAction() {
        return $this->render('default/dont-stop-believin.html.twig');
    }


    /*
     * U
     */
    
    /**
     * @Route("/urke.html", name="urke")
     */
    public function urkeAction()
    {
        return $this->render('default/urke.html.twig');
    }
    
    /*
     * V
     */

    /**
     * @Route("/sen-o-victorii.html", name="sen-o-victorii")
     */
    public function senOVictoriiAction() {
        return $this->render('default/sen-o-victorii.html.twig');
    }

    /*
     * W
     */
/**
 * @Route("/whisky.html", name="whisky")
 */
public function  whiskyAction()
{
    return $this->render('default/whisky.html.twig');
}
    /*
     * X
     */
     /**
     * @Route("/beat-it.html", name="beat-it")
     */
      public function  beatItAction()
      {
         return $this->render('default/beat-it.html.twig');
      }
    /*
     * Y
     */

    /**
     * @Route("/nie-placz-ewka.html", name="nieplaczewka")
    */
    public function  nieplaczewkaAction()
    {
    return $this->render('default/nie-placz-ewka.html.twig');
    }

    /*
     * Z
     */
/**
 * @Route("/Senowarszawie.html", name="Senowarszawie")
 */
public function  SenowarszawieAction()
{
    return $this->render('default/Senowarszawie.html.twig');
}


}
