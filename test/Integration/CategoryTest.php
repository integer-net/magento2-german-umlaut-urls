<?php

declare(strict_types=1);

namespace IntegerNet\GermanUmlautUrls\Test\Integration;

use Magento\Catalog\Model\Category;
use Magento\Store\Model\StoreManagerInterface;
use Magento\TestFramework\ObjectManager;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
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
     * @magentoAppArea adminhtml
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     */
    public function testSingleCategoryUrl()
    {
        /** @var Category $rootCategory */
        $rootCategory = $this->objectManager->create(Category::class);
        $storeGroupId = $this->storeManager->getDefaultStoreView()->getStoreGroupId();
        $rootCategoryId = $this->storeManager->getGroup($storeGroupId)->getRootCategoryId();
        $rootCategory->load($rootCategoryId);

        /** @var Category $category */
        $category = $this->objectManager->create(Category::class);

        $category->setData([
            'name' => 'Category with Umlauts Äöüß',
        ]);
        $category->save();

        $category->move($rootCategoryId, null);

        $category->load($category->getId());

        $this->assertEquals($rootCategoryId, $category->getParentId());
        $this->assertEquals('http://localhost/index.php/category-with-umlauts-aeoeuess.html', $category->getUrl());
    }
}
