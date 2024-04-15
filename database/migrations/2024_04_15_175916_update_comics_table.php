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
            $table->string('title', 40);
            $table->mediumText('description');
            $table->string('thumb');
            $table->double('price',6,3);
            $table->string('series', 30);
            $table->date('sale_date');
            $table->string('type', 20);
            $table->string('artist',255);
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
            $table->dropColumn(['title','description','thumb','price','series','sale_date','type','artist','writers']);
            
        });
    }
};
