<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\EventDispatcher;

use WellCommerce\Bundle\CoreBundle\EventDispatcher\EventDispatcher;

/**
 * Class OrderEventDispatcher
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class OrderEventDispatcher extends EventDispatcher implements OrderEventDispatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function dispatchOnPostOrderPrepared($resource)
    {
        $this->dispatchResourceEvent($resource, OrderEventDispatcherInterface::POST_ORDER_PREPARED_EVENT);
    }
}
