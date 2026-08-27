<?php

// English fallback (not yet translated for this language).
// Ensures this file exists so the app doesn't error when this language is active.

$lang['email.test.subject'] = 'Test email from classroombookings';

$lang['email.password_reset.subject'] = 'Reset your password';
$lang['email.password_reset.hello'] = 'Hello %s,';
$lang['email.password_reset.intro'] = 'We received a request to reset your password. Click the button below to choose a new one.';
$lang['email.password_reset.button'] = 'Reset password';
$lang['email.password_reset.fallback'] = "If the button above doesn't work, copy and paste this link into your browser:";
$lang['email.password_reset.expiry'] = 'This link will expire in 1 hour.';
$lang['email.password_reset.ignore'] = 'If you did not request a password reset, you can safely ignore this email.';

$lang['email.booking_created.subject'] = 'Booking confirmed';
$lang['email.booking_created.hello'] = 'Hello %s,';
$lang['email.booking_created.intro'] = 'Your booking has been confirmed with the following details:';
$lang['email.booking_created.view_link'] = 'View booking';
$lang['email.booking_created.by'] = 'Booked by';

$lang['email.booking_created_summary.subject'] = 'Recurring booking confirmed';
$lang['email.booking_created_summary.hello'] = 'Hello %s,';
$lang['email.booking_created_summary.intro'] = 'Your recurring booking has been confirmed for %d date(s), with the following details:';
$lang['email.booking_created_summary.view_link'] = 'View bookings';

$lang['email.booking_cancelled.subject'] = 'Booking cancelled';
$lang['email.booking_cancelled.hello'] = 'Hello %s,';
$lang['email.booking_cancelled.intro_self'] = 'Your booking has been cancelled, as requested.';
$lang['email.booking_cancelled.intro_by_admin'] = 'Your booking has been cancelled by an administrator.';
$lang['email.booking_cancelled.scope_note'] = 'This also cancelled any related recurring instances.';
$lang['email.booking_cancelled.by'] = 'Cancelled by';

$lang['email.booking_updated_by_admin.subject'] = 'Your booking was changed';
$lang['email.booking_updated_by_admin.hello'] = 'Hello %s,';
$lang['email.booking_updated_by_admin.intro'] = 'An administrator has made changes to one of your bookings. The current details are:';
$lang['email.booking_updated_by_admin.view_link'] = 'View booking';
$lang['email.booking_updated_by_admin.by'] = 'Changed by';
