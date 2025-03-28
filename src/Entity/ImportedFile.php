<?php

namespace App\Entity;

use App\Repository\ImportedFileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImportedFileRepository::class)]
class ImportedFile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $businessAccount = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $eventAccount = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $accountLastEvent = null;

    #[ORM\Column(nullable: true)]
    private ?int $fileNumber = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $civility = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $currentVehicleOwner = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $firstName = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $numberNameRoad = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $additionalAddressOne = null;

    #[ORM\Column(length: 11, nullable: true)]
    private ?string $zipCode = null;

    #[ORM\Column(length: 120, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $homePhone = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $cellPhone = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $jobPhone = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $releaseDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $buyDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastEventDate = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $brand = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $registration = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $prospectType = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $mileage = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $energy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $VNSeller = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $VOSeller = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $billingComment = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $VNVOType = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $fileNumberVNVO = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $VNSalesIntermediary = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eventDate = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $originEvent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusinessAccount(): ?string
    {
        return $this->businessAccount;
    }

    public function setBusinessAccount(?string $businessAccount): static
    {
        $this->businessAccount = $businessAccount;

        return $this;
    }

    public function getEventAccount(): ?string
    {
        return $this->eventAccount;
    }

    public function setEventAccount(?string $eventAccount): static
    {
        $this->eventAccount = $eventAccount;

        return $this;
    }

    public function getAccountLastEvent(): ?string
    {
        return $this->accountLastEvent;
    }

    public function setAccountLastEvent(?string $accountLastEvent): static
    {
        $this->accountLastEvent = $accountLastEvent;

        return $this;
    }

    public function getFileNumber(): ?int
    {
        return $this->fileNumber;
    }

    public function setFileNumber(?int $fileNumber): static
    {
        $this->fileNumber = $fileNumber;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(?string $civility): static
    {
        $this->civility = $civility;

        return $this;
    }

    public function getCurrentVehicleOwner(): ?string
    {
        return $this->currentVehicleOwner;
    }

    public function setCurrentVehicleOwner(?string $currentVehicleOwner): static
    {
        $this->currentVehicleOwner = $currentVehicleOwner;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getNumberNameRoad(): ?string
    {
        return $this->numberNameRoad;
    }

    public function setNumberNameRoad(?string $numberNameRoad): static
    {
        $this->numberNameRoad = $numberNameRoad;

        return $this;
    }

    public function getAdditionalAddressOne(): ?string
    {
        return $this->additionalAddressOne;
    }

    public function setAdditionalAddressOne(?string $additionalAddressOne): static
    {
        $this->additionalAddressOne = $additionalAddressOne;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): static
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    public function setHomePhone(?string $homePhone): static
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(?string $cellPhone): static
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getJobPhone(): ?string
    {
        return $this->jobPhone;
    }

    public function setJobPhone(?string $jobPhone): static
    {
        $this->jobPhone = $jobPhone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): static
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getBuyDate(): ?\DateTimeInterface
    {
        return $this->buyDate;
    }

    public function setBuyDate(?\DateTimeInterface $buyDate): static
    {
        $this->buyDate = $buyDate;

        return $this;
    }

    public function getLastEventDate(): ?\DateTimeInterface
    {
        return $this->lastEventDate;
    }

    public function setLastEventDate(?\DateTimeInterface $lastEventDate): static
    {
        $this->lastEventDate = $lastEventDate;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(?string $registration): static
    {
        $this->registration = $registration;

        return $this;
    }

    public function getProspectType(): ?string
    {
        return $this->prospectType;
    }

    public function setProspectType(?string $prospectType): static
    {
        $this->prospectType = $prospectType;

        return $this;
    }

    public function getMileage(): ?string
    {
        return $this->mileage;
    }

    public function setMileage(?string $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy(?string $energy): static
    {
        $this->energy = $energy;

        return $this;
    }

    public function getVNSeller(): ?string
    {
        return $this->VNSeller;
    }

    public function setVNSeller(?string $VNSeller): static
    {
        $this->VNSeller = $VNSeller;

        return $this;
    }

    public function getVOSeller(): ?string
    {
        return $this->VOSeller;
    }

    public function setVOSeller(?string $VOSeller): static
    {
        $this->VOSeller = $VOSeller;

        return $this;
    }

    public function getBillingComment(): ?string
    {
        return $this->billingComment;
    }

    public function setBillingComment(?string $billingComment): static
    {
        $this->billingComment = $billingComment;

        return $this;
    }

    public function getVNVOType(): ?string
    {
        return $this->VNVOType;
    }

    public function setVNVOType(?string $VNVOType): static
    {
        $this->VNVOType = $VNVOType;

        return $this;
    }

    public function getFileNumberVNVO(): ?string
    {
        return $this->fileNumberVNVO;
    }

    public function setFileNumberVNVO(?string $fileNumberVNVO): static
    {
        $this->fileNumberVNVO = $fileNumberVNVO;

        return $this;
    }

    public function getVNSalesIntermediary(): ?string
    {
        return $this->VNSalesIntermediary;
    }

    public function setVNSalesIntermediary(?string $VNSalesIntermediary): static
    {
        $this->VNSalesIntermediary = $VNSalesIntermediary;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function setEventDate(?\DateTimeInterface $eventDate): static
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getOriginEvent(): ?string
    {
        return $this->originEvent;
    }

    public function setOriginEvent(?string $originEvent): static
    {
        $this->originEvent = $originEvent;

        return $this;
    }
}
