<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <section class="hero">
        <h1>Versatile AI</h1>
        <p class="h1-subtitle">
            by Nicolas Dupuy | Data, Machine Learning & Scientific Modeling
        </p>

        <p class="subtitle">
            Born from years of academic research at the crossroads of multiple fields, my versatility allows me to solve your data & ML challenges through a wide variety of means. I strengthen your teams by bringing my analytical skills and doctoral-level scientific rigor, from theoretical modeling to the development of practical solutions and various related services.
        </p>
        <a href="<?php echo SITE_URL; ?>/en/contact.php" class="cta-button">Let's discuss your project</a>
    </section>

    <section class="carousel-container" aria-label="My key strengths">
        <div class="carousel-track">
            <div class="strength-item carousel-slide">
                <h3>Custom Services</h3>
                <p>A range of services, from general data & AI consulting (data analysis, GCP prototyping) to R&D reinforcement for specialized teams (medical, finance...). Discover how I can help you achieve your goals.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/en/services.php" class="cta-button">Discover my services</a>
                    <a href="<?php echo SITE_URL; ?>/en/contact.php" class="cta-button-secondary">Contact</a>
                </div>
            </div>

            <div class="strength-item carousel-slide">
                <h3>More than a Journey, a Perspective</h3>
                <p>Welcoming me to your team means collaborating with an eternal student. I invite you to discover the two facets that make up my expertise: my academic journey and my perspective as a person on the autism spectrum.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/en/parcours.php" class="cta-button">Discover my Journey</a>
                    <a href="<?php echo SITE_URL; ?>/en/un-autre-regard.php" class="cta-button-secondary">Read "A Different View"</a>
                </div>
            </div>

            <div class="strength-item carousel-slide">
                <h3>Continuous Learning</h3>
                <p>Not a year has gone by in the last 25 years without me learning something new. Currently, what excites me are medical AI applications (particularly imaging), and AI math/methods in Finance. My Portfolio, which is under construction, will feature my ongoing projects.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/en/portfolio.php" class="cta-button">View my Portfolio</a>
                </div>
            </div>
        <button class="carousel-button prev">&lt;</button>
        <button class="carousel-button next">&gt;</button>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>