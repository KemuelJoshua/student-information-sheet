@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Student information form') }}</div>
    
                    <div class="card-body">
    
                        <form id="student-form">
                            <!-- Date -->
                            <div class="form-group mb-3">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                                <span class="text-danger d-none" id="date_error"></span>
                            </div>
                        
                            <!-- Student Status -->
                            <div class="form-group mb-3">
                                <label for="student_status">Student Status</label><br>
                                <select class="form-control" id="student_status" name="student_status">
                                    <option value="new">New</option>
                                    <option value="old">Old</option>
                                    <option value="transferee">Transferee</option>
                                </select>
                            </div>
                        
                            <!-- Student Number -->
                            <div class="form-group mb-3">
                                <label for="student_number">Student Number</label>
                                <input type="text" class="form-control" id="student_number" name="student_number">
                                <span class="text-danger d-none" id="student_number_error"></span>
                            </div>
                        
                            <!-- Course -->
                            <div class="form-group mb-3">
                                <label for="course">Course</label>
                                <input type="text" class="form-control" id="course" name="course">
                                <span class="text-danger d-none" id="course_error"></span>
                            </div>
                        
                            <!-- School Year -->
                            <div class="form-group mb-3">
                                <label for="school_year">School Year</label>
                                <input type="text" class="form-control" id="school_year" name="school_year">
                                <span class="text-danger d-none" id="school_year_error"></span>
                            </div>
                        
                            <!-- Student Name -->
                            <div class="form-group mb-3">
                                <label for="first_name">Firstname</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                                <span class="text-danger d-none" id="first_name_error"></span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="middle_name">Middlename</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                                <span class="text-danger d-none" id="middle_name_error"></span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="last_name">Lastname</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                                <span class="text-danger d-none" id="last_name_error"></span>
                            </div>
                        
                            <!-- Sex -->
                            <div class="form-group mb-3">
                                <label for="sex">Sex</label><br>
                                <select class="form-control" id="sex" name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        
                            <!-- Civil Status -->
                            <div class="form-group mb-3">
                                <label for="civil_status">Civil Status</label><br>
                                <select class="form-control" id="civil_status" name="civil_status">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>                            
                        
                            <!-- Mailing Address -->
                            <div class="form-group mb-3">
                                <label for="mailing_address">Mailing Address</label>
                                <textarea class="form-control" id="mailing_address" name="mailing_address" rows="3"></textarea>
                                <span class="text-danger d-none" id="mailing_address_error"></span>
                            </div>
                        
                            <!-- Contact Number -->
                            <div class="form-group mb-3">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number">
                                <span class="text-danger d-none" id="contact_number_error"></span>
                            </div>
                        
                            <!-- Senior High School Details -->
                            <h4>Senior High School</h4>
                            <div class="form-group mb-3">
                                <label for="shs_name">School Name</label>
                                <input type="text" class="form-control" id="shs_name" name="shs_name">
                                <span class="text-danger d-none" id="shs_name_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="shs_address">School Address</label>
                                <input type="text" class="form-control" id="shs_address" name="shs_address">
                                <span class="text-danger d-none" id="shs_address_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="academic_excellence">Academic Excellence</label>
                                <input type="text" class="form-control" id="academic_excellence" name="academic_excellence">
                                <span class="text-danger d-none" id="academic_excellence_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="general_average">General Average</label>
                                <input type="text" class="form-control" id="general_average" name="general_average">
                                <span class="text-danger d-none" id="general_average_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="shs_year">Year</label>
                                <input type="text" class="form-control" id="shs_year" name="shs_year">
                                <span class="text-danger d-none" id="shs_year_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="graduated">Graduated</label>
                                <input type="text" class="form-control" id="graduated" name="graduated">
                                <span class="text-danger d-none" id="graduated_error"></span>
                            </div>
                        
                            <!-- College Transfer Details -->
                            <h4>College Transfer</h4>
                            <div class="form-group mb-3">
                                <label for="college_name">School Name</label>
                                <input type="text" class="form-control" id="college_name" name="college_name">
                                <span class="text-danger d-none" id="college_name_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="college_address">School Address</label>
                                <input type="text" class="form-control" id="college_address" name="college_address">
                                <span class="text-danger d-none" id="college_address_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="year_level">Year Level</label>
                                <input type="text" class="form-control" id="year_level" name="year_level">
                                <span class="text-danger d-none" id="year_level_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="college_course">Course</label>
                                <input type="text" class="form-control" id="college_course" name="college_course">
                                <span class="text-danger d-none" id="college_course_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="college_semester">School Semester</label>
                                <input type="text" class="form-control" id="college_semester" name="college_semester">
                                <span class="text-danger d-none" id="college_semester_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="transfer_reason">Reason(s) to transfer AU</label>
                                <textarea class="form-control" id="transfer_reason" name="transfer_reason" rows="3"></textarea>
                                <span class="text-danger d-none" id="transfer_reason_error"></span>
                            </div>
                        
                            <!-- Birth Details -->
                            <h4>Birth Details</h4>
                            <div class="form-group mb-3">
                                <label for="birth_date">Date of Birth</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date">
                                <span class="text-danger d-none" id="birth_date_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="birth_place">Birth Place</label>
                                <input type="text" class="form-control" id="birth_place" name="birth_place">
                                <span class="text-danger d-none" id="birth_place_error"></span>
                            </div>
                        
                            <!-- Nationality -->
                            <div class="form-group mb-3">
                                <label for="nationality">Nationality</label><br>
                                <select class="form-control" id="nationality" name="nationality">
                                    <option value="filipino">Filipino</option>
                                    <option value="foreign">Foreign</option>
                                </select>
                                <input type="text" class="form-control mt-2 d-none" id="foreign_specify" name="foreign_specify" placeholder="If Foreign, Please Specify">
                                <span class="text-danger d-none" id="foreign_specify_error"></span>
                            </div>
                        
                            <!-- Dialect -->
                            <div class="form-group mb-3">
                                <label for="dialect">Dialect</label>
                                <input type="text" class="form-control" id="dialect" name="dialect">
                                <span class="text-danger d-none" id="dialect_error"></span>
                            </div>
                        
                            <!-- Parent/Guardian Details -->
                            <h4>Parent/Guardian Details</h4>
                            <div class="form-group mb-3">
                                <label for="father_name">Father's Name</label>
                                <input type="text" class="form-control" id="father_name" name="father_name">
                                <span class="text-danger d-none" id="father_name_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="father_occupation">Occupation</label>
                                <input type="text" class="form-control" id="father_occupation" name="father_occupation">
                                <span class="text-danger d-none" id="father_occupation_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_name">Mother's Name</label>
                                <input type="text" class="form-control" id="mother_name" name="mother_name">
                                <span class="text-danger d-none" id="mother_name_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_occupation">Occupation</label>
                                <input type="text" class="form-control" id="mother_occupation" name="mother_occupation">
                                <span class="text-danger d-none" id="mother_occupation_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="guardian">Guardian</label>
                                <input type="text" class="form-control" id="guardian" name="guardian">
                                <span class="text-danger d-none" id="guardian_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="guardian_relationship">Relationship</label>
                                <input type="text" class="form-control" id="guardian_relationship" name="guardian_relationship">
                                <span class="text-danger d-none" id="guardian_relationship_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="guardian_contact">Contact Number</label>
                                <input type="text" class="form-control" id="guardian_contact" name="guardian_contact">
                                <span class="text-danger d-none" id="guardian_contact_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="guardian_address">Mailing Address</label>
                                <textarea class="form-control" id="guardian_address" name="guardian_address" rows="3"></textarea>
                                <span class="text-danger d-none" id="guardian_address_error"></span>
                            </div>
                        
                            <!-- Education Support -->
                            <div class="form-group mb-3">
                                <label for="education_support_name">Education Support Name</label>
                                <input type="text" class="form-control" id="education_support_name" name="education_support_name">
                                <span class="text-danger d-none" id="education_support_name_error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="education_support_relationship">Relationship</label>
                                <input type="text" class="form-control" id="education_support_relationship" name="education_support_relationship">
                                <span class="text-danger d-none" id="education_support_relationship_error"></span>
                            </div>
                        
                            <!-- Requirements Submitted -->
                            <h4>Requirements Submitted</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="req_picture" name="req_picture" value="1">
                                <label class="form-check-label" for="req_picture">Picture 2x2 (1pc.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="req_good_moral" name="req_good_moral" value="1">
                                <label class="form-check-label" for="req_good_moral">Certificate of Good Moral Character</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="req_form_138" name="req_form_138" value="1">
                                <label class="form-check-label" for="req_form_138">Form 138 (HS Card)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="req_honorable_dismissal" name="req_honorable_dismissal" value="1">
                                <label class="form-check-label" for="req_honorable_dismissal">Honorable Dismissal</label>
                            </div>                            
                        
                            <!-- Signature -->
                            <div class="form-group mb-3 mt-4">
                                <label for="signature">Signature</label>
                                <input type="text" class="form-control" id="signature" name="signature">
                                <span class="text-danger d-none" id="signature_error"></span>
                            </div>
                        
                            <button type="button" class="btn btn-warning" id="update-button">Update</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        // Edit show
        let id = {{ $id }};
        $(document).ready(function() {

            // Remove the previous error if there is
            $('.text-danger').addClass('d-none');
            $('.form-control').removeClass('is-invalid');

            axios.get(`/student-information/${id}/edit`)
            .then((response) => {
                const data = response.data.data;
                console.log(response)

                // Populate the form fields with the data
                $('#date').val(data.date);
                $('#student_status').val(data.student_status);
                $('#student_number').val(data.student_number);
                $('#course').val(data.course);
                $('#school_year').val(data.school_year);
                $('#last_name').val(data.last_name);
                $('#first_name').val(data.first_name);
                $('#middle_name').val(data.middle_name);
                $('#sex').val(data.sex);
                $('#civil_status').val(data.civil_status);
                $('#mailing_address').val(data.mailing_address);
                $('#contact_number').val(data.contact_number);
                $('#shs_name').val(data.shs_name);
                $('#shs_address').val(data.shs_address);
                $('#academic_excellence').val(data.academic_excellence);
                $('#general_average').val(data.general_average);
                $('#shs_year').val(data.shs_year);
                $('#graduated').val(data.graduated);
                $('#college_name').val(data.college_name);
                $('#college_address').val(data.college_address);
                $('#year_level').val(data.year_level);
                $('#college_course').val(data.college_course);
                $('#college_semester').val(data.college_semester);
                $('#transfer_reason').val(data.transfer_reason);
                $('#birth_date').val(data.birth_date);
                $('#birth_place').val(data.birth_place);
                $('#nationality').val(data.nationality);
                $('#foreign_specify').val(data.foreign_specify);
                $('#dialect').val(data.dialect);
                $('#father_name').val(data.father_name);
                $('#father_occupation').val(data.father_occupation);
                $('#mother_name').val(data.mother_name);
                $('#mother_occupation').val(data.mother_occupation);
                $('#guardian').val(data.guardian);
                $('#guardian_relationship').val(data.guardian_relationship);
                $('#guardian_contact').val(data.guardian_contact);
                $('#guardian_address').val(data.guardian_address);
                $('#education_support_name').val(data.education_support_name);
                $('#education_support_relationship').val(data.education_support_relationship);
                // Check checkboxes based on the data
                $('#req_picture').prop('checked', data.req_picture);
                $('#req_good_moral').prop('checked', data.req_good_moral);
                $('#req_form_138').prop('checked', data.req_form_138);
                $('#req_honorable_dismissal').prop('checked', data.req_honorable_dismissal);
                $('#signature').val(data.signature);

                // Show the "please specify when it has data"
                const foreignSpecifyInput = document.getElementById('foreign_specify');
                if($('#foreign_specify') != null) {
                    foreignSpecifyInput.classList.remove('d-none');
                } else {
                    foreignSpecifyInput.classList.add('d-none');
                    foreignSpecifyInput.value = '';
                }
            })
            .catch(error => {
                Swal.fire({
                    title: "Oops!",
                    text: "Something went wrong, try again later!",
                    icon: "error"
                });
            });
        });

        // Show "please specify input"
        document.getElementById('nationality').addEventListener('change', function() {
            const nationality = this.value;
            const foreignSpecifyInput = document.getElementById('foreign_specify');
            if (nationality === 'foreign') {
                foreignSpecifyInput.classList.remove('d-none');
            } else {
                foreignSpecifyInput.classList.add('d-none');
                foreignSpecifyInput.value = '';
            }
        });


        // Create
        $('#update-button').click(function(e) {
            e.preventDefault();

            const formData = {
                date: $('#date').val(),
                student_status: $('#student_status').val(),
                student_number: $('#student_number').val(),
                course: $('#course').val(),
                school_year: $('#school_year').val(),
                last_name: $('#last_name').val(),
                first_name: $('#first_name').val(),
                middle_name: $('#middle_name').val(),
                sex: $('#sex').val(),
                civil_status: $('#civil_status').val(),
                mailing_address: $('#mailing_address').val(),
                contact_number: $('#contact_number').val(),
                shs_name: $('#shs_name').val(),
                shs_address: $('#shs_address').val(),
                academic_excellence: $('#academic_excellence').val(),
                general_average: $('#general_average').val(),
                shs_year: $('#shs_year').val(),
                graduated: $('#graduated').val(),
                college_name: $('#college_name').val(),
                college_address: $('#college_address').val(),
                year_level: $('#year_level').val(),
                college_course: $('#college_course').val(),
                college_semester: $('#college_semester').val(),
                transfer_reason: $('#transfer_reason').val(),
                birth_date: $('#birth_date').val(),
                birth_place: $('#birth_place').val(),
                nationality: $('#nationality').val(),
                foreign_specify: $('#foreign_specify').val(),
                dialect: $('#dialect').val(),
                father_name: $('#father_name').val(),
                father_occupation: $('#father_occupation').val(),
                mother_name: $('#mother_name').val(),
                mother_occupation: $('#mother_occupation').val(),
                guardian: $('#guardian').val(),
                guardian_relationship: $('#guardian_relationship').val(),
                guardian_contact: $('#guardian_contact').val(),
                guardian_address: $('#guardian_address').val(),
                education_support_name: $('#education_support_name').val(),
                education_support_relationship: $('#education_support_relationship').val(),
                req_picture: $('#req_picture').prop('checked') ? 1 : 0,
                req_good_moral: $('#req_good_moral').prop('checked') ? 1 : 0,
                req_form_138: $('#req_form_138').prop('checked') ? 1 : 0,
                req_honorable_dismissal: $('#req_honorable_dismissal').prop('checked') ? 1 : 0,
                signature: $('#signature').val()
            };

            axios.put(`/student-information/${id}`, formData, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                Swal.fire({
                    title: "Success!",
                    text: "Your data has been saved.",
                    icon: "success"
                }); 
            })
            .catch(error => {
                if (error.response && error.response.status === 422) {
                    // Clear previous error messages
                    $('.text-danger').addClass('d-none');
                    $('.form-control').removeClass('is-invalid');

                    const errors = error.response.data.errors;
                    $.each(errors, function(field, errorMessage) {
                        const errorSpanId = field + '_error';
                        $('#' + field).addClass('is-invalid');
                        $('#' + errorSpanId).removeClass('d-none').text(errorMessage[0]);
                    });
                } else {
                    Swal.fire({
                        title: "Oops!",
                        text: "Something went wrong, try again later!",
                        icon: "error"
                    });
                }
            });
        });

    </script>
@endsection