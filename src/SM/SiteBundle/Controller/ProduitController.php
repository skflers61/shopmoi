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
        
        //produits de la meme famille (couleurs diffenrentes)
        $produitfamilletemp = $repository->findBy(
           array('familleProduit' => $produit->getFamilleProduit()), // Critere
            null,        // Tri
            null,        // Limite
            null         // Offset     
        );
        
        //on supprime le produit courant (qui a la meme valeur pour la colonne familleProduit et donc 
        //qui est présent dans le tableau $produitfamilletemp
        $j = 0;
        for ($i = 0; $i < count($produitfamilletemp); $i++)
        {
            //le if permet d'exclure le produit courant de la liste des produits de la meme famille
            //on utilisera pour la suite le tableau $produitfamille
            if($produitfamilletemp[$i]->getId() != $id){
                $produitfamille[$j] = $produitfamilletemp[$i];
                $j++;
            }
            
        }
        
        //images des produits de la meme famille que le produit courant
        //on rempli notre tableau des images en fontion du nombre de produits dans le tableau $produitfamille
        if (isset($produitfamille) ){
            for ($i = 0; $i < count($produitfamille); $i++)
            {
                    $listImagesfamille[$i] = $repository2->findBy(
                        array('produit' => $produitfamille[$i]->getId()), // Critere
                        null,        // Tri
                        null,        // Limite
                        null         // Offset
                    );

            }
        }
        
        
        /*------------------------------------------------------------------------------------------*/
        //produits de la meme categorie que le produit courant
        $produitRecommandationtemp = $repository->findBy(
           array('categorie' => $produit->getCategorie()), // Critere
            null,        // Tri
            null,        // Limite
            null         // Offset     
        );
        
        //on supprime le produit courant (qui a la meme valeur pour la colonne familleProduit et donc 
        //qui est présent dans le tableau $produitfamilletemp
        $j = 0;
        for ($i = 0; $i < count($produitRecommandationtemp); $i++)
        {
            
            if (isset($produitfamille )){
            for ($k = 0; $k < count($produitfamille); $k++)
                {
                    //le if permet d'exclure le produit courant de la liste des produits de la meme famille
                    //on utilisera pour la suite le tableau $produitfamille
                    if($produitRecommandationtemp[$i]->getId() != $id && $produitRecommandationtemp[$i]->getId() !=  $produitfamille[$k]->getId()){
                        $produitrecommandation[$j] = $produitRecommandationtemp[$i];
                        $j++;
                        break;
                    }
                }
            }
            else{
                //le if permet d'exclure le produit courant de la liste des produits de la meme famille
                    //on utilisera pour la suite le tableau $produitfamille
                    if($produitRecommandationtemp[$i]->getId() != $id ){
                        $produitrecommandation[$j] = $produitRecommandationtemp[$i];
                        $j++;
                    }
            }
            
        }
        
        //images des produits de la meme famille que le produit courant
        //on rempli notre tableau des images en fontion du nombre de produits dans le tableau $produitfamille
        for ($i = 0; $i < count($produitrecommandation); $i++)
        {
                $listImagesrecommandation[$i] = $repository2->findBy(
                    array('produit' => $produitrecommandation[$i]->getId()), // Critere
                    null,        // Tri
                    null,        // Limite
                    null         // Offset
                );

        }
        /*
        echo"produitfamille:";
        var_dump($produitfamille);
        echo"-----------------------------------------";
        echo"$id";
        echo"-----------------------------------------";
        echo"listImagesfamille:";
        var_dump($listImagesfamille); 
        */
        
        //var_dump($listImages);
    //affichage du template
    return $this->render('SMSiteBundle:Produit:produit.html.twig',array(
        'produit' => $produit,
        'images' => $listImages,
        'produitfamille' => (isset($produitfamille))?$produitfamille:null,
        'imagesfamille' => (isset($listImagesfamille))?$listImagesfamille:null,
        'produitrecommandation' => $produitrecommandation,
        'imagesrecommandation' => $listImagesrecommandation,
    ));
  }
  

  
  
  
}

?>