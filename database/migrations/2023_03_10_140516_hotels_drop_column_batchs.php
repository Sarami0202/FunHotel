<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('batch1');
            $table->dropColumn('batch2');
            $table->dropColumn('batch3');
            $table->dropColumn('batch4');
            $table->dropColumn('batch_name1');
            $table->dropColumn('batch_name2');
            $table->dropColumn('batch_name3');
            $table->dropColumn('batch_name4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('batch_name1')->default(0);
            $table->string('batch_name2')->default(0);
            $table->string('batch_name3')->default(0);
            $table->string('batch_name4')->default(0);

            $table->string('batch1')->default(0);
            $table->string('batch2')->default(0);
            $table->string('batch3')->default(0);
            $table->string('batch4')->default(0);
        });
    }
};