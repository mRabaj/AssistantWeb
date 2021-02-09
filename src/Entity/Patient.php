<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient", indexes={@ORM\Index(name="professionalId", columns={"Professional_Id"})})
 * @ORM\Entity
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Patient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=12, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date", nullable=false)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=50, nullable=false)
     */
    private $phonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="post_code", type="string", length=50, nullable=false)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_address", type="string", length=255, nullable=false)
     */
    private $mailAddress;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_children", type="smallint", nullable=true)
     */
    private $numberOfChildren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="occupation_education", type="string", length=255, nullable=true)
     */
    private $occupationEducation;

    /**
     * @var int
     *
     * @ORM\Column(name="social_security_number", type="integer", nullable=false)
     */
    private $socialSecurityNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disease", type="string", length=255, nullable=true)
     */
    private $disease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psycology", type="string", length=255, nullable=true)
     */
    private $psycology;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_treatment", type="string", length=255, nullable=true)
     */
    private $medicalTreatment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long_lasting_treatment", type="string", length=255, nullable=true)
     */
    private $longLastingTreatment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="punctual_processing", type="string", length=255, nullable=true)
     */
    private $punctualProcessing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_medical_history", type="string", length=255, nullable=true)
     */
    private $otherMedicalHistory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sprain", type="string", length=255, nullable=true)
     */
    private $sprain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fracture", type="string", length=255, nullable=true)
     */
    private $fracture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dislocation", type="string", length=255, nullable=true)
     */
    private $dislocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="car_accident", type="string", length=255, nullable=true)
     */
    private $carAccident;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accident_on_the_public_road", type="string", length=255, nullable=true)
     */
    private $accidentOnThePublicRoad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fall", type="string", length=255, nullable=true)
     */
    private $fall;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_trauma_history", type="string", length=255, nullable=true)
     */
    private $otherTraumaHistory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orthopaedic", type="string", length=255, nullable=true)
     */
    private $orthopaedic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="head_churigie", type="string", length=255, nullable=true)
     */
    private $headChurigie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chest_churigie", type="string", length=255, nullable=true)
     */
    private $chestChurigie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="churigia_of_abdomen", type="string", length=255, nullable=true)
     */
    private $churigiaOfAbdomen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gynecological_churigie", type="string", length=255, nullable=true)
     */
    private $gynecologicalChurigie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orl", type="string", length=255, nullable=true)
     */
    private $orl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="death", type="string", length=255, nullable=true)
     */
    private $death;

    /**
     * @var string|null
     *
     * @ORM\Column(name="childbirth", type="string", length=255, nullable=true)
     */
    private $childbirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_family_history", type="string", length=255, nullable=true)
     */
    private $otherFamilyHistory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="landline_phone", type="string", length=255, nullable=true)
     */
    private $landlinePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="general_remarks", type="string", length=255, nullable=true)
     */
    private $generalRemarks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marital_status", type="string", length=255, nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="leisure", type="string", length=255, nullable=true)
     */
    private $leisure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mutual", type="string", length=255, nullable=true)
     */
    private $mutual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sent_by", type="string", length=255, nullable=true)
     */
    private $sentBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manual_preference", type="string", length=255, nullable=true)
     */
    private $manualPreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes_on_history", type="string", length=255, nullable=true)
     */
    private $notesOnHistory;

    /**
     * @var \Healthprofessional
     *
     * @ORM\ManyToOne(targetEntity="Healthprofessional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Professional_Id", referencedColumnName="Id_Professional")
     * })
     */
    private $professional;

    public function getIdPatient(): ?int
    {
        return $this->idPatient;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(string $phonenumber): self
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getMailAddress(): ?string
    {
        return $this->mailAddress;
    }

    public function setMailAddress(string $mailAddress): self
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

    public function getNumberOfChildren(): ?int
    {
        return $this->numberOfChildren;
    }

    public function setNumberOfChildren(?int $numberOfChildren): self
    {
        $this->numberOfChildren = $numberOfChildren;

        return $this;
    }

    public function getOccupationEducation(): ?string
    {
        return $this->occupationEducation;
    }

    public function setOccupationEducation(?string $occupationEducation): self
    {
        $this->occupationEducation = $occupationEducation;

        return $this;
    }

    public function getSocialSecurityNumber(): ?int
    {
        return $this->socialSecurityNumber;
    }

    public function setSocialSecurityNumber(int $socialSecurityNumber): self
    {
        $this->socialSecurityNumber = $socialSecurityNumber;

        return $this;
    }

    public function getDisease(): ?string
    {
        return $this->disease;
    }

    public function setDisease(?string $disease): self
    {
        $this->disease = $disease;

        return $this;
    }

    public function getPsycology(): ?string
    {
        return $this->psycology;
    }

    public function setPsycology(?string $psycology): self
    {
        $this->psycology = $psycology;

        return $this;
    }

    public function getMedicalTreatment(): ?string
    {
        return $this->medicalTreatment;
    }

    public function setMedicalTreatment(?string $medicalTreatment): self
    {
        $this->medicalTreatment = $medicalTreatment;

        return $this;
    }

    public function getLongLastingTreatment(): ?string
    {
        return $this->longLastingTreatment;
    }

    public function setLongLastingTreatment(?string $longLastingTreatment): self
    {
        $this->longLastingTreatment = $longLastingTreatment;

        return $this;
    }

    public function getPunctualProcessing(): ?string
    {
        return $this->punctualProcessing;
    }

    public function setPunctualProcessing(?string $punctualProcessing): self
    {
        $this->punctualProcessing = $punctualProcessing;

        return $this;
    }

    public function getOtherMedicalHistory(): ?string
    {
        return $this->otherMedicalHistory;
    }

    public function setOtherMedicalHistory(?string $otherMedicalHistory): self
    {
        $this->otherMedicalHistory = $otherMedicalHistory;

        return $this;
    }

    public function getSprain(): ?string
    {
        return $this->sprain;
    }

    public function setSprain(?string $sprain): self
    {
        $this->sprain = $sprain;

        return $this;
    }

    public function getFracture(): ?string
    {
        return $this->fracture;
    }

    public function setFracture(?string $fracture): self
    {
        $this->fracture = $fracture;

        return $this;
    }

    public function getDislocation(): ?string
    {
        return $this->dislocation;
    }

    public function setDislocation(?string $dislocation): self
    {
        $this->dislocation = $dislocation;

        return $this;
    }

    public function getCarAccident(): ?string
    {
        return $this->carAccident;
    }

    public function setCarAccident(?string $carAccident): self
    {
        $this->carAccident = $carAccident;

        return $this;
    }

    public function getAccidentOnThePublicRoad(): ?string
    {
        return $this->accidentOnThePublicRoad;
    }

    public function setAccidentOnThePublicRoad(?string $accidentOnThePublicRoad): self
    {
        $this->accidentOnThePublicRoad = $accidentOnThePublicRoad;

        return $this;
    }

    public function getFall(): ?string
    {
        return $this->fall;
    }

    public function setFall(?string $fall): self
    {
        $this->fall = $fall;

        return $this;
    }

    public function getOtherTraumaHistory(): ?string
    {
        return $this->otherTraumaHistory;
    }

    public function setOtherTraumaHistory(?string $otherTraumaHistory): self
    {
        $this->otherTraumaHistory = $otherTraumaHistory;

        return $this;
    }

    public function getOrthopaedic(): ?string
    {
        return $this->orthopaedic;
    }

    public function setOrthopaedic(?string $orthopaedic): self
    {
        $this->orthopaedic = $orthopaedic;

        return $this;
    }

    public function getHeadChurigie(): ?string
    {
        return $this->headChurigie;
    }

    public function setHeadChurigie(?string $headChurigie): self
    {
        $this->headChurigie = $headChurigie;

        return $this;
    }

    public function getChestChurigie(): ?string
    {
        return $this->chestChurigie;
    }

    public function setChestChurigie(?string $chestChurigie): self
    {
        $this->chestChurigie = $chestChurigie;

        return $this;
    }

    public function getChurigiaOfAbdomen(): ?string
    {
        return $this->churigiaOfAbdomen;
    }

    public function setChurigiaOfAbdomen(?string $churigiaOfAbdomen): self
    {
        $this->churigiaOfAbdomen = $churigiaOfAbdomen;

        return $this;
    }

    public function getGynecologicalChurigie(): ?string
    {
        return $this->gynecologicalChurigie;
    }

    public function setGynecologicalChurigie(?string $gynecologicalChurigie): self
    {
        $this->gynecologicalChurigie = $gynecologicalChurigie;

        return $this;
    }

    public function getOrl(): ?string
    {
        return $this->orl;
    }

    public function setOrl(?string $orl): self
    {
        $this->orl = $orl;

        return $this;
    }

    public function getDeath(): ?string
    {
        return $this->death;
    }

    public function setDeath(?string $death): self
    {
        $this->death = $death;

        return $this;
    }

    public function getChildbirth(): ?string
    {
        return $this->childbirth;
    }

    public function setChildbirth(?string $childbirth): self
    {
        $this->childbirth = $childbirth;

        return $this;
    }

    public function getOtherFamilyHistory(): ?string
    {
        return $this->otherFamilyHistory;
    }

    public function setOtherFamilyHistory(?string $otherFamilyHistory): self
    {
        $this->otherFamilyHistory = $otherFamilyHistory;

        return $this;
    }

    public function getLandlinePhone(): ?string
    {
        return $this->landlinePhone;
    }

    public function setLandlinePhone(?string $landlinePhone): self
    {
        $this->landlinePhone = $landlinePhone;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getGeneralRemarks(): ?string
    {
        return $this->generalRemarks;
    }

    public function setGeneralRemarks(?string $generalRemarks): self
    {
        $this->generalRemarks = $generalRemarks;

        return $this;
    }

    public function getMaritalStatus(): ?string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(?string $maritalStatus): self
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getLeisure(): ?string
    {
        return $this->leisure;
    }

    public function setLeisure(?string $leisure): self
    {
        $this->leisure = $leisure;

        return $this;
    }

    public function getMutual(): ?string
    {
        return $this->mutual;
    }

    public function setMutual(?string $mutual): self
    {
        $this->mutual = $mutual;

        return $this;
    }

    public function getSentBy(): ?string
    {
        return $this->sentBy;
    }

    public function setSentBy(?string $sentBy): self
    {
        $this->sentBy = $sentBy;

        return $this;
    }

    public function getManualPreference(): ?string
    {
        return $this->manualPreference;
    }

    public function setManualPreference(?string $manualPreference): self
    {
        $this->manualPreference = $manualPreference;

        return $this;
    }

    public function getNotesOnHistory(): ?string
    {
        return $this->notesOnHistory;
    }

    public function setNotesOnHistory(?string $notesOnHistory): self
    {
        $this->notesOnHistory = $notesOnHistory;

        return $this;
    }

    public function getProfessional(): ?Healthprofessional
    {
        return $this->professional;
    }

    public function setProfessional(?Healthprofessional $professional): self
    {
        $this->professional = $professional;

        return $this;
    }


}
