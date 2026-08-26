<?php

$lang['booking.bookings'] = 'Buchungen';
$lang['booking.booking'] = 'Buchung';
$lang['booking.bookings_in_series'] = 'Buchungen in der Wiederholungsserie';
$lang['booking.details'] = 'Buchungsdetails';
$lang['booking.and_others'] = 'und weitere';		// für Serie bearbeiten: 'Datum Monat Jahr (Stundenwoche) (**und weitere**)'

$lang['booking.slot'] = 'Zeitfenster';
$lang['booking.start'] = 'Beginn';
$lang['booking.end'] = 'Ende';
$lang['booking.book'] = 'Buchen';
$lang['booking.do_not_book'] = 'Nicht buchen';

$lang['booking.booking_status'] = 'Buchungsstatus';
$lang['booking.active_bookings'] = 'Aktive Buchungen';
$lang['booking.in_my_rooms'] = 'Buchungen in meinen Räumen';
$lang['booking.existing_booking'] = 'Bestehende Buchung';
$lang['booking.recurs'] = 'Wiederholt sich';
$lang['booking.recur_start'] = 'Wiederholungsbeginn';
$lang['booking.recur_end'] = 'Wiederholungsende';
$lang['booking.date_start'] = 'Startdatum';
$lang['booking.date_end'] = 'Enddatum';
$lang['booking.create_booking'] = 'Buchung erstellen';
$lang['booking.create_bookings'] = 'Buchungen erstellen';
$lang['booking.create_multiple_bookings'] = 'Mehrere Buchungen erstellen';
$lang['booking.no_conflicts'] = 'Keine Konflikte';
$lang['booking.conflict'] = 'Konflikt';
$lang['booking.conflicts'] = 'Konflikte';

$lang['booking.action.replace'] = 'Bestehende Buchung ersetzen';
$lang['booking.action.keep'] = 'Bestehende Buchung behalten';

$lang['booking.conflict.one'] = 'Es gibt einen Buchungskonflikt zur Überprüfung.';
$lang['booking.conflict.multiple'] = 'Es gibt %d Buchungskonflikte zur Überprüfung.';

$lang['booking.add.title'] = 'Neue Buchung erstellen';
$lang['booking.edit.title'] = 'Buchung aktualisieren';
$lang['booking.edit.action'] = 'Buchung aktualisieren';

$lang['booking.add.single.action'] = 'Einmalige Buchung erstellen';
$lang['booking.add.recurring.action'] = 'Wiederkehrende Buchung erstellen';
$lang['booking.recurring.repeat_description'] = 'Jeden %s am %s';
$lang['booking.recurring.starting_from'] = 'Beginnend ab...';
$lang['booking.recurring.until'] = 'Bis...';
$lang['booking.recurring.start_of_session'] = 'Sessionsbeginn';
$lang['booking.recurring.end_of_session'] = 'Sessionsende';
$lang['booking.recurring.specific_date'] = 'Bestimmtes Datum';
$lang['booking.recurring.preview'] = 'Vorschau der wiederkehrenden Buchungen';

$lang['booking.add.multi.single.action'] = 'Ausgewählte einmalige Buchungen erstellen';
$lang['booking.add.multi.recurring.action'] = 'Wiederkehrende Buchungen erstellen';


$lang['booking.selection.this_only'] = 'Nur diese Buchung';
$lang['booking.selection.future'] = 'Diese und zukünftige Buchungen der Serie';
$lang['booking.selection.all'] = 'Alle Buchungen der Serie';

$lang['booking.edit.recurring.title'] = 'Wiederkehrende Buchung aktualisieren';
$lang['booking.edit.single.hint'] = 'Die folgenden Änderungen werden nur auf die ausgewählte Buchung angewendet.';
$lang['booking.edit.future.hint'] = 'Die folgenden Änderungen werden auf die ausgewählte Buchung und alle zukünftigen Einträge der Serie angewendet.';
$lang['booking.edit.all.hint'] = 'Die folgenden Änderungen werden auf alle Buchungen der Serie angewendet.';

$lang['booking.cancel.recurring.title'] = 'Wiederkehrende Buchung stornieren';
$lang['booking.cancel.single.title'] = 'Einmalige Buchung stornieren';
$lang['booking.cancel.single.action'] = 'Ja, Buchung stornieren';
$lang['booking.cancel.abort'] = 'Nein, behalten';

$lang['booking.action.cancel_booking'] = 'Buchung stornieren';
$lang['booking.action.cancel_bookings'] = 'Buchungen stornieren';
$lang['booking.series.go_back'] = 'Zurück zu den Buchungsdetails';

$lang['booking.occurs'] = 'Findet statt';
$lang['booking.occurs.once'] = 'Einmal';
$lang['booking.booked_by'] = 'Gebucht von';
$lang['booking.notes'] = "Notizen";

$lang['booking.legend.legend'] = 'Legende';
$lang['booking.legend.free'] = 'Verfügbar';
$lang['booking.legend.static'] = 'Wiederkehrende Buchung';
$lang['booking.legend.staff'] = 'Einmalige Buchung';

$lang['booking.type_single'] = 'Einmalig';
$lang['booking.type_recurring'] = 'Wiederkehrend';

$lang['booking.warning.not_own'] = 'Dies ist nicht Ihre eigene Buchung.';

$lang['booking.error.not_found'] = 'Die angeforderten Buchungsdetails konnten nicht gefunden werden.';
$lang['booking.error.bad_type'] = 'Ungültiger Buchungstyp.';
$lang['booking.error.bad_form'] = 'Ungültige Auswahl.';
$lang['booking.error.not_cancelable'] = 'Die Buchung kann nicht storniert werden.';
$lang['booking.error.bad_session'] = 'Die angeforderte Session ist nicht verfügbar.';
$lang['booking.error.no_permission_room_date'] = 'Sie haben keine Berechtigung, an diesem Datum Buchungen in diesem Raum zu erstellen.';
$lang['booking.error.no_permission_room'] = 'Sie haben keine Berechtigung, Buchungen dieses Typs in diesem Raum zu erstellen.';
$lang['booking.error.no_slots_selected'] = "Sie haben keine freien Zeitfenster zum Buchen ausgewählt.";
$lang['booking.error.multibooking_create_error'] = "Der Mehrfachbuchungseintrag konnte nicht erstellt werden.";
$lang['booking.error.some_invalid_values'] = 'Eine oder mehrere Buchungen enthielten ungültige Werte. Bitte prüfen Sie die Eingaben und versuchen Sie es erneut.';
$lang['booking.error.none_created'] = 'Es wurden keine Buchungen erstellt.';
$lang['booking.error.generic'] = 'Eine oder mehrere Buchungen konnten nicht erstellt werden.';
$lang['booking.error.not_created'] = 'Die angeforderte Buchung konnte nicht erstellt werden.';
$lang['booking.error.must_select_fewer'] = 'Bitte heben Sie die Auswahl einiger Buchungen auf, um innerhalb Ihres Limits zu bleiben.';
$lang['booking.error.too_many_instances'] = 'Sie können in Ihrer wiederkehrenden Buchung nur bis zu %d Termine erstellen. Heben Sie die Auswahl von %d Zeitfenstern auf, um fortzufahren.';
$lang['booking.error.no_recurring_dates'] = 'Die Session hat keine verfügbaren Daten für wiederkehrende Buchungen.';
$lang['booking.error.invalid_recurring_dates'] = 'Das Enddatum der Wiederholung (%s) muss nach dem Startdatum %s liegen.';
$lang['booking.error.no_dates'] = 'Keine Daten ausgewählt.';

$lang['booking.error.constraint.range_min_only'] = 'Einmalige Buchungen müssen mindestens %d Tage im Voraus vorgenommen werden.';
$lang['booking.error.constraint.range_max_only'] = 'Einmalige Buchungen können nur bis zu %d Tage im Voraus erstellt werden.';
$lang['booking.error.constraint.range_min'] = "Einmalige Buchungen müssen mindestens %d Tage im Voraus vorgenommen werden.\nDas früheste Buchungsdatum ist %s.";
$lang['booking.error.constraint.range_max'] = "Einmalige Buchungen können nur bis zu %d Tage im Voraus erstellt werden.\nDas späteste Buchungsdatum ist %s.";
$lang['booking.error.constraint.max_reached'] = 'Sie haben die maximale Anzahl aktiver Buchungen (%d) erreicht. Warten Sie, bis Ihre nächste Buchung stattgefunden hat, oder stornieren Sie eine zukünftige Buchung.';
$lang['booking.error.period_wrong_day'] = '%s nicht verfügbar am %s.';
$lang['booking.error.date_not_in_range'] = "Dieses Datum liegt nicht im erlaubten Datumsbereich oder liegt in der Vergangenheit.";

$lang['booking.success.created'] = 'Die Buchung wurde erstellt.';
$lang['booking.success.created.multiple'] = 'Die Buchungen wurden erstellt.';
$lang['booking.success.some_created'] = '%d Buchungen wurden erstellt.';
$lang['booking.success.recurring.some_created'] = '%d wiederkehrende Buchungen wurden erfolgreich erstellt.';

$lang['booking.warning.permitted_limit'] = 'Die maximale Anzahl der Buchungen, die Sie erstellen können, beträgt %d.';
$lang['booking.warning.permitted_limit_with_active'] = 'Die maximale Anzahl der Buchungen, die Sie erstellen können, beträgt %d. Ihr aktives Buchungslimit beträgt %d und Sie haben %d aktive Buchungen.';

$lang['booking.error.cancelling'] = 'Beim Stornieren der Buchung ist ein Fehler aufgetreten.';

$lang['booking.notice.instances_to_create'] = 'Diese wiederkehrende Buchung erstellt %d Instanzen.';

$lang['booking.cancel.one.success'] = 'Die Buchung wurde storniert.';
$lang['booking.cancel.future.success'] = 'Die ausgewählte Buchung und alle zukünftigen Vorkommen in der Serie wurden storniert.';
$lang['booking.cancel.all.success'] = 'Alle Buchungen der wiederkehrenden Serie wurden storniert.';
$lang['booking.cancel.invalid_type.error'] = 'Ungültiger Stornierungstyp.';

$lang['booking.cancel_multi.title'] = 'Mehrere Buchungen stornieren';
$lang['booking.cancel_multi.action'] = 'Ausgewählte Buchungen stornieren';
$lang['booking.cancel_multi.error.none_selected'] = 'Keine Buchungen zum Stornieren ausgewählt.';
$lang['booking.cancel_multi.number_cancelled'] = '%d Buchungen wurden storniert.';
$lang['booking.cancel_multi.none_cancelled'] = 'Es wurden keine Buchungen storniert.';


$lang['booking.edit.one.success'] = 'Die Buchung wurde aktualisiert.';
$lang['booking.edit.future.success'] = 'Die Buchung und alle zukünftigen Buchungen der Serie wurden aktualisiert.';
$lang['booking.edit.all.success'] = 'Alle Buchungen der Serie wurden aktualisiert.';

$lang['booking.edit.error'] = 'Die Buchung konnte nicht aktualisiert werden.';


$lang['booking.session.current'] = 'Aktuell und zukünftig';
$lang['booking.session.past'] = 'Vergangen';

$lang['booking.nav.back'] = 'Zurück';
$lang['booking.nav.next'] = 'Weiter';
$lang['booking.nav.week_prev'] = 'Vorherige Woche';
$lang['booking.nav.week_next'] = 'Nächste Woche';
$lang['booking.nav.week_commencing'] = 'Woche beginnend am %s';

$lang['booking.slot.unavailable_period'] = 'Zeitraum nicht verfügbar';
$lang['booking.toggle_multi_select'] = 'Mehrfachauswahl umschalten';

$lang['booking.status.booked'] = 'Gebucht';
$lang['booking.status.cancelled'] = 'Storniert';
