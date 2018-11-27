<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idConsult", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsult;

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
     * @ORM\Column(name="dateConsult", type="date", nullable=false)
     */
    private $dateconsult;


}
