<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity
 */
class Agence
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAgence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagence;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAgence", type="text", length=65535, nullable=false)
     */
    private $nomagence;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255, nullable=false)
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="numRue", type="integer", nullable=false)
     */
    private $numrue;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @return int
     */
    public function getIdagence(): int
    {
        return $this->idagence;
    }

    /**
     * @param int $idagence
     */
    public function setIdagence(int $idagence): void
    {
        $this->idagence = $idagence;
    }

    /**
     * @return string
     */
    public function getNomagence(): string
    {
        return $this->nomagence;
    }

    /**
     * @param string $nomagence
     */
    public function setNomagence(string $nomagence): void
    {
        $this->nomagence = $nomagence;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     */
    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return int
     */
    public function getNumrue(): int
    {
        return $this->numrue;
    }

    /**
     * @param int $numrue
     */
    public function setNumrue(int $numrue): void
    {
        $this->numrue = $numrue;
    }

    /**
     * @return string
     */
    public function getCodepostal(): string
    {
        return $this->codepostal;
    }

    /**
     * @param string $codepostal
     */
    public function setCodepostal(string $codepostal): void
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }



}
