(function() {
    const root = document.documentElement;
    const btn = document.getElementById('theme-toggle');
    const label = document.getElementById('theme-toggle-label');
    const preferredDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

    function applyTheme(theme) {
    if (!btn) return;
    if (theme === 'dark') {
    root.setAttribute('data-theme', 'dark');
    btn.setAttribute('aria-pressed', 'true');
    if (label) label.textContent = 'Switch to light theme';
} else {
    root.removeAttribute('data-theme');
    btn.setAttribute('aria-pressed', 'false');
    if (label) label.textContent = 'Switch to dark theme';
}
}

    // Initialize
    const stored = localStorage.getItem('theme');
    if (stored === 'dark' || (stored === null && preferredDark)) {
    applyTheme('dark');
} else {
    applyTheme('light');
}

    if (btn) {
    btn.addEventListener('click', function() {
    const isDark = root.getAttribute('data-theme') === 'dark';
    const next = isDark ? 'light' : 'dark';
    applyTheme(next);
    try { localStorage.setItem('theme', next); } catch (e) { /* ignore if disabled */ }
});
}
})();
