@extends('master')

@section('body-section')
    <div class="row mb-5">
        <div  class="col-12 col-md-5 body-section-title">

        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0 text-center">
            <h5>
                REGISTRATION IS<br />
                NOW OPEN!
            </h5>
            <div class="mt-4">
                <a class="btn text-white buttons" href="/registration">APPLY NOW</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="about-us" class="col-12 col-md-5 body-section-title">
            GREET THE NEXT<br />
            GENERATION OF<br />
            DATA SCIENTISTS
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body px-0 py-5" style="border-top: 1px solid white">
            <p>
                JOSA Data Science Bootcamp is a 6-day bootcamp that targets developers and engineers seeking to learn more about data science and to pursue a position in the data science industry.
            </p>
            <p>
                The bootcamp will be in a practical, hands-on format covering topics in "Obtaining and Cleaning data", "Visualization and Exploratory Data Analytics", "Machine Learning" and other advanced topics.
            </p>
            <p>
                The bootcamp is organized by Jordan Open Source Association and delivered by Jordanian data scientists who made sure that the content is relevant to the growing data science industry in Jordan.
            </p>
            <p>
                The bootcamp will take place between January 11, 2020 and Feb 15, 2020. The hands-on sessions will be delivered on 6 consecutive Saturdays to allow people who have fulltime jobs to join.
            </p>
            <img class="mt-5" src="/images/sponsors.svg" alt="JOSA DATA SCIENCE BOOTCAMP LOGO" style="width: 200px;">
        </div>
    </div>
    <div class="row">
        <div id="agenda" class="col-12 col-md-5 body-section-title pl-0">
            BOOTCAMP<br />
            AGENDA
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0 py-5" style="border-top: 1px solid white">
            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    <div>
                        DAY 1<span class="delimiter pr-4">&nbsp;</span>January 11, 2020
                    </div>
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Obtaining & Cleaning Data</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    DAY 2<span class="delimiter pr-4">&nbsp;</span>January 18, 2020
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Data Visualization and Exploratory Data Analytics</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    DAY 3<span class="delimiter pr-4">&nbsp;</span>January 25, 2020
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Machine Learning (1) - Regression</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>

            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    DAY 4<span class="delimiter pr-4">&nbsp;</span>February 1, 2020
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Machine Learning (2) - Classification</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>

            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    DAY 5<span class="delimiter pr-4">&nbsp;</span>February 8, 2020
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Machine Learning (3) - Ensemble Methods</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>
            <div class="media" style="position:relative">
                <span class="trainer-circle"></span>
                <div class="media-body">
                    DAY 6<span class="delimiter pr-4">&nbsp;</span>February 15, 2020
                    <div class="title-line-section pb-5">
                        <h5 class="topic mt-2">Advanced Topics</h5>
                        <p>

                        </p>
                        <p>
                            <em></em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="row">
        <div id="sponsorship" class="col-12 col-md-5 body-section-title pl-0">
            TRAINERS & <br />
            CONTRIBUTORS
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0 py-4" style="border-top: 1px solid white">
            <div class="media mt-4" style="position:relative">
                <img src="/images/placeholder.png" class="trainer-img align-self-start mr-3 mt-2" alt="...">
                <span class="trainer-line"></span>
                <span class="trainer-circle"></span>
                <div class="media-body">
                    <h5 class="mt-0">Wael Farhan</h5>
                    <p>Director of Machine Learning at Mawdoo3.com</p>
                </div>
            </div>
            <div class="media mt-4" style="position:relative">
                <img src="/images/placeholder.png" class="trainer-img align-self-start mr-3 mt-2" alt="...">
                <span class="trainer-line"></span>
                <span class="trainer-circle"></span>
                <div class="media-body">
                    <h5 class="mt-0">Moayyad Yaghi</h5>
                    <p>Lead Data Scientist at Zain</p>
                </div>
            </div>
            <div class="media mt-4" style="position:relative">
                <img src="/images/placeholder.png" class="trainer-img align-self-start mr-3 mt-2" alt="...">
                <span class="trainer-line"></span>
                <span class="trainer-circle"></span>
                <div class="media-body">
                    <h5 class="mt-0">Mahmoud Mansour</h5>
                    <p>Data Scientist at ArabiaWeather Inc</p>
                </div>
            </div>
            <div class="media mt-4" style="position:relative">
                <img src="/images/placeholder.png" class="trainer-img align-self-start mr-3 mt-2" alt="...">
                <span class="trainer-line"></span>
                <span class="trainer-circle"></span>
                <div class="media-body">
                    <h5 class="mt-0">Hani Al-Shater</h5>
                    <p>Science Manager at Amazon</p>
                </div>
            </div>
        </div>
    </div>
 --}}
    <div class="row">
        <div class="col-12 col-md-5 body-section-title pl-0">
            CONTACT<br />
            US
        </div>
        <div class="col-12 col-md-7 mt-4 mt-md-0 text-left div-section-body pr-0 pt-5" style="border-top: 1px solid white">
            Have a question? Contact us:<br />
            <i class="far fa-envelope mr-2"></i>Email: <a class="text-light" href="mailto:datascience@jordanopensource.org">datascience@jordanopensource.org</a><br />
            <i class="fab fa-facebook-messenger mr-2"></i>Facebook Messenger: <a class="text-light" target="_blank" href="https://m.me/jordanopensource">https://m.me/jordanopensource</a>
        </div>
    </div>
@endsection
