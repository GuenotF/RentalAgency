<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLocation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocation;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="User", referencedColumnName="idUser")
     */
    private $fkIduser;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicule")
     * @ORM\JoinColumn(name="Vehicule", referencedColumnName="idVehicule")
     */
    private $fkIdvehicule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeb", type="datetime", nullable=false)
     */
    private $datedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="typePaiement", type="text", length=65535, nullable=false)
     */
    private $typepaiement;

    /**
     * @return int
     */
    public function getIdlocation(): int
    {
        return $this->idlocation;
    }

    /**
     * @param int $idlocation
     */
    public function setIdlocation(int $idlocation): void
    {
        $this->idlocation = $idlocation;
    }

    /**
     * @return int
     */
    public function getFkIduser(): int
    {
        return $this->fkIduser;
    }

    /**
     * @param int $fkIduser
     */
    public function setFkIduser(int $fkIduser): void
    {
        $this->fkIduser = $fkIduser;
    }

    /**
     * @return int
     */
    public function getFkIdvehicule(): int
    {
        return $this->fkIdvehicule;
    }

    /**
     * @param int $fkIdvehicule
     */
    public function setFkIdvehicule(int $fkIdvehicule): void
    {
        $this->fkIdvehicule = $fkIdvehicule;
    }

    /**
     * @return \DateTime
     */
    public function getDatedeb(): \DateTime
    {
        return $this->datedeb;
    }

    /**
     * @param \DateTime $datedeb
     */
    public function setDatedeb(\DateTime $datedeb): void
    {
        $this->datedeb = $datedeb;
    }

    /**
     * @return \DateTime
     */
    public function getDatefin(): \DateTime
    {
        return $this->datefin;
    }

    /**
     * @param \DateTime $datefin
     */
    public function setDatefin(\DateTime $datefin): void
    {
        $this->datefin = $datefin;
    }

    /**
     * @return float
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     */
    public function setMontant(float $montant): void
    {
        $this->montant = $montant;
    }

    /**
     * @return string
     */
    public function getTypepaiement(): string
    {
        return $this->typepaiement;
    }

    /**
     * @param string $typepaiement
     */
    public function setTypepaiement(string $typepaiement): void
    {
        $this->typepaiement = $typepaiement;
    }


}
