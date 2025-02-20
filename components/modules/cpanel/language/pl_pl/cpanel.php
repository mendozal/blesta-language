<?php
/**
 * Cpanel
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cpanel.!error.configoptions[dedicated_ip].format'] = 'Dedykowany adres IP musi być ustawiony na 0 lub 1.';
$lang['Cpanel.!error.cpanel_password.matches'] = 'Hasło i potwierdzone hasło nie są zgodne.';
$lang['Cpanel.!error.cpanel_password.valid'] = 'Hasło musi składać się z co najmniej 8 znaków.';
$lang['Cpanel.!error.cpanel_username.length'] = 'Nazwa użytkownika musi mieć długość od 1 do 16 znaków.';
$lang['Cpanel.!error.cpanel_username.test'] = 'Nazwa użytkownika nie może zaczynać się od "test".';
$lang['Cpanel.!error.cpanel_username.format'] = 'Nazwa użytkownika może zawierać tylko litery i cyfry i nie może zaczynać się od cyfry.';
$lang['Cpanel.!error.cpanel_sub_domain.availability'] = 'Podana subdomena jest niedostępna.';
$lang['Cpanel.!error.cpanel_sub_domain.format'] = 'Wprowadź prawidłową nazwę subdomeny, np. "site".';
$lang['Cpanel.!error.cpanel_domain.valid'] = 'Nieprawidłowa nazwa domeny.';
$lang['Cpanel.!error.cpanel_domain.format'] = 'Wprowadź prawidłową nazwę domeny, np. domena.com.';
$lang['Cpanel.!error.module_row.missing'] = 'Wystąpił błąd wewnętrzny. Wiersz modułu jest niedostępny.';
$lang['Cpanel.!error.api.internal'] = 'Wystąpił błąd wewnętrzny lub serwer nie odpowiedział na żądanie.';
$lang['Cpanel.!error.meta[dedicated_ip].format'] = 'Dedykowany adres IP musi być ustawiony na 0 lub 1.';
$lang['Cpanel.!error.meta[package].empty'] = 'Wymagany jest pakiet cPanel.';
$lang['Cpanel.!error.meta[account_limit].valid'] = 'Limit konta musi być liczbą.';
$lang['Cpanel.!error.meta[domains_list].valid'] = 'Co najmniej jedna dostępna domena musi być ustawiona i wszystkie muszą reprezentować prawidłową nazwę hosta.';
$lang['Cpanel.!error.meta[sub_domains].valid'] = 'Opcja Enable Sub-Domains musi być włączona lub wyłączona.';
$lang['Cpanel.!error.meta[type].valid'] = 'Typ konta musi być standardowy lub odsprzedawcy.';
$lang['Cpanel.!error.name_servers_count'] = 'Należy zdefiniować co najmniej 2 serwery nazw.';
$lang['Cpanel.!error.name_servers_valid'] = 'Co najmniej jeden z wprowadzonych serwerów nazw jest nieprawidłowy.';
$lang['Cpanel.!error.account_limit_valid'] = 'Limit konta musi pozostać pusty (dla nieograniczonej liczby kont) lub ustawiony na wartość całkowitą.';
$lang['Cpanel.!error.remote_key_valid_connection'] = 'Nie można nawiązać połączenia z serwerem. Sprawdź, czy nazwa hosta, nazwa użytkownika i token (lub klucz zdalny) są poprawne.';
$lang['Cpanel.!error.remote_key_valid'] = 'Token (lub klucz zdalny) wydaje się być nieprawidłowy.';
$lang['Cpanel.!error.user_name_valid'] = 'Nazwa użytkownika jest nieprawidłowa.';
$lang['Cpanel.!error.host_name_valid'] = 'Nazwa hosta wydaje się być nieprawidłowa.';
$lang['Cpanel.!error.server_name_valid'] = 'Należy wprowadzić etykietę serwera.';
$lang['Cpanel.service_field.tooltip.password'] = 'Hasło można pozostawić puste, aby zostało wygenerowane automatycznie.';
$lang['Cpanel.service_field.tooltip.username'] = 'Możesz pozostawić nazwę użytkownika pustą, aby wygenerować ją automatycznie.';
$lang['Cpanel.package_fields.tooltip.domains_list'] = 'Wprowadź listę CSV domen, które będą dostępne do udostępniania subdomen, np. "domena1.com,domena2.com,domena3.com".';
$lang['Cpanel.service_info.option_login'] = 'Zaloguj się';
$lang['Cpanel.service_info.options'] = 'Opcje';
$lang['Cpanel.service_info.server'] = 'Serwer';
$lang['Cpanel.service_info.password'] = 'Hasło';
$lang['Cpanel.service_info.username'] = 'Nazwa użytkownika';
$lang['Cpanel.tab_client_stats.usage_unlimited'] = '(%1$s MB/∞)';
$lang['Cpanel.tab_client_stats.usage'] = '(%1$s MB/%2$s MB)';
$lang['Cpanel.tab_client_stats.disk_title'] = 'Użycie dysku';
$lang['Cpanel.tab_client_stats.bandwidth_title'] = 'Wykorzystanie przepustowości (od początku miesiąca)';
$lang['Cpanel.tab_client_stats.info.ip'] = 'Adres IP';
$lang['Cpanel.tab_client_stats.info.domain'] = 'Domena';
$lang['Cpanel.tab_client_stats.info_heading.value'] = 'Wartość';
$lang['Cpanel.tab_client_stats.info_heading.field'] = 'Pole';
$lang['Cpanel.tab_client_stats.info_title'] = 'Informacje';
$lang['Cpanel.tab_client_actions.field_password_submit'] = 'Zaktualizuj hasło';
$lang['Cpanel.tab_client_actions.field_cpanel_confirm_password'] = 'Potwierdź hasło';
$lang['Cpanel.tab_client_actions.field_cpanel_password'] = 'Hasło';
$lang['Cpanel.tab_client_actions.change_password'] = 'Zmień hasło';
$lang['Cpanel.tab_stats.disk_unlimited'] = 'nieograniczony';
$lang['Cpanel.tab_stats.disk_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.disk_heading.limit'] = 'Limit';
$lang['Cpanel.tab_stats.disk_heading.used'] = 'Używany';
$lang['Cpanel.tab_stats.disk_title'] = 'Dysk';
$lang['Cpanel.tab_stats.bandwidth_unlimited'] = 'nieograniczony';
$lang['Cpanel.tab_stats.bandwidth_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.bandwidth_heading.limit'] = 'Limit';
$lang['Cpanel.tab_stats.bandwidth_heading.used'] = 'Używany';
$lang['Cpanel.tab_stats.bandwidth_title'] = 'Przepustowość';
$lang['Cpanel.tab_stats.info.ip'] = 'Adres IP';
$lang['Cpanel.tab_stats.info.domain'] = 'Domena';
$lang['Cpanel.tab_stats.info_heading.value'] = 'Wartość';
$lang['Cpanel.tab_stats.info_heading.field'] = 'Pole';
$lang['Cpanel.tab_stats.info_title'] = 'Informacje';
$lang['Cpanel.service_field.text_generate_password'] = 'Generowanie hasła';
$lang['Cpanel.service_field.confirm_password'] = 'Potwierdź hasło';
$lang['Cpanel.service_field.password'] = 'Hasło';
$lang['Cpanel.service_field.username'] = 'Nazwa użytkownika';
$lang['Cpanel.service_field.sub_domain'] = 'Subdomena';
$lang['Cpanel.service_field.domain'] = 'Domena';
$lang['Cpanel.package_fields.dedicated_ip_yes'] = 'Tak';
$lang['Cpanel.package_fields.dedicated_ip_no'] = 'Nie';
$lang['Cpanel.package_fields.domains_list'] = 'Lista dostępnych domen';
$lang['Cpanel.package_fields.sub_domains_disable'] = 'Wyłącz';
$lang['Cpanel.package_fields.sub_domains_enable'] = 'Włącz';
$lang['Cpanel.package_fields.sub_domains'] = 'Włączanie sprzedaży subdomen';
$lang['Cpanel.package_fields.dedicated_ip'] = 'Dedykowany adres IP';
$lang['Cpanel.package_fields.account_limit'] = 'Limit konta';
$lang['Cpanel.package_fields.acl_default'] = 'Domyślne';
$lang['Cpanel.package_fields.acl'] = 'Lista kontroli dostępu';
$lang['Cpanel.package_fields.package'] = 'Pakiet cPanel';
$lang['Cpanel.package_fields.type_reseller'] = 'Odsprzedawca';
$lang['Cpanel.package_fields.type_standard'] = 'Standard';
$lang['Cpanel.package_fields.type'] = 'Typ konta';
$lang['Cpanel.row_meta.account_limit'] = 'Limit konta';
$lang['Cpanel.row_meta.use_ssl'] = 'Używaj SSL podczas łączenia się z API (zalecane)';
$lang['Cpanel.row_meta.key'] = 'Token (lub klucz zdalny)';
$lang['Cpanel.row_meta.user_name'] = 'Nazwa użytkownika';
$lang['Cpanel.row_meta.host_name'] = 'Nazwa hosta';
$lang['Cpanel.row_meta.server_name'] = 'Etykieta serwera';
$lang['Cpanel.edit_row.add_btn'] = 'Edytuj serwer';
$lang['Cpanel.edit_row.remove_name_server'] = 'Usunąć';
$lang['Cpanel.edit_row.name_server'] = 'Serwer nazw %1$s';
$lang['Cpanel.edit_row.name_server_host_col'] = 'Nazwa hosta';
$lang['Cpanel.edit_row.name_server_col'] = 'Serwer nazw';
$lang['Cpanel.edit_row.name_server_btn'] = 'Dodaj dodatkowy serwer nazw';
$lang['Cpanel.edit_row.notes_title'] = 'Uwagi';
$lang['Cpanel.edit_row.name_servers_title'] = 'Serwery nazw';
$lang['Cpanel.edit_row.basic_title'] = 'Ustawienia podstawowe';
$lang['Cpanel.edit_row.box_title'] = 'Edytuj serwer cPanel';
$lang['Cpanel.add_row.add_btn'] = 'Dodaj serwer';
$lang['Cpanel.add_row.remove_name_server'] = 'Usunąć';
$lang['Cpanel.add_row.name_server'] = 'Serwer nazw %1$s';
$lang['Cpanel.add_row.name_server_host_col'] = 'Nazwa hosta';
$lang['Cpanel.add_row.name_server_col'] = 'Serwer nazw';
$lang['Cpanel.add_row.name_server_btn'] = 'Dodaj dodatkowy serwer nazw';
$lang['Cpanel.add_row.notes_title'] = 'Uwagi';
$lang['Cpanel.add_row.name_servers_title'] = 'Serwery nazw';
$lang['Cpanel.add_row.basic_title'] = 'Ustawienia podstawowe';
$lang['Cpanel.add_row.box_title'] = 'Dodaj serwer cPanel';
$lang['Cpanel.order_options.roundrobin'] = 'Równomierna dystrybucja między serwerami';
$lang['Cpanel.order_options.first'] = 'Pierwszy serwer niezapełniony';
$lang['Cpanel.manage.module_groups_no_results'] = 'Nie ma grup serwerów.';
$lang['Cpanel.manage.module_rows_no_results'] = 'Nie ma żadnych serwerów.';
$lang['Cpanel.manage.module_groups.confirm_delete'] = 'Czy na pewno chcesz usunąć tę grupę serwerów?';
$lang['Cpanel.manage.module_rows.confirm_delete'] = 'Czy na pewno chcesz usunąć ten serwer?';
$lang['Cpanel.manage.module_groups.delete'] = 'Usuń';
$lang['Cpanel.manage.module_rows.delete'] = 'Usuń';
$lang['Cpanel.manage.module_groups.edit'] = 'Edytuj';
$lang['Cpanel.manage.module_rows.edit'] = 'Edytuj';
$lang['Cpanel.manage.module_rows.count_server_group'] = '%1$s / %2$s (%3$s dostępne)';
$lang['Cpanel.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Cpanel.manage.module_groups_heading.options'] = 'Opcje';
$lang['Cpanel.manage.module_groups_heading.servers'] = 'Liczba serwerów';
$lang['Cpanel.manage.module_groups_heading.name'] = 'Nazwa grupy';
$lang['Cpanel.manage.module_rows_heading.options'] = 'Opcje';
$lang['Cpanel.manage.module_rows_heading.accounts'] = 'Konta';
$lang['Cpanel.manage.module_rows_heading.hostname'] = 'Nazwa hosta';
$lang['Cpanel.manage.module_rows_heading.name'] = 'Etykieta serwera';
$lang['Cpanel.manage.module_groups_title'] = 'Grupy serwerów';
$lang['Cpanel.manage.module_rows_title'] = 'Serwery';
$lang['Cpanel.add_module_group'] = 'Dodaj grupę serwerów';
$lang['Cpanel.add_module_row'] = 'Dodaj serwer';
$lang['Cpanel.tab_client_actions'] = 'Działania';
$lang['Cpanel.tab_client_stats'] = 'Statystyki';
$lang['Cpanel.tab_stats'] = 'Statystyki';
$lang['Cpanel.module_group'] = 'Grupa serwerów';
$lang['Cpanel.module_row_plural'] = 'Serwery';
$lang['Cpanel.module_row'] = 'Serwer';
$lang['Cpanel.description'] = 'cPanel i WHM są wiodącą w branży platformą hostingową od ponad 20 lat. Cieszą się zaufaniem partnerów technologicznych Wordpress, CloudLinux, Lighstpeed i wielu innych.';
$lang['Cpanel.name'] = 'cPanel';

