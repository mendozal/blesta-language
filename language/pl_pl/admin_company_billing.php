<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s godzin';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s Godzina';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Brak';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = 'Odstęp między 2. próbą odnowienia';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'Próg odstępu między 2. próbą odnowienia';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = 'Odstęp między 1. próbą odnowienia';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = 'Próg odstępu między 1. próbą odnowienia';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'Liczba prób odnowienia usługi przed opóźnieniem Odstęp między próbami Odstęp między próbami odnowienia co 2 godziny';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'Liczba prób odnowienia usługi przed opóźnieniem Odstęp między próbami Odstęp między próbami odnowienia co 1 godzinę';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Naprawiono';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Procent';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Zastosuj do całkowitej kwoty faktury';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Minimum';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Kwota';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Rodzaj opłaty';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Waluta';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Włączone';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Opcje podstawowe';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Opłaty za zwłokę';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Należy pamiętać, że jeśli ta opcja jest zaznaczona, wszystkie faktury wysyłane do PostalMethods będą kolorowe zamiast czarno-białych.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Jeśli ta opcja jest zaznaczona, faktury wysyłane do PostalMethods będą drukowane z przodu i z tyłu strony.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'Podczas testowania należy używać tajnego klucza środowiska testowego dostarczonego przez PostalMethods.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'Postal Methods wyśle kopertę zwrotną z każdą wysyłką.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Druk kolorowy';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Drukowanie dwustronne';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Tajny klucz API';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Hasło';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Nazwa użytkownika';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Metody dostarczania faktur';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods drukuje, pakuje i wysyła faktury do klientów za Ciebie. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Zarejestruj konto PostalMethods i zacznij wysyłać faktury już dziś.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'PostalMethods';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax umożliwia faksowanie faktur przez Internet. <a href="http://www.interfax.net/" target="_blank">Zarejestruj konto InterFax</a> i zacznij faksować faktury już dziś.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Opcje podstawowe';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Dostawa faktury';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Dostawa faktury';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Zaznaczenie tego pola spowoduje usunięcie wszelkich nadpisań akceptowanych typów płatności ustawionych na kliencie, jeśli są one wyłączone w firmie.';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Usuń akceptowane typy płatności aktualnie ustawione na klientach';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Usuń nadpisania klienta';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Zautomatyzowana izba rozliczeniowa';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Karta kredytowa';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Tylko wybrane typy płatności są dostępne do przetwarzania za pośrednictwem bramek lub mogą być dodawane jako konta płatności, nawet jeśli aktywna bramka obsługuje dany typ. Usunięcie zaznaczenia typu, który jest już akceptowany, spowoduje, że płatności tego typu nie będą przetwarzane.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Akceptowane rodzaje płatności';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Akceptowane typy płatności';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.customization.remove'] = 'Usunąć';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Rodzina czcionek';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Typ pliku faktury';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Termin płatności - standardowy';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Data wymagalności - Pro Forma';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Termin płatności - wersje robocze';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Płatności/Kredyty';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Płatny znak wodny';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Nazwa/adres firmy';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Wyświetlanie na fakturze';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Szablon faktury';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Rozmiar papieru';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Warunki';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Kontekst';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Kompresja faktur PDF';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Metoda buforowania faktur';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Wartość przyrostu notowania';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Wartość początkowa notowania';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Format notowania';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Typ faktury';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Znak wypełnienia faktury';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Rozmiar wypełnienia faktury';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Wartość przyrostu faktury';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Wartość początkowa faktury pro forma';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Wartość początkowa faktury';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Format faktury pro forma';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Format projektu faktury';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Format faktury';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Wygląd i wrażenia';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Pamięć podręczna';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Opcje notowań';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Opcje podstawowe';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Dostosowywanie faktur';
$lang['AdminCompanyBilling.customization.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Dostosowanie faktury';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(użyto %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Dostępne pakiety';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Przypisane pakiety';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Wszystkie';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Edytuj kupon';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Filtr grup pakietów';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Pakiety';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Usunąć';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'NIE DOTYCZY';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Warunki';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Okres';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Włączone';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Ten kupon można zastosować tylko do usług zamówionych na jeden z wybranych terminów/okresów. Jeśli żaden z nich nie jest włączony, termin usługi zostanie zignorowany podczas oceny ograniczeń kuponu.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Warunki';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Wartość';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Typ';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Waluta';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Dodaj dodatkową walutę';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Opcje rabatowe';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'Ograniczenia mają zastosowanie do odnawiania usług';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'Ograniczenia nie mają zastosowania do odnawiania usług';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Ilość';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Data zakończenia';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Data rozpoczęcia';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Ograniczenia';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Generowanie kodu';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Kod kuponu';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Tylko do użytku wewnętrznego';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Zastosuj do konfigurowalnych opcji';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Zastosuj, gdy usługa jest dodawana lub odnawiana';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Ma zastosowanie tylko w przypadku dodania usługi';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'Podstawowy';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Edytuj kupon';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Edytuj kupon';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Dostępne pakiety';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Przypisane pakiety';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Wszystkie';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Utwórz kupon';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Filtr grup pakietów';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Pakiety';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Usunąć';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'NIE DOTYCZY';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Warunki';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Okres';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Włączone';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Ten kupon można zastosować tylko do usług zamówionych na jeden z wybranych terminów/okresów. Jeśli żaden z nich nie jest włączony, termin usługi zostanie zignorowany podczas oceny ograniczeń kuponu.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Ograniczenia czasowe';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Wartość';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Typ';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Waluta';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Dodaj dodatkową walutę';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Opcje rabatowe';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'Ograniczenia mają zastosowanie do odnawiania usług';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'Ograniczenia nie mają zastosowania do odnawiania usług';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Ilość';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Data zakończenia';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Data rozpoczęcia';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Ograniczenia';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Generowanie kodu';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Kod kuponu';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Tylko do użytku wewnętrznego';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Zastosuj do konfigurowalnych opcji';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Zastosuj, gdy usługa jest dodawana lub odnawiana';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Ma zastosowanie tylko w przypadku dodania usługi';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Włączone';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'Podstawowy';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Nowy kupon';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Nowy kupon';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = 'Czy na pewno chcesz usunąć ten kupon?';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Usuń';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Edytuj';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Wielokrotność';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Waluta';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Opcje';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Data zakończenia';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Data rozpoczęcia';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Max';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Używany';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Zniżka';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Kod';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Kupony';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Dodaj kupon';
$lang['AdminCompanyBilling.coupons.no_results'] = 'Nie ma żadnych kuponów.';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Kupony';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Powiadomienie o oczekującym automatycznym obciążeniu konta';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Trzecie powiadomienie';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'Drugie powiadomienie';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Pierwsze powiadomienie';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Zezwalaj na wysyłanie powiadomień o płatnościach';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Zezwalanie na wysyłanie powiadomień o anulowaniu usługi';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Edytuj szablon wiadomości e-mail';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Wyłączony';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Termin płatności';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s dni';
$lang['AdminCompanyBilling.notices.text_day'] = '%1$s Day';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Termin płatności faktury';
$lang['AdminCompanyBilling.notices.text_after'] = 'Po';
$lang['AdminCompanyBilling.notices.text_before'] = 'Przed';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Powiadomienia o płatnościach mogą być używane jako powiadomienia o opóźnieniach lub przypomnienia o płatnościach.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Powiadomienia';
$lang['AdminCompanyBilling.notices.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Powiadomienia';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s dni';
$lang['AdminCompanyBilling.invoices.text_day'] = '%1$s Day';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'Tego samego dnia';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Nigdy';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Dowolny -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Ustawienia aktualizacji';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Zmiana usługi kolejki do momentu zapłaty';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Pokaż pole identyfikatora podatkowego w interfejsie klienta';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Unieważnianie otwartych faktur kilka dni po terminie płatności';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Unieważnienie otwartych faktur po anulowaniu usługi';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Automatyczne świadczenie płatnych usług oczekujących';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Automatycznie zastosuj luźne kredyty';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Zezwolenie na przyznawanie proporcjonalnych kredytów za obniżenie poziomu usług';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Umożliwienie klientom zmiany pakietu usług';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Umożliwienie klientom zmiany warunków świadczenia usług';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Umożliwienie klientom tworzenia dodatków do istniejących usług';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Zezwalanie usługom dodatkowym na synchronizację z ich usługami nadrzędnymi';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Umożliwienie klientom ręcznego odnawiania usług';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Umożliwienie klientom anulowania usług';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Wyświetlanie zakresu dat usługi dla konfigurowalnych opcji';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Dołączanie opisów pakietów do faktur';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Wspólne fakturowanie usług';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Faktura za zawieszone usługi';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Pozwól klientowi ustawić metodę fakturowania';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Włącz automatyczne obciążenie konta';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Nałożenie opłaty za opóźnienie na otwarte faktury po upływie terminu płatności';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Anulowanie zmiany usługi kilka dni po terminie';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Próby odnowienia usługi';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Próby automatycznego obciążenia konta';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Zawieszenie usług kilka dni po terminie';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Automatyczne obciążenie na dni przed terminem płatności';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Wycena Procent depozytu domyślnego (%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Cytat Dead Days After Expiration';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Dni wygaśnięcia oferty';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Dni faktury przed odnowieniem';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Opcje faktur i opłat';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Ustawienia > Firma > Rozliczenia/Płatności > Opcje faktur i opłat';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'UWAGA: Te ustawienia mają zastosowanie tylko do grup klientów, które dziedziczą swoje ustawienia od firmy.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Wprowadź warunki płatności lub inne informacje, które mają pojawić się na fakturze.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Aby uzyskać dodatkowe czcionki, rozpakuj niestandardowe czcionki TCPDF do katalogu /vendors/tecnickcom/tcpdf/fonts/ w ramach instalacji.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'Typ pliku faktury. Szablony faktur mogą obsługiwać różne typy plików.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'Szablon faktury używany do renderowania faktury.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'Rozmiar papieru faktury.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Prześlij tło, które ma pojawić się na fakturze.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Prześlij logo, które ma pojawić się na fakturze.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Kompresuj buforowane pliki PDF, aby zaoszczędzić miejsce na dysku. Włączenie tej opcji może obniżyć wydajność.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Zapisuje buforowaną kopię każdej faktury na dysku.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'Numery faktur, których długość znaków jest mniejsza niż rozmiar wypełnienia faktury, zostaną uzupełnione z lewej strony o podany znak.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'Rozmiar wypełnienia faktury określa minimalną długość znaków numerów faktur.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'Kolejne numery faktur będą zwiększane o tę wartość.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'Numery faktur będą rozpoczynać się (i zwiększać) od tej wartości początkowej.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'Numery faktur będą rozpoczynać się (i zwiększać) od tej wartości początkowej.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'Dostępne znaczniki to: {num} - numer faktury (wymagany); {ear} - czterocyfrowy rok; {month} - dwucyfrowy miesiąc; {day} - dwucyfrowy dzień miesiąca.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'Dostępne znaczniki to: {num} - numer faktury (wymagany); {ear} - czterocyfrowy rok; {month} - dwucyfrowy miesiąc; {day} - dwucyfrowy dzień miesiąca.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'Dostępne znaczniki to: {num} - numer faktury (wymagany); {ear} - czterocyfrowy rok; {month} - dwucyfrowy miesiąc; {day} - dwucyfrowy dzień miesiąca.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'Typ faktury, który jest tworzony domyślnie. Faktury pro forma zmieniają się w faktury standardowe po ich opłaceniu i zamknięciu.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'Liczba dni przed automatycznym obciążeniem konta w celu wysłania wiadomości e-mail z powiadomieniem o oczekującym automatycznym obciążeniu.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'Liczba dni przed lub po wymagalności faktury, aby wysłać trzecią wiadomość e-mail z powiadomieniem o opóźnieniu.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'Liczba dni przed lub po wymagalności faktury, aby wysłać drugą wiadomość e-mail z powiadomieniem o opóźnieniu.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'Liczba dni przed lub po wymagalności faktury, aby wysłać pierwszą wiadomość e-mail z powiadomieniem o opóźnieniu.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Ta opcja określa, czy klienci mogą otrzymywać powiadomienia o anulowaniu usługi.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Ta opcja określa, czy klienci mogą otrzymywać dowolne z dostępnych powiadomień o płatnościach.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Jeśli typ opłaty jest procentowy, zaznacz tę opcję, aby obliczyć opłatę na podstawie całkowitej kwoty faktury. Jeśli opcja ta nie jest zaznaczona, opłata zostanie obliczona wyłącznie na podstawie niezapłaconej kwoty.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Jeśli ta opcja jest zaznaczona, zmiany usług (np. ulepszenia/obniżenia) będą kolejkowane i udostępniane dopiero po ich opłaceniu. W przeciwnym razie zostaną one udostępnione natychmiast.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Zaznacz, aby wyświetlić pole identyfikatora podatkowego w interfejsie klienta.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'Jeśli faktura powiązana z anulowaną usługą jest przeterminowana, zostanie ona anulowana tylko wtedy, gdy nie jest przeterminowana o więcej niż wybraną liczbę dni.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Po zaznaczeniu tej opcji anulowanie usługi spowoduje również unieważnienie wszelkich otwartych faktur powiązanych z anulowaną usługą. Jeśli taka faktura zawiera pozycje niezwiązane z usługą, pozycje usługi zostaną usunięte, a faktura nie zostanie anulowana.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Zaznacz, aby zezwolić Blesta na automatyczne świadczenie usług, które są zarówno w toku, jak i mają opłaconą fakturę.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Zaznacz, aby zezwolić Blesta na automatyczne stosowanie kredytów do otwartych faktur (najpierw najstarsze faktury).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Zaznacz, aby zezwolić na proporcjonalne kredyty dla usług lub konfigurowalnych opcji usług, które zostały obniżone.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Zaznacz, aby umożliwić klientom zmianę pakietu usług cyklicznych.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Zaznacz, aby zezwolić klientom na zmianę okresu świadczenia usług cyklicznych.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Zaznacz, aby umożliwić klientom zamawianie dodatków do dowolnych usług, które je obsługują.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Po zaznaczeniu tej opcji nowo utworzone usługi dodatkowe, które są zgodne z miesięcznymi lub rocznymi warunkami rodzica, będą proporcjonalne do daty odnowienia rodzica.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Zaznacz, aby umożliwić klientom odnawianie własnych usług z wyprzedzeniem.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Zaznacz, aby umożliwić klientom anulowanie własnych usług.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Zaznacz, aby uwzględnić zakres dat usługi dla każdej pozycji faktury opcji konfigurowalnej.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Zaznacz, aby dołączyć tekstową wersję opisów pakietów do pozycji linii usług.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Tworzy pojedynczą fakturę dla usług, które odnawiają się tego samego dnia dla klienta. Usunięcie zaznaczenia spowoduje utworzenie osobnej faktury dla każdej usługi.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Zaznacz, aby kontynuować fakturowanie zawieszonych usług.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Zaznacz, aby umożliwić klientowi wybór preferowanej metody dostarczania faktur (np. papier lub e-mail).';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Włącza automatyczne obciążanie klienta, gdy nadejdzie termin płatności.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Zastosuj opłatę za opóźnienie do otwartych faktur skonfigurowaną liczbę dni po terminie płatności.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'Zmiany usług w kolejce zostaną automatycznie anulowane, gdy ich faktura nie zostanie opłacona przez wybraną liczbę dni.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'Liczba prób i niepowodzeń w przetwarzaniu odnowienia usługi, zanim usługa zostanie wyłączona z automatycznego odnawiania.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'Liczba prób i niepowodzeń w przetwarzaniu rachunku płatniczego przed wyłączeniem automatycznego obciążania tego rachunku płatniczego.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'Liczba dni, które należy odczekać po przeterminowaniu faktury za usługę przed zawieszeniem usługi.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'Liczba dni przed terminem automatycznego obciążenia domyślnego konta płatniczego klienta (jeśli klient jest skonfigurowany do automatycznego obciążania).';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'Domyślny początkowy procent depozytu dla oferty.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'Liczba dni po wygaśnięciu oferty, aby ustawić ją jako martwą.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'Liczba dni od wystawienia oferty, po upływie których można ustawić ją jako wygasłą.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'Liczba dni przed odnowieniem usługi lub faktury cyklicznej w celu wygenerowania faktury.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'Ilość oznacza maksymalną liczbę użyć kuponu przed jego wygaśnięciem.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'Terminy powinny być wprowadzane jako lista CSV (np. "1,3,4" oznaczające 1 dzień, 3 dni i 4 dni po wprowadzeniu w wierszu "Dzień").';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'Rozszerzenie Zlib jest wymagane do kompresji faktur.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'Opłata Minimalna kwota musi być liczbą.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'Kwota opłaty musi być liczbą.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'Quotation Increment Value musi być liczbą.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'Wartość początkowa notowania musi być liczbą.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'Wartość przyrostu faktury musi być liczbą.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'Wartość początkowa faktury musi być liczbą.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'Ustawienia personalizacji faktury zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'Ustawienia opóźnionych opłat zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'Ustawienia dostawy faktury zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'Ustawienia akceptowanego typu płatności zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'Kupon został pomyślnie usunięty!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'Kupon został pomyślnie zaktualizowany!';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'Kupon został pomyślnie utworzony!';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Powiadomienia zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = 'Ustawienia faktur i opłat zostały pomyślnie zaktualizowane!';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = '2. próba odstępów';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = 'Próg odstępu przy drugiej próbie';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = 'Rozstaw w pierwszej próbie';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = 'Próg odstępu przy pierwszej próbie';
$lang['AdminCompanyBilling.invoices.field.attempts'] = 'Próby';
$lang['AdminCompanyBilling.invoices.field.type'] = 'Typ';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = 'Działania serwisowe';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = 'Próby świadczenia usług';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = 'Liczba akcji serwisowych do wykonania przed opóźnieniem następnej próby o wartość określoną przez ustawienie odstępu między drugimi próbami.';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = 'Liczba akcji serwisowych do wykonania przed opóźnieniem następnej próby o wartość określoną przez ustawienie odstępu między pierwszymi próbami.';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = 'Liczba prób i niepowodzeń przetwarzania dla akcji usługi, zanim ta akcja usługi zostanie wyłączona z automatycznego zakończenia.';

