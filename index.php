<?php
$name = 'Pepijn';
$role = 'CS Student';
$bio = "I build web applications using PHP, JavaScript and modern web tools. I enjoy learning new technologies and working on open-source projects.";
$email = 'contact@nyxz.nl';
$projects = [
    [
        'title' => 'VideoAnalysis',
        'description' => 'A JavaFX-based desktop application for analyzing and annotating video files with support for event tracking, multi-video playback, and advanced navigation features.',
        'link' => 'https://videoanalysis.nyxz.nl/',
        'github' => 'https://github.com/Pepijn-DB/VideoAnalysis',
            'skills' => [
                    'Java',
                    'JavaFX'
            ]
    ],
    [
        'title' => 'Project Two',
        'description' => 'A short description of project two. Includes unit tests and CI.',
        'link' => '#'
    ],
    [
        'title' => 'LocationWebSocket',
        'description' => 'A small Java plugin for Minecraft that sends location data to a WebSocket server.',
        'link' => '#',
        'github' => 'https://github.com/Pepijn-DB/LocationWebSocket',
        'skills' => [
                'Java',
                'Fabric (Minecraft)'
        ]
    ],
];

$skills = [
        [
                'title' => 'Java'
        ],
        [
                'title' => 'C'
        ],
        [
                'title' => 'C#'
        ],
        [
                'title' => 'C++'
        ],
        [
                'title' => 'PHP'
        ],
        [
                'title' => 'JavaScript'
        ],
        [
                'title' => 'SQL'
        ],
        [
                'title' => 'Git'
        ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name?> — Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1 class="logo"><?=$name?></h1>
        <nav class="main-nav">
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</header>

<main class="container">
    <section class="hero">
        <h2 class="role"><?=$role?></h2>
        <p class="lead"><?=$bio?></p>
    </section>

    <section id="about" class="about">
        <h3>About</h3>
        <p>Hi — I'm <?=$name?>. I create clean, performant and accessible web experiences. I like to solve problems and collaborate on projects that make people's lives easier.</p>
    </section>

    <section id="projects" class="projects">
        <h3>Projects</h3>
        <div class="project-grid">
            <?php foreach ($projects as $p): ?>
                <article class="project-card">
                    <h4><?= htmlspecialchars($p['title']) ?></h4>
                    <p><?= htmlspecialchars($p['description']) ?></p>
                    <p><a class="btn" href="<?= htmlspecialchars($p['link']) ?>">View</a></p>
                    <?php if (!empty($p['github'])): ?>
                        <p>
                            <a class="btn" href="<?= htmlspecialchars($p['github']) ?>" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" style="vertical-align:middle; margin-right:6px;">
                                    <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.94-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                                GitHub
                            </a>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty($p['skills'])): ?>
                        <ul class="skill-list">
                            <?php
                            foreach ($p['skills'] as $skill) {
                                echo "<li>$skill</li>";
                            }
                            ?>
                        </ul>
                    <?php endif; ?>
                </article>
            <?php endforeach ?>
        </div>
    </section>

    <section id="skills" class="skills">
        <h3>Skills</h3>
        <ul class="skill-list">
            <?php
                foreach ($skills as $skill) {
                    echo "<li>$skill[title]</li>";
                }
            ?>
        </ul>
    </section>

    <section id="contact" class="contact">
        <h3>Contact</h3>
        <p>If you'd like to get in touch, email me at <a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a>.</p>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($name) ?></p>
    </div>
</footer>

</body>
</html>