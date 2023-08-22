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
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('second_title')->nullable();
            $table->text('section_content')->nullable();
            $table->unsignedBigInteger('page_id')->nullable();
            $table->integer('section_order')->default(0);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->boolean('status')->default(true); // or 'active', 'inactive' or other status representation
            $table->string('url')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
