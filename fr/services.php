<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Mes Services</h1>
    <p class="page-intro">
        Je vous accompagne dans votre recherche de l'exploitation performante des données, en alliant rigueur scientifique, expertise technique et une approche pédagogique sur-mesure.
    </p>

    <nav class="page-nav">
        <details>
            <summary>Sommaire des Services</summary>
            <ul>
                <li><a href="#services-fondamentaux">Data Science & ML Fondamental</a></li>
                <li><a href="#services-recherche">Recherche en IA Avancée</a></li>
                <li><a href="#services-outils">Outils sur-mesure & Valorisation</a></li>
                <li><a href="#services-formation">Formation & Transmission</a></li>
            </ul>
        </details>
    </nav>

    <article class="service-block" id="services-fondamentaux">
        <h3>Data Science & Machine Learning Fondamental</h3>
        <p>Un niveau de service général pour vos besoins d'exploration de données, extraction de valeur, et production de modèles prédictifs performants. Je vous aiderai à faire le pont entre vos données et vos experts, quel que soit votre domaine d'action.</p>
        <ul>
            <li>Analyse exploratoire de données (EDA) et visualisation.</li>
            <li>Nettoyage, préparation et ingénierie de features ("feature engineering").</li>
            <li>Modélisation statistique et Machine Learning (régression, classification, clustering...).</li>
            <li>Fiabilisation, optimisation et explication des modèles prédictifs.</li>
            <li>Accompagnement et prototypage sur Google Cloud Platform (GCP) (BigQuery, Looker Studio, Vertex AI).</li>
        </ul>
        <div class="service-cta">
            <a href="contact.php?service=data-science-fondamental" class="cta-button-small">Me contacter pour ce service</a>
        </div>
    </article>

    <article class="service-block" id="services-recherche">
        <h3>Domaines Spécifiques & Recherche en IA Avancée</h3>
        <p>Lorsque vous avez besoin d'un renfort sur un projet data/IA techniquement exigeant, je suis là pour aider vos équipes. Par passion pour la recherche, je me spécialise continuellement en Intelligence Artificielle comme en Mathématiques Appliquées, pour pouvoir développer des modèles complexes basés sur des fondements théoriques maîtrisés. Mon expérience d'enseignant m'a mis en contact avec des étudiants et experts des domaines médicaux et financiers, et j'apporte aujourd'hui mon support sur ces sujets avec enthousiasme.</p>
        <ul>
            <li><strong>IA pour le domaine Médical :</strong> Analyse et Traitement d'images (IRM, etc.) ou de signal (ECG, EEG), aide au diagnostic, segmentation d'images (via modèles génératifs type VAE, GAN, Transformers...).</li>
            <li><strong>IA pour la Finance :</strong> Modélisation de séries temporelles, analyse quantitative de risque, prototypage de solutions pour la détection de fraude.</li>
            <li><strong>Simulation & Modélisation Scientifique :</strong> méthodes IA (Deep Learning) ou méthodes numériques déterministes/Monte Carlo.</li>
        </ul>
        <div class="service-cta">
            <a href="contact.php?service=recherche-ia" class="cta-button-small">Me contacter pour ce service</a>
        </div>
    </article>

    <article class="service-block" id="services-outils">
        <h3>Outils sur-mesure & Valorisation</h3>
        <p>Au-delà de l'analyse et de la recherche, je vous aide à valoriser vos résultats. Ensemble, nous pouvons identifier les meilleures pistes pour automatiser vos processus et faciliter le partage d'informations, en développant des interfaces sur-mesure adaptées à votre communication interne.</p>
        <ul>
            <li>Création de tableaux de bord (dashboards) interactifs pour le suivi et la visualisation.</li>
            <li>Développement de scripts sur-mesure (Python) pour l'automatisation de traitements.</li>
            <li>Réalisation d'interfaces web simples (PHP, JavaScript, SQL) pour présenter des résultats.</li>
        </ul>
        <div class="service-cta">
            <a href="contact.php?service=outils-sur-mesure" class="cta-button-small">Me contacter pour ce service</a>
        </div>
    </article>

    <article class="service-block" id="services-formation">
        <h3>Formation & Transmission de Compétences</h3>
        <p>J'accompagne les professionnels et étudiants d'enseignement supérieur depuis plusieurs années dans la data et l'IA. Que ce soit pour une compréhension solide des fondements mathématiques ou pour apprendre les bonnes utilisations des modèles ML et IA, j'assisterai vos équipes dans leur montée en compétences.</p>
        <ul>
            <li>Sessions d'acculturation à la Data Science pour des publics non-techniques.</li>
            <li>Formations techniques sur des outils spécifiques (Python pour la data, SQL...).</li>
            <li>Ateliers pratiques de Machine Learning pour des équipes de développeurs ou d'analystes.</li>
            <li>Création de supports de cours et de parcours pédagogiques personnalisés.</li>
        </ul>
        <div class="service-cta">
            <a href="contact.php?service=formation" class="cta-button-small">Me contacter pour ce service</a>
        </div>
    </article>

</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>