<?php

$lang['auth.log_in'] = 'Se connecter';
$lang['auth.log_out'] = 'Se déconnecter';

$lang['auth.bad_credentials'] = 'Nom d\'utilisateur et/ou mot de passe incorrect.';
$lang['auth.login_required'] = 'Vous devez être connecté pour accéder à cette page.';
$lang['auth.permission_required'] = 'Vous ne disposez pas des autorisations requises pour accéder à cette page.';

$lang['auth.forgot.link'] = 'Mot de passe oublié ?';
$lang['auth.forgot.title'] = 'Mot de passe oublié';
$lang['auth.forgot.intro'] = "Saisissez votre identifiant et, si un compte existe avec une adresse email associée, nous vous enverrons un lien de réinitialisation.";
$lang['auth.forgot.submit'] = 'Envoyer le lien';
$lang['auth.forgot.success'] = "Si un compte existe avec cet identifiant, un lien de réinitialisation a été envoyé à l'adresse email associée.";

$lang['auth.reset.title'] = 'Réinitialiser le mot de passe';
$lang['auth.reset.intro'] = 'Choisissez un nouveau mot de passe pour votre compte.';
$lang['auth.reset.submit'] = 'Définir le nouveau mot de passe';
$lang['auth.reset.success'] = 'Votre mot de passe a été mis à jour. Vous pouvez maintenant vous connecter.';
$lang['auth.reset.invalid_token'] = 'Ce lien de réinitialisation est invalide ou a expiré. Veuillez en demander un nouveau.';

$lang['auth.authentication'] = 'Authentification';
$lang['auth.ldap.ldap'] = 'LDAP';
$lang['auth.ldap.connection'] = 'Connexion';
$lang['auth.ldap.search'] = 'Rechercher';
$lang['auth.ldap.user_attribute_mapping'] = 'Correspondance des attributs utilisateur';
$lang['auth.ldap.user_assignments'] = 'Affectations utilisateur par défaut';

$lang['auth.ldap.user_attribute_mapping.hint.1'] = 'Lorsque vous utilisez un filtre de recherche pour trouver l\'utilisateur qui s\'authentifie, vous pouvez renseigner les informations utilisateur classroombookings suivantes avec les attributs trouvés dans LDAP à chaque connexion.';
$lang['auth.ldap.user_attribute_mapping.hint.2'] = 'Combinez plusieurs attributs LDAP en ajoutant deux-points avant le nom de l\'attribut, par exemple - ';
$lang['auth.ldap.user_attribute_mapping.hint.3'] = 'Laissez ces champs vides pour désactiver le remplissage automatique.';

$lang['auth.ldap.demo_notice'] = "En mode démo, la fonction de vérification et la possibilité d'activer l'authentification LDAP sont désactivées afin d'éviter les blocages de compte et de prévenir les abus.";

$lang['auth.ldap.field.ldap_enabled'] = 'Activer';
$lang['auth.ldap.field.ldap_enabled.title'] = 'Utiliser LDAP pour authentifier les utilisateurs.';

$lang['auth.ldap.field.ldap_create_users'] = 'Créer des utilisateurs';
$lang['auth.ldap.field.ldap_create_users.title'] = 'Créer automatiquement des comptes utilisateur en cas d\'authentification réussie.';
$lang['auth.ldap.field.ldap_create_users.hint.1'] = 'Lorsque cette option est activée, toute information d\'identification valide renvoyée par une tentative d\'authentification LDAP créera automatiquement un compte classroombookings avec le rôle et/ou le département indiqués ci-dessous.';
$lang['auth.ldap.field.ldap_create_users.hint.2'] = 'Lorsqu\'elle n\'est pas activée, seuls les utilisateurs ayant déjà un compte dans classroombookings seront authentifiés.';

$lang['auth.ldap.field.ldap_server'] = 'Serveur';
$lang['auth.ldap.field.ldap_server.hint'] = 'Nom d\'hôte ou adresse IP.';

$lang['auth.ldap.field.ldap_port'] = 'Port';
$lang['auth.ldap.field.ldap_port.hint'] = 'Les ports standard sont 389 (non SSL) ou 636 (SSL).';

$lang['auth.ldap.field.ldap_version'] = 'Version du protocole';
$lang['auth.ldap.field.ldap_version.hint'] = 'Généralement 3.';

$lang['auth.ldap.field.ldap_use_tls'] = 'Utiliser TLS';
$lang['auth.ldap.field.ldap_ignore_cert'] = 'Ignorer le certificat';
$lang['auth.ldap.field.ldap_bind_dn_format'] = 'Format du DN de liaison';
$lang['auth.ldap.field.ldap_bind_dn_format.hint'] = 'Cette valeur dépend de votre serveur et de votre configuration. La balise `:user` sera remplacée par l\'utilisateur qui s\'authentifie. Quelques formats courants sont :';

$lang['auth.ldap.field.ldap_base_dn'] = 'DN de base';
$lang['auth.ldap.field.ldap_search_filter'] = 'Filtre de recherche';
$lang['auth.ldap.field.ldap_search_filter.hint'] = 'La balise `:user` sera remplacée par l\'utilisateur qui se connecte.';

$lang['auth.ldap.test.title'] = 'Vérifier les paramètres';
$lang['auth.ldap.test.hint.1'] = "Configurez les paramètres à gauche puis saisissez un nom d'utilisateur et un mot de passe dans cette zone pour vérifier l'accès. Vous n'avez pas besoin de cliquer sur Enregistrer avant de vérifier les paramètres ici.";
$lang['auth.ldap.test.hint.2'] = "Ces identifiants sont transmis directement au serveur LDAP que vous avez indiqué et ne sont jamais stockés par classroombookings.";
$lang['auth.ldap.test.verify'] = "Vérifier les identifiants";
$lang['auth.ldap.test.verifying'] = "Test de la connexion";

$lang['auth.ldap.test.bind_dn'] = 'DN de liaison';
$lang['auth.ldap.test.search_filter'] = 'Filtre de recherche';
$lang['auth.ldap.test.auth_success'] = 'Authentification réussie !';

$lang['auth.ldap.save.success'] = 'Les paramètres LDAP ont été mis à jour.';

$lang['auth.ldap.error.demo_mode'] = 'Fonction désactivée en mode démo.';
$lang['auth.ldap.error.no_module'] = 'Le module PHP LDAP n\'est pas installé ou activé.';
$lang['auth.ldap.error.no_server_or_port'] = 'Aucun serveur et/ou port fourni.';
$lang['auth.ldap.error.no_socket_connection'] = 'Erreur de connexion ou délai dépassé.';
$lang['auth.ldap.error.invalid_ldap_uri'] = 'URI de connexion LDAP invalide.';
$lang['auth.ldap.error.no_username_or_password'] = 'Aucun nom d\'utilisateur et/ou mot de passe fourni.';
$lang['auth.ldap.error.bind_error'] = 'Erreur de liaison LDAP ou nom d\'utilisateur et/ou mot de passe incorrect.';
$lang['auth.ldap.error.search_error'] = 'Erreur de recherche LDAP.';
$lang['auth.ldap.error.search_num_results_error'] = 'La recherche LDAP n\'a pas renvoyé exactement un résultat.';
$lang['auth.ldap.error.search_get_entry_error'] = 'Erreur lors de la récupération de l\'entrée de résultat LDAP.';
$lang['auth.ldap.error.search_get_attributes_error'] = 'Erreur lors de la récupération des attributs utilisateur LDAP.';
