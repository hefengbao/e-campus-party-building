<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('party_membership_dues', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->comment('用户 id');
            $table->unsignedBigInteger('organization_id')->comment('支部 ID');
            $table->string('uuid')->unique()->comment('支付订单号');
            $table->string('payment_ym',6)->comment('交纳年月');
            $table->decimal('payment_amount')->default(0)->comment('交纳金额');
            $table->string('payment_status')->default('init')->comment('支付状态');
            $table->string('paid_user')->nullable()->comment('支付人 ID');
            $table->string('paid_ym')->nullable()->comment('支付年月');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('party_membership_dues');
    }
};
