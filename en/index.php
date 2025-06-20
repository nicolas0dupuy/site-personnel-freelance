<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <section class="hero">
        <h1>Nicolas Dupuy</h1>
        <h2>Scientific rigor at the service of your data.</h2>
        <p class="subtitle">From particle physics to data science, I transform your complex data into clear insights and strategic decisions.</p>
        <a href="<?php echo SITE_URL; ?>/en/contact.php" class="cta-button">Discuss your project</a>
    </section>

    <section class="carousel-container" aria-label="My key strengths">
        <div class="carousel-track">
            <div class="strength-item carousel-slide">
                <h3>Technical Expertise</h3>
                <p>Mastery of Data Science and Machine Learning tools (Python, SQL, Scikit-learn) for robust and efficient solutions.</p>
            </div>
            <div class="strength-item carousel-slide">
                <h3>Strategic Vision</h3>
                <p>My atypical background gives me a unique perspective to understand your business challenges and translate data into value.</p>
            </div>
            <div class="strength-item carousel-slide">
                <h3>Continuous Learning</h3>
                <p>Passionate and curious, I am constantly training on the latest technologies (GCP, Medical AI) to offer you the best.</p>
            </div>
        </div>
        <button class="carousel-button prev">&lt;</button>
        <button class="carousel-button next">&gt;</button>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>