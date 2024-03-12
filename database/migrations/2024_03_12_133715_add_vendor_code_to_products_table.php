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
        Schema::table('products', function (Blueprint $table) {
            //vender_codeカラムを設定する
            $table->integer('vendor_code')->nullable();
            $table->foreign('vendor_code')->references('vendor_code')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //ロールバック時にvender_codeカラムの外部キー制約を解除する
            $table->dropForeign(['vendor_code']);
            $table->dropColumn('vendor_code');
        });
    }
};
