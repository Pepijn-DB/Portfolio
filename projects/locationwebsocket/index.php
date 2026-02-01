<?php
$title = 'LocationWebSocket';
$subtitle = 'A real-time location tracking system using WebSocket technology';
$description = "LocationWebSocket is a Java-based application that enables real-time location tracking and communication using WebSocket protocols. It's designed to demonstrate server-client architecture, real-time data streaming, and location-based services.";
$github = 'https://github.com/Pepijn-DB/LocationWebSocket';
//$demo = 'https://demo.nyxz.nl/projects/locationwebsocket/';
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
        <p>LocationWebSocket provides a real-time location tracking system using WebSocket technology. The application enables bidirectional communication between server and clients, allowing for instant location updates and tracking capabilities. Built entirely in Java, it demonstrates modern network programming and real-time data handling.</p>

        <h4>Key features</h4>
        <ul class="feature-list">
            <li>Real-time location tracking using WebSocket protocol</li>
            <li>Efficient data streaming and message handling</li>
            <li>Scalable architecture for multiple concurrent connections</li>
        </ul>

        <h4>How to run locally</h4>
        <p>If you want to run this project on your machine:</p>
        <ol>
            <li>Clone the repository: <code>git clone <?= htmlspecialchars($github) ?></code></li>
            <li>Ensure you have Java Development Kit (JDK) installed</li>
            <li>Navigate to the project directory</li>
            <li>Compile the Java files: <code>javac *.java</code></li>
            <li>Run the server: <code>java Main</code> (adjust the main class name as needed)</li>
            <li>Connect clients to the WebSocket endpoint</li>
        </ol>

        <h4>Notes & extending</h4>
        <p>LocationWebSocket serves as a foundation for real-time location-based applications. Potential extensions include adding a web-based client interface, integrating with mapping APIs (Google Maps, OpenStreetMap), implementing location history persistence, adding authentication and authorization, or creating geofencing capabilities.</p>
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