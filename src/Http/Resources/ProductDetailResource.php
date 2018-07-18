<?php

/**
 * @author simon <crcms@crcms.cn>
 * @datetime 2018-07-18 06:56
 * @link http://crcms.cn/
 * @copyright Copyright &copy; 2018 Rights Reserved CRCMS
 */

namespace CrCms\Modules\mall\src\Http\Resources;

use CrCms\Foundation\App\Http\Resources\Resource;

/**
 * Class ProductDetailResource
 * @package CrCms\Modules\mall\src\Http\Resources
 */
class ProductDetailResource extends Resource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'characteristic' => $this->characteristic,
            'detail' => $this->detail,
            'attributes' => $this->attributes,
        ];
    }
}