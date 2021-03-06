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
	 * @Route("/bal_wszystkich_swietych.html", name="bal_wszystkich_swietych")
	 */
	public function balwszystkichswietychAction()
	{
	    return $this->render('default/bal_wszystkich_swietych.html.twig');
	}
    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }
    /**
     * @Route("/while.html", name="while")
     */
    public function whileAction()
    {
        return $this->render('default/while.html.twig');
    }
    
    /**
    * @Route("/wciaz-bardziej-obcy.html", name="wciaz-bardziej-obcy")
    */
    public function WciazBardziejObcyAction()
    {
        return $this->render('default/wciaz-bardziej-obcy.html.twig');
    }
    
        /**
 * @Route("/alabaster.html", name="alabaster")
 */
public function  alabasterAction()
{
    return $this->render('default/alabaster.html.twig');
}
    /*
     * A
     */
	/**
	 * @Route("/all_for_love.html", name="all_for_love")
	 */
	public function AllForLoveAction()
	{
	    return $this->render('default/all_for_love.html.twig');
	}
        

    /**
     * @Route("/autobiografia.html", name="autobiografia")
     */
    public function  autobiografiaAction()
    {
        return $this->render('default/autobiografia.html.twig');
    }
     /**
     * @Route("/Words_as_weapons.html", name="Words_as_weapons")
     */
    public function  Words_as_weaponsAction()
    {
        return $this->render('default/Words_as_weapons.html.twig');
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
     * @Route("/biber.html", name="biber")
     */
    public function biberAction()
    {
        return $this->render('default/biber.html.twig');
    }
    
    /**
     * @Route("/hey-now.html", name="hey-now")
     */
    public function heynowAction()
    {
        return $this->render('default/hey-now.html.twig');
    }
    
    
    /**
     * @Route("/ciagle_pada.html", name="ciagle-pada")
     */
    public function  ciaglePadaAction()
    {
        return $this->render('default/ciagle_pada.html.twig');
    }
    /**
     * @Route("/Truth.html", name="Truth")
     */
    public function  TruthAction()
    {
        return $this->render('default/Truth.html.twig');
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
    
    /**
     * @Route("/deja-vu.html", name="deja-vu")
     */
    public function dejaVuAction()
    {
        return $this->render('default/deja-vu.html.twig');
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
    
    
     /**
     * @Route("/plona-lasy.html", name="plona-lasy")
     */
    public function plonaAction()
    {
        return $this->render('default/plona-lasy.html.twig');
    }
    
    /*
     * F
     */
    /**
     * @Route("/riotka.html", name="riotka")
     */
    public function riotkaAction()
    {
        return $this->render('default/riotka.html.twig');
    }

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
    
    /**
     * @Route("/kiler.html", name="kiler")
     */
    public function kilerAction()
    {
        return $this->render('default/kiler.html.twig');
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
  
// W pliku src/AppBundle/Controler/DefaultControler.php
// dodajemy metodę


/**
 * @Route("/12stopni.html", name="12stopni")
 */
public function stopniAction()
{
    return $this->render('default/12stopni.html.twig');
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
    
    /**
     * @Route("/lato-jak-ze-snu.html", name="lato-jak-ze-snu")
     */
    public function  LatoJakZeSnuAction()
    {
        return $this->render('default/lato-jak-ze-snu.html.twig');
    }
    
    /**
    * @Route("/maybe.html", name="maybe")
    */
    public function maybeAction()
    {
    return $this->render('default/maybe.html.twig');
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
    /**
     * @Route("/piosenka-miasto-budzi-sie.html", name="piosenka-miasto-budzi-sie")
     */
    public function piosenkaMiastoBudziSieAction()
    {
        return $this->render('default/piosenka-miasto-budzi-sie.html.twig');
    }
    /**
     * @Route("/piosenka-maps.html", name="piosenka-maps")
     */
    public function piosenkaMapsAction()
    {
        return $this->render('default/piosenka-maps.html.twig');
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
      
      /**
     * @Route("/piosenka-powiedz.html", name="piosenka-powiedz")
     */
      public function  PowiedzAction()
      {
         return $this->render('default/piosenka-powiedz.html.twig');
      }
      
      /**
       * 
     * @Route("/Perfect.html", name="Perfect")
     */
    public function PerfectAction()
    {
        return $this->render('default/Perfect.html.twig');
    }
     /**
       * 
     * @Route("/Power_Shift.html", name="Power_Shift")
     */
    public function Power_ShiftAction()
    {
        return $this->render('default/Power_Shift.html.twig');
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
      
     /**
     * @Route("/dziwny-jest-ten-swiat.html", name="dziwny-jest-ten-swiat")
     */
      public function  dziwnyJestTenSwiatAction()
      {
         return $this->render('default/dziwny-jest-ten-swiat.html.twig');

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
     * @Route("/nasza_noc.html", name="nasza_noc")
     */
    public function nasza_nocAction()
    {
        return $this->render('default/nasza_noc.html.twig');
    }
    
    /**
    * @Route("/lejde.html", name="lejde")
    */
    public function lejdeAction()
    {
        return $this->render('default/lejde.html.twig');
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
    * @Route("/Stokrotka-rosla.html", name="Stokrotka rosla")
    */
    public function  Stokrotkarosla()
    {
        return $this->render('default/Stokrotka-rosla.html.twig');
    }

	/**
     * @Route("/stay-too-long.html", name="stay-too-long")
     */
    public function stayTooLongAction() {
        return $this->render('default/stay-too-long.html.twig');
    }
    
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
    /**
    * @Route("/hero.html", name="hero")
    */
    public function heroAction()
    {
        return $this->render('default/hero.html.twig');
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
     * @Route("/november-rain.html", name="november-rain")
     */
    public function novemberrainAction()
    {
        return $this->render('default/november-rain.html.twig');
    }

    /**
     * @Route("/nie-placz-ewka.html", name="nieplaczewka")
    */
    public function  nieplaczewkaAction()
    {
    return $this->render('default/nie-placz-ewka.html.twig');
    }
    
    /**
     * @Route("/nie-dokazuj.html", name="nie-dokazuj")
     */
    public function NieDokazujAction()
    {
        return $this->render('default/nie-dokazuj.html.twig');
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

/**
 * @Route("/Zapomnialem.html", name="Zapomnialem")
 */
public function  ZapomnialemAction()
{
    return $this->render('default/Zapomnialem.html.twig');
}
/*
 * polakwyjatkowy
 */
/**
 * @Route("/polak-wyjatkowy.html", name="polak-wyjatkowy")
 */
public function  polakwyjatkowyAction()
{
    return $this->render('default/polak-wyjatkowy.html.twig');
}

    /**
    * @Route("/what-i-ve-done.html", name="what-i-ve-done")
    */
   public function  WhatIveDoneAction()
   {
       return $this->render('default/what-i-ve-done.html.twig');
}

    /**
     * @Route("/kowarete-iku-sekai.html", name="kowarete-iku-sekai")
     */
     public function kowareteikusekaiAction()
     {
         return $this->render('default/kowarete-iku-sekai.html.twig');
     }
     
     /**
     * @Route("/ostatni-tabor.html", name="ostatni-tabor")
     */
     public function ostatniTaborAction()
     {
         return $this->render('default/ostatni-tabor.html.twig');
     }
     
     
    /*
     * ZD
     */
    /**
     * @Route("/na-co-komu.html", name="na-co-komu")
     */
    public function naCoKomuAction()
    {
        return $this->render('default/na-co-komu.html.twig');
    }
    /**
     * @Route("/Eachday.html", name="eachday")
     */
    public function EachdayAction()
    {
        return $this->render('default/Eachday.html.twig');
    }
    /**
     * @Route("/scarlett.html", name="scarlett")
     */
    public function scarlettAction()
    {
        return $this->render('default/scarlett.html.twig');
    }
     /*
     * Dont
     */
   /**
     * @Route("/dontdream.html", name="dontdream")
     */
    public function dontdreamAction()
    {
        return $this->render('default/dontdream.html.twig');
    }
}