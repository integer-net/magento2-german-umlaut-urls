<?php

declare(strict_types=1);

namespace IntegerNet\GermanUmlautUrls\Test\Integration;

use Magento\Cms\Model\Page;
use Magento\Store\Model\StoreManagerInterface;
use Magento\TestFramework\ObjectManager;
use PHPUnit\Framework\TestCase;

class CmsPageTest extends TestCase
{
    /**
     * @var \Magento\Framework\App\ObjectManager
     */
    private $objectManager;
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    protected function setUp()
    {
        parent::setUp();

        $this->objectManager = ObjectManager::getInstance();
        $this->storeManager = $this->objectManager->get(StoreManagerInterface::class);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     */
    public function testSingleCategoryUrl()
    {
        /** @var Page $cmsPage */
        $cmsPage = $this->objectManager->create(Page::class);

        $cmsPage->setData([
            'title' => 'CMS Page with Umlauts Äöüß',
        ]);

        $cmsPage->setStoreId($this->storeManager->getDefaultStoreView()->getId());

        $cmsPage->save();

        $this->assertEquals(
            'cms-page-with-umlauts-aeoeuess',
            $cmsPage->getIdentifier()
        );

        /** @var \Magento\Cms\Helper\Page $cmsPageHelper */
        $cmsPageHelper = $this->objectManager->get(\Magento\Cms\Helper\Page::class);

        $this->assertEquals(
            'http://localhost/index.php/cms-page-with-umlauts-aeoeuess',
            $cmsPageHelper->getPageUrl($cmsPage->getId())
        );
    }
}
