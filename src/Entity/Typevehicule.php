<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typevehicule
 *
 * @ORM\Table(name="typevehicule")
 * @ORM\Entity
 */
class Typevehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTypeVehi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypevehi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="classification", type="text", length=65535, nullable=false)
     */
    private $classification;

    /**
     * @var float
     *
     * @ORM\Column(name="prixHeure", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixheure;

    /**
     * @return int
     */
    public function getIdtypevehi(): int
    {
        return $this->idtypevehi;
    }

    /**
     * @param int $idtypevehi
     */
    public function setIdtypevehi(int $idtypevehi): void
    {
        $this->idtypevehi = $idtypevehi;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getClassification(): string
    {
        return $this->classification;
    }

    /**
     * @param string $classification
     */
    public function setClassification(string $classification): void
    {
        $this->classification = $classification;
    }

    /**
     * @return float
     */
    public function getPrixheure(): float
    {
        return $this->prixheure;
    }

    /**
     * @param float $prixheure
     */
    public function setPrixheure(float $prixheure): void
    {
        $this->prixheure = $prixheure;
    }


}
