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
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date')->nullable();
            $table->enum('student_status', ['new', 'old', 'transferee'])->nullable();
            $table->string('student_number')->unique();
            $table->string('course');
            $table->string('school_year');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->enum('sex', ['male', 'female']);
            $table->enum('civil_status', ['single', 'married']);
            $table->text('mailing_address');
            $table->string('contact_number');

            // Senior High School
            $table->string('shs_name');
            $table->string('shs_address');
            $table->string('academic_excellence')->nullable();
            $table->decimal('general_average', 5, 2)->nullable();
            $table->string('shs_year')->nullable();
            $table->string('graduated')->nullable();

            // College Transfer
            $table->string('college_name')->nullable();
            $table->string('college_address')->nullable();
            $table->string('year_level')->nullable();
            $table->string('college_course')->nullable();
            $table->string('college_semester')->nullable();
            $table->text('transfer_reason')->nullable();

            // Birth Details
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->enum('nationality', ['filipino', 'foreign'])->nullable();
            $table->string('foreign_specify')->nullable();
            $table->string('dialect')->nullable();

            // Parent/Guardian Details
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->text('guardian_address')->nullable();

            // Education Support
            $table->string('education_support_name')->nullable();
            $table->string('education_support_relationship')->nullable();

            // Requirements
            $table->boolean('req_picture')->default(false);
            $table->boolean('req_good_moral')->default(false);
            $table->boolean('req_form_138')->default(false);
            $table->boolean('req_honorable_dismissal')->default(false);

            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_information');
    }
};
