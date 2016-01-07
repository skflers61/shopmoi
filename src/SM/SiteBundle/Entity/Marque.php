<?php

namespace SM\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SM\SiteBundle\Entity\MarqueRepository")
 */
class Marque
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="LogoAdresse", type="string", length=500)
     */
    private $logoAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Slogan", type="string", length=500)
     */
    private $slogan;


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
     * Set nom
     *
     * @param string $nom
     * @return Marque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set logoAdresse
     *
     * @param string $logoAdresse
     * @return Marque
     */
    public function setLogoAdresse($logoAdresse)
    {
        $this->logoAdresse = $logoAdresse;

        return $this;
    }

    /**
     * Get logoAdresse
     *
     * @return string 
     */
    public function getLogoAdresse()
    {
        return $this->logoAdresse;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     * @return Marque
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string 
     */
    public function getSlogan()
    {
        return $this->slogan;
    }
}
