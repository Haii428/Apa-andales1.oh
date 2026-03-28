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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID (primary key)
            $table->string('first_name'); // Required: Student's first name
            $table->string('last_name'); // Required: Student's last name
            $table->string('middle_name')->nullable(); // Optional: Middle name
            $table->string('email')->unique(); // Required: Unique email address
            $table->string('phone_number')->nullable(); // Optional: Contact number
            $table->date('date_of_birth'); // Required: Date of birth (YYYY-MM-DD)
            $table->string('gender'); // Required: Gender (e.g., "Male", "Female")
            $table->string('course'); // Required: Course (e.g., "BS Computer Science")
            $table->string('year_level'); // Required: Year level (e.g., "1st Year")
            $table->text('address')->nullable(); // Optional: Full address
            $table->timestamps(); // Auto-adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students'); // Deletes the table if migration is rolled back
    }
};