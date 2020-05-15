<?php

declare(strict_types=1);

namespace IntegerNet\GermanUmlautUrls\Filter;

class TranslitUrl extends \Magento\Framework\Filter\TranslitUrl
{
    /**
     * Add correct German Umlauts transliteration
     *
     * @return array
     */
    protected function getConvertTable()
    {
        $convertTable = $this->convertTable;

        $convertTable['ä'] = 'ae';
        $convertTable['ö'] = 'oe';
        $convertTable['ü'] = 'ue';
        $convertTable['Ä'] = 'Ae';
        $convertTable['Ö'] = 'Oe';
        $convertTable['Ü'] = 'Ue';
        $convertTable['ß'] = 'ss';
        $convertTable['ẞ'] = 'Ss';

        return $convertTable;
    }
}
