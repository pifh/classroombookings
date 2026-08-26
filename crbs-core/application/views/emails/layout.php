<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="light only">
<meta name="supported-color-schemes" content="light only">
<style>
	/* Some clients (Gmail app, Outlook.com) re-apply a dark theme to email
	   bodies regardless of the meta tags above. Force our own colours back
	   so text never ends up the same colour as its background. */
	:root { color-scheme: light only; supported-color-schemes: light only; }
	[data-ogsc] .force-white,
	[data-ogsb] .force-white { color: #ffffff !important; }
	[data-ogsc] .force-dark,
	[data-ogsb] .force-dark { color: #333333 !important; background-color: #ffffff !important; }
</style>
</head>
<body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Arial,Helvetica,sans-serif;color:#333333;">
	<table role="presentation" width="100%" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4" style="background-color:#f4f4f4;padding:24px 0;">
		<tr>
			<td align="center">
				<table role="presentation" width="600" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="background-color:#ffffff;border-radius:4px;overflow:hidden;" class="force-dark">
					<tr>
						<td bgcolor="#2b3e50" style="background-color:#2b3e50;padding:16px 24px;">
							<span class="force-white" style="color:#ffffff;font-size:18px;font-weight:bold;"><?= html_escape(setting('name') ?: 'classroombookings') ?></span>
						</td>
					</tr>
					<tr>
						<td class="force-dark" style="padding:24px;font-size:14px;line-height:1.5;color:#333333;">
							<?= $content ?>
						</td>
					</tr>
					<tr>
						<td class="force-dark" style="padding:16px 24px;font-size:12px;color:#999999;border-top:1px solid #eeeeee;">
							<?= html_escape(setting('name') ?: 'classroombookings') ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
