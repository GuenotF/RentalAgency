<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVehicule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean", nullable=false, options={"default"="1"})
     */
    private $statut = '1';

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Typevehicule")
     * @ORM\JoinColumn(name="Typevehicule", referencedColumnName="idTypeVehi")
     */
    private $fkIdtypevehi;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Agence")
     * @ORM\JoinColumn(name="Agence", referencedColumnName="idAgence")
     */
    private $fkIdagence;

    /**
     * @return int
     */
    public function getIdvehicule(): int
    {
        return $this->idvehicule;
    }

    /**
     * @param int $idvehicule
     */
    public function setIdvehicule(int $idvehicule): void
    {
        $this->idvehicule = $idvehicule;
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
     * @return bool
     */
    public function isStatut(): bool
    {
        return $this->statut;
    }

    /**
     * @param bool $statut
     */
    public function setStatut(bool $statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getFkIdtypevehi()
    {
        return $this->fkIdtypevehi;
    }

    /**
     * @param mixed $fkIdtypevehi
     */
    public function setFkIdtypevehi($fkIdtypevehi): void
    {
        $this->fkIdtypevehi = $fkIdtypevehi;
    }

    /**
     * @return mixed
     */
    public function getFkIdagence()
    {
        return $this->fkIdagence;
    }

    /**
     * @param mixed $fkIdagence
     */
    public function setFkIdagence($fkIdagence): void
    {
        $this->fkIdagence = $fkIdagence;
    }

}
