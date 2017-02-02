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

namespace WellCommerce\Bundle\PageBundle\Tests\Storage;

use WellCommerce\Bundle\CoreBundle\Test\AbstractTestCase;
use WellCommerce\Bundle\PageBundle\Entity\Page;
use WellCommerce\Bundle\PageBundle\Request\PageRequestStorage;

/**
 * Class PageStorageTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PageStorageTest extends AbstractTestCase
{
    public function testStorageReturnsValidData()
    {
        $storage = new PageRequestStorage();
        $page    = new Page();
        
        $storage->setCurrentPage($page);
        $this->assertInstanceOf(Page::class, $storage->getCurrentPage());
        $this->assertEquals($page, $storage->getCurrentPage());
        $this->assertTrue($storage->hasCurrentPage());
    }
}
