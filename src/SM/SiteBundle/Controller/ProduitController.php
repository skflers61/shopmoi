<?php


namespace SM\SiteBundle\Controller;

// N'oubliez pas ces use
use SM\SiteBundle\Entity\ProduitImages;
use SM\SiteBundle\Entity\Produit;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
  public function produitAction($id)
  {
    /*
            // Création de l'entité Image
              echo("3");
            $image = new ProduitImages();
            echo("3");
            $image->setResolution("231x383");
            $image->setAlt('Sweat Parka');
            echo("3");
            $image->setAdresse('bundles/smsite/images/article1/big4.jpg');


            // Création de l'entité Produit
              echo("111111");
            $produit = new Produit();
            $produit->setDescription("Sweat Parka");
            $produit->setModele("Felpa jogging");
            $produit->setPrix(59.99);
            $produit->setNbVente(999);
            $produit->setQteEnStock(56);

              echo("2");

              echo("3");
            // On lie l'image à l'annonce
            $image->setProduit($produit);
              echo("4");
            // On récupère l'EntityManager
            $em = $this->getDoctrine()->getManager();
              echo("5");
            // Étape 1 : On « persiste » l'entité
            $em->persist($image);
              echo("6");
            // Étape 1 bis : si on n'avait pas défini le cascade={"persist"},
            // on devrait persister à la main l'entité $image
            // $em->persist($image);

            // Étape 2 : On déclenche l'enregistrement
            $em->flush();
            echo("7");
    */
        //les produits
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('SMSiteBundle:Produit');

        $produit = $repository->find($id);
        
        
        //les images
        $repository2 = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('SMSiteBundle:ProduitImages');
        
        $listImages = $repository2->findBy(
            array('produit' => $id), // Critere
            null,        // Tri
            null,        // Limite
            null         // Offset
        );
        //print_r($produit);
        //print_r($listImages);
    //affichage du template
    return $this->render('SMSiteBundle:Produit:produit.html.twig',array(
    'produit' => $produit,'images' => $listImages,
    ));
  }
}

?>