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
        Schema::create('probationary_party_members', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->comment('用户 ID');
            $table->unsignedBigInteger('organization_id')->comment('支部 ID');
            $table->dateTime('started_at')->comment('开始时间');
            $table->dateTime('ended_at')->nullable()->comment('开始时间');
            $table->string('remarks')->nullable()->comment('备注');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('probationary_party_members');
    }
};
