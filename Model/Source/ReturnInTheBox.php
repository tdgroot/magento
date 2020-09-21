<?php

declare(strict_types=1);

namespace MyParcelNL\Magento\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class ReturnInTheBox implements OptionSourceInterface
{
    const NOT_ACTIVE        = 'notActive';
    const NO_OPTIONS        = 'noOptions';
    const EQUAL_TO_SHIPMENT = 'equalToShipment';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::NOT_ACTIVE, 'label' => __('No')],
            ['value' => self::NO_OPTIONS, 'label' => __('Without options')],
            ['value' => self::EQUAL_TO_SHIPMENT, 'label' => __('Options equal to shipment')]
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::NOT_ACTIVE        => __('No'),
            self::NO_OPTIONS        => __('Without options'),
            self::EQUAL_TO_SHIPMENT => __('Options equal to shipment')
        ];
    }
}
