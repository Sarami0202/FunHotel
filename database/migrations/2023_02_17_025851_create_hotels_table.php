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
        Schema::create('hotels', function (Blueprint $table) {

            $table->id();
            $table->string('name', 255);
            $table->string('prefecture', 255);
            $table->string('tell', 255);
            $table->string('address', 255);
            $table->string('access', 255)->nullable();
            $table->string('category', 255);
            $table->string('stick1', 255);
            $table->string('stick2', 255);
            $table->string('stick3', 255);
            $table->string('stick4', 255);
            $table->text('body');
            $table->text('html');
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('facebook')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('google')->nullable();
            $table->text('info1')->nullable();
            $table->string('label1')->nullable();
            $table->text('info2')->nullable();
            $table->string('label2')->nullable();
            $table->text('info3')->nullable();
            $table->string('label3')->nullable();
            $table->text('info4')->nullable();
            $table->string('label4')->nullable();
            $table->text('info5')->nullable();
            $table->string('label5')->nullable();
            $table->string('thumbnail1')->nullable();
            $table->string('thumbnail2')->nullable();
            $table->string('thumbnail3')->nullable();
            $table->string('thumbnail4')->nullable();
            $table->string('thumbnail5')->nullable();
            $table->string('thumbnail6')->nullable();
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
