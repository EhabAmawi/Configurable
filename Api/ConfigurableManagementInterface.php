<?php

namespace Ehab\Configurable\Api;


use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface ConfigurableManagementInterface
{
    /**
     *  GET for parent Product by Child id api
     * @param int $childId
     * @throws LocalizedException
     * @return ProductInterface[]
     */
    public function getParentByChildId($childId);


    /**
     *  GET for parent Product by Child id api
     * @param string $childSku
     * @return ProductInterface[]
     * @throws LocalizedException
     */
    public function getParentByChildSku($childSku);

}
