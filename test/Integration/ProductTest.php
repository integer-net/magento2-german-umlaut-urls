<?php

declare(strict_types=1);

namespace IntegerNet\GermanUmlautUrls\Test\Integration;

use Magento\Catalog\Model\Product;
use Magento\Store\Model\StoreManagerInterface;
use Magento\TestFramework\ObjectManager;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
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
        /** @var Product $product */
        $product = $this->objectManager->create(Product::class);

        $product->setData([
            'name' => 'Product with Umlauts Äöüß',
            'sku' => 'product-umlaut-test',
            'visibility' => Product\Visibility::VISIBILITY_BOTH
        ]);

        $product->save();

        $product->load($product->getId());
        $product->setStoreId($this->storeManager->getDefaultStoreView()->getId());

        $this->assertEquals('http://localhost/index.php/product-with-umlauts-aeoeuess.html', $product->getProductUrl());
    }
}
