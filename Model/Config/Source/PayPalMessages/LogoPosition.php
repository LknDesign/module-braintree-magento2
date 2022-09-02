<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Braintree\Model\Config\Source\PayPalMessages;

use Magento\Framework\Data\OptionSourceInterface;

class LogoPosition implements OptionSourceInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'left', 'label' => __('left')],
            ['value' => 'right', 'label' => __('right')],
            ['value' => 'top', 'label' => __('top')]
        ];
    }
}
