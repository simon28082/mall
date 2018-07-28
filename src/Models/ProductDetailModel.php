<?php

/**
 * @author simon <simon@crcms.cn>
 * @datetime 2018-07-18 06:35
 * @link http://crcms.cn/
 * @copyright Copyright &copy; 2018 Rights Reserved CRCMS
 */

namespace CrCms\Mall\Models;

use CrCms\Foundation\App\Models\Model;

/**
 * Class ProductDetailModel
 * @package CrCms\Mall\Models
 */
class ProductDetailModel extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $table = 'mall_product_details';
}