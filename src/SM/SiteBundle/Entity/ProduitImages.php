<?php

namespace SM\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitImages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SM\SiteBundle\Entity\ProduitImagesRepository")
 */
class ProduitImages
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
     * @ORM\Column(name="adresse", type="string", length=500)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=50)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=500)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="nomImage", type="string", length=250)
     */
    private $nomImage;
    
    /**
    * @ORM\ManyToOne(targetEntity="SM\SiteBundle\Entity\Produit", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $produit;
    
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
     * Set adresse
     *
     * @param string $adresse
     * @return ProduitImages
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     * @return ProduitImages
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return ProduitImages
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set produit
     *
     * @param \SM\SiteBundle\Entity\Produit $produit
     * @return ProduitImages
     */
    public function setProduit(\SM\SiteBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \SM\SiteBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set nomImage
     *
     * @param string $nomImage
     * @return ProduitImages
     */
    public function setNomImage($nomImage)
    {
        $this->nomImage = $nomImage;

        return $this;
    }

    /**
     * Get nomImage
     *
     * @return string 
     */
    public function getNomImage()
    {
        return $this->nomImage;
    }
}
