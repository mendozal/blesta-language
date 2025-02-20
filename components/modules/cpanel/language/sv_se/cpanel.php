<?php
/**
 * Cpanel
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Cpanel.!error.configoptions[dedicated_ip].format'] = 'Den dedikerade IP-adressen måste vara inställd på 0 eller 1.';
$lang['Cpanel.!error.cpanel_password.matches'] = 'Lösenord och Bekräfta lösenord stämmer inte överens.';
$lang['Cpanel.!error.cpanel_password.valid'] = 'Lösenordet måste vara minst 8 tecken långt.';
$lang['Cpanel.!error.cpanel_username.length'] = 'Användarnamnet måste vara mellan 1 och 16 tecken långt.';
$lang['Cpanel.!error.cpanel_username.test'] = 'Användarnamnet får inte börja med "test".';
$lang['Cpanel.!error.cpanel_username.format'] = 'Användarnamnet får endast innehålla bokstäver och siffror och får inte börja med en siffra.';
$lang['Cpanel.!error.cpanel_sub_domain.availability'] = 'Den angivna subdomänen är inte tillgänglig.';
$lang['Cpanel.!error.cpanel_sub_domain.format'] = 'Ange ett giltigt subdomännamn, t.ex. "site".';
$lang['Cpanel.!error.cpanel_domain.valid'] = 'Ogiltigt domännamn.';
$lang['Cpanel.!error.cpanel_domain.format'] = 'Ange ett giltigt domännamn, t.ex. domain.com.';
$lang['Cpanel.!error.module_row.missing'] = 'Ett internt fel har inträffat. Modulraden är inte tillgänglig.';
$lang['Cpanel.!error.api.internal'] = 'Ett internt fel uppstod, eller så svarade inte servern på begäran.';
$lang['Cpanel.!error.meta[dedicated_ip].format'] = 'Den dedikerade IP-adressen måste vara inställd på 0 eller 1.';
$lang['Cpanel.!error.meta[package].empty'] = 'Ett cPanel-paket krävs.';
$lang['Cpanel.!error.meta[account_limit].valid'] = 'Kontogränsen måste vara ett tal.';
$lang['Cpanel.!error.meta[domains_list].valid'] = 'Minst en tillgänglig domän måste anges och de måste alla representera ett giltigt värdnamn.';
$lang['Cpanel.!error.meta[sub_domains].valid'] = 'Aktivera underdomäner måste anges som antingen aktiverad eller inaktiverad.';
$lang['Cpanel.!error.meta[type].valid'] = 'Kontotyp måste vara antingen standard eller återförsäljare.';
$lang['Cpanel.!error.name_servers_count'] = 'Du måste definiera minst 2 namnservrar.';
$lang['Cpanel.!error.name_servers_valid'] = 'En eller flera av de angivna namnservrarna är ogiltiga.';
$lang['Cpanel.!error.account_limit_valid'] = 'Kontogräns måste lämnas tom (för obegränsade konton) eller anges till ett heltalsvärde.';
$lang['Cpanel.!error.remote_key_valid_connection'] = 'En anslutning till servern kunde inte upprättas. Kontrollera att värdnamnet, användarnamnet och token (eller fjärrnyckeln) är korrekta.';
$lang['Cpanel.!error.remote_key_valid'] = 'Token (eller fjärrnyckeln) verkar vara ogiltig.';
$lang['Cpanel.!error.user_name_valid'] = 'Användarnamnet verkar vara ogiltigt.';
$lang['Cpanel.!error.host_name_valid'] = 'Värdnamnet verkar vara ogiltigt.';
$lang['Cpanel.!error.server_name_valid'] = 'Du måste ange en serveretikett.';
$lang['Cpanel.service_field.tooltip.password'] = 'Du kan lämna lösenordet tomt för att automatiskt generera ett lösenord.';
$lang['Cpanel.service_field.tooltip.username'] = 'Du kan lämna användarnamnet tomt för att automatiskt generera ett.';
$lang['Cpanel.package_fields.tooltip.domains_list'] = 'Ange en CSV-lista över domäner som kommer att vara tillgängliga för att tillhandahålla underdomäner för, t.ex. "domain1.com,domain2.com,domain3.com"';
$lang['Cpanel.service_info.option_login'] = 'Logga in';
$lang['Cpanel.service_info.options'] = 'Alternativ';
$lang['Cpanel.service_info.server'] = 'Server';
$lang['Cpanel.service_info.password'] = 'Lösenord';
$lang['Cpanel.service_info.username'] = 'Användarnamn';
$lang['Cpanel.tab_client_stats.usage_unlimited'] = '(%1$s MB/∞)';
$lang['Cpanel.tab_client_stats.usage'] = '(%1$s MB/%2$s MB)';
$lang['Cpanel.tab_client_stats.disk_title'] = 'Diskanvändning';
$lang['Cpanel.tab_client_stats.bandwidth_title'] = 'Bandbreddsanvändning (månad till datum)';
$lang['Cpanel.tab_client_stats.info.ip'] = 'IP-adress';
$lang['Cpanel.tab_client_stats.info.domain'] = 'Domän';
$lang['Cpanel.tab_client_stats.info_heading.value'] = 'Värde';
$lang['Cpanel.tab_client_stats.info_heading.field'] = 'Fält';
$lang['Cpanel.tab_client_stats.info_title'] = 'Information';
$lang['Cpanel.tab_client_actions.field_password_submit'] = 'Uppdatera lösenord';
$lang['Cpanel.tab_client_actions.field_cpanel_confirm_password'] = 'Bekräfta lösenord';
$lang['Cpanel.tab_client_actions.field_cpanel_password'] = 'Lösenord';
$lang['Cpanel.tab_client_actions.change_password'] = 'Ändra lösenord';
$lang['Cpanel.tab_stats.disk_unlimited'] = 'obegränsad';
$lang['Cpanel.tab_stats.disk_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.disk_heading.limit'] = 'Gräns';
$lang['Cpanel.tab_stats.disk_heading.used'] = 'Använd';
$lang['Cpanel.tab_stats.disk_title'] = 'Diskett';
$lang['Cpanel.tab_stats.bandwidth_unlimited'] = 'obegränsad';
$lang['Cpanel.tab_stats.bandwidth_value'] = '%1$s MB';
$lang['Cpanel.tab_stats.bandwidth_heading.limit'] = 'Gräns';
$lang['Cpanel.tab_stats.bandwidth_heading.used'] = 'Använd';
$lang['Cpanel.tab_stats.bandwidth_title'] = 'Bandbredd';
$lang['Cpanel.tab_stats.info.ip'] = 'IP-adress';
$lang['Cpanel.tab_stats.info.domain'] = 'Domän';
$lang['Cpanel.tab_stats.info_heading.value'] = 'Värde';
$lang['Cpanel.tab_stats.info_heading.field'] = 'Fält';
$lang['Cpanel.tab_stats.info_title'] = 'Information';
$lang['Cpanel.service_field.text_generate_password'] = 'Skapa lösenord';
$lang['Cpanel.service_field.confirm_password'] = 'Bekräfta lösenord';
$lang['Cpanel.service_field.password'] = 'Lösenord';
$lang['Cpanel.service_field.username'] = 'Användarnamn';
$lang['Cpanel.service_field.sub_domain'] = 'Underdomän';
$lang['Cpanel.service_field.domain'] = 'Domän';
$lang['Cpanel.package_fields.dedicated_ip_yes'] = 'Ja';
$lang['Cpanel.package_fields.dedicated_ip_no'] = 'Nej';
$lang['Cpanel.package_fields.domains_list'] = 'Lista över tillgängliga domäner';
$lang['Cpanel.package_fields.sub_domains_disable'] = 'Inaktivera';
$lang['Cpanel.package_fields.sub_domains_enable'] = 'Aktivera';
$lang['Cpanel.package_fields.sub_domains'] = 'Aktivera försäljning av underdomäner';
$lang['Cpanel.package_fields.dedicated_ip'] = 'Dedikerad IP';
$lang['Cpanel.package_fields.account_limit'] = 'Kontolimit';
$lang['Cpanel.package_fields.acl_default'] = 'Standard';
$lang['Cpanel.package_fields.acl'] = 'Åtkomstkontrollista';
$lang['Cpanel.package_fields.package'] = 'cPanel-paket';
$lang['Cpanel.package_fields.type_reseller'] = 'Återförsäljare';
$lang['Cpanel.package_fields.type_standard'] = 'Standard';
$lang['Cpanel.package_fields.type'] = 'Typ av konto';
$lang['Cpanel.row_meta.account_limit'] = 'Kontolimit';
$lang['Cpanel.row_meta.use_ssl'] = 'Använd SSL när du ansluter till API:et (rekommenderas)';
$lang['Cpanel.row_meta.key'] = 'Token (eller fjärrnyckel)';
$lang['Cpanel.row_meta.user_name'] = 'Användarnamn';
$lang['Cpanel.row_meta.host_name'] = 'Värdnamn';
$lang['Cpanel.row_meta.server_name'] = 'Server Etikett';
$lang['Cpanel.edit_row.add_btn'] = 'Redigera server';
$lang['Cpanel.edit_row.remove_name_server'] = 'Ta bort';
$lang['Cpanel.edit_row.name_server'] = 'Namnserver %1$s';
$lang['Cpanel.edit_row.name_server_host_col'] = 'Värdnamn';
$lang['Cpanel.edit_row.name_server_col'] = 'Namnserver';
$lang['Cpanel.edit_row.name_server_btn'] = 'Lägg till ytterligare namnserver';
$lang['Cpanel.edit_row.notes_title'] = 'Noter';
$lang['Cpanel.edit_row.name_servers_title'] = 'Namnservrar';
$lang['Cpanel.edit_row.basic_title'] = 'Grundläggande inställningar';
$lang['Cpanel.edit_row.box_title'] = 'Redigera cPanel-server';
$lang['Cpanel.add_row.add_btn'] = 'Lägg till server';
$lang['Cpanel.add_row.remove_name_server'] = 'Ta bort';
$lang['Cpanel.add_row.name_server'] = 'Namnserver %1$s';
$lang['Cpanel.add_row.name_server_host_col'] = 'Värdnamn';
$lang['Cpanel.add_row.name_server_col'] = 'Namnserver';
$lang['Cpanel.add_row.name_server_btn'] = 'Lägg till ytterligare namnserver';
$lang['Cpanel.add_row.notes_title'] = 'Noter';
$lang['Cpanel.add_row.name_servers_title'] = 'Namnservrar';
$lang['Cpanel.add_row.basic_title'] = 'Grundläggande inställningar';
$lang['Cpanel.add_row.box_title'] = 'Lägg till cPanel-server';
$lang['Cpanel.order_options.roundrobin'] = 'Fördela jämnt mellan servrarna';
$lang['Cpanel.order_options.first'] = 'Första icke-full servering';
$lang['Cpanel.manage.module_groups_no_results'] = 'Det finns inga servergrupper.';
$lang['Cpanel.manage.module_rows_no_results'] = 'Det finns inga servrar.';
$lang['Cpanel.manage.module_groups.confirm_delete'] = 'Är du säker på att du vill ta bort den här servergruppen?';
$lang['Cpanel.manage.module_rows.confirm_delete'] = 'Är du säker på att du vill ta bort den här servern?';
$lang['Cpanel.manage.module_groups.delete'] = 'Radera';
$lang['Cpanel.manage.module_rows.delete'] = 'Radera';
$lang['Cpanel.manage.module_groups.edit'] = 'Redigera';
$lang['Cpanel.manage.module_rows.edit'] = 'Redigera';
$lang['Cpanel.manage.module_rows.count_server_group'] = '%1$s / %2$s (%3$s tillgängligt)';
$lang['Cpanel.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Cpanel.manage.module_groups_heading.options'] = 'Alternativ';
$lang['Cpanel.manage.module_groups_heading.servers'] = 'Antal servrar';
$lang['Cpanel.manage.module_groups_heading.name'] = 'Gruppens namn';
$lang['Cpanel.manage.module_rows_heading.options'] = 'Alternativ';
$lang['Cpanel.manage.module_rows_heading.accounts'] = 'Konton';
$lang['Cpanel.manage.module_rows_heading.hostname'] = 'Värdnamn';
$lang['Cpanel.manage.module_rows_heading.name'] = 'Server Etikett';
$lang['Cpanel.manage.module_groups_title'] = 'Servergrupper';
$lang['Cpanel.manage.module_rows_title'] = 'Servrar';
$lang['Cpanel.add_module_group'] = 'Lägg till servergrupp';
$lang['Cpanel.add_module_row'] = 'Lägg till server';
$lang['Cpanel.tab_client_actions'] = 'Åtgärder';
$lang['Cpanel.tab_client_stats'] = 'Statistik';
$lang['Cpanel.tab_stats'] = 'Statistik';
$lang['Cpanel.module_group'] = 'Servergrupp';
$lang['Cpanel.module_row_plural'] = 'Servrar';
$lang['Cpanel.module_row'] = 'Server';
$lang['Cpanel.description'] = 'cPanel & WHM har varit den branschledande plattformen för webbhotell i över 20 år. Förtroendefulla över hela världen av teknikpartners som Wordpress, CloudLinux, Lighstpeed med flera.';
$lang['Cpanel.name'] = 'cPanel';

