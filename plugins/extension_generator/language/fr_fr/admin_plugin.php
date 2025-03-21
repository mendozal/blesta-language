<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.getactionlocations.nav_primary_client'] = 'Nav primaire (client)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = 'Nav primaire (personnel)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = 'Sous-menu Nav (Personnel)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = 'Barre latérale du profil du client (personnel)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = 'Widget - Tableau de bord (Personnel)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = 'Widget - Profil du client (personnel)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = 'Widget - Profil du client (Client)';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = 'Widget - Aperçu de la facturation (Personnel)';
$lang['AdminPlugin.getcardlevels.client'] = 'Client';
$lang['AdminPlugin.getcardlevels.staff'] = 'Personnel';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = 'Effectue la migration des données de $current_version (la version installée actuelle) vers la version du jeu de fichiers donnée. Sets Erreurs d\'entrée en cas d\'échec, empêchant la mise à niveau du module.';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = 'Renvoie toutes les autorisations à configurer pour ce plugin (invoqué après install(), upgrade(), et uninstall(), écrase toutes les autorisations existantes)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = 'Retourne tous les groupes de permission à configurer pour ce plugin (invoqué après install(), upgrade(), et uninstall(), écrase tous les groupes de permission existants)';
$lang['AdminPlugin.index.page_title'] = 'Générateur d\'extension - %1$s';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = 'Extension Generator - Plugin';
$lang['AdminPlugin.basic.heading_basic'] = 'Informations de base';
$lang['AdminPlugin.basic.heading_authors'] = 'Auteurs';
$lang['AdminPlugin.basic.description'] = 'Description';
$lang['AdminPlugin.basic.logo'] = 'Logo';
$lang['AdminPlugin.basic.author_name'] = 'Nom de l\'auteur';
$lang['AdminPlugin.basic.author_url'] = 'URL de l\'auteur';
$lang['AdminPlugin.basic.text_options'] = 'Options';
$lang['AdminPlugin.basic.author_row_add'] = 'Ajouter un auteur';
$lang['AdminPlugin.basic.text_remove'] = 'Retirer';
$lang['AdminPlugin.basic.tooltip_description'] = 'La description affichée dans la liste des plugins';
$lang['AdminPlugin.basic.tooltip_logo'] = 'Le logo affiché dans le listing du plugin. Les images ne sont pas redimensionnées, les dimensions idéales sont donc 150x70.';
$lang['AdminPlugin.basic.placeholder_author_name'] = 'par exemple, Blesta';
$lang['AdminPlugin.basic.placeholder_author_url'] = 'par exemple : https://blesta.com/';
$lang['AdminPlugin.basic.database'] = 'Suivant - Informations sur la base de données';
$lang['AdminPlugin.basic.confirm'] = 'Suivant - Confirmation';
$lang['AdminPlugin.database.heading_database'] = 'Tables de la base de données';
$lang['AdminPlugin.database.heading_more_info'] = 'Plus d\'informations';
$lang['AdminPlugin.database.table_row_add'] = 'Ajouter une table de base de données';
$lang['AdminPlugin.database.column_row_add'] = 'Ajouter une colonne';
$lang['AdminPlugin.database.table_name'] = 'Nom du tableau';
$lang['AdminPlugin.database.tooltip_table_name'] = 'Le nom de la table dans la base de données (par exemple extention_table_name)';
$lang['AdminPlugin.database.placeholder_table_name'] = 'par exemple : extention_table_name';
$lang['AdminPlugin.database.column_name'] = 'Nom de la colonne';
$lang['AdminPlugin.database.type'] = 'Type';
$lang['AdminPlugin.database.length'] = 'Longueur/Valeurs';
$lang['AdminPlugin.database.default'] = 'Défaut';
$lang['AdminPlugin.database.nullable'] = 'Nullable';
$lang['AdminPlugin.database.primary'] = 'Clé primaire';
$lang['AdminPlugin.database.tooltip_column_name'] = 'Le nom de la colonne dans la base de données (par exemple column_name).';
$lang['AdminPlugin.database.tooltip_type'] = 'Le type de la colonne dans la base de données.';
$lang['AdminPlugin.database.tooltip_length'] = 'Définit le nombre maximum de caractères dans un champ. Si le type de colonne est "enum", veuillez saisir les valeurs en utilisant ce format : \'a\', \'b\', \'c\'...';
$lang['AdminPlugin.database.tooltip_default'] = 'Valeur par défaut à insérer pour cette colonne. Les champs à valeur nulle dont la valeur par défaut est vide prendront la valeur NULL par défaut.';
$lang['AdminPlugin.database.tooltip_nullable'] = 'Permet ou non d\'autoriser une valeur nulle pour cette colonne.';
$lang['AdminPlugin.database.tooltip_primary'] = 'Marque cette colonne comme étant la clé primaire de la colonne. Les clés composites ne sont pas prises en charge actuellement. Si vous souhaitez avoir une clé composite ou aucune clé primaire, consultez la méthode install() du fichier ***_plugin.php généré.';
$lang['AdminPlugin.database.placeholder_column_name'] = 'par exemple : nom_de_la_colonne';
$lang['AdminPlugin.database.placeholder_length'] = 'par exemple 64 ou "a", "b", "c".';
$lang['AdminPlugin.database.text_more_info'] = 'Cette page est utilisée pour créer un schéma pour les tables de la base de données générées et gérées par ce plugin. Du code sera généré pour ajouter et supprimer ces tables lors de l\'installation et de la désinstallation. De plus, des fichiers modèles seront créés pour ces tables avec quelques fonctions de base.';
$lang['AdminPlugin.database.text_options'] = 'Options';
$lang['AdminPlugin.database.text_remove'] = 'Retirer';
$lang['AdminPlugin.database.integrations'] = 'Suivant - Intégrations de base';
$lang['AdminPlugin.integrations.heading_integrations'] = 'Intégrations de base';
$lang['AdminPlugin.integrations.action_row_add'] = 'Ajouter une action';
$lang['AdminPlugin.integrations.event_row_add'] = 'Ajouter un gestionnaire d\'événements';
$lang['AdminPlugin.integrations.card_row_add'] = 'Ajouter une carte de client';
$lang['AdminPlugin.integrations.heading_actions'] = 'Actions';
$lang['AdminPlugin.integrations.heading_events'] = 'Gestionnaires d\'événements';
$lang['AdminPlugin.integrations.heading_cards'] = 'Cartes de client';
$lang['AdminPlugin.integrations.heading_more_info'] = 'Plus d\'informations';
$lang['AdminPlugin.integrations.location'] = 'Localisation';
$lang['AdminPlugin.integrations.controller'] = 'Contrôleur';
$lang['AdminPlugin.integrations.action'] = 'Action';
$lang['AdminPlugin.integrations.name'] = 'Nom';
$lang['AdminPlugin.integrations.event'] = 'Événement';
$lang['AdminPlugin.integrations.event_callback'] = 'Méthode de rappel';
$lang['AdminPlugin.integrations.label'] = 'Étiquette';
$lang['AdminPlugin.integrations.level'] = 'Niveau';
$lang['AdminPlugin.integrations.card_callback'] = 'Méthode de rappel';
$lang['AdminPlugin.integrations.link'] = 'Lien';
$lang['AdminPlugin.integrations.text_actions_more_info'] = 'Les "actions" représentent les pages du plugin qui sont accessibles via l\'interface principale. Cela inclut les liens de navigation dans les zones d\'administration et de client, les widgets dans la zone d\'administration et les liens dans la barre latérale du profil du client. Les contrôleurs et les actions saisis ici seront utilisés pour générer des fichiers de contrôleurs simples. En outre, des exemples de fichiers de vue seront créés pour chaque action.';
$lang['AdminPlugin.integrations.text_events_more_info'] = 'C\'est le système de crochets de Blesta.  Les événements sont enregistrés soit par le noyau, soit par un plugin, puis les plugins écoutent ces événements et définissent des méthodes de gestion pour l\'événement.  Comme tous les plugins peuvent enregistrer des événements, il peut y en avoir un nombre illimité, mais la liste des événements principaux définis par Blesta se trouve ici https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.text_cards_more_info'] = 'Les cartes clients sont de petites boîtes affichées sur le profil du client (dans l\'espace client ou l\'espace d\'administration) et sont principalement utilisées pour afficher diverses statistiques (par exemple le nombre de services, de tickets ou de commandes). Elles se composent d\'une valeur, d\'une étiquette, d\'un arrière-plan et d\'un lien.  L\'étiquette est affichée sous la valeur qui est extraite d\'une fonction de rappel.';
$lang['AdminPlugin.integrations.text_options'] = 'Options';
$lang['AdminPlugin.integrations.text_remove'] = 'Retirer';
$lang['AdminPlugin.integrations.tooltip_location'] = 'L\'endroit de l\'interface où afficher l\'action';
$lang['AdminPlugin.integrations.tooltip_controller'] = 'Le contrôleur de l\'URI à partir duquel le contenu de l\'action doit être extrait (par exemple, admin_main).';
$lang['AdminPlugin.integrations.tooltip_action'] = 'L\'action pour l\'URI à partir duquel le contenu de l\'action doit être extrait (par exemple, l\'index).';
$lang['AdminPlugin.integrations.tooltip_name'] = 'Le nom d\'affichage de cette action (texte de la navigation, en-tête du widget ou texte du lien en fonction de l\'emplacement de l\'action)';
$lang['AdminPlugin.integrations.tooltip_event'] = 'L\'événement pour lequel un gestionnaire doit être ajouté (par exemple Clients.add). Pour une liste des événements principaux enregistrés par blesta, voir https://docs.blesta.com/display/dev/Event+Handlers';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = 'Le nom de la méthode de gestion des événements à créer dans la classe principale du plugin';
$lang['AdminPlugin.integrations.tooltip_label'] = 'Une chaîne de caractères apparaissant sous la valeur en tant qu\'étiquette';
$lang['AdminPlugin.integrations.tooltip_level'] = 'Le niveau d\'interface auquel la carte client doit être affichée';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = 'Le nom de la méthode à créer dans la classe principale du plugin pour récupérer la valeur de la carte.';
$lang['AdminPlugin.integrations.tooltip_link'] = 'L\'URI à utiliser lorsque la carte du client est cliquée.';
$lang['AdminPlugin.integrations.placeholder_controller'] = 'par exemple admin_main';
$lang['AdminPlugin.integrations.placeholder_action'] = 'par exemple, l\'index';
$lang['AdminPlugin.integrations.placeholder_name'] = 'ex. Générateur d\'extension';
$lang['AdminPlugin.integrations.placeholder_event'] = 'par exemple : Clients.Add';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = 'par exemple : myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = 'par exemple, getClientTickets';
$lang['AdminPlugin.integrations.placeholder_label'] = 'Par exemple, les billets';
$lang['AdminPlugin.integrations.placeholder_link'] = 'Par exemple, plugin/support_manager/client_tickets/';
$lang['AdminPlugin.integrations.features'] = 'Suivant - Caractéristiques supplémentaires';
$lang['AdminPlugin.features.heading_features'] = 'Caractéristiques supplémentaires';
$lang['AdminPlugin.features.heading_service_tabs'] = 'Onglets de gestion des services';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Tâches Cron';
$lang['AdminPlugin.features.heading_optional_functions'] = 'Fonctions optionnelles';
$lang['AdminPlugin.features.method_name'] = 'Nom de la méthode';
$lang['AdminPlugin.features.label'] = 'Étiquette';
$lang['AdminPlugin.features.level'] = 'Niveau';
$lang['AdminPlugin.features.name'] = 'Nom';
$lang['AdminPlugin.features.description'] = 'Description';
$lang['AdminPlugin.features.type'] = 'Type';
$lang['AdminPlugin.features.time'] = 'Heure de début/intervalle';
$lang['AdminPlugin.features.tooltip_method_name'] = 'Le nom de la méthode à générer pour cet onglet dans la base de code (sous la forme camelCaseMethodName)';
$lang['AdminPlugin.features.tooltip_tab_label'] = 'Nom d\'affichage de l\'onglet de service';
$lang['AdminPlugin.features.tooltip_level'] = 'Le niveau d\'interface sur lequel l\'onglet doit être affiché (personnel ou client)';
$lang['AdminPlugin.features.tooltip_name'] = 'Le nom de la tâche cron dans la base de code dans le cas des serpents (c\'est-à-dire cron_task_example).';
$lang['AdminPlugin.features.tooltip_cron_label'] = 'Le nom d\'affichage de la tâche cron';
$lang['AdminPlugin.features.tooltip_description'] = 'La description affichée sur la page de la liste des tâches cron';
$lang['AdminPlugin.features.tooltip_type'] = 'Le type de timing à utiliser pour la tâche cron (temps ou intervalle)';
$lang['AdminPlugin.features.tooltip_time'] = 'L\'heure quotidienne de 24 heures à laquelle cette tâche doit être exécutée (par exemple "14:25") OU L\'intervalle, en minutes, auquel cette tâche cron doit être exécutée';
$lang['AdminPlugin.features.placeholder_method_name'] = 'par exemple : tabChangePassword';
$lang['AdminPlugin.features.placeholder_tab_label'] = 'Par exemple : Modifier le mot de passe';
$lang['AdminPlugin.features.placeholder_name'] = 'par exemple, cron_task_example';
$lang['AdminPlugin.features.placeholder_cron_label'] = 'Exemple de tâche Cron';
$lang['AdminPlugin.features.placeholder_time'] = 'par exemple 14:25 ou 60';
$lang['AdminPlugin.features.service_tab_row_add'] = 'Ajouter l\'onglet Gestion des services';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Ajouter une tâche Cron';
$lang['AdminPlugin.features.text_options'] = 'Options';
$lang['AdminPlugin.features.text_remove'] = 'Retirer';
$lang['AdminPlugin.features.confirm'] = 'Suivant - Confirmation';

