<?php

namespace SM\SiteBundle\Controller;

//use SM\SiteBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //les produits
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('SMSiteBundle:Produit');

        $listProduits = $repository->FindMeilleursVentes();
        
        
        //les images
        $repository2 = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('SMSiteBundle:ProduitImages');
        
        $listImages = $repository2->FindMeilleursVentes();
     
      /*  echo"listProduits:";
        var_dump($listProduits);
        echo"listImages:";
        var_dump($listImages);*/
        
        //affichage du template
        return $this->render('SMSiteBundle:Default:index.html.twig',array(
        'produits' => $listProduits,'images' => $listImages,
        ));
    }
    
  
}
