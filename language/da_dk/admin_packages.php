<?php
/**
 * Admin Packages
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPackages.!success.package_added'] = 'Pakken blev oprettet med succes.';
$lang['AdminPackages.!success.package_updated'] = 'Pakken blev opdateret med succes.';
$lang['AdminPackages.!success.package_deleted'] = 'Pakken blev slettet med succes.';
$lang['AdminPackages.!success.packages_deleted'] = 'Pakkerne blev slettet med succes.';
$lang['AdminPackages.!success.group_added'] = 'Pakkegruppen "%1$s" er blevet oprettet med succes.';
$lang['AdminPackages.!success.group_updated'] = 'Pakkegruppen "%1$s" er blevet opdateret med succes.';
$lang['AdminPackages.!success.group_deleted'] = 'Pakkegruppen "%1$s" er blevet slettet.';
$lang['AdminPackages.index.page_title'] = 'Pakker';
$lang['AdminPackages.index.boxtitle_packages'] = 'Pakker';
$lang['AdminPackages.index.categorylink_createpackage'] = 'Opret pakke';
$lang['AdminPackages.index.heading_package'] = 'Pakke-ID';
$lang['AdminPackages.index.heading_name'] = 'Navn';
$lang['AdminPackages.index.heading_module'] = 'Modul';
$lang['AdminPackages.index.heading_qty'] = 'Antal';
$lang['AdminPackages.index.heading_options'] = 'Valgmuligheder';
$lang['AdminPackages.index.category_active'] = 'Aktiv';
$lang['AdminPackages.index.category_restricted'] = 'Begrænset';
$lang['AdminPackages.index.category_inactive'] = 'Inaktiv';
$lang['AdminPackages.index.action.delete'] = 'Slet pakker';
$lang['AdminPackages.index.field_actionsubmit'] = 'Indsend';
$lang['AdminPackages.index.option_edit'] = 'Rediger';
$lang['AdminPackages.index.option_copy'] = 'Kopi';
$lang['AdminPackages.index.option_delete'] = 'Slet';
$lang['AdminPackages.index.no_results'] = 'Der er ingen pakker med denne status.';
$lang['AdminPackages.index.qty_unlimited'] = 'Ubegrænset';
$lang['AdminPackages.index.confirm_delete'] = 'Er du sikker på, at du vil slette denne pakke? Enhver annulleret tjeneste, der er tildelt denne pakke, vil blive fjernet.';
$lang['AdminPackages.packagepricing.heading_pricing'] = 'Prisfastsættelse';
$lang['AdminPackages.packagepricing.heading_id'] = 'ID';
$lang['AdminPackages.packagepricing.heading_term'] = 'Betegnelse';
$lang['AdminPackages.packagepricing.heading_price'] = 'Pris';
$lang['AdminPackages.packagepricing.heading_price_renews'] = 'Fornyelsespris';
$lang['AdminPackages.packagepricing.heading_setup_fee'] = 'Opsætningsgebyr';
$lang['AdminPackages.packagepricing.heading_cancellation_fee'] = 'Afbestillingsgebyr';
$lang['AdminPackages.packagepricing.not_applicable'] = 'N/A';
$lang['AdminPackages.packagepricing.pricing_no_results'] = 'Denne pakke har ingen prisoplysninger.';
$lang['AdminPackages.!tooltip.price_renews'] = 'En pris kan indstilles her for fornyelser, eller den vil ellers være standard til den indstillede pris. Eventuelle forholdsmæssige ændringer af tjenester vil være baseret på denne værdi.';
$lang['AdminPackages.!tooltip.prorata'] = 'Pro rata gør det muligt at indstille en bestemt dag i måneden til fornyelse af tjenester, der er oprettet med denne pakke. Kun månedlige og årlige perioder vil blive påvirket af denne indstilling.';
$lang['AdminPackages.!tooltip.prorata_day'] = 'Den dag i måneden, hvor denne service skal fornyes, når den bestilles.';
$lang['AdminPackages.!tooltip.prorata_cutoff'] = 'Indledende ordrer, der afgives på eller før denne dag i måneden, vil kun blive opkrævet for den del af måneden, der slutter på den næste pro rata-dag. Bestillinger, der placeres efter denne dag, vil blive opkrævet for den delvise måned og den efterfølgende serviceperiode.';
$lang['AdminPackages.!tooltip.module_uneditable'] = 'Modulet kan ikke ændres, fordi der allerede er en eller flere tjenester, der bruger denne pakke.';
$lang['AdminPackages.!tooltip.assigned_plugins'] = 'Plugins, der er tildelt denne pakke, kan give yderligere administrationsfunktioner til tjenester.';
$lang['AdminPackages.!tooltip.override_price'] = 'Når denne indstilling er aktiveret, forhindrer den prisændringer i at påvirke eksisterende tjenester ved at indstille en "override price" på nyoprettede tjenester.';
$lang['AdminPackages.!tooltip.upgrades_use_renewal'] = 'Når den er aktiveret, vil opgradering til denne pakke bruge fornyelsespriser, hvis de er indstillet. Det samme gælder for alle konfigurerbare indstillinger, der ændres i opgraderingen. Den almindelige pris vil blive brugt, hvis denne indstilling er deaktiveret.';
$lang['AdminPackages.!tooltip.client_qty'] = 'Det maksimale antal tjenester (uanset status), som hver klient kan oprette via denne pakke.';
$lang['AdminPackages.add.page_title'] = 'Ny pakke';
$lang['AdminPackages.add.boxtitle_newpackage'] = 'Ny pakke';
$lang['AdminPackages.add.heading_basic'] = 'Grundlæggende';
$lang['AdminPackages.add.heading_pricing'] = 'Prisfastsættelse';
$lang['AdminPackages.add.heading_groups'] = 'Gruppemedlemskab';
$lang['AdminPackages.add.heading_plugins'] = 'Plugin-integrationer';
$lang['AdminPackages.add.heading_module'] = 'Valgmuligheder for moduler';
$lang['AdminPackages.add.heading_email'] = 'Velkomst-e-mail';
$lang['AdminPackages.add.heading_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.add.tab_basic'] = 'Grundlæggende';
$lang['AdminPackages.add.tab_module'] = 'Modul';
$lang['AdminPackages.add.tab_email'] = 'Velkomst-e-mail';
$lang['AdminPackages.add.tab_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.add.field_module'] = 'Modul';
$lang['AdminPackages.add.field_packagename'] = 'Navn på pakke';
$lang['AdminPackages.add.field_status'] = 'Status';
$lang['AdminPackages.add.field_override_price'] = 'Fastlåsning af servicepriser';
$lang['AdminPackages.add.field_upgrades_use_renewal'] = 'Brug fornyelsespriser til pakkeopgraderinger';
$lang['AdminPackages.add.field_qty'] = 'Tilgængelig mængde';
$lang['AdminPackages.add.field_qty_unlimited'] = 'Ubegrænset';
$lang['AdminPackages.add.field_client_qty'] = 'Kundegrænse';
$lang['AdminPackages.add.field_client_qty_unlimited'] = 'Ubegrænset';
$lang['AdminPackages.add.field_activation'] = 'Øjeblikkelig aktivering';
$lang['AdminPackages.add.field_description'] = 'Beskrivelse';
$lang['AdminPackages.add.field_description_text'] = 'Tekst';
$lang['AdminPackages.add.field_description_html'] = 'HTML';
$lang['AdminPackages.add.field_configurable_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.add.field_taxable'] = 'Skattepligtig';
$lang['AdminPackages.add.field_single_term'] = 'Annullering ved udgangen af perioden';
$lang['AdminPackages.add.field_modulegroup_any'] = 'Enhver';
$lang['AdminPackages.add.field_prorata'] = 'Aktiver Pro rata';
$lang['AdminPackages.add.field_prorata_day'] = 'Pro rata Dag';
$lang['AdminPackages.add.field_prorata_cutoff'] = 'Pro rata Skæringsdag';
$lang['AdminPackages.add.text_term'] = 'Betegnelse';
$lang['AdminPackages.add.text_period'] = 'Periode';
$lang['AdminPackages.add.text_currency'] = 'Valuta';
$lang['AdminPackages.add.text_price'] = 'Pris';
$lang['AdminPackages.add.text_price_renews'] = 'Fornyelsespris';
$lang['AdminPackages.add.text_setup'] = 'Opsætningsgebyr';
$lang['AdminPackages.add.text_cancellation'] = 'Afbestillingsgebyr';
$lang['AdminPackages.add.text_options'] = 'Valgmuligheder';
$lang['AdminPackages.add.text_remove'] = 'Fjern';
$lang['AdminPackages.add.text_none'] = 'Ingen';
$lang['AdminPackages.add.text_install_modules'] = 'Installer moduler';
$lang['AdminPackages.add.text_refresh'] = 'Opfrisk';
$lang['AdminPackages.add.text_tags'] = 'Tags:';
$lang['AdminPackages.add.text_group'] = 'En pakke skal tilhøre mindst én gruppe for at kunne bruges.';
$lang['AdminPackages.add.text_membergroups'] = 'Medlemsgrupper';
$lang['AdminPackages.add.text_availablegroups'] = 'Tilgængelige grupper';
$lang['AdminPackages.add.text_drag_and_drop'] = 'Træk og slip grupper her';
$lang['AdminPackages.add.text_assigned_plugins'] = 'Tildelte plugins';
$lang['AdminPackages.add.text_available_plugins'] = 'Tilgængelige plugins';
$lang['AdminPackages.add.text_confirm_load_email'] = 'Er du sikker på, at du vil indlæse eksempelmailen? Dette vil forkaste alle ændringer.';
$lang['AdminPackages.add.field_email'] = 'Velkommen E-mail';
$lang['AdminPackages.add.field_packagesubmit'] = 'Opret pakke';
$lang['AdminPackages.add.categorylink_addprice'] = 'Tilføj ekstra pris';
$lang['AdminPackages.add.categorylink_loademail'] = 'Indlæs eksempel på e-mail';
$lang['AdminPackages.add.field_select_group_type'] = 'Vælg mellem tilgængelige grupper';
$lang['AdminPackages.add.field_select_group_type_new'] = 'Opret en ny gruppe';
$lang['AdminPackages.add.text_group_name'] = 'Standardpakke Gruppens navn';
$lang['AdminPackages.edit.page_title'] = 'Opdateringspakke';
$lang['AdminPackages.edit.boxtitle_updatepackage'] = 'Opdateringspakke';
$lang['AdminPackages.edit.heading_basic'] = 'Grundlæggende';
$lang['AdminPackages.edit.heading_pricing'] = 'Prisfastsættelse';
$lang['AdminPackages.edit.heading_groups'] = 'Gruppemedlemskab';
$lang['AdminPackages.edit.heading_plugins'] = 'Plugin-integrationer';
$lang['AdminPackages.edit.heading_module'] = 'Valgmuligheder for moduler';
$lang['AdminPackages.edit.heading_email'] = 'Velkomst-e-mail';
$lang['AdminPackages.edit.heading_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.edit.tab_basic'] = 'Grundlæggende';
$lang['AdminPackages.edit.tab_module'] = 'Modul';
$lang['AdminPackages.edit.tab_email'] = 'Velkomst-e-mail';
$lang['AdminPackages.edit.tab_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.edit.field_module'] = 'Modul';
$lang['AdminPackages.edit.field_packagename'] = 'Navn på pakke';
$lang['AdminPackages.edit.field_status'] = 'Status';
$lang['AdminPackages.edit.field_override_price'] = 'Fastlåsning af servicepriser';
$lang['AdminPackages.edit.field_upgrades_use_renewal'] = 'Brug fornyelsespriser til pakkeopgraderinger';
$lang['AdminPackages.edit.field_qty'] = 'Tilgængelig mængde';
$lang['AdminPackages.edit.field_qty_unlimited'] = 'Ubegrænset';
$lang['AdminPackages.edit.field_client_qty'] = 'Kundegrænse';
$lang['AdminPackages.edit.field_client_qty_unlimited'] = 'Ubegrænset';
$lang['AdminPackages.edit.field_activation'] = 'Øjeblikkelig aktivering';
$lang['AdminPackages.edit.field_description'] = 'Beskrivelse';
$lang['AdminPackages.edit.field_description_text'] = 'Tekst';
$lang['AdminPackages.edit.field_description_html'] = 'HTML';
$lang['AdminPackages.edit.field_configurable_options'] = 'Konfigurerbare muligheder';
$lang['AdminPackages.edit.field_taxable'] = 'Skattepligtig';
$lang['AdminPackages.edit.field_single_term'] = 'Annullering ved udgangen af perioden';
$lang['AdminPackages.edit.field_modulegroup_any'] = 'Enhver';
$lang['AdminPackages.edit.field_prorata'] = 'Aktiver Pro rata';
$lang['AdminPackages.edit.field_prorata_day'] = 'Pro rata Dag';
$lang['AdminPackages.edit.field_prorata_cutoff'] = 'Pro rata Skæringsdag';
$lang['AdminPackages.edit.text_term'] = 'Betegnelse';
$lang['AdminPackages.edit.text_period'] = 'Periode';
$lang['AdminPackages.edit.text_currency'] = 'Valuta';
$lang['AdminPackages.edit.text_price'] = 'Pris';
$lang['AdminPackages.edit.text_price_renews'] = 'Fornyelsespris';
$lang['AdminPackages.edit.text_price_transfer'] = 'Overførselspris';
$lang['AdminPackages.edit.text_setup'] = 'Opsætningsgebyr';
$lang['AdminPackages.edit.text_cancellation'] = 'Afbestillingsgebyr';
$lang['AdminPackages.edit.text_options'] = 'Valgmuligheder';
$lang['AdminPackages.edit.text_remove'] = 'Fjern';
$lang['AdminPackages.edit.text_none'] = 'Ingen';
$lang['AdminPackages.edit.text_install_modules'] = 'Installer moduler';
$lang['AdminPackages.edit.text_refresh'] = 'Opfrisk';
$lang['AdminPackages.edit.text_tags'] = 'Tags:';
$lang['AdminPackages.edit.text_group'] = 'En pakke skal tilhøre mindst én gruppe for at kunne bruges.';
$lang['AdminPackages.edit.text_membergroups'] = 'Medlemsgrupper';
$lang['AdminPackages.edit.text_availablegroups'] = 'Tilgængelige grupper';
$lang['AdminPackages.edit.text_drag_and_drop'] = 'Træk og slip grupper her';
$lang['AdminPackages.edit.text_assigned_plugins'] = 'Tildelte plugins';
$lang['AdminPackages.edit.text_available_plugins'] = 'Tilgængelige plugins';
$lang['AdminPackages.edit.text_confirm_load_email'] = 'Er du sikker på, at du vil indlæse eksempelmailen? Dette vil forkaste alle ændringer.';
$lang['AdminPackages.edit.field_term'] = 'Betegnelse';
$lang['AdminPackages.edit.field_setupfee'] = 'Opsætningsgebyr';
$lang['AdminPackages.edit.field_cancelfee'] = 'Annuller gebyr';
$lang['AdminPackages.edit.field_email'] = 'Velkommen E-mail';
$lang['AdminPackages.edit.field_packagesubmit'] = 'Opdateringspakke';
$lang['AdminPackages.edit.categorylink_addprice'] = 'Tilføj ekstra pris';
$lang['AdminPackages.edit.categorylink_loademail'] = 'Indlæs eksempel på e-mail';
$lang['AdminPackages.groups.page_title'] = 'Pakkegrupper';
$lang['AdminPackages.groups.category_standard'] = 'Standard';
$lang['AdminPackages.groups.category_addon'] = 'Tilføjelse';
$lang['AdminPackages.groups.categorylink_creategroup'] = 'Opret gruppe';
$lang['AdminPackages.groups.boxtitle_packagegroups'] = 'Pakkegrupper';
$lang['AdminPackages.groups.heading_name'] = 'Navn';
$lang['AdminPackages.groups.heading_type'] = 'Type';
$lang['AdminPackages.groups.heading_options'] = 'Valgmuligheder';
$lang['AdminPackages.groups.option_edit'] = 'Rediger';
$lang['AdminPackages.groups.option_delete'] = 'Slet';
$lang['AdminPackages.groups.confirm_delete'] = 'Er du sikker på, at du vil slette denne pakkegruppe? Alle pakker, der er tildelt denne gruppe, vil ikke længere være tildelt denne gruppe og kan blive ubrugelige.';
$lang['AdminPackages.groups.heading_parent_groups'] = 'Forældregrupper';
$lang['AdminPackages.groups.heading_group'] = 'Gruppens navn';
$lang['AdminPackages.groups.no_results'] = 'Der er ingen pakkegrupper.';
$lang['AdminPackages.groups.parents_no_results'] = 'Denne add-on-gruppe har ingen overordnede pakkegrupper.';
$lang['AdminPackages.groups.heading_packages'] = 'Medlemspakker';
$lang['AdminPackages.groups.heading_package_name'] = 'Navn på pakke';
$lang['AdminPackages.groups.packages_no_results'] = 'Denne pakkegruppe har ingen tildelte pakker.';
$lang['AdminPackages.addgroup.page_title'] = 'Ny pakkegruppe';
$lang['AdminPackages.addgroup.boxtitle_addgroup'] = 'Ny pakkegruppe';
$lang['AdminPackages.addgroup.field_name'] = 'Navn';
$lang['AdminPackages.addgroup.field_type'] = 'Type';
$lang['AdminPackages.addgroup.field_description'] = 'Beskrivelse';
$lang['AdminPackages.addgroup.field_allow_upgrades'] = 'Tillad opgraderinger/nedgraderinger mellem pakker i denne gruppe';
$lang['AdminPackages.addgroup.text_parentgroups'] = 'Forældregrupper';
$lang['AdminPackages.addgroup.text_availablegroups'] = 'Tilgængelige grupper';
$lang['AdminPackages.addgroup.field_addgroupsubmit'] = 'Opret gruppe';
$lang['AdminPackages.editgroup.page_title'] = 'Opdater pakkegruppe';
$lang['AdminPackages.editgroup.boxtitle_editgroup'] = 'Opdater pakkegruppe';
$lang['AdminPackages.editgroup.field_name'] = 'Navn';
$lang['AdminPackages.editgroup.field_type'] = 'Type';
$lang['AdminPackages.editgroup.field_description'] = 'Beskrivelse';
$lang['AdminPackages.editgroup.field_allow_upgrades'] = 'Tillad opgraderinger/nedgraderinger mellem pakker i denne gruppe';
$lang['AdminPackages.editgroup.text_parentgroups'] = 'Forældregrupper';
$lang['AdminPackages.editgroup.text_availablegroups'] = 'Tilgængelige grupper';
$lang['AdminPackages.editgroup.field_editgroupsubmit'] = 'Opdateringsgruppe';
$lang['AdminPackages.moduleoptions.not_applicable'] = 'Gruppe';
$lang['AdminPackages.moduleoptions.field_module_group_client'] = 'Tillad kunden at vælge %1$s';
$lang['AdminPackages.moduleoptions.field_module_groups'] = 'Tilladt %1$ss';
$lang['AdminPackages.!tooltip.manual_activation'] = 'Hvis denne indstilling er markeret, skal ventende tjenester, der bruger denne pakke, aktiveres manuelt. Dette er beregnet til brug med moduler, der ikke kan automatisere provisionering.';
$lang['AdminPackages.add.heading_provisioning'] = 'Levering';
$lang['AdminPackages.add.field_manual_activation'] = 'Hold betalte ventende tjenester til manuel aktivering';
$lang['AdminPackages.edit.heading_provisioning'] = 'Levering';
$lang['AdminPackages.edit.field_manual_activation'] = 'Hold betalte ventende tjenester til manuel aktivering';
$lang['AdminPackages.edit.text_default'] = 'Standard';
$lang['AdminPackages.add.text_default'] = 'Standard';

