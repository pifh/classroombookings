<?php

$lang['auth.log_in'] = 'Anmelden';
$lang['auth.log_out'] = 'Abmelden';

$lang['auth.bad_credentials'] = 'Benutzername und/oder Passwort ist falsch.';
$lang['auth.login_required'] = 'Sie müssen angemeldet sein, um auf diese Seite zugreifen zu können.';
$lang['auth.permission_required'] = 'Sie haben keine ausreichenden Berechtigungen, um auf diese Seite zuzugreifen.';

$lang['auth.forgot.link'] = 'Passwort vergessen?';
$lang['auth.forgot.title'] = 'Passwort vergessen';
$lang['auth.forgot.intro'] = 'Geben Sie Ihren Benutzernamen ein. Falls ein Konto mit einer hinterlegten E-Mail-Adresse existiert, senden wir Ihnen einen Link zum Zurücksetzen des Passworts.';
$lang['auth.forgot.submit'] = 'Link senden';
$lang['auth.forgot.success'] = 'Falls ein Konto mit diesem Benutzernamen existiert, wurde ein Link zum Zurücksetzen des Passworts an die hinterlegte E-Mail-Adresse gesendet.';

$lang['auth.reset.title'] = 'Passwort zurücksetzen';
$lang['auth.reset.intro'] = 'Wählen Sie ein neues Passwort für Ihr Konto.';
$lang['auth.reset.submit'] = 'Neues Passwort festlegen';
$lang['auth.reset.success'] = 'Ihr Passwort wurde aktualisiert. Sie können sich jetzt anmelden.';
$lang['auth.reset.invalid_token'] = 'Dieser Link zum Zurücksetzen ist ungültig oder abgelaufen. Bitte fordern Sie einen neuen an.';

$lang['auth.authentication'] = 'Authentifizierung';
$lang['auth.ldap.ldap'] = 'LDAP';
$lang['auth.ldap.connection'] = 'Verbindung';
$lang['auth.ldap.search'] = 'Suche';
$lang['auth.ldap.user_attribute_mapping'] = 'Benutzerattributzuordnung';
$lang['auth.ldap.user_assignments'] = 'Standard-Benutzerzuweisungen';

$lang['auth.ldap.user_attribute_mapping.hint.1'] = 'Wenn Sie einen Suchfilter verwenden, um den authentifizierenden Benutzer zu finden, können Sie die folgenden classroombookings-Benutzerdetails bei jeder Anmeldung mit im LDAP gefundenen Attributen befüllen.';
$lang['auth.ldap.user_attribute_mapping.hint.2'] = 'Kombinieren Sie mehrere LDAP-Attribute, indem Sie vor dem Attributnamen einen Doppelpunkt einfügen, z. B. - ';
$lang['auth.ldap.user_attribute_mapping.hint.3'] = 'Lassen Sie diese Felder leer, um das automatische Befüllen zu deaktivieren.';

$lang['auth.ldap.demo_notice'] = "Im Demo-Modus sind die Überprüfungsfunktion und die Möglichkeit, die LDAP-Authentifizierung zu aktivieren, deaktiviert, um Kontosperrungen zu verhindern und Missbrauch zu verhindern.";

$lang['auth.ldap.field.ldap_enabled'] = 'Aktivieren';
$lang['auth.ldap.field.ldap_enabled.title'] = 'LDAP zur Benutzerauthentifizierung verwenden.';

$lang['auth.ldap.field.ldap_create_users'] = 'Benutzer erstellen';
$lang['auth.ldap.field.ldap_create_users.title'] = 'Benutzerkonten bei erfolgreicher Authentifizierung automatisch erstellen.';
$lang['auth.ldap.field.ldap_create_users.hint.1'] = 'Wenn aktiviert, werden bei einem erfolgreichen LDAP-Authentifizierungsversuch automatisch classroombookings-Konten mit der unten angegebenen Rolle und/oder Abteilung erstellt.';
$lang['auth.ldap.field.ldap_create_users.hint.2'] = 'Wenn nicht aktiviert, werden nur Benutzer authentifiziert, die ein bestehendes Konto in classroombookings haben.';

$lang['auth.ldap.field.ldap_server'] = 'Server';
$lang['auth.ldap.field.ldap_server.hint'] = 'Hostname oder IP-Adresse.';

$lang['auth.ldap.field.ldap_port'] = 'Port';
$lang['auth.ldap.field.ldap_port.hint'] = 'Standardports sind 389 (ohne SSL) oder 636 (SSL).';

$lang['auth.ldap.field.ldap_version'] = 'Protokollversion';
$lang['auth.ldap.field.ldap_version.hint'] = 'Normalerweise 3.';

$lang['auth.ldap.field.ldap_use_tls'] = 'TLS verwenden';
$lang['auth.ldap.field.ldap_ignore_cert'] = 'Zertifikat ignorieren';
$lang['auth.ldap.field.ldap_bind_dn_format'] = 'Bind-DN-Format';
$lang['auth.ldap.field.ldap_bind_dn_format.hint'] = 'Dies variiert je nach Server und Konfiguration. Das Tag `:user` wird durch den authentifizierenden Benutzer ersetzt. Einige gängige Formate sind:';

$lang['auth.ldap.field.ldap_base_dn'] = 'Basis-DN';
$lang['auth.ldap.field.ldap_search_filter'] = 'Suchfilter';
$lang['auth.ldap.field.ldap_search_filter.hint'] = 'Das Tag `:user` wird durch den angemeldeten Benutzer ersetzt.';

$lang['auth.ldap.test.title'] = 'Einstellungen überprüfen';
$lang['auth.ldap.test.hint.1'] = "Konfigurieren Sie die Einstellungen auf der linken Seite und geben Sie dann einen Benutzernamen und ein Passwort in dieses Feld ein, um den Zugang zu überprüfen. Sie müssen nicht auf Speichern klicken, bevor Sie die Einstellungen hier überprüfen.";
$lang['auth.ldap.test.hint.2'] = "Diese Anmeldedaten werden direkt an den von Ihnen angegebenen LDAP-Server weitergegeben und werden von classroombookings nie gespeichert.";
$lang['auth.ldap.test.verify'] = "Anmeldedaten überprüfen";
$lang['auth.ldap.test.verifying'] = "Verbindung wird getestet";

$lang['auth.ldap.test.bind_dn'] = 'Bind-DN';
$lang['auth.ldap.test.search_filter'] = 'Suchfilter';
$lang['auth.ldap.test.auth_success'] = 'Authentifizierung erfolgreich!';

$lang['auth.ldap.save.success'] = 'Die LDAP-Einstellungen wurden aktualisiert.';

$lang['auth.ldap.error.demo_mode'] = 'Funktion im Demo-Modus deaktiviert.';
$lang['auth.ldap.error.no_module'] = 'Das PHP-LDAP-Modul ist nicht installiert oder aktiviert.';
$lang['auth.ldap.error.no_server_or_port'] = 'Kein Server und/oder Port angegeben.';
$lang['auth.ldap.error.no_socket_connection'] = 'Verbindungsfehler oder Zeitüberschreitung.';
$lang['auth.ldap.error.invalid_ldap_uri'] = 'Ungültige LDAP-Verbindungs-URI.';
$lang['auth.ldap.error.no_username_or_password'] = 'Kein Benutzername und/oder Passwort angegeben.';
$lang['auth.ldap.error.bind_error'] = 'LDAP-Bind-Fehler oder falscher Benutzername und/oder falsches Passwort.';
$lang['auth.ldap.error.search_error'] = 'LDAP-Suchfehler.';
$lang['auth.ldap.error.search_num_results_error'] = 'Die LDAP-Suche hat nicht genau ein Ergebnis zurückgegeben.';
$lang['auth.ldap.error.search_get_entry_error'] = 'Fehler beim Abrufen des LDAP-Suchergebniseintrags.';
$lang['auth.ldap.error.search_get_attributes_error'] = 'Fehler beim Abrufen der LDAP-Benutzerattribute.';
