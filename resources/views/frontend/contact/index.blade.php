 @extends('layouts.master')

@section('title', 'Contact Us')

@section('content')

<style>
    /* Banner section */
  .contact-banner {
    background: url('{{ asset('assets/image/Tech-min-vsmm.jpg') }}') center/cover no-repeat;
    height: 250px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    padding-top: 70px; /* Add this line: navbar height offset */
}


    .contact-banner h1 {
        font-size: 3rem;
        color: #ff4d4d;
        font-weight: bold;
    }

    .breadcrumb {
        color: #fff;
        margin-top: 10px;
        background: transparent; /* Remove background */
    }

    .breadcrumb a {
        color: #ff4d4d;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    /* How Can We Help Section */
    .help-section {
        background-color: #111;
        color: #fff;
        padding: 60px 30px;
    }

    .help-section h2 {
        color: #ff4d4d;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .help-section p {
        color: #fff;
        font-size: 1.1rem;
        margin-bottom: 40px;
    }

    .contact-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-card {
        background-color: #1e1e1e;
        flex: 1 1 300px;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(255,0,0,0.3);
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .contact-card i {
        font-size: 1.8rem;
        color: #ff4d4d;
        flex-shrink: 0;
    }

    .contact-card div p:first-child {
        color: #ff4d4d;
        font-weight: bold;
        margin: 0 0 5px 0;
    }

    .contact-card div p:last-child {
        color: #fff;
        margin: 0;
        font-size: 0.95rem;
    }

    @media (max-width: 768px) {
        .contact-cards {
            flex-direction: column;
        }
    }
</style>

<!-- Banner Section -->
<section class="contact-banner">
    <div class="text-center">
        <h1>Contact Us</h1>
        <div class="breadcrumb">
            <a href="/">Home</a> | Contact Us
        </div>
    </div>
</section>

<!-- How Can We Help Section -->
<section class="help-section">
    <div class="container">
        <h2>How Can We Help?</h2>
        <p>Talk to one of our consultants today and learn how to start leveraging your business.</p>

        <div class="contact-cards">
            <!-- Phone Card -->
            <div class="contact-card">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <p>01797242610</p>
                    <p>We answer by phone from Saturday to Thursday from 10:00 am until 6:00 pm.</p>
                </div>
            </div>

            <!-- Email Card -->
            <div class="contact-card">
                <i class="bi bi-envelope-fill"></i>
                <div>
                    <p>info@imbdagency.com</p>
                    <p>We will respond to your email within 8 hours on business days.</p>
                </div>
            </div>

            <!-- Address Card -->
            <div class="contact-card">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                    <p>1st Floor, House: 21, Road: 3, Banani DOHS, Dhaka-1206</p>
                    <p>Come visit us from Saturday to Thursday from 10:00 am to 6:00 pm.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Location Map Section -->
<section class="location-map" style="background-color: #111; padding: 60px 0;">
    <div class="container">
        <h2 class="text-danger mb-4">Our Location</h2>
        <div style="width: 100%; height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 15px rgba(255,0,0,0.3);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.858163489029!2d90.40482051543074!3d23.79357338458879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77f7d1d5f49%3A0x8b6f6d1a5d7f6b0!2sBanani%2C%20Dhaka%201210!5e0!3m2!1sen!2sbd!4v1693698210721!5m2!1sen!2sbd" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
 <section class="contact-form-section" style="background-color: #111; color: #fff; padding: 80px 0;">
    <div class="container">
        <!-- Title and Description -->
        <div class="text-center mb-5">
            <h2 style="color: #ff4d4d; font-weight: bold; font-size: 2.8rem;">Let's Talk?</h2>
            <p style="font-size: 1.1rem; color:#fff; max-width: 600px; margin: 0 auto;">
                Talk to one of our consultants today and learn how to start leveraging your business.
            </p>
        </div>

        <!-- Form -->
        <form action="" method="POST" class="row g-4">
            @csrf

            <!-- Name -->
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required
                    style="background-color:#1e1e1e; color:#fff; border:1px solid #ff4d4d; border-radius:8px; padding:16px;">
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required
                    style="background-color:#1e1e1e; color:#fff; border:1px solid #ff4d4d; border-radius:8px; padding:16px;">
            </div>

            <!-- Phone -->
            <div class="col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required
                    style="background-color:#1e1e1e; color:#fff; border:1px solid #ff4d4d; border-radius:8px; padding:16px;">
            </div>

            <!-- Subject -->
            <div class="col-md-6">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required
                    style="background-color:#1e1e1e; color:#fff; border:1px solid #ff4d4d; border-radius:8px; padding:16px;">
            </div>

            <!-- Message -->
            <div class="col-12">
                <textarea name="message" class="form-control" rows="6" placeholder="Your Message" required
                    style="background-color:#1e1e1e; color:#fff; border:1px solid #ff4d4d; border-radius:8px; padding:16px; resize: none;"></textarea>
            </div>

            <!-- I'm not a robot -->
            <div class="col-12 d-flex align-items-center" style="gap:10px;">
                <input type="checkbox" name="robot" required>
                <label for="robot" style="margin:0; color:#fff;">I'm not a robot</label>
            </div>

            <!-- Submit Button -->
            <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-primary" 
                    style="background-color:#ff4d4d; border:none; padding:14px 50px; font-weight:bold; border-radius:8px;">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>




@endsection
