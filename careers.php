<html>
  <body> 
  <div id="scrollProgress"></div>
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- ==========================================
CAREER OPPORTUNITIES
========================================== -->

<section class="career-opportunities" id="vacancies">

<div class="container">

<div class="section-header text-center mb-5">

<span class="section-subtitle">

CURRENT OPPORTUNITIES

</span>

<h2>

Explore Career
Opportunities

</h2>

<p>

Whether you're starting your career or bringing
years of experience, Riley Falcon offers
opportunities across multiple service areas.

</p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="career-card">

<i class="bi bi-shield-fill-check"></i>

<h4>

Security Officers

</h4>

<p>

Protect clients, assets and facilities across Kenya.

</p>

<a href="#apply">

Apply →

</a>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="career-card">

<i class="bi bi-person-badge-fill"></i>

<h4>

Supervisors

</h4>

<p>

Lead teams and oversee security operations.

</p>

<a href="#apply">

Apply →

</a>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="career-card">

<i class="bi bi-camera-video-fill"></i>

<h4>

Security Technicians

</h4>

<p>

Install and maintain electronic security systems.

</p>

<a href="#apply">

Apply →

</a>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="career-card">

<i class="bi bi-house-gear-fill"></i>

<h4>

Facilities Staff

</h4>

<p>

Cleaning, maintenance and facility support services.

</p>

<a href="#apply">

Apply →

</a>

</div>

</div>

</div>

</div>

</section>
<!-- ==========================================
CURRENT VACANCIES
========================================== -->

<section class="vacancies-section" id="vacancies">

    <div class="container">

        <div class="section-header text-center mb-5">

            <span class="section-subtitle">

                CURRENT OPENINGS

            </span>

            <h2>

                Join Our Team

            </h2>

            <p>

                Explore current career opportunities at Riley Falcon Security.
                Select a position that matches your skills and apply today.

            </p>

        </div>

        <div class="row g-4">

            <!-- Vacancy -->

            <div class="col-lg-6">

                <div class="vacancy-card">

                    <div class="vacancy-top">

                        <div>

                            <h4>

                                Security Officer

                            </h4>

                            <span>

                                Nairobi

                            </span>

                        </div>

                        <span class="vacancy-badge">

                            Full Time

                        </span>

                    </div>

                    <p>

                        Provide professional guarding services,
                        patrol assigned premises and ensure the
                        safety of clients, staff and assets.

                    </p>

                    <ul>

                        <li>✔ KCSE Certificate</li>

                        <li>✔ Good Communication Skills</li>

                        <li>✔ Physically Fit</li>

                        <li>✔ PSRA Training is an Advantage</li>

                    </ul>

                    <button class="btn btn-main apply-btn"

                            data-position="Security Officer">

                        Apply Now

                    </button>

                </div>

            </div>

            <!-- Vacancy -->

            <div class="col-lg-6">

                <div class="vacancy-card">

                    <div class="vacancy-top">

                        <div>

                            <h4>

                                CCTV Technician

                            </h4>

                            <span>

                                Nairobi

                            </span>

                        </div>

                        <span class="vacancy-badge">

                            Full Time

                        </span>

                    </div>

                    <p>

                        Install, configure and maintain CCTV,
                        alarm systems and access control
                        equipment.

                    </p>

                    <ul>

                        <li>✔ Diploma in Electronics / ICT</li>

                        <li>✔ CCTV Experience</li>

                        <li>✔ Valid Driving Licence</li>

                        <li>✔ Customer Service Skills</li>

                    </ul>

                    <button class="btn btn-main apply-btn"

                            data-position="CCTV Technician">

                        Apply Now

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ==========================================
ONLINE APPLICATION FORM
========================================== -->

<section class="career-application" id="apply">

    <div class="container">

        <div class="section-header text-center mb-5">

            <span class="section-subtitle">

                APPLY NOW

            </span>

            <h2>

                Submit Your Application

            </h2>

            <p>

                Interested in joining Riley Falcon? Complete the form below and
                upload your documents. Our recruitment team will review your
                application and contact shortlisted candidates.

            </p>

        </div>

        <div class="application-wrapper">

            <form action="submit_application.php"
                  method="POST"
                  enctype="multipart/form-data">

                <div class="row">

                    <!-- Full Name -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Full Name *

                        </label>

                        <input type="text"
                               name="fullname"
                               class="form-control"
                               required>

                    </div>

                    <!-- Email -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Email Address *

                        </label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               required>

                    </div>

                    <!-- Phone -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Phone Number *

                        </label>

                        <input type="tel"
                               name="phone"
                               class="form-control"
                               required>

                    </div>

                    <!-- ID -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            National ID / Passport *

                        </label>

                        <input type="text"
                               name="id_number"
                               class="form-control"
                               required>

                    </div>

                    <!-- Position -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Position Applying For *

                        </label>

                        <select class="form-select"
                                name="position"
                                required>

                            <option value="">

                                Select Position

                            </option>

                            <option>

                                Security Officer

                            </option>

                            <option>

                                Supervisor

                            </option>

                            <option>

                                CCTV Technician

                            </option>

                            <option>

                                Alarm Response Officer

                            </option>

                            <option>

                                Cash In Transit Officer

                            </option>

                            <option>

                                K9 Handler

                            </option>

                            <option>

                                Facilities Staff

                            </option>

                            <option>

                                Administration

                            </option>

                        </select>

                    </div>

                    <!-- County -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            County *

                        </label>

                        <input type="text"
                               name="county"
                               class="form-control"
                               required>

                    </div>

                    <!-- Education -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Highest Education

                        </label>

                        <select class="form-select"
                                name="education">

                            <option>KCSE</option>

                            <option>Certificate</option>

                            <option>Diploma</option>

                            <option>Degree</option>

                            <option>Masters</option>

                        </select>

                    </div>

                    <!-- Experience -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Years of Experience

                        </label>

                        <select class="form-select"
                                name="experience">

                            <option>0-1 Years</option>

                            <option>2-5 Years</option>

                            <option>6-10 Years</option>

                            <option>10+ Years</option>

                        </select>

                    </div>

                    <!-- CV -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Upload CV (PDF/DOC)

                        </label>

                        <input type="file"
                               class="form-control"
                               name="cv"
                               accept=".pdf,.doc,.docx"
                               required>

                    </div>

                    <!-- Cover Letter -->

                    <div class="col-lg-6 mb-4">

                        <label>

                            Cover Letter

                        </label>

                        <input type="file"
                               class="form-control"
                               name="cover_letter"
                               accept=".pdf,.doc,.docx">

                    </div>

                    <!-- Certificates -->

                    <div class="col-lg-12 mb-4">

                        <label>

                            Certificates & Supporting Documents

                        </label>

                        <input type="file"
                               class="form-control"
                               name="certificates[]"
                               multiple>

                    </div>

                    <!-- Message -->

                    <div class="col-lg-12 mb-4">

                        <label>

                            Why would you like to join Riley Falcon?

                        </label>

                        <textarea class="form-control"
                                  rows="6"
                                  name="message"></textarea>

                    </div>

                    <!-- Terms -->

                    <div class="col-lg-12 mb-4">

                        <div class="form-check">

                            <input class="form-check-input"
                                   type="checkbox"
                                   required>

                            <label class="form-check-label">

                                I certify that the information provided is
                                true and accurate.

                            </label>

                        </div>

                    </div>

                    <!-- Submit -->

                    <div class="col-lg-12 text-center">

                        <button class="btn btn-main btn-lg px-5">

                            <i class="bi bi-send-fill me-2"></i>

                            Submit Application

                        </button>

                    </div>

                </div>

            </form>

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
<script>

document.querySelectorAll('.apply-btn').forEach(button=>{

button.addEventListener('click',function(){

let position=this.dataset.position;

document.querySelector('select[name="position"]').value=position;

document.getElementById('apply').scrollIntoView({

behavior:'smooth'

});

});

});

</script>
</body> 
</html>