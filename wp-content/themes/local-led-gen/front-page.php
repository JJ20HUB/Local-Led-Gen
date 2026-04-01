<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <p class="eyebrow">Serving Knoxville and Nearby Communities</p>
                <h1>Tree Pros Connect — Trusted Tree Care Done Right</h1>
                <p class="lead">Licensed and insured tree professionals for removals, trimming, storm response, and stump grinding. Clear quotes. Respectful crews. No pressure.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="tel:+18653906794">Call Now</a>
                    <a class="btn btn-sms" href="sms:+18653906794">Text Us</a>
                    <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact/')); ?>">Free Estimate</a>
                </div>
                <ul class="trust-points" aria-label="Trust points">
                    <li>Locally owned in Knoxville, TN</li>
                    <li>Fully insured for residential and commercial jobs</li>
                    <li>Same-day emergency response available</li>
                </ul>
            </div>
            <aside class="quote-card" aria-label="Quick contact card">
                <h2>Need help today?</h2>
                <p>Call now for urgent tree hazards, storm-damaged limbs, and blocked driveways.</p>
                <a class="btn btn-primary full" href="tel:+18653906794">Tap to Call</a>
                <a class="btn btn-sms full" href="sms:+18653906794">Tap to Text</a>
                <p class="small">Monday-Friday, 8:00 AM-6:00 PM | Saturday, 9:00 AM-3:00 PM</p>
                <a class="profile-link" href="https://g.page/r/Ccs2_3aNAoinEBM/review" target="_blank" rel="noopener noreferrer">&#9733;&#9733;&#9733;&#9733;&#9733; See Our Google Reviews</a>
            </aside>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <h2>Popular Tree Services in Knoxville</h2>
            <div class="cards">
                <article class="card">
                    <h3>Tree Removal</h3>
                    <p>Safe removal for dead, diseased, or hazardous trees near homes, fences, and power lines.</p>
                    <a class="btn btn-outline card-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">Get a Quote</a>
                </article>
                <article class="card">
                    <h3>Tree Trimming</h3>
                    <p>Health-focused pruning and canopy shaping to improve growth, safety, and curb appeal.</p>
                    <a class="btn btn-outline card-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">Get a Quote</a>
                </article>
                <article class="card">
                    <h3>Stump Grinding</h3>
                    <p>Fast stump removal to reclaim yard space and prevent regrowth, pests, and trip hazards.</p>
                    <a class="btn btn-outline card-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">Get a Quote</a>
                </article>
            </div>
            <p class="center"><a class="text-link" href="<?php echo esc_url(home_url('/services/')); ?>">See all services</a></p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="review-banner">
                <div>
                    <p class="stars-large" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                    <h2>Trusted by Knoxville Homeowners</h2>
                    <p>Read reviews from real customers across West Hills, Powell, Fountain City, and Knox County &mdash; and leave one if we earned it.</p>
                </div>
                <div class="review-actions">
                    <a class="btn btn-primary" href="https://g.page/r/Ccs2_3aNAoinEBM/review" target="_blank" rel="noopener noreferrer">Read Our Google Reviews</a>
                    <a class="btn btn-outline" href="https://g.page/r/Ccs2_3aNAoinEBM/review" target="_blank" rel="noopener noreferrer">Leave Us a Review</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <h2>How We Work</h2>
                <ol class="steps">
                    <li><strong>Call or message us:</strong> Tell us what you need and where you are in Knoxville.</li>
                    <li><strong>Get a clear estimate:</strong> We explain scope, timing, and cleanup before work begins.</li>
                    <li><strong>Job done safely:</strong> Professional crew, property protection, and full debris removal.</li>
                </ol>
            </div>
            <div class="panel">
                <h3>Neighborhoods We Serve</h3>
                <p>Downtown, Fountain City, West Hills, Hardin Valley, Halls, Powell, Karns, South Knoxville, and nearby areas in Knox County.</p>
                <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact/')); ?>">Check Service Availability</a>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <h2>Common Questions About Tree Service in Knoxville</h2>
            <dl class="faq-list">
                <div class="faq-item">
                    <dt>How much does tree removal cost in Knoxville?</dt>
                    <dd>Pricing depends on tree size, location, and job complexity. Most residential removals range from a few hundred to over a thousand dollars. We provide free estimates with no pressure or obligation.</dd>
                </div>
                <div class="faq-item">
                    <dt>Do you offer emergency tree service?</dt>
                    <dd>Yes. We respond to storm-damaged limbs, fallen trees on structures, and blocked driveways Monday through Saturday. Call <a href="tel:+18653906794">865-390-6794</a> for urgent situations.</dd>
                </div>
                <div class="faq-item">
                    <dt>Are you licensed and insured in Tennessee?</dt>
                    <dd>Yes &mdash; Tree Pros Connect is fully insured for residential and commercial work in Tennessee. We carry liability and worker&#8217;s compensation on every job.</dd>
                </div>
                <div class="faq-item">
                    <dt>What neighborhoods around Knoxville do you serve?</dt>
                    <dd>We serve Knoxville and surrounding Knox County including West Hills, Fountain City, Powell, Halls, Hardin Valley, Karns, and South Knoxville.</dd>
                </div>
            </dl>
        </div>
    </section>
</main>

<?php get_footer(); ?>
