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
        //Schema::table('ordercust', function (Blueprint $table) {
            //$table->unsignedInteger('id')->before('ordercustid');
        //});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::table('ordercust', function (Blueprint $table) {
            //$table->dropColumn('id');
        //});
    }
};
