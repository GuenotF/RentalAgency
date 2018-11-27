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


}
