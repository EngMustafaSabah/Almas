@extends('admin.layouts.adminlayout')

@section('pageContent')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">tabs & Accordions</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">tabs & Accordions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">tabs & Accordions</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Tab Style-1</div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#orders" aria-current="page" href="#orders">Orders</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#accepted"
                                        href="#accepted">Accepted</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#declined"
                                        href="#declined">Declined</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="orders" role="tabpanel">
                                    <div class="text-muted">
                                        <b>Lorem Ipsum is simply dummy text of the printing</b> and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a
                                        galley of type and scrambled.
                                    </div>
                                </div>
                                <div class="tab-pane" id="accepted" role="tabpanel">
                                    <div class="text-muted">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                        default model text, and a search for <b>'lorem ipsum'</b> will uncover many web
                                        sites still in their infancy.
                                        Various versions have evolved over the years.
                                    </div>
                                </div>
                                <div class="tab-pane" id="declined" role="tabpanel">
                                    <div class="text-muted">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, <b>by injected humour</b>, or randomised
                                        words which don't look even
                                        slightly believable
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Vertical Tab Style-2</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <ul class="nav nav-tabs flex-column vertical-tabs-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                                aria-current="page" href="#home-vertical-custom" aria-selected="true">
                                                <p class="mb-1"><i class="ri-home-4-line"></i></p>
                                                <p class="mb-0 text-break">Home</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#about-vertical-custom" aria-selected="true">
                                                <p class="mb-1"><i class="ri-phone-line"></i></p>
                                                <p class="mb-0 text-break">About</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#services-vertical-custom" aria-selected="true">
                                                <p class="mb-1"><i class="ri-customer-service-line"></i></p>
                                                <p class="mb-0 text-break">Services</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <div class="tab-content">
                                        <div class="tab-pane show active text-muted" id="home-vertical-custom"
                                            role="tabpanel">
                                            <ul class="mb-0">
                                                <li class="mb-2">
                                                    How hotel deals can help you live a better life. <b>How celebrity
                                                        cruises</b> aren't as bad as you think. How cultural solutions can
                                                    help you predict the future. How to cheat at
                                                    dog friendly hotels and get away with it. 17 problems with summer
                                                    activities. How to cheat at travel agents and get away with it. How not
                                                    knowing family trip ideas makes you a
                                                    rookie. What everyone is saying about daily deals.
                                                </li>
                                                <li>
                                                    There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or
                                                    randomised words which don't look
                                                    even slightly believable. If you are going to use a passage of Lorem
                                                    Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane text-muted" id="about-vertical-custom" role="tabpanel">
                                            <ul class="mb-0">
                                                <li class="mb-2">
                                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de
                                                    Finibus Bonorum et Malorum" by Cicero are
                                                    also reproduced in their exact original form, accompanied by English
                                                    versions from the 1914 translation by H. Rackham,How hotel deals can
                                                    help you live a better life.
                                                    <b>How celebrity cruises</b>
                                                </li>
                                                <li>
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC, making it
                                                    over 2000 years old. Richard
                                                    McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                                    looked up one of the more obscure Latin words, consectetur.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane text-muted" id="services-vertical-custom" role="tabpanel">
                                            <ul class="mb-0">
                                                <li class="mb-2">
                                                    There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or
                                                    randomised words which don't look
                                                    even slightly believable. If you are going to use a passage of Lorem
                                                    Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                                </li>
                                                <li>
                                                    How hotel deals can help you live a better life. <b>How celebrity
                                                        cruises</b> aren't as bad as you think. How cultural solutions can
                                                    help you predict the future. How to cheat at
                                                    dog friendly hotels and get away with it. 17 problems with summer
                                                    activities. How to cheat at travel agents and get away with it. How not
                                                    knowing family trip ideas makes you a
                                                    rookie. What everyone is saying about daily deals.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mb-3"> Accordions :</h6>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Primary</div>

                        </div>
                        <div class="card-body">
                            <div class="accordion accordion-primary" id="accordionPrimaryExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPrimaryOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                                            aria-controls="collapsePrimaryOne">Accordion Item #1</button>
                                    </h2>
                                    <div id="collapsePrimaryOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingPrimaryOne" data-bs-parent="#accordionPrimaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPrimaryTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                                            aria-expanded="false" aria-controls="collapsePrimaryTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapsePrimaryTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingPrimaryTwo" data-bs-parent="#accordionPrimaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPrimaryThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                                            aria-expanded="false" aria-controls="collapsePrimaryThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapsePrimaryThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingPrimaryThree" data-bs-parent="#accordionPrimaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Secondary</div>

                        </div>
                        <div class="card-body">
                            <div class="accordion accordion-secondary" id="accordionSecondaryExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSecondaryOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                                            aria-controls="collapseSecondaryOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="collapseSecondaryOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingSecondaryOne" data-bs-parent="#accordionSecondaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSecondaryTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                                            aria-expanded="false" aria-controls="collapseSecondaryTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseSecondaryTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingSecondaryTwo" data-bs-parent="#accordionSecondaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSecondaryThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                                            aria-expanded="false" aria-controls="collapseSecondaryThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseSecondaryThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingSecondaryThree"
                                        data-bs-parent="#accordionSecondaryExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Custom Icon Accordion</div>

                        </div>
                        <div class="card-body">
                            <div class="accordion accordion-customicon1 accordions-items-seperate"
                                id="accordioncustomicon1Example">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1One">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                            aria-controls="collapsecustomicon1One">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                        aria-labelledby="headingcustomicon1One"
                                        data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Two">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                            aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                        aria-labelledby="headingcustomicon1Two"
                                        data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Three">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                            aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                        aria-labelledby="headingcustomicon1Three"
                                        data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Custom Accordion</div>

                        </div>
                        <div class="card-body">
                            <div class="accordion customized-accordion accordions-items-seperate"
                                id="customizedAccordion">
                                <div class="accordion-item custom-accordion-primary">
                                    <h2 class="accordion-header" id="customizedAccordionOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#customized-AccordionOne" aria-expanded="true"
                                            aria-controls="customized-AccordionOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="customized-AccordionOne" class="accordion-collapse collapse show"
                                        aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item custom-accordion-secondary">
                                    <h2 class="accordion-header" id="customizedAccordionTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#customized-AccordionTwo"
                                            aria-expanded="false" aria-controls="customized-AccordionTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="customized-AccordionTwo" class="accordion-collapse collapse"
                                        aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item custom-accordion-danger">
                                    <h2 class="accordion-header" id="customizedAccordionThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#customized-AccordionThree"
                                            aria-expanded="false" aria-controls="customized-AccordionThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="customized-AccordionThree" class="accordion-collapse collapse"
                                        aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use to
                                            style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default variables. It's also worth
                                            noting that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
