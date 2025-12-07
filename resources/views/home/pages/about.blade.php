@extends('home.layout.default')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ol>
            <h2>About Us</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Best Ambulances Available for You: Trusted Ambulance Services in Your City</h3>
            <p class="fst-italic">
            Emergency Ambulance Booking is a 100% Sri Lankan emergency service.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Emergency Drugs</li>
              <li><i class="bi bi-check-circle"></i> Critical Care Transport</li>
              <li><i class="bi bi-check-circle"></i> Event Medical Services</li>
              <li><i class="bi bi-check-circle"></i> Community Paramedicine Programs</li>
              <li><i class="bi bi-check-circle"></i> Disaster Response Teams</li>

            </ul>
            <p>
            At Emergency Ambulance Booking, we are committed to ensuring the health and safety of every Sri Lankan. As dedicated stewards of public well-being, we continuously monitor the evolving landscape of the coronavirus (COVID-19) pandemic. With unwavering diligence, we proactively implement stringent measures to fortify the resilience of our communities against the challenges posed by this global health crisis. Your safety is our paramount concern, and we spare no effort in safeguarding your welfare during these unprecedented times.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Happy Clients</strong> Our contented patrons are a testament to the excellence of our ambulance services.</p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Bookings</strong> Seamless access to our ambulance services for swift assistance</p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hours Of Support</strong> Our team is available 24/7 to provide aid whenever needed</p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hard Workers</strong> Our diligent experts ensure swift ambulance services, working tirelessly regardless</p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title">
                <h2>Clients</h2>
                <p>
                    Our Ambulance Management System is trusted by hospitals, clinics, and emergency service providers 
                    across the region. By offering reliable dispatch, real-time tracking, and secure patient management, 
                    we empower healthcare organizations to respond faster and save more lives. 
                    Our clients rely on us to deliver technology-driven solutions that make emergency care seamless.
                </p>
            </div>

            <div class="clients-slider swiper">
           <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title text-center">
      <h2>Testimonials</h2>
      <p>
        Hear from hospitals, healthcare providers, and patients who rely on our Ambulance Management System.
        Their experiences highlight how technology-driven emergency response saves lives and builds trust.
      </p>
    </div>

    <div class="row">

      <!-- Testimonial 1 -->
      <div class="col-lg-6">
        <div class="testimonial-item text-start">
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3 class="mb-0">Dr. Meera Patel</h3>
          <h4 class="text-muted">Chief Medical Officer</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            The Ambulance Management System has transformed how we respond to emergencies. Real-time tracking and
            automated dispatch ensure our patients receive care without delay. It’s a true lifesaver.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-lg-6">
        <div class="testimonial-item text-start mt-4 mt-lg-0">
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3 class="mb-0">Rajesh Sharma</h3>
          <h4 class="text-muted">Hospital Administrator</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Managing patient records and coordinating ambulances used to be a challenge. Now, everything is seamless
            and secure. Our staff can focus on saving lives instead of paperwork.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-lg-6">
        <div class="testimonial-item text-start mt-4">
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3 class="mb-0">Anita Desai</h3>
          <h4 class="text-muted">Patient</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            When I needed urgent care, the ambulance arrived faster than I expected. The system kept my family
            informed and gave me peace of mind during a stressful time.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="col-lg-6">
        <div class="testimonial-item text-start mt-4">
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3 class="mb-0">Dr. Arvind Joshi</h3>
          <h4 class="text-muted">Surgeon</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            The integration with hospital systems is excellent. Patient data is available instantly, allowing us to
            prepare before the ambulance even arrives. It’s a game-changer for emergency care.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- End Testimonials Section -->
    @include('home.elements.footer')

</main>

@endsection