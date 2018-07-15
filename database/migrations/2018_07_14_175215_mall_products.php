<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MallProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id',true);
            $table->unsignedBigInteger('category_id')->default(0)->comment('分类id');

            $table->string('name',100)->comment('商品名称');
            $table->unsignedInteger('brand_id')->default(0)->comment('品牌ID');

            $table->decimal('market_price')->default(0)->comment('市场价格');
            $table->decimal('price')->default(0)->comment('价格');
            $table->decimal('cost_price')->default(0)->comment('成本价格');

            $table->unsignedInteger('stock')->default(0)->comment('库存');
            $table->unsignedInteger('stock_alarm')->default(0)->comment('库存预警');

            $table->unsignedBigInteger('mall_user_id')->default(0)->comment('商户ID,0表示平台发布');

            $table->unsignedTinyInteger('recommend')->default(0)->commet('状态，1推荐，2不推荐');
            $table->string('coding',50)->nullable()->comment('编码');

            $table->unsignedTinyInteger('sales_status')->default(0)->commet('销售状态，1上架，2下架');
            $table->unsignedTinyInteger('review_status')->default(0)->commet('审核状态，1通过，2不通过，3未审核');
            $table->unsignedBigInteger('sort')->default(0)->comment('排序值');

            $table->unsignedBigInteger('published_at')->default(0)->comment('发布时间');
            $table->unsignedBigInteger('created_at')->default(0)->comment('创建时间');
            $table->unsignedBigInteger('updated_at')->default(0)->comment('修改时间');
            $table->unsignedBigInteger('deleted_at')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}