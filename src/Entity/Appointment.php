<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 *
 * @ORM\Table(name="appointment", indexes={@ORM\Index(name="patientId", columns={"Patient_Id"})})
 * @ORM\Entity
 */
class Appointment
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Appointment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAppointment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startMeeting", type="datetime", nullable=false)
     */
    private $startmeeting;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="endMeeting", type="datetime", nullable=true)
     */
    private $endmeeting;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Patient_Id", referencedColumnName="id_Patient")
     * })
     */
    private $patient;

    public function getIdAppointment(): ?int
    {
        return $this->idAppointment;
    }

    public function getStartmeeting(): ?\DateTimeInterface
    {
        return $this->startmeeting;
    }

    public function setStartmeeting(\DateTimeInterface $startmeeting): self
    {
        $this->startmeeting = $startmeeting;

        return $this;
    }

    public function getEndmeeting(): ?\DateTimeInterface
    {
        return $this->endmeeting;
    }

    public function setEndmeeting(?\DateTimeInterface $endmeeting): self
    {
        $this->endmeeting = $endmeeting;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }


}
