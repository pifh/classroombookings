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

$lang['settings.board'] = "Écran d'affichage";
$lang['settings.board.intro'] = "Choisissez les salles qui apparaissent sur l'écran public \"maintenant / à suivre\" (accessible sans connexion). Seules les salles occupées y sont affichées.";
$lang['settings.board.save.success'] = "Les réglages de l'écran ont été mis à jour.";
$lang['settings.board.no_rooms'] = "Aucune salle n'a encore été configurée.";

$lang['settings.backup'] = 'Sauvegarde';

$lang['settings.backup.local.title'] = 'Sauvegarde locale';
$lang['settings.backup.local.intro'] = "Téléchargez une sauvegarde complète de vos données (base de données et fichiers envoyés) en un seul fichier.";
$lang['settings.backup.local.download'] = 'Télécharger une sauvegarde';
$lang['settings.backup.error.create'] = "Impossible de créer la sauvegarde. Consultez le journal de l'application pour plus de détails.";

$lang['settings.backup.restore.title'] = "Restaurer une sauvegarde";
$lang['settings.backup.restore.warning'] = "Restaurer une sauvegarde remplace TOUTES les données actuelles par le contenu du fichier. Cette action est irréversible. Une sauvegarde de sécurité de l'état actuel est prise automatiquement avant la restauration.";
$lang['settings.backup.restore.file'] = 'Fichier de sauvegarde';
$lang['settings.backup.restore.confirm_label'] = 'Saisissez "%s" pour confirmer';
$lang['settings.backup.restore.button'] = 'Restaurer';
$lang['settings.backup.restore.bad_confirmation'] = "Le texte de confirmation ne correspond pas. Rien n'a été restauré.";
$lang['settings.backup.restore.success'] = 'La sauvegarde a été restaurée.';
$lang['settings.backup.restore.error'] = "Échec de la restauration. Consultez le journal de l'application pour plus de détails.";

$lang['settings.backup.drive.title'] = 'Google Drive';
$lang['settings.backup.drive.intro'] = "Connectez votre propre compte Google pour envoyer des sauvegardes sur Drive et les restaurer. Vous devrez créer des identifiants OAuth dans votre propre projet Google Cloud Console et enregistrer l'URL de redirection indiquée ci-dessous.";
$lang['settings.backup.drive.redirect_uri_label'] = "URL de redirection à enregistrer chez Google";
$lang['settings.backup.drive.client_id'] = 'ID client';
$lang['settings.backup.drive.client_secret'] = 'Code secret client';
$lang['settings.backup.drive.save.success'] = 'Les identifiants Google Drive ont été enregistrés.';
$lang['settings.backup.drive.status.connected'] = 'Connecté à Google Drive.';
$lang['settings.backup.drive.connect'] = 'Connecter Google Drive';
$lang['settings.backup.drive.connect.success'] = 'Google Drive connecté avec succès.';
$lang['settings.backup.drive.disconnect'] = 'Déconnecter';
$lang['settings.backup.drive.disconnect.success'] = 'Google Drive a été déconnecté.';
$lang['settings.backup.drive.backup_now'] = 'Sauvegarder sur Drive maintenant';
$lang['settings.backup.drive.upload.success'] = 'Sauvegarde envoyée sur Google Drive avec succès.';
$lang['settings.backup.drive.error.no_credentials'] = "Enregistrez d'abord votre ID client et code secret Google.";
$lang['settings.backup.drive.error.auth_failed'] = "L'autorisation Google Drive a échoué.";
$lang['settings.backup.drive.error.not_connected'] = "Google Drive n'est pas connecté.";
$lang['settings.backup.drive.error.upload'] = "Échec de l'envoi de la sauvegarde vers Google Drive.";
$lang['settings.backup.drive.error.download'] = "Échec du téléchargement de la sauvegarde depuis Google Drive.";
$lang['settings.backup.drive.files.title'] = 'Sauvegardes sur Drive';
$lang['settings.backup.drive.files.name'] = 'Nom';
$lang['settings.backup.drive.files.date'] = 'Date';
$lang['settings.backup.drive.files.empty'] = "Aucune sauvegarde trouvée sur Google Drive pour l'instant.";

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
