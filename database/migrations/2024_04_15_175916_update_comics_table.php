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
        Schema::table('comics', function (Blueprint $table) {
            //
            $table->string('title', 80);
            $table->mediumText('description')->nullable();
            $table->mediumText('thumb')->nullable();
            $table->string('price',8);
            $table->string('series', 60);
            $table->date('sale_date');
            $table->string('type', 30);
            $table->string('artists',255);
            $table->string('writers',255);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            //
            $table->dropColumn(['title','description','thumb','price','series','sale_date','type','artists','writers']);
            
        });
    }
};
