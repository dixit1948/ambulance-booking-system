@extends('home.layout.default')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ol>
            <h2>Contact</h2>

        </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>Our Address</h3>
          <p>Apollo Hospitals, Anand Mahal Road, Adajan, Surat, Gujarat 395009, India</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box mb-4">
          <i class="bx bx-envelope"></i>
          <h3>Email Us</h3>
          <p>apollo.surat@apollohospitals.com</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Call Us</h3>
          <p>+91 0261-2790202</p>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.900411221109!2d72.79496957509784!3d21.196114780495453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd34e1206c7%3A0xef71ae6d6aa24966!2sApollo%20Clinic!5e0!3m2!1sen!2sin!4v1764755533247!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Contact Form Column -->
      <div class="col-lg-6">
  <form action="forms/contact.php" method="post" role="form" class="php-email-form p-4 shadow rounded bg-white">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="name" class="form-label fw-bold">Your Name</label>
        <input type="text" name="name" class="form-control rounded-pill" id="name" placeholder="Enter your name" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label fw-bold">Your Email</label>
        <input type="email" class="form-control rounded-pill" name="email" id="email" placeholder="Enter your email" required>
      </div>
    </div>

    <div class="mt-3">
      <label for="subject" class="form-label fw-bold">Subject</label>
      <input type="text" class="form-control rounded-pill" name="subject" id="subject" placeholder="Subject" required>
    </div>

    <div class="mt-3">
      <label for="message" class="form-label fw-bold">Message</label>
      <textarea class="form-control rounded" name="message" id="message" rows="5" placeholder="Write your message..." required></textarea>
    </div>

    <div class="my-3">
      <div class="loading text-primary">Loading...</div>
      <div class="error-message text-danger"></div>
      <div class="sent-message text-success">Your message has been sent. Thank you!</div>
    </div>

    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill shadow-sm">
        <i class="bx bx-send me-2"></i> Send Message
      </button>
    </div>
  </form>
</div>
  </div>
</section>
<!-- End Contact Section -->
    @include('home.elements.footer')
</main>



  @endsection