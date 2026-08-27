<?php

$lang['settings.settings'] = 'Einstellungen';

$lang['settings.email'] = 'E-Mail';
$lang['settings.email.enabled'] = 'Aktivieren';
$lang['settings.email.host'] = 'SMTP-Server';
$lang['settings.email.port'] = 'SMTP-Port';
$lang['settings.email.encryption'] = 'Verschlüsselung';
$lang['settings.email.encryption.none'] = 'Keine';
$lang['settings.email.username'] = 'SMTP-Benutzername';
$lang['settings.email.password'] = 'SMTP-Passwort';
$lang['settings.email.from_email'] = 'Absenderadresse';
$lang['settings.email.from_name'] = 'Absendername';
$lang['settings.email.save.success'] = 'Die E-Mail-Einstellungen wurden aktualisiert.';
$lang['settings.email.test.title'] = 'Test-E-Mail senden';
$lang['settings.email.test.hint'] = 'Speichern Sie zuerst Ihre Einstellungen und senden Sie dann eine Test-E-Mail, um zu prüfen, ob sie funktionieren.';
$lang['settings.email.test.send_to'] = 'Senden an';
$lang['settings.email.test.button'] = 'Test-E-Mail senden';
$lang['settings.email.test.body'] = 'Dies ist eine Test-E-Mail von classroombookings. Wenn Sie diese erhalten haben, funktionieren Ihre E-Mail-Einstellungen.';
$lang['settings.email.test.success'] = 'Test-E-Mail erfolgreich gesendet.';
$lang['settings.email.test.error'] = 'Test-E-Mail konnte nicht gesendet werden. Überprüfen Sie Ihre Einstellungen und das Anwendungsprotokoll.';

$lang['settings.board'] = 'Anzeigetafel';
$lang['settings.board.intro'] = 'Wählen Sie, welche Räume auf der öffentlichen "Jetzt/Als Nächstes"-Tafel angezeigt werden (ohne Anmeldung zugänglich). Dort werden nur belegte Räume angezeigt.';
$lang['settings.board.save.success'] = 'Die Tafel-Einstellungen wurden aktualisiert.';
$lang['settings.board.no_rooms'] = 'Es wurden noch keine Räume eingerichtet.';

$lang['settings.general.bookings'] = 'Buchungen';
$lang['settings.general.datetime'] = 'Datum und Uhrzeit';
$lang['settings.general.datetime.hint'] = 'Daten folgen dem PHP-Format';
$lang['settings.general.datetime.link'] = 'Referenz anzeigen';
$lang['settings.general.login_message'] = 'Anmeldenachricht';
$lang['settings.general.login_message.hint'] = 'Zeigt Benutzern auf der Anmeldeseite eine benutzerdefinierte Nachricht an.';
$lang['settings.general.maintenance_mode'] = 'Wartungsmodus';
$lang['settings.general.maintenance_mode.hint'] = 'Das Aktivieren des Wartungsmodus verhindert, dass Benutzerkonten Buchungen anzeigen und vornehmen können, es sei denn, sie sind über die Berechtigungen ihrer Rolle davon befreit. Alle Benutzer können sich weiterhin anmelden, um Änderungen an ihrem eigenen Konto vorzunehmen oder ihr Passwort zu ändern.';
$lang['settings.general.experimental_features'] = 'Experimentelle Funktionen';
$lang['settings.general.experimental_features.hint'] = 'Neue und experimentelle Funktionen ausprobieren.';

$lang['settings.general.displaytype.label'] = 'Anzeigetyp';
$lang['settings.general.displaytype.hint'] = 'Legen Sie den Hauptfokus und den Anzeigemodus der Buchungsseite fest.';
$lang['settings.general.displaytype.day'] = 'Tag';
$lang['settings.general.displaytype.day.hint'] = 'alle Zeiträume und Räume werden für das ausgewählte Datum angezeigt.';
$lang['settings.general.displaytype.room'] = 'Raum';
$lang['settings.general.displaytype.room.hint'] = 'alle Zeiträume und Wochentage werden für den ausgewählten Raum angezeigt.';

$lang['settings.general.columns.label'] = 'Spalten';
$lang['settings.general.columns.hint'] = 'Wählen Sie aus, welche Daten horizontal am oberen Rand der Buchungsseite angezeigt werden sollen. Die nicht ausgewählte Option wird vertikal angezeigt.';
$lang['settings.general.columns.days'] = 'Tage';
$lang['settings.general.columns.periods'] = 'Zeiträume';
$lang['settings.general.columns.rooms'] = 'Räume';
$lang['settings.general.columns.error'] = 'Die ausgewählte Spalte ist mit dem Anzeigetyp nicht kompatibel.';

$lang['settings.general.grid_highlight.label'] = 'Rasterhervorhebung';
$lang['settings.general.grid_highlight.hint'] = 'Wendet einen farbigen Hervorhebungseffekt auf mauszentrierte Zeitfenster im Buchungsraster an.';

$lang['settings.general.timezone.label'] = 'Zeitzone';

$lang['settings.general.date_format_long.label'] = 'Langes Datumsformat';
$lang['settings.general.date_format_long.hint'] = 'Langes Datumsformat, das oben auf der Buchungsseite angezeigt wird.';

$lang['settings.general.date_format_weekday.label'] = 'Wochentagsdatumsformat';
$lang['settings.general.date_format_weekday.hint'] = 'Kurzes Datumsformat für einen bestimmten Wochentag.';

$lang['settings.general.time_format_period.label'] = 'Zeitformat für Zeiträume';
$lang['settings.general.time_format_period.hint'] = 'Zeitformat für Zeiträume.';

$lang['settings.general.login_message_text'] = 'Nachricht';

$lang['settings.general.maintenance_mode_message'] = 'Nachricht';
$lang['settings.general.maintenance_mode_message.hint'] = 'Dies ist die Nachricht, die Benutzern während des Wartungsmodus angezeigt wird.';

$lang['settings.save.success'] = 'Die Einstellungen wurden aktualisiert.';
