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

$lang['settings.backup'] = 'Sicherung';

$lang['settings.backup.local.title'] = 'Lokale Sicherung';
$lang['settings.backup.local.intro'] = 'Laden Sie eine vollständige Sicherung Ihrer Daten (Datenbank und hochgeladene Dateien) als einzelne Datei herunter.';
$lang['settings.backup.local.download'] = 'Sicherung herunterladen';
$lang['settings.backup.error.create'] = 'Die Sicherung konnte nicht erstellt werden. Details im Anwendungsprotokoll.';

$lang['settings.backup.restore.title'] = 'Aus einer Sicherung wiederherstellen';
$lang['settings.backup.restore.warning'] = 'Das Wiederherstellen einer Sicherung ersetzt ALLE aktuellen Daten durch den Inhalt der Datei. Dies kann nicht rückgängig gemacht werden. Vor der Wiederherstellung wird automatisch eine Sicherheitskopie des aktuellen Zustands erstellt.';
$lang['settings.backup.restore.file'] = 'Sicherungsdatei';
$lang['settings.backup.restore.confirm_label'] = 'Geben Sie "%s" ein, um zu bestätigen';
$lang['settings.backup.restore.button'] = 'Wiederherstellen';
$lang['settings.backup.restore.bad_confirmation'] = 'Der Bestätigungstext stimmt nicht überein. Es wurde nichts wiederhergestellt.';
$lang['settings.backup.restore.success'] = 'Die Sicherung wurde wiederhergestellt.';
$lang['settings.backup.restore.error'] = 'Wiederherstellung fehlgeschlagen. Details im Anwendungsprotokoll.';

$lang['settings.backup.drive.title'] = 'Google Drive';
$lang['settings.backup.drive.intro'] = 'Verbinden Sie Ihr eigenes Google-Konto, um Sicherungen zu Drive zu senden und daraus wiederherzustellen. Sie müssen OAuth-Anmeldedaten in Ihrem eigenen Google-Cloud-Console-Projekt erstellen und die unten angezeigte Weiterleitungs-URL registrieren.';
$lang['settings.backup.drive.redirect_uri_label'] = 'Bei Google zu registrierende Weiterleitungs-URL';
$lang['settings.backup.drive.client_id'] = 'Client-ID';
$lang['settings.backup.drive.client_secret'] = 'Client-Geheimnis';
$lang['settings.backup.drive.save.success'] = 'Die Google-Drive-Anmeldedaten wurden gespeichert.';
$lang['settings.backup.drive.status.connected'] = 'Mit Google Drive verbunden.';
$lang['settings.backup.drive.connect'] = 'Google Drive verbinden';
$lang['settings.backup.drive.connect.success'] = 'Google Drive erfolgreich verbunden.';
$lang['settings.backup.drive.disconnect'] = 'Trennen';
$lang['settings.backup.drive.disconnect.success'] = 'Google Drive wurde getrennt.';
$lang['settings.backup.drive.backup_now'] = 'Jetzt auf Drive sichern';
$lang['settings.backup.drive.upload.success'] = 'Sicherung erfolgreich zu Google Drive hochgeladen.';
$lang['settings.backup.drive.error.no_credentials'] = 'Speichern Sie zuerst Ihre Google-Client-ID und das Geheimnis.';
$lang['settings.backup.drive.error.auth_failed'] = 'Die Google-Drive-Autorisierung ist fehlgeschlagen.';
$lang['settings.backup.drive.error.not_connected'] = 'Google Drive ist nicht verbunden.';
$lang['settings.backup.drive.error.upload'] = 'Das Hochladen der Sicherung zu Google Drive ist fehlgeschlagen.';
$lang['settings.backup.drive.error.download'] = 'Das Herunterladen der Sicherung von Google Drive ist fehlgeschlagen.';
$lang['settings.backup.drive.files.title'] = 'Sicherungen auf Drive';
$lang['settings.backup.drive.files.name'] = 'Name';
$lang['settings.backup.drive.files.date'] = 'Datum';
$lang['settings.backup.drive.files.empty'] = 'Noch keine Sicherungen auf Google Drive gefunden.';

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
