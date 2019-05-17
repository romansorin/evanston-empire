@extends('app.main')
@section('title', 'Frequently Asked Questions')
@section('content')
<div class="container">
    <div class="jumbotron hero pl-0 pr-0">
        <div class="col-12 text-center" id="faq-wrapper">
            <h1 class="title weight-semibold mx-auto">Frequently Asked Questions</h1>
        </div>
    </div>
</div>
</div>
<div class="container">
    <section class="main-content mt-n5">
        <div class="row section-content">
            <div class="accordion mx-auto" id="accordionOne">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingOne">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What kind of work is it?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="card-body pt-0 pl-2 pr-2">
                            You will be starting as a beginner level sales representative. Our representatives schedule
                            their own one
                            on one appointments to introduce customers to Cutco Cutlery. These demonstrations can take
                            place in
                            person, or online. This isn’t your typical all-day office job. This opportunity is flexible
                            and fun. It
                            allows you to grow personally and personally while working alongside a championship team.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionTwo">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingTwo">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are there any costs to get started?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionTwo">
                        <div class="card-body pt-0 pl-2 pr-2">
                            No, there aren’t any costs to work with us. You don’t pay to work, you work to get paid.
                            After you finish
                            our free training seminar you become an independent contractor. You are loaned a sample kit
                            that is worth
                            $425 in retail value that includes everything you will need for your demonstrations. If you
                            want to
                            discontinue working with us you return the kit to your manager.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionThree">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingThree">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I get paid?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionThree">
                        <div class="card-body pt-0 pl-2 pr-2">
                            Our representatives earn a commission based on their sales. The more you put in the more you
                            will get out.
                            There is a guaranteed minimum base pay ($19) per appointment in case you don’t make a sale.
                            You are paid
                            at the end of each working week and seeing the results you earned will make you smile.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionFour">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingFour">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What will my schedule look like?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFour">
                        <div class="card-body pt-0 pl-2 pr-2">
                            Your schedule is YOUR schedule. As a sales rep, you get the freedom to create your own
                            agenda on your own
                            time. You choose all your own appointment and prep times. No need to dwell on specific hours
                            or days, you
                            know when you are available to grind.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionFive">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingFive">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What experience is needed?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFive">
                        <div class="card-body pt-0 pl-2 pr-2">
                            Five of the best perks of being a sales representative for Cutco is that there is no prior
                            experience is
                            needed. We teach
                            and provide to you everything you will need to know to be successful as a rep. The training
                            seminar is a
                            three-day
                            program led by the office Managers. It is engaging, informational and will teach you skills
                            you can use in
                            any area of
                            life. We also offer ongoing training affairs and conferences so you can continue growing
                            with us.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionSix">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingSix">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Are there any qualifications to begin?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSix">
                        <div class="card-body pt-0 pl-2 pr-2">
                            Applicants have to be 18 years old have a High School diploma. If you are willing to learn,
                            have a
                            positive attitude,
                            and are willing to try new things then you are a perfect candidate.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionSeven">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingSeven">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How can I be successful at this?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                        data-parent="#accordionSeven">
                        <div class="card-body pt-0 pl-2 pr-2">
                            Successful reps should be positive, great communicators, and hard workers. A rep is an
                            independent
                            contractor but is
                            also a team player. Our office culture is active, exciting and a welcoming determined place.
                            You will be
                            surrounded by
                            successful humans daily.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionEight">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingEight">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    How can I qualify for a scholarship?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                        data-parent="#accordionEight">
                        <div class="card-body pt-0 pl-2 pr-2">
                            As a corporation, we award scholarships to student reps every year. To be a candidate for a
                            scholarship you must be a
                            full-time college student and display high standards for a consistent period of time.
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mx-auto" id="accordionNine">
                <div class="accordion-card card">
                    <div class="card-header pl-2 pr-2" id="headingNine">
                        <div class="justify-content-between row mx-0">
                            <h2 class="mb-0">
                                <button class="btn collapsed px-0 text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Still on the fence?
                                </button>
                            </h2>
                            <button class="btn collapsed px-0 mb-0 d-none d-sm-block" type="button"
                                data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                aria-controls="collapseNine"><span class="oi oi-chevron-bottom"></span></button>
                        </div>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionNine">
                        <div class="card-body pt-0 pl-2 pr-2">
                            That is no issue. The smart thing to do would be to come into our office to receive more
                            information on different
                            opportunities for you. Our managers just want the best for you and will support your
                            decisions.
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
