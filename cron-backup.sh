#!/usr/bin/env bash
#
# Daily backup for classroombookings.
#
# Creates a full local backup (database + uploads/) in local/backups/,
# pushes it to Google Drive if Google Drive is connected in Settings > Backup,
# and prunes old local backups (keeps the 7 most recent).
#
# Install (crontab -e), once per site (adjust paths):
#   0 3 * * * /path/to/site/cron-backup.sh >> /path/to/site/local/logs/cron-backup.log 2>&1
#
# Override the PHP binary if "php" isn't the right one on your host, e.g.:
#   PHP_BIN=/usr/bin/php8.2 /path/to/site/cron-backup.sh
#
set -euo pipefail

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PHP_BIN="${PHP_BIN:-php}"

"$PHP_BIN" "$DIR/index.php" cron backup
