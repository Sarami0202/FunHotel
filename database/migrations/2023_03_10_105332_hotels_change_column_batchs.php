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
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('batch_name1')->nullable()->fault(0)->change();
            $table->string('batch_name2')->nullable()->default(0)->change();
            $table->string('batch_name3')->nullable()->default(0)->change();
            $table->string('batch_name4')->nullable()->default(0)->change();
            
            $table->string('batch1')->nullable()->default(0)->change();
            $table->string('batch2')->nullable()->default(0)->change();
            $table->string('batch3')->nullable()->default(0)->change();
            $table->string('batch4')->nullable()->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
        });
    }
};
