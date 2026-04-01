<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main">
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Contact</p>
            <h1>Get a Free Estimate in Knoxville</h1>
            <p class="lead">Call for fastest response, or send us your details and we will follow up quickly.</p>
        </div>
    </section>

    <section class="section section-light">
        <div class="container contact-grid">
            <div class="panel">
                <h2>Call or Email</h2>
                <p><strong>Phone:</strong> <a href="tel:+18653906794">865-390-6794</a></p>
                <p><strong>Email:</strong> <a href="mailto:TreeProsConnect@gmail.com">TreeProsConnect@gmail.com</a></p>
                <p><strong>Hours:</strong> Monday-Friday, 8:00 AM-6:00 PM | Saturday, 9:00 AM-3:00 PM</p>
                <p><a class="text-link" href="https://g.page/r/Ccs2_3aNAoinEBM/review" target="_blank" rel="noopener noreferrer">View Google Business Profile</a></p>
            </div>

            <form class="panel contact-form" action="https://formsubmit.co/TreeProsConnect@gmail.com" method="POST">
                <h2>Request a Quote</h2>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="New Tree Pros Connect lead">
                <input type="hidden" name="_template" value="table">

                <label for="name">Full Name</label>
                <input id="name" name="name" type="text" autocomplete="name" required>

                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" type="tel" autocomplete="tel" required>

                <label for="email">Email Address</label>
                <input id="email" name="email" type="email" autocomplete="email" required>

                <label for="address">Service Address</label>
                <input id="address" name="address" type="text" autocomplete="street-address" required>

                <label for="service">Service Needed</label>
                <select id="service" name="service" required>
                    <option value="">Select one</option>
                    <option>Tree Removal</option>
                    <option>Tree Trimming</option>
                    <option>Stump Grinding</option>
                    <option>Storm Cleanup</option>
                    <option>Lot Clearing</option>
                    <option>Emergency / Hazard Tree</option>
                    <option>Other / Not Sure</option>
                </select>

                <label for="urgency">How Soon Do You Need Service?</label>
                <select id="urgency" name="urgency" required>
                    <option value="">Select one</option>
                    <option>Emergency — as soon as possible</option>
                    <option>Within the next few days</option>
                    <option>Within the next 2 weeks</option>
                    <option>No rush — just getting a quote</option>
                </select>

                <label for="contact-time">Best Time to Reach You</label>
                <select id="contact-time" name="contact_time">
                    <option value="">No preference</option>
                    <option>Morning (7 AM - 12 PM)</option>
                    <option>Afternoon (12 PM - 5 PM)</option>
                    <option>Evening (5 PM - 7 PM)</option>
                </select>

                <label for="referral">How Did You Hear About Us?</label>
                <select id="referral" name="referral">
                    <option value="">Prefer not to say</option>
                    <option>Google Search</option>
                    <option>Google Maps</option>
                    <option>Facebook</option>
                    <option>Nextdoor</option>
                    <option>Friend or Neighbor Referral</option>
                    <option>Yard Sign / Drive By</option>
                    <option>Other</option>
                </select>

                <label for="message">Anything Else We Should Know?</label>
                <textarea id="message" name="message" rows="4" placeholder="Tree size, location on property, access concerns, etc."></textarea>

                <button class="btn btn-primary" type="submit">Send My Request</button>
                <p class="small">We typically respond within a few hours during business hours. By submitting you agree to be contacted about your project.</p>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
