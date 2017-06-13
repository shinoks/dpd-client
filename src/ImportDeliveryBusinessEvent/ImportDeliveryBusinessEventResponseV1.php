<?php
/**
 * Created by PhpStorm.
 * User: dbojdo
 * Date: 14/06/2017
 * Time: 11:24
 */

namespace Webit\DPDClient\ImportDeliveryBusinessEvent;

use JMS\Serializer\Annotation as JMS;

class ImportDeliveryBusinessEventResponseV1
{
    /**
     * @var string
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     */
    private $status;

    /**
     * @var string
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     */
    private $description;

    /**
     * ImportDeliveryBusinessEventResponseV1 constructor.
     * @param string $status
     * @param string $description
     */
    public function __construct($status, $description = null)
    {
        $this->status = $status;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }
}