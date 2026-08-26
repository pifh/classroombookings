<?php

$lang['settings.settings'] = 'Paramètres';

$lang['settings.email'] = 'Email';
$lang['settings.email.enabled'] = 'Activer';
$lang['settings.email.host'] = 'Serveur SMTP';
$lang['settings.email.port'] = 'Port SMTP';
$lang['settings.email.encryption'] = 'Chiffrement';
$lang['settings.email.encryption.none'] = 'Aucun';
$lang['settings.email.username'] = "Nom d'utilisateur SMTP";
$lang['settings.email.password'] = 'Mot de passe SMTP';
$lang['settings.email.from_email'] = "Adresse d'expédition";
$lang['settings.email.from_name'] = "Nom d'expéditeur";
$lang['settings.email.save.success'] = 'Les réglages email ont été mis à jour.';
$lang['settings.email.test.title'] = 'Envoyer un email de test';
$lang['settings.email.test.hint'] = "Enregistrez d'abord vos réglages, puis envoyez un email de test pour vérifier qu'ils fonctionnent.";
$lang['settings.email.test.send_to'] = 'Envoyer à';
$lang['settings.email.test.button'] = 'Envoyer un email de test';
$lang['settings.email.test.body'] = "Ceci est un email de test de classroombookings. Si vous l'avez reçu, vos réglages email fonctionnent.";
$lang['settings.email.test.success'] = 'Email de test envoyé avec succès.';
$lang['settings.email.test.error'] = "Échec de l'envoi de l'email de test. Vérifiez vos réglages et le journal de l'application.";

$lang['settings.general.bookings'] = 'Réservations';
$lang['settings.general.datetime'] = 'Dates et heures';
$lang['settings.general.datetime.hint'] = 'Les dates suivent le format PHP';
$lang['settings.general.datetime.link'] = 'voir la référence';
$lang['settings.general.login_message'] = 'Message de connexion';
$lang['settings.general.login_message.hint'] = 'Affiche un message personnalisé aux utilisateurs sur la page de connexion.';
$lang['settings.general.maintenance_mode'] = 'Mode maintenance';
$lang['settings.general.maintenance_mode.hint'] = 'L\'activation du mode maintenance empêche les comptes utilisateur de consulter et d\'effectuer des réservations, sauf s\'ils en sont exemptés via les autorisations de leur rôle. Tous les utilisateurs peuvent toujours se connecter pour modifier leur propre compte ou changer leur mot de passe.';
$lang['settings.general.experimental_features'] = 'Fonctionnalités expérimentales';
$lang['settings.general.experimental_features.hint'] = 'Essayez des fonctionnalités nouvelles et expérimentales.';

$lang['settings.general.displaytype.label'] = 'Type d\'affichage';
$lang['settings.general.displaytype.hint'] = 'Indiquez l\'orientation principale et le mode d\'affichage de la page des réservations.';
$lang['settings.general.displaytype.day'] = 'Jour';
$lang['settings.general.displaytype.day.hint'] = 'tous les créneaux et toutes les salles sont affichés pour la date sélectionnée.';
$lang['settings.general.displaytype.room'] = 'Salle';
$lang['settings.general.displaytype.room.hint'] = 'tous les créneaux et tous les jours de la semaine sont affichés pour la salle sélectionnée.';

$lang['settings.general.columns.label'] = 'Colonnes';
$lang['settings.general.columns.hint'] = 'Sélectionnez quelles données doivent être affichées horizontalement en haut de la page des réservations. L\'option non sélectionnée sera affichée verticalement.';
$lang['settings.general.columns.days'] = 'Jours';
$lang['settings.general.columns.periods'] = 'Créneaux';
$lang['settings.general.columns.rooms'] = 'Salles';
$lang['settings.general.columns.error'] = 'La colonne que vous avez sélectionnée est incompatible avec le type d\'affichage.';

$lang['settings.general.grid_highlight.label'] = 'Surbrillance de la grille';
$lang['settings.general.grid_highlight.hint'] = 'Applique un effet de surbrillance coloré aux cases survolées dans la grille des réservations.';

$lang['settings.general.timezone.label'] = 'Fuseau horaire';

$lang['settings.general.date_format_long.label'] = 'Format de date long';
$lang['settings.general.date_format_long.hint'] = 'Format de date long affiché en haut de la page des réservations.';

$lang['settings.general.date_format_weekday.label'] = 'Format de date du jour de semaine';
$lang['settings.general.date_format_weekday.hint'] = 'Format de date court pour un jour de semaine donné.';

$lang['settings.general.time_format_period.label'] = 'Format horaire des créneaux';
$lang['settings.general.time_format_period.hint'] = 'Format d\'heure des créneaux.';

$lang['settings.general.login_message_text'] = 'Message';

$lang['settings.general.maintenance_mode_message'] = 'Message';
$lang['settings.general.maintenance_mode_message.hint'] = 'Ceci est le message qui sera affiché aux utilisateurs pendant le mode maintenance.';

$lang['settings.save.success'] = 'Les paramètres ont été mis à jour.';
