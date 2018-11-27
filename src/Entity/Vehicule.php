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
     * @var int
     *
     * @ORM\Column(name="fk_idTypeVehi", type="integer", nullable=false)
     */
    private $fkIdtypevehi;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_idAgence", type="integer", nullable=false)
     */
    private $fkIdagence;


}
