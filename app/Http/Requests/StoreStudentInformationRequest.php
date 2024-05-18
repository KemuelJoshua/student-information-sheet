<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentInformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date' => 'required',
            'student_status' => 'required',
            'student_number' => 'required',
            'course' => 'required',
            'school_year' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'sex' => 'required',
            'civil_status' => 'required',
            'mailing_address' => 'required',
            'contact_number' => 'required',
            'shs_name' => 'required',
            'shs_address' => 'required',
            'academic_excellence' => 'required',
            'general_average' => 'required|numeric',
            'shs_year' => 'required',
            'graduated' => 'required',
            'college_name' => 'required',
            'college_address' => 'required',
            'year_level' => 'required',
            'college_course' => 'required',
            'college_semester' => 'required',
            'transfer_reason' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'nationality' => 'required',
            'foreign_specify' => '',
            'dialect' => 'required',
            'father_name' => 'required',
            'father_occupation' => 'required',
            'mother_name' => 'required',
            'mother_occupation' => 'required',
            'guardian' => 'required',
            'guardian_relationship' => 'required',
            'guardian_contact' => 'required',
            'guardian_address' => 'required',
            'education_support_name' => 'required',
            'education_support_relationship' => 'required',
            'req_picture' => '',
            'req_good_moral' => '',
            'req_form_138' => '',
            'req_honorable_dismissal' => '',
            'signature' => '',
        ];
    }
}
