@extends('master')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('body-section')
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        <div class="col-12 col-md-5 body-section-title">
            REGISTRATION
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0">
            <p>
                JOSA Data Science Bootcamp is a 6-day bootcamp that targets developers and engineers seeking to learn more about data science and to pursue a position in the data science industry.
            </p>
            <p>
                The bootcamp will be in a practical, hands-on format covering topics in "Obtaining and Cleaning data", "Visualization and Exploratory Data Analytics", "Machine Learning" and other advanced topics.
            </p>

            <div class="mt-5">
                <form method="post" action="/registration" role="form" data-toggle="validator">
                    {{csrf_field()}}

                    {{-- PERSONAL INFORMATION --}}
                    <div class="section mb-5">
                        <div class="form-group" style="border-top: solid 1px white;">
                            <p class="mt-2">
                                PERSONAL INFORMATION
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstNameInput">First And Last Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="emailInput">E-mail</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <label for="gender">Gender</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="gender1" name="gender" class="custom-control-input" value="male" required>
                            <label class="custom-control-label pl-2" for="gender1">Male</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="gender2" name="gender" class="custom-control-input" value="female">
                            <label class="custom-control-label pl-2" for="gender2">Female</label>
                        </div>
                    </div>

                    {{-- SELECTION QUESTIONS --}}
                    <div class="section">
                        <div class="form-group" style="border-top: solid 1px white;">
                            <p class="mt-2">
                                SELECTION QUESTIONN
                            </p>
                            <p>
                                <i>
                                    For this bootcamp, seats will be limited to 30 trainees. Answering these questions will allow us to prioritize candidates and make sure we select people who will benefit from it.
                                </i>
                            </p>
                        </div>
                        <div class="form-section">
                            <label for="gender">
                                Are you a member of Jordan Open Source Association?<br />
                                <i>
                                    Priority is given to JOSA members for this and future trainings offered by JOSA
                                </i>
                            </label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="josaMember1" name="josa_member" class="custom-control-input" value="1" required>
                                <label class="custom-control-label pl-2" for="josaMember1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio mt-2">
                                <input type="radio" id="josaMember2" name="josa_member" class="custom-control-input" value="0">
                                <label class="custom-control-label pl-2" for="josaMember2">No</label>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="inputEmail4">Years of experience</label>
                                <div class="form-row">
                                    <div class="form-group col-4 col-md-4 col-lg-3">
                                        <input type="number" class="form-control" value="0" min="0" name="experience_years" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="inputEmail4">Current Position<br />
                                    <i>
                                        Position and Company (students state the major and years of study)
                                    </i>
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" name="current_position" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="inputEmail4">
                                    Tell us about your experience handling data-related problems
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <textarea class="form-control" rows="5" name="exp_handling_data_related_problems" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="dataScientist">
                                    If a position opens for a data scientist, would you apply for it?
                                </label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="dataScientist1" name="apply_for_data_scientist" class="custom-control-input" value="1" required>
                                    <label class="custom-control-label pl-2" for="dataScientist1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" id="dataScientist2" name="apply_for_data_scientist" class="custom-control-input" value="0">
                                    <label class="custom-control-label pl-2" for="dataScientist2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="inputEmail4">Which operating system you use?<br />
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" name="used_os" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>

                                <label for="inputEmail4">What's your competency level in programming?<a href="#" data-toggle="tooltip" title="
                                    0 - No knowledge in programming.
                                    1 - Beginner: You have a common knowledge or an understanding of basic techniques and concepts, like "for" loops, arrays and conditional statements.
                                    2- Intermediate: You have the level of experience gained in an experimental scenarios or as a trainee on-the-job, you can understand concepts like static vs dynamic typing, weak vs strong typing and static inferred types.
                                    3- Advanced: You can perform the actions associated with programming without assistance, you can understand topics like lazy evaluation, currying and continuations, you are able to come up with reusable functions/objects that solve the overall problem.
                                    4- Expert: You are known as an expert in this area, for example, you are an author of a framework, you have written and published reusable code, or you have designed and implemented several products/solutions in the domain.">

                                </a></label>
                                <div class="form-row">
                                    <div class="form-group col-4 col-md-4 col-lg-3">
                                        <select class="selectpicker" name="programming_exp">
                                          <option value="No knowledge in programming">No knowledge in programming</option>
                                          <option value="Beginner">Beginner</option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                          <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section mb-2">
                            <div>
                                <label for="registrationFees">Registration Fees<br />
                                    <i>
                                        A registration fee of 60 JDs are required to attend the bootcamp.
                                        The fee might be refundable if the participant attends at least 80% of the sessions, contact datascience@jordanopensource.org to check for eligibility criteria.
                                    </i>
                                </label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="registrationFees1" name="registration_fees" class="custom-control-input" value="yes" required>
                                    <label class="custom-control-label pl-2" for="registrationFees1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" id="registrationFees2" name="registration_fees" class="custom-control-input" value="no">
                                    <label class="custom-control-label pl-2" for="registrationFees2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox form-section mb-2 px-0">
                            <label for="time_availability">Time Availability<br />
                                <i>
                                    The bootcamp sessions are connected as a single course. Participants should commit to attend all the sessions. Check the following dates to state that you are committed to attending on the dates below.
                                </i>
                            </label>
                            <div class="mt-4" style="margin-left:26px">
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #1 on Saturday Jan 11, 2020 - 9:30AM to 5:30PM" id="timeAvailability1">
                                    <label class="custom-control-label" for="timeAvailability1">
                                        &nbsp;&nbsp;&nbsp;Session #1 on Saturday Jan 11, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #2 on Saturday Jan 18, 2020 - 9:30AM to 5:30PM" id="timeAvailability2">
                                    <label class="custom-control-label" for="timeAvailability2">
                                        &nbsp;&nbsp;&nbsp;Session #2 on Saturday Jan 18, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #3 on Saturday Jan 25, 2020 - 9:30AM to 5:30PM" id="timeAvailability3">
                                    <label class="custom-control-label" for="timeAvailability3">
                                        &nbsp;&nbsp;&nbsp;Session #3 on Saturday Jan 25, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #4 on Saturday Feb 01, 2020 - 9:30AM to 5:30PM" id="timeAvailability4">
                                    <label class="custom-control-label" for="timeAvailability4">
                                        &nbsp;&nbsp;&nbsp;Session #4 on Saturday Feb 01, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #5 on Saturday Feb 08, 2020 - 9:30AM to 5:30PM" id="timeAvailability5">
                                    <label class="custom-control-label" for="timeAvailability5">
                                        &nbsp;&nbsp;&nbsp;Session #5 on Saturday Feb 08, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                                <div class="checkboxes-section">
                                    <input type="checkbox" class="custom-control-input" name="time_availability[]" value="Session #6 on Saturday Feb 15, 2020 - 9:30AM to 5:30PM" id="timeAvailability6">
                                    <label class="custom-control-label" for="timeAvailability6">
                                        &nbsp;&nbsp;&nbsp;Session #6 on Saturday Feb 15, 2020 - 9:30AM to 5:30PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right pt-4" style="border-top:1px solid white">
                        <button type="submit" class="btn text-white" style="border:2px solid; border-radius:12px;padding-right:35px;padding-left:35px;padding-top:3px;padding-bottom:3px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection
