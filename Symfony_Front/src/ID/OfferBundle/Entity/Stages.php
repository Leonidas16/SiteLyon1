<?php
// src/ID/OfferBundle/Entity/Product.php
namespace ID\OfferBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stages")
 */
class Stages
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
    protected $competences;

    /**
     * @ORM\Column(type="string", options={"default":"R"})
     */
    protected $ref;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Stages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set nomEntreprise.
     *
     * @param string $nomEntreprise
     *
     * @return Stages
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nom_entreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise.
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * Set dernierMaj.
     *
     * @param string $dernierMaj
     *
     * @return Stages
     */
    public function setDernierMaj($dernierMaj)
    {
        $this->dernier_maj = $dernierMaj;

        return $this;
    }

    /**
     * Get dernierMaj.
     *
     * @return string
     */
    public function getDernierMaj()
    {
        return $this->dernier_maj;
    }

    /**
     * Set competences.
     *
     * @param string $competences
     *
     * @return Stages
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get competences.
     *
     * @return string
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set ref.
     *
     * @param string $ref
     *
     * @return Stages
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref.
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
}
