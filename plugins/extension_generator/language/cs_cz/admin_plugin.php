<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.features.confirm'] = 'Další - Potvrzení';
$lang['AdminPlugin.features.text_remove'] = 'Odstranění adresy';
$lang['AdminPlugin.features.text_options'] = 'Možnosti';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Přidání úlohy Cron';
$lang['AdminPlugin.features.service_tab_row_add'] = 'Přidání karty Správa služeb';
$lang['AdminPlugin.features.placeholder_time'] = 'např. 14:25 nebo 60';
$lang['AdminPlugin.features.placeholder_cron_label'] = 'Např. příklad úlohy Cron';
$lang['AdminPlugin.features.placeholder_name'] = 'např. cron_task_example';
$lang['AdminPlugin.features.placeholder_tab_label'] = 'např. Změna hesla';
$lang['AdminPlugin.features.placeholder_method_name'] = 'např. tabChangePassword';
$lang['AdminPlugin.features.tooltip_time'] = 'Denní 24hodinový čas, kdy se má tato úloha spustit (např. "14:25") NEBO Interval v minutách, ve kterém se má tato úloha cronu spustit.';
$lang['AdminPlugin.features.tooltip_type'] = 'Typ časování, který se má použít pro úlohu cron (čas nebo interval).';
$lang['AdminPlugin.features.tooltip_description'] = 'Popis zobrazený na stránce seznamu úloh cronu';
$lang['AdminPlugin.features.tooltip_cron_label'] = 'Zobrazovaný název úlohy cronu';
$lang['AdminPlugin.features.tooltip_name'] = 'Název úlohy cronu v databázi kódu v případě hada (tj. cron_task_example).';
$lang['AdminPlugin.features.tooltip_level'] = 'Úroveň rozhraní, na které se má karta zobrazit (pro zaměstnance nebo pro klienty).';
$lang['AdminPlugin.features.tooltip_tab_label'] = 'Zobrazovaný název karty služby';
$lang['AdminPlugin.features.tooltip_method_name'] = 'Název metody, která má být vygenerována pro tuto záložku v bázi kódu (ve tvaru camelCaseMethodName).';
$lang['AdminPlugin.features.time'] = 'Čas zahájení/interval';
$lang['AdminPlugin.features.type'] = 'Typ';
$lang['AdminPlugin.features.description'] = 'Popis';
$lang['AdminPlugin.features.name'] = 'Název';
$lang['AdminPlugin.features.level'] = 'Úroveň';
$lang['AdminPlugin.features.label'] = 'Štítek';
$lang['AdminPlugin.features.method_name'] = 'Název metody';
$lang['AdminPlugin.features.heading_optional_functions'] = 'Volitelné funkce';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Úlohy Cron';
$lang['AdminPlugin.features.heading_service_tabs'] = 'Karty Správa služeb';
$lang['AdminPlugin.features.heading_features'] = 'Další funkce';
$lang['AdminPlugin.integrations.features'] = 'Další - Další funkce';
$lang['AdminPlugin.integrations.placeholder_link'] = 'např. plugin/support_manager/client_tickets/';
$lang['AdminPlugin.integrations.placeholder_label'] = 'např. vstupenky';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = 'např. getClientTickets';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = 'např. myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_event'] = 'např. Clients.Add';
$lang['AdminPlugin.integrations.placeholder_name'] = 'např. generátor rozšíření';
$lang['AdminPlugin.integrations.placeholder_action'] = 'např. index';
$lang['AdminPlugin.integrations.placeholder_controller'] = 'např. admin_main';
$lang['AdminPlugin.integrations.tooltip_link'] = 'URI, na který se odkazuje po kliknutí na kartu klienta.';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = 'Název metody, která se má vytvořit v hlavní třídě zásuvného modulu pro načtení hodnoty karty.';
$lang['AdminPlugin.integrations.tooltip_level'] = 'Úroveň rozhraní, na které se má karta klienta zobrazit.';
$lang['AdminPlugin.integrations.tooltip_label'] = 'Řetězec, který se zobrazuje pod hodnotou jako popisek';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = 'Název metody obsluhy události, která se má vytvořit v hlavní třídě zásuvného modulu';
$lang['AdminPlugin.integrations.tooltip_event'] = 'Událost, pro kterou se má přidat obslužný program (např. Clients.add). Seznam základních událostí registrovaných systémem blesta naleznete na adrese https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.tooltip_name'] = 'Název zobrazení této akce (text navigace, záhlaví widgetu nebo text odkazu v závislosti na umístění akce).';
$lang['AdminPlugin.integrations.tooltip_action'] = 'Akce pro URI, ze kterého se má stáhnout obsah pro danou akci (např. index).';
$lang['AdminPlugin.integrations.tooltip_controller'] = 'Kontrolér pro URI, ze kterého se má stáhnout obsah pro akci (např. admin_main).';
$lang['AdminPlugin.integrations.tooltip_location'] = 'Místo v rozhraní, kde se akce zobrazí';
$lang['AdminPlugin.integrations.text_remove'] = 'Odstranění stránky';
$lang['AdminPlugin.integrations.text_options'] = 'Možnosti';
$lang['AdminPlugin.integrations.text_cards_more_info'] = 'Karty klientů jsou malá pole zobrazená v profilu klienta (v klientské nebo administrátorské oblasti) a slouží především k zobrazení různých statistik (např. počtu služeb, vstupenek nebo objednávek). Skládají se z hodnoty, popisku, pozadí a odkazu.  Štítek se zobrazuje pod hodnotou, která je přebírána z funkce zpětného volání.';
$lang['AdminPlugin.integrations.text_events_more_info'] = 'Toto je systém háčků v systému Blesta.  Události jsou registrovány buď jádrem, nebo zásuvným modulem, zásuvné moduly pak naslouchají těmto událostem a definují pro ně obslužné metody.  Vzhledem k tomu, že události může registrovat libovolný zásuvný modul, může jich být libovolný počet, nicméně seznam událostí definovaných jádrem blesty naleznete zde: https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.text_actions_more_info'] = '"Akce" představují stránky zásuvných modulů, které jsou přístupné přes základní rozhraní. Patří sem navigační odkazy ve správcovské a klientské oblasti, widgety ve správcovské oblasti a odkazy na postranním panelu klientského profilu. Zde zadané kontroléry a akce budou použity pro generování jednoduchých souborů kontrolérů. Kromě toho budou pro každou akci vytvořeny ukázkové soubory zobrazení.';
$lang['AdminPlugin.integrations.link'] = 'Odkaz';
$lang['AdminPlugin.integrations.card_callback'] = 'Metoda zpětného volání';
$lang['AdminPlugin.integrations.level'] = 'Úroveň';
$lang['AdminPlugin.integrations.label'] = 'Štítek';
$lang['AdminPlugin.integrations.event_callback'] = 'Metoda zpětného volání';
$lang['AdminPlugin.integrations.event'] = 'Událost';
$lang['AdminPlugin.integrations.name'] = 'Název';
$lang['AdminPlugin.integrations.action'] = 'Akce';
$lang['AdminPlugin.integrations.controller'] = 'Řídicí jednotka';
$lang['AdminPlugin.integrations.location'] = 'Umístění';
$lang['AdminPlugin.integrations.heading_more_info'] = 'Více informací';
$lang['AdminPlugin.integrations.heading_cards'] = 'Karty klientů';
$lang['AdminPlugin.integrations.heading_events'] = 'Obsluha událostí';
$lang['AdminPlugin.integrations.heading_actions'] = 'Akce';
$lang['AdminPlugin.integrations.card_row_add'] = 'Přidat kartu klienta';
$lang['AdminPlugin.integrations.event_row_add'] = 'Přidání obsluhy událostí';
$lang['AdminPlugin.integrations.action_row_add'] = 'Přidat akci';
$lang['AdminPlugin.integrations.heading_integrations'] = 'Základní integrace';
$lang['AdminPlugin.database.integrations'] = 'Další - Základní integrace';
$lang['AdminPlugin.database.text_remove'] = 'Odstranění stránky';
$lang['AdminPlugin.database.text_options'] = 'Možnosti';
$lang['AdminPlugin.database.text_more_info'] = 'Tato stránka slouží k vytvoření schématu pro tabulky databáze generované a spravované tímto zásuvným modulem. Při instalaci a odinstalaci bude vygenerován kód pro přidávání a odebírání těchto tabulek. Kromě toho budou pro tyto tabulky vytvořeny modelové soubory s některými základními funkcemi.';
$lang['AdminPlugin.database.placeholder_length'] = 'např. 64 nebo "a", "b", "c".';
$lang['AdminPlugin.database.placeholder_column_name'] = 'např. column_name';
$lang['AdminPlugin.database.tooltip_primary'] = 'Označí tento sloupec jako primární klíč pro sloupec. Složené klíče nejsou v současné době podporoványm. Pokud si přejete mít složený klíč nebo žádný primární klíč, podívejte se na metodu install() vygenerovaného souboru ***_plugin.php.';
$lang['AdminPlugin.database.tooltip_nullable'] = 'Zda má být pro tento sloupec povolena nulová hodnota.';
$lang['AdminPlugin.database.tooltip_default'] = 'Výchozí hodnota, která se vloží pro tento sloupec. Nulovatelná pole s prázdnou výchozí hodnotou budou mít výchozí hodnotu NULL.';
$lang['AdminPlugin.database.tooltip_length'] = 'Nastaví maximální počet znaků v poli. Pokud je typ sloupce "enum", zadejte hodnoty v tomto formátu: a", "b", "c"...';
$lang['AdminPlugin.database.tooltip_type'] = 'Typ sloupce v databázi.';
$lang['AdminPlugin.database.tooltip_column_name'] = 'Název sloupce v databázi (např. column_name).';
$lang['AdminPlugin.database.primary'] = 'Primární klíč';
$lang['AdminPlugin.database.nullable'] = 'Nulovatelné';
$lang['AdminPlugin.database.default'] = 'Výchozí';
$lang['AdminPlugin.database.length'] = 'Délka/hodnoty';
$lang['AdminPlugin.database.type'] = 'Typ';
$lang['AdminPlugin.database.column_name'] = 'Název sloupce';
$lang['AdminPlugin.database.placeholder_table_name'] = 'např. extention_table_name';
$lang['AdminPlugin.database.tooltip_table_name'] = 'Název tabulky v databázi (např. extention_table_name).';
$lang['AdminPlugin.database.table_name'] = 'Název tabulky';
$lang['AdminPlugin.database.column_row_add'] = 'Přidat sloupec';
$lang['AdminPlugin.database.table_row_add'] = 'Přidání tabulky databáze';
$lang['AdminPlugin.database.heading_more_info'] = 'Více informací';
$lang['AdminPlugin.database.heading_database'] = 'Databázové tabulky';
$lang['AdminPlugin.basic.confirm'] = 'Další - Potvrzení';
$lang['AdminPlugin.basic.database'] = 'Další - Informace o databázi';
$lang['AdminPlugin.basic.placeholder_author_url'] = 'např. https://blesta.com/';
$lang['AdminPlugin.basic.placeholder_author_name'] = 'např. Blesta';
$lang['AdminPlugin.basic.tooltip_logo'] = 'Logo zobrazené ve výpisu zásuvných modulů. Velikost obrázků se nemění, takže ideální rozměry jsou 150x70.';
$lang['AdminPlugin.basic.tooltip_description'] = 'Popis uvedený ve výpisu zásuvných modulů';
$lang['AdminPlugin.basic.text_remove'] = 'Odstranění stránky';
$lang['AdminPlugin.basic.author_row_add'] = 'Přidat autora';
$lang['AdminPlugin.basic.text_options'] = 'Možnosti';
$lang['AdminPlugin.basic.author_url'] = 'Adresa URL autora';
$lang['AdminPlugin.basic.author_name'] = 'Jméno autora';
$lang['AdminPlugin.basic.logo'] = 'Logo';
$lang['AdminPlugin.basic.description'] = 'Popis';
$lang['AdminPlugin.basic.heading_authors'] = 'Autoři';
$lang['AdminPlugin.basic.heading_basic'] = 'Základní informace';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = 'Generátor rozšíření - zásuvný modul';
$lang['AdminPlugin.index.page_title'] = 'Generátor rozšíření - %1$s';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = 'Vrátí všechny skupiny oprávnění, které mají být nakonfigurovány pro tento zásuvný modul (vyvoláno po funkcích install(), upgrade() a uninstall(), přepíše všechny existující skupiny oprávnění).';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = 'Vrátí všechna oprávnění, která mají být nakonfigurována pro tento zásuvný modul (vyvoláno po funkcích install(), upgrade() a uninstall(), přepíše všechna stávající oprávnění).';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = 'Provede migraci dat z $current_version (aktuální nainstalovaná verze) na zadanou verzi sady souborů. Při selhání nastaví Vstupní chyby, které zabrání aktualizaci modulu.';
$lang['AdminPlugin.getcardlevels.staff'] = 'Zaměstnanci';
$lang['AdminPlugin.getcardlevels.client'] = 'Klient';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = 'Widget - Přehled vyúčtování (Zaměstnanci)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = 'Widget - Profil klienta (Klient)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = 'Widget - Profil klienta (Zaměstnanci)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = 'Widget - Přístrojový panel (Zaměstnanci)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = 'Postranní panel profilu klienta (zaměstnanci)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = 'Dílčí menu Nav (Zaměstnanci)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = 'Primary Nav (Zaměstnanci)';
$lang['AdminPlugin.getactionlocations.nav_primary_client'] = 'Primární navigace (klient)';

