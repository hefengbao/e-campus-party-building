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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->comment('学号/工号')->unique()->primary();
            $table->string('name')->comment('姓名');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('phone')->nullable()->comment('电话号码');
            $table->string('email')->nullable()->comment('邮箱');
            $table->string('department_code')->nullable()->comment('部门');
            $table->string('department_name')->nullable()->comment('部门名称');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
