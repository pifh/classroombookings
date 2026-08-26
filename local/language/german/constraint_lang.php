<?php

$lang['constraint.constraints'] = 'Einschränkungen';

$lang['constraint.user.hint.1'] = 'Mit Buchungseinschränkungen können Sie die Anzahl der aktiven Buchungen von Benutzern, den Datumsbereich für einmalige Buchungen und die Anzahl der Ereignisse in einer Wiederholungsserie steuern.';
$lang['constraint.user.hint.2'] = 'Benutzer können eine Einschränkung von ihrer Rolle erben oder diese auf Benutzerebene konfiguriert haben.';
$lang['constraint.user.hint.3'] = 'Wenn der Benutzer keine Rolle hat, entspricht der vererbte Wert dem nicht festgelegten Wert.';

$lang['constraint.type.R'] = 'Von Rolle erben (nicht konfiguriert)';
$lang['constraint.type.X'] = 'Nicht festgelegt';
$lang['constraint.type.U'] = 'Andere...';
$lang['constraint.user.inherit_role_hint'] = 'Von Rolle erben (%s: %s)';

$lang['constraint.max_active_bookings.short'] = 'Max. aktive Buchungen';
$lang['constraint.max_active_bookings'] = 'Maximale Anzahl aktiver einmaliger Buchungen';
$lang['constraint.max_active_bookings.hint'] = 'Maximale Anzahl aktiver Buchungen, die ein Benutzer gleichzeitig haben kann.';

$lang['constraint.range_min'] = 'Mindestvorlaufzeit für einmalige Buchungen (Tage)';
$lang['constraint.range_min.hint'] = "Die Mindestanzahl von Tagen zwischen dem Tag der Buchungserstellung und dem Buchungsdatum.";

$lang['constraint.range_max'] = 'Maximaler Vorauszeitraum für einmalige Buchungen (Tage)';
$lang['constraint.range_max.hint'] = "Die maximale Anzahl von Tagen in der Zukunft, auf die eine Buchung fallen darf.";

$lang['constraint.recur_max_instances'] = 'Maximale Anzahl von Vorkommen für wiederkehrende Buchungen';
$lang['constraint.recur_max_instances.hint'] = 'Die maximale Anzahl von Vorkommen, die als Teil einer wiederkehrenden Buchungsserie erstellt werden können.';
