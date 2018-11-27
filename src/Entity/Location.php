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
     * @ORM\Column(name="fk_idUser", type="integer", nullable=false)
     */
    private $fkIduser;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_idVehicule", type="integer", nullable=false)
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


}
