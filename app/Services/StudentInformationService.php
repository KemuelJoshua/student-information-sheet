<?php

namespace App\Services;

use App\Models\StudentInformation;
use Illuminate\Support\Facades\Auth;

class StudentInformationService {

    public function addStudentInformation($payload) 
    {
        $studentInformation = StudentInformation::create([
            'date' => $payload['date'],
            'user_id' => Auth::user()->id,
            'student_status' => $payload['student_status'],
            'student_number' => $payload['student_number'],
            'course' => $payload['course'],
            'school_year' => $payload['school_year'],
            'last_name' => $payload['last_name'],
            'first_name' => $payload['first_name'],
            'middle_name' => $payload['middle_name'],
            'sex' => $payload['sex'],
            'civil_status' => $payload['civil_status'],
            'mailing_address' => $payload['mailing_address'],
            'contact_number' => $payload['contact_number'],
            'shs_name' => $payload['shs_name'],
            'shs_address' => $payload['shs_address'],
            'academic_excellence' => $payload['academic_excellence'],
            'general_average' => $payload['general_average'],
            'shs_year' => $payload['shs_year'],
            'graduated' => $payload['graduated'],
            'college_name' => $payload['college_name'],
            'college_address' => $payload['college_address'],
            'year_level' => $payload['year_level'],
            'college_course' => $payload['college_course'],
            'college_semester' => $payload['college_semester'],
            'transfer_reason' => $payload['transfer_reason'],
            'birth_date' => $payload['birth_date'],
            'birth_place' => $payload['birth_place'],
            'nationality' => $payload['nationality'],
            'foreign_specify' => $payload['foreign_specify'],
            'dialect' => $payload['dialect'],
            'father_name' => $payload['father_name'],
            'father_occupation' => $payload['father_occupation'],
            'mother_name' => $payload['mother_name'],
            'mother_occupation' => $payload['mother_occupation'],
            'guardian' => $payload['guardian'],
            'guardian_relationship' => $payload['guardian_relationship'],
            'guardian_contact' => $payload['guardian_contact'],
            'guardian_address' => $payload['guardian_address'],
            'education_support_name' => $payload['education_support_name'],
            'education_support_relationship' => $payload['education_support_relationship'],
            'req_picture' => $payload['req_picture'] ?? false,
            'req_good_moral' => $payload['req_good_moral'] ?? false,
            'req_form_138' => $payload['req_form_138'] ?? false,
            'req_honorable_dismissal' => $payload['req_honorable_dismissal'] ?? false,
            'signature' => $payload['signature'],
        ]);


        return $studentInformation;
    }

    public function updateStudentInformation($payload, $id)
    {
        // Find the student information by ID
        $studentInformation = StudentInformation::findOrFail($id);

        // Update the student information
        $studentInformation->update([
            'date' => $payload['date'],
            'user_id' => Auth::user()->id,
            'student_status' => $payload['student_status'],
            'student_number' => $payload['student_number'],
            'course' => $payload['course'],
            'school_year' => $payload['school_year'],
            'last_name' => $payload['last_name'],
            'first_name' => $payload['first_name'],
            'middle_name' => $payload['middle_name'],
            'sex' => $payload['sex'],
            'civil_status' => $payload['civil_status'],
            'mailing_address' => $payload['mailing_address'],
            'contact_number' => $payload['contact_number'],
            'shs_name' => $payload['shs_name'],
            'shs_address' => $payload['shs_address'],
            'academic_excellence' => $payload['academic_excellence'],
            'general_average' => $payload['general_average'],
            'shs_year' => $payload['shs_year'],
            'graduated' => $payload['graduated'],
            'college_name' => $payload['college_name'],
            'college_address' => $payload['college_address'],
            'year_level' => $payload['year_level'],
            'college_course' => $payload['college_course'],
            'college_semester' => $payload['college_semester'],
            'transfer_reason' => $payload['transfer_reason'],
            'birth_date' => $payload['birth_date'],
            'birth_place' => $payload['birth_place'],
            'nationality' => $payload['nationality'],
            'foreign_specify' => $payload['foreign_specify'],
            'dialect' => $payload['dialect'],
            'father_name' => $payload['father_name'],
            'father_occupation' => $payload['father_occupation'],
            'mother_name' => $payload['mother_name'],
            'mother_occupation' => $payload['mother_occupation'],
            'guardian' => $payload['guardian'],
            'guardian_relationship' => $payload['guardian_relationship'],
            'guardian_contact' => $payload['guardian_contact'],
            'guardian_address' => $payload['guardian_address'],
            'education_support_name' => $payload['education_support_name'],
            'education_support_relationship' => $payload['education_support_relationship'],
            'req_picture' => $payload['req_picture'] ?? false,
            'req_good_moral' => $payload['req_good_moral'] ?? false,
            'req_form_138' => $payload['req_form_138'] ?? false,
            'req_honorable_dismissal' => $payload['req_honorable_dismissal'] ?? false,
            'signature' => $payload['signature'],
        ]);

        return $studentInformation;
    }
}