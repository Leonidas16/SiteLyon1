<?php
// src/ID/OfferBundle/Entity/Offer.php
namespace ID\OfferBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="offres")
 */
class Offer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $nom_entreprise;

    /**
     * @ORM\Column(type="string")
     */
    protected $dernier_maj;

    /**
     * @ORM\Column(type="string")
     */
    protected $contrat;

    /**
     * @ORM\Column(type="string")
     */
    protected $remuneration;

    /**
     * @ORM\Column(type="string")
     */
    protected $profil;

    /**
     * @ORM\Column(type="string", options={"default":"R"})
     */
    protected $ref;







    /**
     * Set title
     *
     * @param string $title
     *
     * @return Offer
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     *
     * @return Offer
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nom_entreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * Set dernierMaj
     *
     * @param string $dernierMaj
     *
     * @return Offer
     */
    public function setDernierMaj($dernierMaj)
    {
        $this->dernier_maj = $dernierMaj;

        return $this;
    }

    /**
     * Get dernierMaj
     *
     * @return string
     */
    public function getDernierMaj()
    {
        return $this->dernier_maj;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     *
     * @return Offer
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set remuneration
     *
     * @param string $remuneration
     *
     * @return Offer
     */
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    /**
     * Get remuneration
     *
     * @return string
     */
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return Offer
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Offer
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
