<?php

namespace Webit\DPDClient\DPDServices\DocumentGeneration;

use JMS\Serializer\Annotation as JMS;

class PackageDGRV1
{
    /**
     * @var int
     * @JMS\SerializedName("packageId")
     * @JMS\Type("integer")
     */
    private $packageId;

    /**
     * @var string
     * @JMS\SerializedName("reference")
     * @JMS\Type("string")
     */
    private $reference;

    /**
     * @var StatusInfoDGRV1
     * @JMS\SerializedName("statusInfo")
     * @JMS\Type("Webit\DPDClient\DPDServices\DocumentGeneration\StatusInfoDGRV1")
     */
    private $statusInfo;

    /**
     * @var ParcelDGRV1[]
     * @JMS\SerializedName("parcels")
     * @JMS\Type("array<Webit\DPDClient\DPDServices\DocumentGeneration\ParcelDGRV1>")
     */
    private $parcels;

    /**
     * @param int $packageId
     * @param string $reference
     * @param StatusInfoDGRV1 $statusInfo
     * @param ParcelDGRV1[] $parcels
     */
    public function __construct($packageId, $reference, StatusInfoDGRV1 $statusInfo, array $parcels)
    {
        $this->packageId = $packageId;
        $this->reference = $reference;
        $this->statusInfo = $statusInfo;
        $this->parcels = $parcels;
    }

    /**
     * @return int
     */
    public function packageId()
    {
        return $this->packageId;
    }

    /**
     * @return string
     */
    public function reference()
    {
        return $this->reference;
    }

    /**
     * @return StatusInfoDGRV1
     */
    public function statusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @return ParcelDGRV1[]
     */
    public function parcels()
    {
        return $this->parcels;
    }
}
