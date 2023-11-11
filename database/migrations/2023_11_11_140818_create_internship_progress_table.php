<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('internship_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('semester');
            $table->string('status');
            $table->date('seminar_date');
            $table->decimal('grade', 5, 2);
            $table->string('pdf_path'); // assuming you store the path to the PDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_progress');
    }
};
