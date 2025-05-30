<?php
/**
 * Namesilo
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Namesilo.description'] = 'Videresælg domæner gennem NameSilo.';
$lang['Namesilo.module_row'] = 'Konto';
$lang['Namesilo.module_row_plural'] = 'Regnskaber';
$lang['Namesilo.add_module_row'] = 'Tilføj konto';
$lang['Namesilo.manage.module_rows_title'] = 'Regnskaber';
$lang['Namesilo.manage.module_rows_heading.user'] = 'Bruger';
$lang['Namesilo.manage.module_rows_heading.key'] = 'API-nøgle';
$lang['Namesilo.manage.module_rows_heading.sandbox'] = 'Sandkasse';
$lang['Namesilo.manage.module_rows_heading.options'] = 'Valgmuligheder';
$lang['Namesilo.manage.module_rows_heading.portfolio'] = 'Standardportefølje';
$lang['Namesilo.manage.module_rows.edit'] = 'Rediger';
$lang['Namesilo.manage.module_rows.delete'] = 'Slet';
$lang['Namesilo.manage.module_rows.confirm_delete'] = 'Er du sikker på, at du vil slette denne konto?';
$lang['Namesilo.manage.module_rows_no_results'] = 'Der er ingen konti.';
$lang['Namesilo.manage.audit_domains'] = 'Audit-domæner';
$lang['Namesilo.add_row.audit_domains.box_title'] = 'Audit-domæner';
$lang['Namesilo.manage.audit_domains.description'] = 'Dette er en oversigt over domæner fra NameSilo API sammenlignet med domæner, der i øjeblikket er aktive/suspenderede i Blesta.  Dette er med til at sikre, at du ikke betaler for domæner, som du ikke bliver betalt for.';
$lang['Namesilo.manage.audit_domains.no_issues'] = 'Ingen problemer opdaget.';
$lang['Namesilo.manage.audit_domains.results'] = 'Resultater af revision';
$lang['Namesilo.row_meta.user'] = 'Bruger';
$lang['Namesilo.row_meta.key'] = 'API-nøgle';
$lang['Namesilo.row_meta.portfolio'] = 'Portefølje';
$lang['Namesilo.row_meta.payment_id'] = 'Betalings ID';
$lang['Namesilo.row_meta.payment_id.description'] = 'Lad den være tom for at bruge kontomidler, eller indtast ID\'et på en faktureringsprofil, der er <strong>verificeret</strong> på din Namesilo-konto, for at bruge den til køb.  Du kan få dette ID fra';
$lang['Namesilo.row_meta.sandbox'] = 'Sandkasse';
$lang['Namesilo.row_meta.sandbox_true'] = 'Ja';
$lang['Namesilo.row_meta.sandbox_false'] = 'Nej, det er det ikke';
$lang['Namesilo.add_row.box_title'] = 'Tilføj NameSilo-konto';
$lang['Namesilo.add_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['Namesilo.add_row.add_btn'] = 'Tilføj konto';
$lang['Namesilo.edit_row.box_title'] = 'Rediger navnSilo-konto';
$lang['Namesilo.edit_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['Namesilo.edit_row.add_btn'] = 'Opdater konto';
$lang['Namesilo.package_fields.type'] = 'Type';
$lang['Namesilo.package_fields.type_domain'] = 'Registrering af domæne';
$lang['Namesilo.package_fields.type_ssl'] = 'SSL-certifikat';
$lang['Namesilo.package_fields.tld_options'] = 'TLD\'er';
$lang['Namesilo.package_fields.ns1'] = 'Navneserver 1';
$lang['Namesilo.package_fields.ns2'] = 'Navneserver 2';
$lang['Namesilo.package_fields.ns3'] = 'Navneserver 3';
$lang['Namesilo.package_fields.ns4'] = 'Navneserver 4';
$lang['Namesilo.package_fields.ns5'] = 'Navneserver 5';
$lang['Namesilo.package_fields.epp_code'] = 'Epp-kode';
$lang['Namesilo.package_fields.enable_epp_code'] = 'Tillad adgang';
$lang['Namesilo.name'] = 'NameSilo';
$lang['Namesilo.tab_whois.title'] = 'Whois';
$lang['Namesilo.tab_whois.section_registrant'] = 'Registrant';
$lang['Namesilo.tab_whois.section_admin'] = 'Administrativ';
$lang['Namesilo.tab_whois.section_tech'] = 'Teknisk';
$lang['Namesilo.tab_whois.section_billing'] = 'Fakturering';
$lang['Namesilo.tab_whois.field_submit'] = 'Opdatering af Whois';
$lang['Namesilo.tab_email_forwarding.title'] = 'Videresendelse af e-mail';
$lang['Namesilo.tab_email_forwarding.desc'] = 'Videresendelse af e-mails er automatisk at sende e-mails fra en adresse til en anden e-mailadresse. Hvis du f.eks. havde en eksisterende e-mailadresse på email@email.com og derefter registrerede domænet newdomain.com, kunne du bruge e-mailforward til at dirigere sales@newdomain.com til din eksisterende email@email.com e-mailadresse.';
$lang['Namesilo.tab_email_forwarding.field_email_address'] = 'E-mail-adresse';
$lang['Namesilo.tab_email_forwarding.field_forward_to'] = 'Frem til';
$lang['Namesilo.tab_email_forwarding.field_delete'] = 'Slet';
$lang['Namesilo.tab_email_forwarding.field_submit'] = 'Opdater speditører';
$lang['Namesilo.tab_nameservers.title'] = 'Navneservere';
$lang['Namesilo.tab_nameservers.desc'] = 'Vi tillader op til 5 mulige navneservere, men kun 2 er påkrævet. Det er vigtigt, at du ikke indtaster navneserverens IP-adresse, men i stedet indtaster det faktiske navn på navneserveren. Navneservere er typisk formateret som "NS1.host.com".';
$lang['Namesilo.tab_nameservers.field_ns'] = 'Navneserver %1$s';
$lang['Namesilo.tab_nameservers.field_submit'] = 'Opdater navneservere';
$lang['Namesilo.tab_hosts.title'] = 'Registrer navneservere';
$lang['Namesilo.tab_hosts.desc'] = 'Hvis du allerede er fortrolig med opsætning af brugerdefinerede navneservere og forstår, hvordan DNS fungerer, kan du oprette brugerdefinerede navneservere og tildele dem til dit domæne.';
$lang['Namesilo.tab_hosts.field_host'] = 'Vært %1$s';
$lang['Namesilo.tab_hosts.field_ip'] = 'IP-adresse(r)';
$lang['Namesilo.tab_hosts.field_hostname'] = 'Vært';
$lang['Namesilo.tab_hosts.field_submit'] = 'Opdater alle værter';
$lang['Namesilo.tab_client_hosts.help_text'] = 'På denne side kan du tilføje dine egne navneservere (også kaldet "glue records"), som du kan knytte til dine domæner.  For at fjerne en host record skal du tømme alle IP-felter, der er knyttet til den, før du klikker på opdater.  Du kan ikke slette nogen host records, som har domæner, der aktivt bruger den som navneserver.';
$lang['Namesilo.tab_dnssec.title'] = 'DNSSEC';
$lang['Namesilo.tab_dnssec.title_list'] = 'Nuværende DS (DNSSEC) optegnelser';
$lang['Namesilo.tab_dnssec.title_add'] = 'Tilføj DS (DNSSEC) post';
$lang['Namesilo.tab_dnssec.field_delete'] = 'Slet';
$lang['Namesilo.tab_dnssec.field_add'] = 'Tilføj post';
$lang['Namesilo.tab_dnssec.title_disclaimer'] = 'Ansvarsfraskrivelse';
$lang['Namesilo.tab_dnssec.warning_message1'] = 'Du kan bruge denne side til at administrere DS-records for dit domæne. Du bør kun bruge denne side, hvis du er fortrolig med DS-poster og DNSSEC.';
$lang['Namesilo.tab_dnssec.warning_message2'] = 'Når du administrerer DS-poster, vil <strong>domænet stoppe med at blive opløst korrekt</strong>, hvis dine navneservere ikke er konfigureret korrekt med de tilknyttede DNSSEC-ressourceposter.';
$lang['Namesilo.dnssec.algorithm'] = 'Algoritme';
$lang['Namesilo.dnssec.digest_type'] = 'Digest Type';
$lang['Namesilo.dnssec.digest'] = 'Digest';
$lang['Namesilo.dnssec.key_tag'] = 'Nøglemærke';
$lang['Namesilo.tab_dnsrecord.title'] = 'DNS-poster';
$lang['Namesilo.tab_dnsrecord.title_list'] = 'Aktuelle DNS-poster';
$lang['Namesilo.tab_dnsrecord.title_add'] = 'Tilføj en DNS-post';
$lang['Namesilo.tab_dnsrecord.field_delete'] = 'Slet post(er)';
$lang['Namesilo.tab_dnsrecord.field_add'] = 'Tilføj post';
$lang['Namesilo.tab_dnsrecord.help_text_1'] = 'På denne side kan du tilføje eller slette A-, AAAA-, CNAME-, MX- og TXT-DNS-poster. Vær opmærksom på, at det kan tage et par minutter, før DNS-posterne er blevet overført.';
$lang['Namesilo.dnsrecord.record_type'] = 'Type';
$lang['Namesilo.dnsrecord.host'] = 'Vært';
$lang['Namesilo.dnsrecord.value'] = 'Værdi';
$lang['Namesilo.dnsrecord.ttl'] = 'TTL';
$lang['Namesilo.dnsrecord.field_delete'] = 'Slet post(er)';
$lang['Namesilo.dns_records.record_type'] = 'Optagelsestype';
$lang['Namesilo.dns_records.record_type.a_record'] = 'En rekord';
$lang['Namesilo.dns_records.record_type.aaaa_record'] = 'AAAA-rekord';
$lang['Namesilo.dns_records.record_type.cname_record'] = 'CNAME-post';
$lang['Namesilo.dns_records.record_type.mx_record'] = 'MX Record';
$lang['Namesilo.dns_records.record_type.txt_record'] = 'TXT Record';
$lang['Namesilo.tab_settings.title'] = 'Indstillinger';
$lang['Namesilo.tab_settings.field_registrar_lock'] = 'Registratorlås';
$lang['Namesilo.tab_settings.field_registrar_lock_yes'] = 'Indstil registratorlåsen. Anbefales for at forhindre uautoriseret overførsel.';
$lang['Namesilo.tab_settings.field_registrar_lock_no'] = 'Frigør registratorlåsen, så domænet kan overføres.';
$lang['Namesilo.tab_settings.field_request_epp'] = 'Anmod om EPP-kode/overførselsnøgle';
$lang['Namesilo.tab_settings.field_submit'] = 'Opdater indstillinger';
$lang['Namesilo.tab_settings.section_verification'] = 'Bekræftelse af registrantens e-mail';
$lang['Namesilo.tab_settings.verification_text'] = 'Bekræftelsesstatus for registrantens e-mail';
$lang['Namesilo.tab_settings.verified'] = 'Bekræftet';
$lang['Namesilo.tab_settings.not_verified'] = 'IKKE VERIFICERET';
$lang['Namesilo.tab_settings.not_verified_warning'] = '<strong>ADVARSEL:</strong> Dit domæne risikerer at blive deaktiveret, hvis du ikke verificerer registrantens e-mailadresse.';
$lang['Namesilo.tab_settings.field_resend_verification_email'] = 'Send bekræftelses-e-mail igen';
$lang['Namesilo.tab_settings.field_update_registrar_lock'] = 'Opdatering af registratorlås';
$lang['Namesilo.tab_settings.field_epp_code'] = 'EPP-kode';
$lang['Namesilo.tab_settings.field_resend_epp_code'] = 'Send EPP-kode igen';
$lang['Namesilo.tab_adminactions.title'] = 'Admin-handlinger';
$lang['Namesilo.tab_adminactions.field_submit'] = 'Send valgt meddelelse';
$lang['Namesilo.tab_adminactions.sync_date'] = 'Synkroniser fornyelsesdato';
$lang['Namesilo.tab_adminactions.epp_code'] = 'EPP-kode';
$lang['Namesilo.tab_adminactions.update.epp_code'] = 'Opdater EPP-kode';
$lang['Namesilo.tab_adminactions.resendAdminEmail'] = 'Send administrator-e-mail igen';
$lang['Namesilo.manage.manual_renewal'] = 'Forny manuelt (vælg år)';
$lang['Namesilo.!error.user.valid'] = 'Indtast venligst en bruger';
$lang['Namesilo.!error.key.valid'] = 'Indtast venligst en nøgle';
$lang['Namesilo.!error.key.valid_connection'] = 'Bruger- og nøglekombinationen ser ud til at være ugyldig, eller din NameSilo-konto er muligvis ikke konfigureret til at tillade API-adgang.';
$lang['Namesilo.!error.portfolio.valid_portfolio'] = 'Den indtastede portefølje ser ikke ud til at være gyldig.  Er du sikker på, at den er oprettet på din NameSilo-konto?';
$lang['Namesilo.!error.payment_id.valid_format'] = 'Payment ID skal enten være blank eller kun numerisk.';
$lang['Namesilo.!error.epp.empty'] = 'Domæneoverførsler kræver, at der indtastes en EPP-kode.';
$lang['Namesilo.!error.premium_domain'] = '%1$s er et premium-domæne. Kontakt os venligst for mere information.';
$lang['Namesilo.!error.invalid_term'] = 'Ugyldigt antal år, eller ingen år angivet.';
$lang['Namesilo.notice.StatusPending'] = 'Denne ordre er afventende. Den funktion, du forsøger at få adgang til, vil blive tilgængelig, når ordren er blevet aktiveret.';
$lang['Namesilo.notice.StatusSuspended'] = 'Dette domænenavn er blevet suspenderet; domæneadministrationsfunktioner er derfor ikke tilgængelige i øjeblikket. Kontakt venligst din serviceudbyder for flere oplysninger eller for at genoptage servicen.';
$lang['Namesilo.notice.TransferPending'] = 'Dette domæne afventer i øjeblikket, at overførslen afsluttes.  Indtil overførslen er fuldført, er domænestyringsfunktionerne ikke tilgængelige.';
$lang['Namesilo.transfer.domain'] = 'Domænenavn';
$lang['Namesilo.transfer.EPPCode'] = 'EPP-kode';
$lang['Namesilo.domain.domain'] = 'Domænenavn';
$lang['Namesilo.domain.Years'] = 'År';
$lang['Namesilo.domain.WhoisPrivacy'] = 'Whois-fortrolighed';
$lang['Namesilo.domain.DomainAction'] = 'Domænehandling';
$lang['Namesilo.whois.Organization'] = 'Organisation';
$lang['Namesilo.whois.Nickname'] = 'Kælenavn';
$lang['Namesilo.whois.FirstName'] = 'Fornavn';
$lang['Namesilo.whois.LastName'] = 'Efternavn';
$lang['Namesilo.nameserver.ns1'] = 'Name Server 1';
$lang['Namesilo.nameserver.ns2'] = 'Name Server 2';
$lang['Namesilo.nameserver.ns3'] = 'Name Server 3';
$lang['Namesilo.nameserver.ns4'] = 'Name Server 4';
$lang['Namesilo.nameserver.ns5'] = 'Name Server 5';
$lang['Namesilo.whois.Address1'] = 'Adresse 1';
$lang['Namesilo.whois.Address2'] = 'Adresse 2';
$lang['Namesilo.whois.City'] = 'By';
$lang['Namesilo.whois.StateProvince'] = 'Stat/provins';
$lang['Namesilo.whois.PostalCode'] = 'Postnummer';
$lang['Namesilo.whois.Country'] = 'Land';
$lang['Namesilo.whois.Phone'] = 'Telefon';
$lang['Namesilo.whois.EmailAddress'] = 'E-mail';
$lang['Namesilo.domain.RegistrantNexus'] = 'Registrant Type';
$lang['Namesilo.domain.RegistrantNexus.error'] = 'Vælg venligst en type registrant';
$lang['Namesilo.domain.RegistrantNexus.c11'] = 'Amerikansk statsborger';
$lang['Namesilo.domain.RegistrantNexus.c12'] = 'Permanent bosiddende i USA';
$lang['Namesilo.domain.RegistrantNexus.c21'] = 'Amerikansk enhed eller organisation';
$lang['Namesilo.domain.RegistrantNexus.c31'] = 'Udenlandsk organisation';
$lang['Namesilo.domain.RegistrantNexus.c32'] = 'Udenlandsk organisation med kontor i USA';
$lang['Namesilo.domain.RegistrantPurpose'] = 'Formål';
$lang['Namesilo.domain.RegistrantPurpose.error'] = 'Vælg venligst et formål for registranten';
$lang['Namesilo.domain.RegistrantPurpose.p1'] = 'Virksomhed';
$lang['Namesilo.domain.RegistrantPurpose.p2'] = 'Non-profit';
$lang['Namesilo.domain.RegistrantPurpose.p3'] = 'Personlig';
$lang['Namesilo.domain.RegistrantPurpose.p4'] = 'Uddannelse';
$lang['Namesilo.domain.RegistrantPurpose.p5'] = 'Statslig';
$lang['Namesilo.domain.CIRALegalType'] = 'Juridisk type';
$lang['Namesilo.domain.RegistrantPurpose.cco'] = 'Virksomhed';
$lang['Namesilo.domain.RegistrantPurpose.cct'] = 'Canadisk statsborger';
$lang['Namesilo.domain.RegistrantPurpose.res'] = 'Bosiddende i Canada';
$lang['Namesilo.domain.RegistrantPurpose.gov'] = 'Statslig enhed';
$lang['Namesilo.domain.RegistrantPurpose.edu'] = 'Uddannelse';
$lang['Namesilo.domain.RegistrantPurpose.ass'] = 'Ikke-inkorporeret forening';
$lang['Namesilo.domain.RegistrantPurpose.hop'] = 'Hospital';
$lang['Namesilo.domain.RegistrantPurpose.prt'] = 'Partnerskab';
$lang['Namesilo.domain.RegistrantPurpose.tdm'] = 'Varemærke';
$lang['Namesilo.domain.RegistrantPurpose.trd'] = 'Fagforening';
$lang['Namesilo.domain.RegistrantPurpose.plt'] = 'Politisk parti';
$lang['Namesilo.domain.RegistrantPurpose.lam'] = 'Biblioteker, arkiver og museer';
$lang['Namesilo.domain.RegistrantPurpose.trs'] = 'Tillid';
$lang['Namesilo.domain.RegistrantPurpose.abo'] = 'Oprindelige folk';
$lang['Namesilo.domain.RegistrantPurpose.inb'] = 'Indisk band';
$lang['Namesilo.domain.RegistrantPurpose.lgr'] = 'Juridisk repræsentant';
$lang['Namesilo.domain.RegistrantPurpose.omk'] = 'Officielt mærke';
$lang['Namesilo.domain.RegistrantPurpose.maj'] = 'Hendes Majestæt Dronningen';
$lang['Namesilo.domain.RegistrantPurpose.other'] = 'Andet';
$lang['Namesilo.domain.CIRAWhoisDisplay'] = 'Whois Publishing';
$lang['Namesilo.domain.CIRAWhoisDisplay.full'] = 'Offentliggør';
$lang['Namesilo.domain.CIRAWhoisDisplay.private'] = 'Hold privat';
$lang['Namesilo.domain.CIRALanguage'] = 'Sprog';
$lang['Namesilo.domain.CIRALanguage.en'] = 'Engelsk';
$lang['Namesilo.domain.CIRALanguage.fr'] = 'Fransk';
$lang['Namesilo.!success.packages_saved'] = 'Pakkerne er blevet gemt med succes.';
$lang['Namesilo.!success.epp_code_sent'] = 'EPP-koden/overførselsnøglen er blevet sendt til den administrative kontakt for dette domænenavn via e-mail.';
$lang['Namesilo.!error.FRLegalType.format'] = 'Vælg venligst en gyldig juridisk type';
$lang['Namesilo.!error.FRRegistrantBirthDate.format'] = 'Angiv venligst din fødselsdato i formatet: ÅÅÅÅ-MM-DD';
$lang['Namesilo.!error.FRRegistrantBirthplace.format'] = 'Angiv venligst dit fødested.';
$lang['Namesilo.!error.FRRegistrantLegalId.format'] = 'Indstil venligst dit SIREN/SIRET-nummer';
$lang['Namesilo.!error.FRRegistrantTradeNumber.format'] = 'Angiv venligst dit varemærkenummer.';
$lang['Namesilo.!error.FRRegistrantDunsNumber.format'] = 'Angiv venligst dit DUNS-nummer.';
$lang['Namesilo.!error.FRRegistrantLocalId.format'] = 'Angiv venligst dit EEA Local ID.';
$lang['Namesilo.!error.FRRegistrantJoDateDec.format'] = 'Angiv venligst Journal Declaration Date i formatet: ÅÅÅÅ-MM-DD';
$lang['Namesilo.!error.FRRegistrantJoDatePub.format'] = 'Angiv venligst tidsskriftets udgivelsesdato i formatet: ÅÅÅÅ-MM-DD';
$lang['Namesilo.!error.FRRegistrantJoNumber.format'] = 'Angiv venligst journalnummeret.';
$lang['Namesilo.!error.FRRegistrantJoPage.format'] = 'Indstil venligst Journal Announcement Page Number.';
$lang['Namesilo.!error.US.RegistrantNexus.empty'] = 'Vælg venligst en registranttype.';
$lang['Namesilo.!error.US.RegistrantPurpose.empty'] = 'Vælg venligst et formål for registranten.';
$lang['Namesilo.!error.US.RegistrantNexus.invalid'] = 'Ugyldig registranttype indsendt.';
$lang['Namesilo.!error.US.RegistrantPurpose.invalid'] = 'Ugyldigt registreringsformål indsendt.';
$lang['Namesilo.!error.CA.CIRALegalType.empty'] = 'Vælg venligst en juridisk type.';
$lang['Namesilo.!error.CA.CIRAWhoisDisplay.empty'] = 'Vælg venligst en whois-visningsmulighed.';
$lang['Namesilo.!error.CA.CIRALanaguage.empty'] = 'Vælg venligst et sprog.';
$lang['Namesilo.!error.CA.CIRALegalType.invalid'] = 'Ugyldig juridisk type indsendt.';
$lang['Namesilo.!error.CA.CIRAWhoisDisplay.invalid'] = 'Ugyldig whois-visningsmulighed indsendt.';
$lang['Namesilo.!error.CA.CIRALanaguage.invalid'] = 'Ugyldigt sprog indsendt.';
$lang['Namesilo.!error.CA.CIRALegalType.other'] = 'Kun enkelte juridiske typer kan behandles automatisk.  Kontakt os venligst for mere information.';
$lang['Namesilo.!tooltip.upgrades_use_renewal'] = 'Når den er aktiveret, vil opgradering til denne pakke bruge fornyelsespriser, hvis de er indstillet. Den almindelige pris vil blive brugt, hvis denne indstilling er deaktiveret.';
$lang['Namesilo.tab_whois.copy_registrant_info'] = 'Kopier oplysninger om registranten';
$lang['Namesilo.dnsrecord.distance'] = 'Prioritet';
$lang['Namesilo.!success.contact_deleted'] = 'Kontakten blev slettet med succes.';
$lang['Namesilo.tab_edit_contact.field_submit'] = 'Gem kontakt';
$lang['Namesilo.tab_edit_contact.field_back'] = 'Tilbage';
$lang['Namesilo.tab_add_contact.title'] = 'Tilføj kontakt';
$lang['Namesilo.tab_edit_contact.title'] = 'Rediger kontakt';
$lang['Namesilo.tab_manage_contacts.field_submit'] = 'Indstil standardregistrantkontakt';
$lang['Namesilo.tab_manage_contacts.field_sync'] = 'Hent kontakter fra registreringsdatabasen';
$lang['Namesilo.tab_manage_contacts.option_delete'] = 'Sletning';
$lang['Namesilo.tab_manage_contacts.option_edit'] = 'Rediger';
$lang['Namesilo.tab_manage_contacts.option_add'] = 'Tilføj kontakt';
$lang['Namesilo.tab_manage_contacts.heading_options'] = 'Valgmuligheder';
$lang['Namesilo.tab_manage_contacts.heading_name'] = 'Navn på kontaktperson';
$lang['Namesilo.tab_manage_contacts.title'] = 'Administrer kontakter';
$lang['Namesilo.tab_whois.section_technical'] = 'Teknisk';
$lang['Namesilo.tab_whois.section_administrative'] = 'Administrativt';

