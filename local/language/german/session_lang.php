<?php

$lang['session.sessions'] = 'Sessions';
$lang['session.all_sessions'] = 'Alle Sessions';
$lang['session.weeks'] = 'Wochen';
$lang['session.update'] = 'Aktualisieren';
$lang['session.schedules'] = 'Raumstundenpläne';
$lang['session.holidays'] = 'Ferien';
$lang['session.session'] = 'Session';
$lang['session.add.action'] = 'Session erstellen';
$lang['session.add.title'] = 'Session erstellen';
$lang['session.edit.title'] = 'Session aktualisieren';
$lang['session.no_items'] = 'Keine Sessions gefunden.';

$lang['session.error.no_timetable_weeks'] = 'Bitte fügen Sie mindestens eine Stundenplanwoche hinzu.';
$lang['session.error.no_week_selected'] = 'Keine Woche ausgewählt.';

$lang['session.field.name'] = 'Name';
$lang['session.field.is_selectable'] = 'Vom Benutzer wählbar';
$lang['session.field.is_selectable.hint'] = "Ermöglicht Benutzern, Buchungen in dieser Session anzuzeigen und vorzunehmen, auch wenn sie nicht die aktuelle ist.";
$lang['session.field.default_schedule_id'] = 'Standardstundenplan';
$lang['session.field.date_start'] = 'Startdatum';
$lang['session.field.date_end'] = 'Enddatum';
$lang['session.field.available'] = 'Verfügbar';
$lang['session.field.is_current'] = 'Aktuell';

$lang['session.create.success'] = "Die Session %s wurde erstellt.";
$lang['session.create.error'] = 'Beim Erstellen der Session ist ein Fehler aufgetreten.';
$lang['session.update.success'] = 'Die Session %s wurde aktualisiert.';
$lang['session.update.error'] = 'Beim Aktualisieren der Session ist ein Fehler aufgetreten.';
$lang['session.delete.success'] = 'Die Session %s wurde gelöscht.';
$lang['session.delete.title'] = 'Session löschen: %s';

$lang['session.save_weeks.success'] = "Die Sessionwochen wurden aktualisiert.";
$lang['session.save_weeks.error'] = "Beim Aktualisieren der Sessionwochen ist ein Fehler aufgetreten.";
$lang['session.bulk_week.success'] = "%s wurde auf alle Wochen der Session angewendet.";
$lang['session.bulk_week.no_week_selected'] = "Keine Woche ausgewählt.";

$lang['session.delete.warning'] = 'Alle Buchungen und Ferien dieser Session werden ebenfalls dauerhaft gelöscht.';

$lang['session.validation.date_check'] = 'Das Feld {field} (%s) ist bereits Teil einer bestehenden Session (%s).';

$lang['session.list.current_and_future'] = 'Aktuelle und zukünftige Sessions';
$lang['session.list.past'] = 'Vergangene Sessions';


$lang['session.help.session.text'] = "Jede Session dauert in der Regel das gesamte Schuljahr. Legen Sie hier das Start- und Enddatum der Session fest.";


$lang['session.help.date_format'] = "Datumsformat";
$lang['session.help.date_format.text'] = "Verwenden Sie das Format TT/MM/JJJJ bei der Eingabe von Daten. Zum Beispiel: 16.04.2026.";

$lang['session.help.changing_dates'] = 'Daten ändern';
$lang['session.help.changing_dates.text'] = "Wenn Sie das Start- oder Enddatum ändern, nachdem während der Session Buchungen vorgenommen wurden, werden bestehende Buchungen <em>außerhalb des neuen Datumsbereichs</em> gelöscht.";

$lang['session.help.default_schedule'] = 'Standardstundenplan';
$lang['session.help.default_schedule.text'] = "Jede Raumgruppe in der Session kann nach einem anderen Stundenplan ablaufen. Geben Sie hier einen Standardstundenplan an, der auf bestehende Raumgruppen oder neu erstellte Raumgruppen angewendet wird. Sie können den Stundenplan jeder Gruppe später ändern.";


$lang['session.weeks.intro'] = 'Klicken Sie auf die Daten in jedem Kalender, um die Stundenplanwoche für diese Woche umzuschalten.';


$lang['session.room_schedules'] = 'Raumstundenpläne';
$lang['session.room_schedules.no_groups'] = 'Keine Raumgruppen gefunden.';

$lang['session.room_schedules.help.intro'] = "Geben Sie den Stundenplan an, der von jeder Raumgruppe für diese Session verwendet werden soll. Der gewählte Stundenplan für jede Gruppe gilt für alle Räume darin.";
$lang['session.room_schedules.help.change_warning'] = "Wenn Sie den Stundenplan einer Raumgruppe ändern, sind Buchungen nach dem alten Stundenplan nicht mehr zugänglich.";
