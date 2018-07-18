<?php

/**
 * @author simon <crcms@crcms.cn>
 * @datetime 2018-07-18 07:10
 * @link http://crcms.cn/
 * @copyright Copyright &copy; 2018 Rights Reserved CRCMS
 */

namespace CrCms\Mall\Http\Resources;

use CrCms\Foundation\App\Http\Resources\Resource;

/**
 * Class ProductStockResource
 * @package CrCms\Mall\Http\Resources
 */
class ProductStockResource extends Resource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'market_price' => $this->market_price,
            'price' => $this->price,
            'specification_value' => $this->specification_value,
            'specification_id' => $this->specification_id,
            'stock' => $this->stock,
            'image' => $this->image,
        ];
    }
}