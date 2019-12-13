@extends('master')

@section('body-section')
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        <div class="col-12 col-md-5 body-section-title">
            CALL FOR<br/>
            SPEAKERS<br />
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0">
            <p>
                JOSA Data Science Bootcamp is a 6-day bootcamp that targets developers
                and engineers seeking to learn more about data science and to pursue a
                position in the data science industry.
            </p>
            <p>
                The bootcamp will be in a practical, hands-on format covering topics in
                "Obtaining and Cleaning data", "Visualization and Exploratory Data Analytics",
                "Machine Learning", "Information Retrieval" and "Recommender Systems".
            </p>

            <form method="post" class="pl-5" action="/call-for-speakers" role="form" data-toggle="validator" style="border-left: 1px solid white">
                {{csrf_field()}}

                <div class="form-section">
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
                </div>


                <div class="form-section">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Which topic you would like to cover in the bootcamp?</label>
                        <div>
                            Provide a title and a short summary of the session you are planning to cover.
                        </div>
                        <textarea class="form-control" rows="5" name="preferred_topics" required></textarea>
                    </div>
                    <label for="inputEmail4">How many years of experience do you have in this field?</label>
                    <div class="form-row">
                        <div class="form-group col-4 col-md-4 col-lg-3">
                            <input type="number" class="form-control" value="0" min="0" name="experience_years" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position">Whats your current position? In which company/organization?</label>
                        <input type="text" class="form-control" name="current_position" required>
                    </div>
                </div>

                <div class="form-section">
                    <label for="trainer">Where you a trainer/speaker in the last Data Science Bootcamp organized by JOSA?</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="last_data_science_bootcamp_trainer" class="custom-control-input" value="1" required>
                        <label class="custom-control-label" for="customRadio1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="last_data_science_bootcamp_trainer" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customRadio2">No</label>
                    </div>

                    <label class="mt-4" for="trainer">Are you a JOSA member?</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="josa_member" class="custom-control-input" value="1" required>
                        <label class="custom-control-label" for="customRadio3">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="josa_member" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customRadio4">No</label>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn text-white" style="border:2px solid; border-radius:12px;padding-right:35px;padding-left:35px;padding-top:3px;padding-bottom:3px">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
