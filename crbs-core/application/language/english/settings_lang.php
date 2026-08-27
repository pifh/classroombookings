<?php

$lang['settings.settings'] = 'Settings';

$lang['settings.email'] = 'Email';
$lang['settings.email.enabled'] = 'Enable';
$lang['settings.email.host'] = 'SMTP host';
$lang['settings.email.port'] = 'SMTP port';
$lang['settings.email.encryption'] = 'Encryption';
$lang['settings.email.encryption.none'] = 'None';
$lang['settings.email.username'] = 'SMTP username';
$lang['settings.email.password'] = 'SMTP password';
$lang['settings.email.from_email'] = 'From address';
$lang['settings.email.from_name'] = 'From name';
$lang['settings.email.save.success'] = 'The email settings have been updated.';

$lang['settings.email.test.title'] = 'Send a test email';
$lang['settings.email.test.hint'] = 'Save your settings first, then send a test email to confirm they work.';
$lang['settings.email.test.send_to'] = 'Send to';
$lang['settings.email.test.button'] = 'Send test email';
$lang['settings.email.test.body'] = 'This is a test email from classroombookings. If you received this, your email settings are working.';
$lang['settings.email.test.success'] = 'Test email sent successfully.';
$lang['settings.email.test.error'] = 'Failed to send test email. Check your settings and the application log for details.';

$lang['settings.board'] = 'Now board';
$lang['settings.board.intro'] = 'Choose which rooms appear on the public "now/next" board (accessible without logging in). Only occupied rooms are shown there.';
$lang['settings.board.save.success'] = 'The board settings have been updated.';
$lang['settings.board.no_rooms'] = 'No rooms have been set up yet.';

$lang['settings.general.bookings'] = 'Bookings';
$lang['settings.general.datetime'] = 'Dates and Times';
$lang['settings.general.datetime.hint'] = 'Dates follow the PHP format';
$lang['settings.general.datetime.link'] = 'view reference';
$lang['settings.general.login_message'] = 'Login Message';
$lang['settings.general.login_message.hint'] = 'Display a custom message to users on the login page.';
$lang['settings.general.maintenance_mode'] = 'Maintenance Mode';
$lang['settings.general.maintenance_mode.hint'] = 'Enabling Maintenance Mode prevents user accounts from viewing and making bookings, unless exempt via permissions for their Role. All users can still log in to make changes to their own account or change their password.';
$lang['settings.general.experimental_features'] = 'Experimental Features';
$lang['settings.general.experimental_features.hint'] = 'Try out new and experimental features.';

$lang['settings.general.displaytype.label'] = 'Display type';
$lang['settings.general.displaytype.hint'] = 'Specify the main focus and display mode of the bookings page.';
$lang['settings.general.displaytype.day'] = 'Day';
$lang['settings.general.displaytype.day.hint'] = 'all periods and rooms are shown for the selected date.';
$lang['settings.general.displaytype.room'] = 'Room';
$lang['settings.general.displaytype.room.hint'] = 'all periods and days of the week are shown for the selected room.';

$lang['settings.general.columns.label'] = 'Columns';
$lang['settings.general.columns.hint'] = 'Select which data should be displayed horizontally along the top of the bookings page. The unselected option will be displayed vertically.';
$lang['settings.general.columns.days'] = 'Days';
$lang['settings.general.columns.periods'] = 'Periods';
$lang['settings.general.columns.rooms'] = 'Rooms';
$lang['settings.general.columns.error'] = 'The column you selected is incompatible with the display type.';

$lang['settings.general.grid_highlight.label'] = 'Grid highlight';
$lang['settings.general.grid_highlight.hint'] = 'Apply a coloured highlight effect to mouse-focused slots on the bookings grid.';

$lang['settings.general.timezone.label'] = 'Timezone';

$lang['settings.general.date_format_long.label'] = 'Long date format';
$lang['settings.general.date_format_long.hint'] = 'Long date format displayed at the top of the bookings page.';

$lang['settings.general.date_format_weekday.label'] = 'Weekday date format';
$lang['settings.general.date_format_weekday.hint'] = 'Short date format for a specific weekday.';

$lang['settings.general.time_format_period.label'] = 'Period time format';
$lang['settings.general.time_format_period.hint'] = 'Time format for periods.';

$lang['settings.general.login_message_text'] = 'Message';

$lang['settings.general.maintenance_mode_message'] = 'Message';
$lang['settings.general.maintenance_mode_message.hint'] = 'This is the message that will be displayed to users during maintenance mode.';

$lang['settings.save.success'] = 'The settings have been updated.';
