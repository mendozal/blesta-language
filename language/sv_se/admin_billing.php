<?php
/**
 * Admin Billing
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminBilling.batch.text_batchsubmit'] = 'Batch-process';
$lang['AdminBilling.batch.field_passphrase'] = 'Lösenord';
$lang['AdminBilling.batch.text_description'] = 'Ange din lösenfras för att manuellt batchbehandla alla fakturor som är schemalagda för automatisk debitering med ett lokalt lagrat betalkonto.';
$lang['AdminBilling.batch.no_passphrase'] = 'Manuell batchbearbetning är inte aktiverad.';
$lang['AdminBilling.batch.boxtitle_batch'] = 'Batch';
$lang['AdminBilling.batch.page_title'] = 'Fakturering Batch';
$lang['AdminBilling.printqueue.text_marksubmit'] = 'Märke Tryckt';
$lang['AdminBilling.printqueue.text_printsubmit'] = 'Skriv ut';
$lang['AdminBilling.printqueue.heading_deliverydatesent'] = 'Datum för sändning';
$lang['AdminBilling.printqueue.heading_datedue'] = 'Datum Förfallodag';
$lang['AdminBilling.printqueue.heading_datebilled'] = 'Datum för fakturering';
$lang['AdminBilling.printqueue.heading_due'] = 'På grund av';
$lang['AdminBilling.printqueue.heading_paid'] = 'Betald';
$lang['AdminBilling.printqueue.heading_amount'] = 'Belopp';
$lang['AdminBilling.printqueue.heading_client'] = 'Kund #';
$lang['AdminBilling.printqueue.heading_invoice'] = 'Faktura #';
$lang['AdminBilling.printqueue.no_results_to_print'] = 'Det finns inga fakturor i kö för att skrivas ut.';
$lang['AdminBilling.printqueue.no_results_printed'] = 'Det finns inga tidigare utskrivna fakturor.';
$lang['AdminBilling.printqueue.boxtitle_printqueue'] = 'Kö för utskrift';
$lang['AdminBilling.printqueue.category_printed'] = 'Tidigare tryckt';
$lang['AdminBilling.printqueue.category_to_print'] = 'Skriv ut';
$lang['AdminBilling.printqueue.page_title'] = 'Utskriftskö för fakturering';
$lang['AdminBilling.invoices.text_edit'] = 'Redigera';
$lang['AdminBilling.invoices.applied_no_results'] = 'Denna faktura har inga transaktioner tillämpade på den.';
$lang['AdminBilling.invoices.headingexpand_options'] = 'Alternativ';
$lang['AdminBilling.invoices.headingexpand_appliedon'] = 'Tillämpad på';
$lang['AdminBilling.invoices.headingexpand_applied'] = 'Tillämpad';
$lang['AdminBilling.invoices.headingexpand_amount'] = 'Belopp';
$lang['AdminBilling.invoices.headingexpand_paymenttype'] = 'Typ av betalning';
$lang['AdminBilling.transactions.applied_no_results'] = 'Denna transaktion har inte tillämpats på några fakturor.';
$lang['AdminBilling.transactions.headingexpand_appliedon'] = 'Tillämpad på';
$lang['AdminBilling.transactions.headingexpand_amount'] = 'Belopp';
$lang['AdminBilling.transactions.headingexpand_invoice'] = 'Faktura';
$lang['AdminBilling.transactions.no_results'] = 'Det finns inga transaktioner med denna status.';
$lang['AdminBilling.transactions.option_edit'] = 'Redigera';
$lang['AdminBilling.transactions.category_returned'] = 'Återvände';
$lang['AdminBilling.transactions.category_refunded'] = 'Återbetalda';
$lang['AdminBilling.transactions.category_pending'] = 'Pågående';
$lang['AdminBilling.transactions.category_error'] = 'Fel';
$lang['AdminBilling.transactions.category_voided'] = 'Upphörd';
$lang['AdminBilling.transactions.category_declined'] = 'Deklinerad';
$lang['AdminBilling.transactions.category_approved'] = 'Godkänd';
$lang['AdminBilling.transactions.heading_options'] = 'Alternativ';
$lang['AdminBilling.transactions.heading_date'] = 'Datum';
$lang['AdminBilling.transactions.heading_reference_id'] = 'Referensnummer';
$lang['AdminBilling.transactions.heading_number'] = 'Antal';
$lang['AdminBilling.transactions.heading_applied'] = 'Tillämpad';
$lang['AdminBilling.transactions.heading_credit'] = 'Krediterad';
$lang['AdminBilling.transactions.heading_amount'] = 'Belopp';
$lang['AdminBilling.transactions.heading_type'] = 'Typ';
$lang['AdminBilling.transactions.heading_client'] = 'Kund #';
$lang['AdminBilling.transactions.boxtitle_transactions'] = 'Transaktioner';
$lang['AdminBilling.transactions.page_title'] = 'Faktureringstransaktioner';
$lang['AdminBilling.serviceinfo.cancellation_reason'] = 'Orsak till annullering: %1$s';
$lang['AdminBilling.serviceinfo.no_results'] = 'Denna tjänst har inga detaljer.';
$lang['AdminBilling.services.field_actionsubmit'] = 'Skicka in';
$lang['AdminBilling.services.action.field_client'] = 'Kund:';
$lang['AdminBilling.services.action.push_to_client'] = 'Tryck till klient';
$lang['AdminBilling.services.action.field_action_type_none'] = 'Avbryt inte';
$lang['AdminBilling.services.action.field_action_type_date'] = 'Specifikt datum';
$lang['AdminBilling.services.action.field_action_type_term'] = 'Slutet av terminen';
$lang['AdminBilling.services.action.schedule_cancellation'] = 'Annullering av schema';
$lang['AdminBilling.services.recurring_term'] = '%1$s %2$s @ %3$s';
$lang['AdminBilling.services.no_results'] = 'Det finns inga tjänster med denna status.';
$lang['AdminBilling.services.text_never'] = 'Aldrig';
$lang['AdminBilling.services.category_scheduled_cancellation'] = 'Schemalagd';
$lang['AdminBilling.services.category_in_review'] = 'I översikt';
$lang['AdminBilling.services.category_pending'] = 'Pågående';
$lang['AdminBilling.services.category_suspended'] = 'Suspenderad';
$lang['AdminBilling.services.category_canceled'] = 'Avbokad';
$lang['AdminBilling.services.category_active'] = 'Aktiv';
$lang['AdminBilling.services.confirm_delete'] = 'Är du säker på att du vill ta bort den här tjänsten?';
$lang['AdminBilling.services.option_delete'] = 'Radera';
$lang['AdminBilling.services.option_manage'] = 'Hantera';
$lang['AdminBilling.services.heading_options'] = 'Alternativ';
$lang['AdminBilling.services.heading_datecanceled'] = 'Datum Annullerat';
$lang['AdminBilling.services.heading_datesuspended'] = 'Datum uppskjutet';
$lang['AdminBilling.services.heading_daterenews'] = 'Datum Förnyas';
$lang['AdminBilling.services.heading_dateadded'] = 'Datum tillagt';
$lang['AdminBilling.services.heading_term'] = 'Term';
$lang['AdminBilling.services.heading_label'] = 'Etikett';
$lang['AdminBilling.services.heading_package'] = 'Paket';
$lang['AdminBilling.services.heading_client'] = 'Kund #';
$lang['AdminBilling.services.boxtitle_services'] = 'Tjänster';
$lang['AdminBilling.services.page_title'] = 'Faktureringstjänster';
$lang['AdminBilling.quotationinvoices.invoices_no_results'] = 'Det finns inga fakturor kopplade till denna offert.';
$lang['AdminBilling.quotationinvoices.option_view'] = 'Utsikt';
$lang['AdminBilling.quotationinvoices.headingexpand_options'] = 'Alternativ';
$lang['AdminBilling.quotationinvoices.headingexpand_date_billed'] = 'Datum för fakturering';
$lang['AdminBilling.quotationinvoices.headingexpand_paid'] = 'Betald';
$lang['AdminBilling.quotationinvoices.headingexpand_amount'] = 'Belopp';
$lang['AdminBilling.quotationinvoices.headingexpand_invoice'] = 'Faktura #';
$lang['AdminBilling.quotations.no_results'] = 'Det finns inga offerter med denna status.';
$lang['AdminBilling.quotations.confirm_approve'] = 'Är du säker på att du vill godkänna denna offert?';
$lang['AdminBilling.quotations.option_approve'] = 'Godkänna';
$lang['AdminBilling.quotations.option_invoice'] = 'Skapa faktura';
$lang['AdminBilling.quotations.option_view'] = 'Utsikt';
$lang['AdminBilling.quotations.option_edit'] = 'Redigera';
$lang['AdminBilling.quotations.heading_options'] = 'Alternativ';
$lang['AdminBilling.quotations.heading_date_expires'] = 'Utgångsdatum';
$lang['AdminBilling.quotations.heading_date_created'] = 'Datum för skapande';
$lang['AdminBilling.quotations.heading_total'] = 'Belopp';
$lang['AdminBilling.quotations.heading_subtotal'] = 'Delsumma';
$lang['AdminBilling.quotations.heading_staff'] = 'Citerad av';
$lang['AdminBilling.quotations.heading_title'] = 'Titel';
$lang['AdminBilling.quotations.heading_client'] = 'Kund #';
$lang['AdminBilling.quotations.heading_quotation'] = 'Citat #';
$lang['AdminBilling.quotations.boxtitle_quotations'] = 'Citat';
$lang['AdminBilling.quotations.page_title'] = 'Citat om fakturering';
$lang['AdminBilling.invoices.no_results'] = 'Det finns inga fakturor med denna status.';
$lang['AdminBilling.invoices.duration_infinite'] = '∞';
$lang['AdminBilling.invoices.duration_finite'] = '%1$s gånger';
$lang['AdminBilling.invoices.term_year_plural'] = '%1$s år';
$lang['AdminBilling.invoices.term_month_plural'] = '%1$s månader';
$lang['AdminBilling.invoices.term_week_plural'] = '%1$s veckor';
$lang['AdminBilling.invoices.term_day_plural'] = '%1$s dagar';
$lang['AdminBilling.invoices.term_year'] = '%1$s år';
$lang['AdminBilling.invoices.term_month'] = '%1$s månad';
$lang['AdminBilling.invoices.term_week'] = '%1$s vecka';
$lang['AdminBilling.invoices.term_day'] = '%1$s dag';
$lang['AdminBilling.invoices.subtotal_w_tax'] = '%1$s +skatt';
$lang['AdminBilling.invoices.option_pay'] = 'Betala';
$lang['AdminBilling.invoices.option_view'] = 'Utsikt';
$lang['AdminBilling.invoices.option_edit'] = 'Redigera';
$lang['AdminBilling.invoices.category_recurring'] = 'Återkommande';
$lang['AdminBilling.invoices.category_pending'] = 'Pågående';
$lang['AdminBilling.invoices.category_pastdue'] = 'Förfallna till betalning';
$lang['AdminBilling.invoices.category_voided'] = 'Upphörd';
$lang['AdminBilling.invoices.category_closed'] = 'Stängt';
$lang['AdminBilling.invoices.category_drafts'] = 'Utkast';
$lang['AdminBilling.invoices.category_open'] = 'Öppna';
$lang['AdminBilling.invoices.heading_count'] = 'Räkna';
$lang['AdminBilling.invoices.heading_duration'] = 'Varaktighet';
$lang['AdminBilling.invoices.heading_term'] = 'Term';
$lang['AdminBilling.invoices.heading_options'] = 'Alternativ';
$lang['AdminBilling.invoices.heading_datedue'] = 'Datum Förfallodag';
$lang['AdminBilling.invoices.heading_datebilled'] = 'Datum för fakturering';
$lang['AdminBilling.invoices.heading_dateclosed'] = 'Datum för stängning';
$lang['AdminBilling.invoices.heading_due'] = 'På grund av';
$lang['AdminBilling.invoices.heading_paid'] = 'Betald';
$lang['AdminBilling.invoices.heading_amount'] = 'Belopp';
$lang['AdminBilling.invoices.heading_client'] = 'Kund #';
$lang['AdminBilling.invoices.heading_recurinvoice'] = 'Återkommande #';
$lang['AdminBilling.invoices.heading_invoice'] = 'Faktura #';
$lang['AdminBilling.invoices.boxtitle_invoices'] = 'Fakturor';
$lang['AdminBilling.invoices.page_title'] = 'Fakturering av fakturor';
$lang['AdminBilling.managewidgets.text_author'] = 'Författare:';
$lang['AdminBilling.managewidgets.text_version'] = 'ver %1$s';
$lang['AdminBilling.managewidgets.text_widgets'] = 'Dra widgetar från höger till vänster för att lägga till dem i din faktureringsöversikt, eller från vänster till höger för att ta bort dem.';
$lang['AdminBilling.updatedashboard.text_layout'] = 'Välj en layout nedan för att anpassa din faktureringsöversikt.';
$lang['AdminBilling.index.action_batch'] = 'Artiklar som väntar på batch';
$lang['AdminBilling.index.action_printqueue'] = 'Objekt som väntar på utskrift';
$lang['AdminBilling.index.no_actions'] = 'Inga åtgärder på gång.';
$lang['AdminBilling.index.heading_actions'] = 'Åtgärder';
$lang['AdminBilling.index.customize_dashboard'] = 'Anpassa översikt';
$lang['AdminBilling.index.manage_widgets'] = 'Hantera widgetar';
$lang['AdminBilling.index.page_title'] = 'Översikt över fakturering';
$lang['AdminBilling.index.closed_parethesis'] = ')';
$lang['AdminBilling.index.open_parethesis'] = '(';
$lang['AdminBilling.!error.future_cancel_date'] = 'Det planerade avbokningsdatumet får inte ligga i det förflutna.';
$lang['AdminBilling.!error.invalid_passphrase'] = 'Den angivna lösenfrasen är ogiltig.';
$lang['AdminBilling.!error.no_invoices_selected'] = 'Inga fakturor har valts.';
$lang['AdminBilling.!success.services_pushed'] = 'De valda tjänsterna överfördes framgångsrikt till den nya klienten.';
$lang['AdminBilling.!success.services_scheduled_uncancel'] = 'De utvalda tjänsterna är inte längre planerade att ställas in.';
$lang['AdminBilling.!success.services_scheduled_cancel'] = 'De valda tjänsterna var framgångsrikt schemalagda för att avbrytas.';
$lang['AdminBilling.!success.invoices_marked_printed'] = 'De valda fakturorna har markerats som utskrivna.';
$lang['AdminBilling.services.action.field_suspension_reason'] = 'Orsak till avstängning:';
$lang['AdminBilling.services.action.unsuspend'] = 'Osuspenderad';
$lang['AdminBilling.services.action.suspend'] = 'Avvakta';
$lang['AdminBilling.!success.services_unsuspended'] = 'De utvalda tjänsterna har framgångsrikt avbrutits.';
$lang['AdminBilling.!success.services_suspended'] = 'De valda tjänsterna har framgångsrikt avbrutits.';

