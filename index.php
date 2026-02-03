<?php
$name = 'Pepijn';
$role = 'CS Student';
$bio = "I build (web) applications using Java, PHP, JavaScript and modern web tools. I enjoy learning new technologies and working on open-source projects.";
$email = 'contact@nyxz.nl';
$projects = [
    [
        'title' => 'VideoAnalysis',
        'description' => 'A JavaFX-based desktop application for analyzing and annotating video files with support for event tracking, multi-video playback, and advanced navigation features.',
        'link' => 'https://videoanalysis.axyvon.com/',
            'skills' => [
                    'Java',
                    'JavaFX'
            ]
    ],
    [
        'title' => 'LocationWebSocket',
        'description' => 'A small Java plugin for Minecraft that sends location data to a WebSocket server.',
        'link' => '/projects/locationwebsocket/',
        'github' => 'https://github.com/Pepijn-DB/LocationWebSocket',
        'skills' => [
                'Java',
                'Fabric (Minecraft)'
        ]
    ],
    [
        'title' => 'Eventplannr',
        'description' => 'A simple event planner.',
        'link' => '/projects/eventplannr/',
        'github' => 'https://github.com/Pepijn-DB/eventplannr',
        'skills' => [
                'PHP',
                'JavaScript',
                'HTML',
                'CSS',
                'MySQL',
                'Express'
        ]
    ]
];

$skills = [
        [
                'title' => 'Java'
        ],
        [
                'title' => 'PHP'
        ],
        [
                'title' => 'SQL'
        ],
        [
                'title' => 'PostgreSQL'
        ],
        [
                'title' => 'MySQL'
        ],
        [
                'title' => 'TypeScript'
        ],
        [
                'title' => 'JavaScript'
        ],
        [
                'title' => 'NodeJS'
        ],
        [
                'title' => 'Express'
        ],
        [
                'title' => 'HTML'
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
    <title><?=$name?> - Portfolio</title>
    <link rel="stylesheet" href="css/default.css">
    <style>
        .project-actions { display: inline-flex; gap: 0.5rem; flex-wrap: wrap; align-items: center; margin: 0.4rem 0; }
        .project-card .btn { padding: 0.35rem 0.6rem; font-size: 0.9rem; line-height: 1; display: inline-flex; align-items: center; gap: 0.4rem; height: 1rem; }
        .project-card .btn img { height: 1rem; width: auto; display: inline-block; }
        .project-card .skill-list { margin-top: 0.4rem; }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
            align-items: start;
        }

        @media (max-width: 900px) {
            .project-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 600px) {
            .project-grid { grid-template-columns: 1fr; }
            .project-card { padding: 0.75rem; }
        }

        @media (max-width: 420px) {
            .project-card .btn .label { display: none; }
            .project-card .btn { padding: 0.3rem 0.45rem; font-size: 0.85rem; }
        }
    </style>
</head>
<body>
<header class="site-header">
    <div class="container">
        <a href="" style="text-decoration: none;"><h1 class="logo">Pepijn</h1></a>
        <nav class="main-nav" style="display: flex; justify-content: center; align-items: center;">
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
            <a id="theme-toggle" class="btn" aria-pressed="false" aria-label="Toggle color theme">
                <span class="theme-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
                        <g class="sun">
                            <circle cx="12" cy="12" r="4" fill="currentColor" />
                            <g stroke="currentColor" stroke-width="1.2" stroke-linecap="round">
                                <line x1="12" y1="1" x2="12" y2="3" />
                                <line x1="12" y1="21" x2="12" y2="23" />
                                <line x1="4.2" y1="4.2" x2="5.8" y2="5.8" />
                                <line x1="18.2" y1="18.2" x2="19.8" y2="19.8" />
                                <line x1="1" y1="12" x2="3" y2="12" />
                                <line x1="21" y1="12" x2="23" y2="12" />
                                <line x1="4.2" y1="19.8" x2="5.8" y2="18.2" />
                                <line x1="18.2" y1="5.8" x2="19.8" y2="4.2" />
                            </g>
                        </g>
                        <g class="moon" transform="translate(0,0)">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" fill="currentColor"/>
                        </g>
                    </svg>
                </span>
                <span class="sr-only" id="theme-toggle-label">Toggle theme</span>
            </a>
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
        <p>Hi - I'm <?=$name?>. I create clean, performant and accessible experiences. I like to solve problems and collaborate on projects that make people's lives easier.</p>
    </section>

    <section id="projects" class="projects">
        <h3>Projects</h3>
        <div class="project-grid">
            <?php foreach ($projects as $p): ?>
                <article class="project-card">
                    <h4><?= htmlspecialchars($p['title']) ?></h4>
                    <p><?= htmlspecialchars($p['description']) ?></p>
                    <?php if (!empty($p['link']) || !empty($p['github'])): ?>
                        <div class="project-actions">
                            <?php if (!empty($p['link'])): ?>
                                <a class="btn" href="<?= htmlspecialchars($p['link']) ?>"><span class="label">View</span></a>
                            <?php endif; ?>
                            <?php if (!empty($p['github'])): ?>
                                <a class="btn" href="<?= htmlspecialchars($p['github']) ?>" target="_blank" rel="noopener noreferrer" aria-label="View project on GitHub">
                                    <img src="/img/github.svg" alt="" aria-hidden="true"/> <span class="label">GitHub</span>
                                </a>
                            <?php endif; ?>
                        </div>
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
        <p>&copy; 2025 - <?= date('Y') ?> <?= htmlspecialchars($name) ?></p>
    </div>
</footer>

<script src="/js/dark-light-mode.js"></script>

</body>
</html>

