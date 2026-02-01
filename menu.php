<?php
echo '<header class="site-header">
    <div class="container">
        <a href="/" style="text-decoration: none;"><h1 class="logo">Pepijn</h1></a>
    <nav class="main-nav" style="display: flex; justify-content: center; align-items: center;">
    <a href="/#about">About</a>
    <a href="/#projects">Projects</a>
    <a href="/#skills">Skills</a>
    <a href="/#contact">Contact</a>
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
</header>';
