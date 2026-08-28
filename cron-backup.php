<?php

// Standalone cron entry point, for hosting control panels whose cron
// scheduler only lets you point PHP at a single script with no arguments
// (so "index.php cron backup" can't be typed as the command).
//
// In the panel: choose PHP as the language, and give the path to this file
// (e.g. "./cron-backup.php" or "cron-backup.php", relative to the site
// root, depending on what the panel expects).
//
// It just simulates running "php index.php cron backup" from the CLI, then
// hands off to the same front controller as every normal request.

$_SERVER['argv'] = [$_SERVER['argv'][0] ?? 'index.php', 'cron', 'backup'];
$_SERVER['argc'] = 3;

require __DIR__ . '/index.php';
