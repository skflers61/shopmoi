<?php

namespace SM\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SM\SiteBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50, nullable=true)
     */
    private $couleur;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255)
     */
    private $modele;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_en_stock", type="integer")
     */
    private $qteEnStock;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_vente", type="integer")
     */
    private $nbVente;

    
    /**
    * @ORM\ManyToOne(targetEntity="SM\SiteBundle\Entity\Marque", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $marque;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Produit
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set qteEnStock
     *
     * @param integer $qteEnStock
     * @return Produit
     */
    public function setQteEnStock($qteEnStock)
    {
        $this->qteEnStock = $qteEnStock;

        return $this;
    }

    /**
     * Get qteEnStock
     *
     * @return integer 
     */
    public function getQteEnStock()
    {
        return $this->qteEnStock;
    }

    /**
     * Set nbVente
     *
     * @param integer $nbVente
     * @return Produit
     */
    public function setNbVente($nbVente)
    {
        $this->nbVente = $nbVente;

        return $this;
    }

    /**
     * Get nbVente
     *
     * @return integer 
     */
    public function getNbVente()
    {
        return $this->nbVente;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Produit
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set marque
     *
     * @param \SM\SiteBundle\Entity\Marque $marque
     * @return Produit
     */
    public function setMarque(\SM\SiteBundle\Entity\Marque $marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \SM\SiteBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }
}
