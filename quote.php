<html>
  <body> 
  <div id="scrollProgress"></div>
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- ==========================================
REQUEST QUOTE HEADER
========================================== -->

<section class="quote-header">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center" data-aos="fade-up">

                <nav class="about-breadcrumb">

                    <a href="index.php">Home</a>

                    <span class="mx-2">/</span>

                    Request Quote

                </nav>

                <span class="section-tag">

                    REQUEST A SECURITY ASSESSMENT

                </span>

                <h1>

                    Let's Build Your
                    <br>
                    Security Solution

                </h1>

            </div>

        </div>

    </div>

    <div class="shape shape1"></div>

    <div class="shape shape2"></div>

    <div class="shape shape3"></div>

</section>

<!-- ==========================================
QUOTE PROCESS
========================================== -->

<section class="quote-process">

    <div class="container">

        <div class="section-header text-center">

            <span class="section-subtitle">

                HOW IT WORKS

            </span>

            <h2>

                Getting Your Security Proposal Is Easy

            </h2>

            <p>

                Our consultants work closely with you to understand your
                security requirements before recommending the most suitable
                solution.

            </p>

        </div>

        <div class="process-wrapper">

            <!-- Step 1 -->

            <div class="process-step">

                <div class="step-circle">

                    <span>1</span>

                </div>

                <div class="step-icon">

                    <i class="bi bi-ui-checks-grid"></i>

                </div>

                <h5>

                    Submit Request

                </h5>

                <p>

                    Complete the quotation request form with your requirements.

                </p>

            </div>

            <div class="process-arrow">

                <i class="bi bi-arrow-right"></i>

            </div>

            <!-- Step 2 -->

            <div class="process-step">

                <div class="step-circle">

                    <span>2</span>

                </div>

                <div class="step-icon">

                    <i class="bi bi-building-check"></i>

                </div>

                <h5>

                    Site Assessment

                </h5>

                <p>

                    We evaluate your security needs and operational risks.

                </p>

            </div>

            <div class="process-arrow">

                <i class="bi bi-arrow-right"></i>

            </div>

            <!-- Step 3 -->

            <div class="process-step">

                <div class="step-circle">

                    <span>3</span>

                </div>

                <div class="step-icon">

                    <i class="bi bi-file-earmark-text"></i>

                </div>

                <h5>

                    Receive Proposal

                </h5>

                <p>

                    Receive a customized quotation and implementation plan.

                </p>

            </div>

            <div class="process-arrow">

                <i class="bi bi-arrow-right"></i>

            </div>

            <!-- Step 4 -->

            <div class="process-step">

                <div class="step-circle">

                    <span>4</span>

                </div>

                <div class="step-icon">

                    <i class="bi bi-shield-check"></i>

                </div>

                <h5>

                    Secure Your Business

                </h5>

                <p>

                    Our team deploys the agreed security solution.

                </p>

            </div>

        </div>

    </div>

</section>
<!-- ==========================================
REQUEST QUOTE FORM
========================================== -->

<section class="quote-form-section">

    <div class="container">

        <div class="row g-5">

            <!-- ===================================
            LEFT SIDE
            ==================================== -->

            <div class="col-lg-8">

                <div class="quote-card">

                    <h3>

                        Request a Security Quotation

                    </h3>

                    <p class="mb-5">

                        Complete the form below and one of our consultants
                        will contact you within one business day.

                    </p>

                    <form
                        action="submit_quote.php"
                        method="POST"
                        enctype="multipart/form-data">

                        <div class="row">

                            <!-- Name -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Full Name *

                                </label>

                                <input
                                    type="text"
                                    name="fullname"
                                    class="form-control"
                                    required>

                            </div>

                            <!-- Company -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Company Name

                                </label>

                                <input
                                    type="text"
                                    name="company"
                                    class="form-control">

                            </div>

                            <!-- Email -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Email Address *

                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    required>

                            </div>

                            <!-- Phone -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Phone Number *

                                </label>

                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    required>

                            </div>

                            <!-- Service -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Service Required *

                                </label>

                                <select
                                    class="form-select"
                                    name="service"
                                    required>

                                    <option value="">

                                        Select Service

                                    </option>

                                    <option>

                                        Professional Guarding

                                    </option>

                                    <option>

                                        Alarm Monitoring

                                    </option>

                                    <option>

                                        CCTV Surveillance

                                    </option>

                                    <option>

                                        Access Control

                                    </option>

                                    <option>

                                        Electric Fence

                                    </option>

                                    <option>

                                        Mobile Patrol

                                    </option>

                                    <option>

                                        Cash In Transit

                                    </option>

                                    <option>

                                        K9 Services

                                    </option>

                                    <option>

                                        Fire Detection

                                    </option>

                                    <option>

                                        Other

                                    </option>

                                </select>

                            </div>

                            <!-- County -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    County

                                </label>

                                <input
                                    type="text"
                                    name="county"
                                    class="form-control">

                            </div>

                            <!-- Address -->

                            <div class="col-12 mb-4">

                                <label>

                                    Site Address

                                </label>

                                <input
                                    type="text"
                                    name="location"
                                    class="form-control">

                            </div>

                            <!-- Guards -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Number of Guards Required

                                </label>

                                <input
                                    type="number"
                                    class="form-control"
                                    name="guards">

                            </div>

                            <!-- Start -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Preferred Start Date

                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    name="start_date">

                            </div>

                            <!-- Budget -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Estimated Budget

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="budget">

                            </div>

                            <!-- Upload -->

                            <div class="col-md-6 mb-4">

                                <label>

                                    Attach Site Plan / BOQ

                                </label>

                                <input
                                    type="file"
                                    class="form-control"
                                    name="attachment">

                            </div>

                            <!-- Message -->

                            <div class="col-12 mb-4">

                                <label>

                                    Tell Us About Your Requirements

                                </label>

                                <textarea
                                    rows="6"
                                    class="form-control"
                                    name="message"></textarea>

                            </div>

                            <div class="col-12">

                                <div class="form-check mb-4">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        required>

                                    <label class="form-check-label">

                                        I agree to the Privacy Policy.

                                    </label>

                                </div>

                                <button
                                    class="btn btn-main btn-lg">

                                    <i class="bi bi-send-fill me-2"></i>

                                    Request Quotation

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <!-- ===================================
            RIGHT SIDE
            ==================================== -->

            <div class="col-lg-4">

                <!-- Why Choose -->

                <div class="quote-sidebar">

                    <h4>

                        Why Riley Falcon?

                    </h4>

                    <ul>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Free Consultation
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Site Assessment Available
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Tailored Security Solutions
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Fast Response
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            24/7 Support
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Nationwide Coverage
                        </li>

                    </ul>

                </div>

                <!-- Emergency Card -->

                <div class="emergency-card mt-4">

                    <i class="bi bi-headset"></i>

                    <h4>

                        Need Immediate Assistance?

                    </h4>

                    <p>

                        Speak to our security consultants.

                    </p>

                    <h5>

                        +254 722 716 581

                    </h5>

                    <h5>

                        +254 733 617 817

                    </h5>

                    <a
                        href="tel:+254722716581"
                        class="btn btn-light mt-3">

                        Call Now

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<footer class="footer">

    <div class="container">

        <div class="row gy-5">

            <!-- Company -->

            <div class="col-lg-4">

                <img src="assets/images/logo.png"
                     class="footer-logo"
                     alt="Riley Falcon">

                <p class="footer-about">

                    Riley Falcon Security is a leading provider of integrated security
                    solutions including professional guarding, electronic security,
                    alarm monitoring, CCTV, K9 services and cash management.

                </p>

                <div class="footer-certifications">

                    <img src="assets/images/9001.png" alt="ISO 9001">

                    <img src="assets/images/45001.jpg" alt="ISO 45001">

                </div>

            </div>

            <!-- Solutions -->

            <div class="col-lg-2">

                <h5>Solutions</h5>

                <ul>

                    <li><a href="#">Guarding</a></li>

                    <li><a href="#">Electronic Security</a></li>

                    <li><a href="#">Alarm Monitoring</a></li>

                    <li><a href="#">Cash in Transit</a></li>

                    <li><a href="#">K9 Services</a></li>

                </ul>

            </div>

            <!-- Company -->

            <div class="col-lg-2">

                <h5>Company</h5>

                <ul>

                    <li><a href="about.php">About Us</a></li>

                    <li><a href="industries.php">Industries</a></li>

                    <li><a href="products.php">Products</a></li>

                    <li><a href="careers.php">Careers</a></li>

                    <li><a href="contact.php">Contact</a></li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-4">

                <h5>Contact Us</h5>

                <ul class="contact-list">

                    <li><i class="bi bi-geo-alt"></i> Nairobi, Kenya</li>

                    <li><i class="bi bi-telephone"></i> +254 722 716 581 / +254 733 617 817  </li>

                    <li><i class="bi bi-envelope"></i> info@rileyfalcon.co.ke</li>

                    <li><i class="bi bi-clock"></i> 24/7 Operations</li>

                </ul>

                <div class="footer-social">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-linkedin"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <p>

                © <?= date('Y'); ?> Riley Falcon Security.
                All Rights Reserved.

            </p>

            <div>

                <a href="#">Privacy Policy</a>

                <a href="#">Terms of Use</a>

                <a href="#">Sitemap</a>

            </div>

        </div>

    </div>

</footer>
<?php include "includes/footer.php"; ?>
<?php include "includes/scripts.php"; ?>

</body> 
</html>