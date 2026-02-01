<?php
$title = 'Eventplannr';
$subtitle = 'A minimal event planner built with PHP and JavaScript';
$description = "Eventplannr is a small, focused web app for creating and managing simple events. It's designed as an educational project demonstrating PHP, basic routing, client-side interactivity, and clean, accessible markup.";
$github = 'https://github.com/Pepijn-DB/eventplannr';
//$demo = 'https://demo.nyxz.nl/projects/eventplannr/';
$demo = null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title) ?> - Project</title>
    <link rel="stylesheet" href="../../css/default.css">
    <link rel="stylesheet" href="../../css/projects.css">
</head>
<body>
    <?php include '../../menu.php'; ?>

    <main class="container">
        <section class="project-hero">
            <h1><?= htmlspecialchars($title) ?></h1>
            <h2><?= htmlspecialchars($subtitle) ?></h2>
            <p class="lead"><?= htmlspecialchars($description) ?></p>
            <div class="project-meta">
                <?php if ($demo != null): ?><a class="btn" href="<?= htmlspecialchars($demo) ?>">Live demo</a><?php endif; ?>
                <?php if ($github != null): ?><a class="btn" href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                    <img src="/img/github.svg" alt="Github icon" style="height: 1.2rem;"/> GitHub
                </a>
            </div>
            <a class="back-link" href="/">← Back to portfolio</a>
        </section>

        <section class="project-details">
            <h3>What it does</h3>
            <p>Eventplannr lets users create events with a title, date, and short description. Events are persisted using a mysql database and can be edited or removed. The goal is to keep the user experience simple while exploring common web patterns.</p>

            <h4>Key features</h4>
            <ul class="feature-list">
                <li>Create, edit and delete events</li>
                <li>Simple client-side form validation</li>
                <li>Accessible markup and keyboard-friendly controls</li>
                <li>Small codebase suitable for learning and extension</li>
            </ul>

            <h4>Screenshots</h4>
            <div class="screenshots">
                <div class="screenshot">Main calendar / list view (placeholder)</div>
                <div class="screenshot">Event editor modal (placeholder)</div>
                <div class="screenshot">Mobile view (placeholder)</div>
            </div>

            <h4>How to run locally</h4>
            <p>If you want to run this project on your machine:</p>
            <ol>
                <li>Clone the repository: <code>git clone <?= htmlspecialchars($github) ?></code></li>
                <li>Open the folder in a local PHP server: <code>php -S localhost:8000 -t public</code> (adjust the document root as needed)</li>
                <li>Visit <code>http://localhost:8000</code> in your browser</li>
            </ol>

            <h4>Notes & extending</h4>
            <p>Eventplannr is intentionally minimal. Good next steps include adding user authentication, switching to a relational database, or adding iCal export.</p>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 - <?= date('Y') ?> Pepijn</p>
        </div>
    </footer>

</body>

<script src="/js/dark-light-mode.js"></script>

</html>
