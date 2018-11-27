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
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="User", referencedColumnName="idUser")
     */
    private $fkIduser;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicule")
     * @ORM\JoinColumn(name="Vehicule", referencedColumnName="idVehicule")
     */
    private $fkIdvehicule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateConsult", type="date", nullable=false)
     */
    private $dateconsult;

    /**
     * @return int
     */
    public function getIdconsult(): int
    {
        return $this->idconsult;
    }

    /**
     * @param int $idconsult
     */
    public function setIdconsult(int $idconsult): void
    {
        $this->idconsult = $idconsult;
    }

    /**
     * @return mixed
     */
    public function getFkIduser()
    {
        return $this->fkIduser;
    }

    /**
     * @param mixed $fkIduser
     */
    public function setFkIduser($fkIduser): void
    {
        $this->fkIduser = $fkIduser;
    }

    /**
     * @return mixed
     */
    public function getFkIdvehicule()
    {
        return $this->fkIdvehicule;
    }

    /**
     * @param mixed $fkIdvehicule
     */
    public function setFkIdvehicule($fkIdvehicule): void
    {
        $this->fkIdvehicule = $fkIdvehicule;
    }

    /**
     * @return \DateTime
     */
    public function getDateconsult(): \DateTime
    {
        return $this->dateconsult;
    }

    /**
     * @param \DateTime $dateconsult
     */
    public function setDateconsult(\DateTime $dateconsult): void
    {
        $this->dateconsult = $dateconsult;
    }


}
