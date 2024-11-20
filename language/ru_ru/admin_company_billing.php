<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s Часы';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s Час';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Нет';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = 'Интервал между попытками второго продления';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'Порог интервала между попытками второго продления';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = '1-я попытка продления интервал';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = 'Порог интервала между попытками 1-го продления';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'Количество попыток продления обслуживания перед отсрочкой Интервал между попытками продления Интервал между попытками продления 2 часа';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'Количество попыток продления обслуживания перед отсрочкой Интервал между попытками продления Интервал между попытками продления 1 час';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Исправлено';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Процент';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Применить к общей сумме счета';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Минимум';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Сумма';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Тип платы';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Валюта';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Включено';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Основные опции';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Плата за опоздание';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Обратите внимание, что если эта опция отмечена, все счета, отправленные в PostalMethods, будут цветными, а не черно-белыми.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Если эта опция отмечена, счета, отправленные в PostalMethods, будут использовать печать на лицевой и обратной стороне страницы.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'При тестировании обязательно используйте секретный ключ Test Environment, предоставленный PostalMethods.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'Почтовые методы отправляют конверт для ответа с каждым письмом.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Цветная печать';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Двусторонняя печать';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Секретный ключ API';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Пароль';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Имя пользователя';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Способы доставки счетов-фактур';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods печатает, упаковывает и рассылает счета-фактуры вашим клиентам за вас. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Зарегистрируйтесь</a> для получения учетной записи PostalMethods и начните рассылать счета уже сегодня.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'PostalMethods';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax позволяет отправлять счета по факсу через Интернет. <a href="http://www.interfax.net/" target="_blank">Зарегистрируйтесь</a> для получения учетной записи InterFax и начните отправлять факсы уже сегодня.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Основные опции';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Доставка счетов-фактур';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Настройки > Компания > Счета/Оплата > Доставка счетов-фактур';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Установка этого флажка удалит все принятые переопределения типа оплаты, установленные на клиенте, если они отключены в компании';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Удалите типы принимаемых платежей, установленные для клиентов';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Удаление переопределений клиента';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Автоматизированная клиринговая палата';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Кредитная карта';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Только выбранные типы платежей доступны для обработки через шлюзы или могут быть добавлены в качестве платежных счетов, даже если активный шлюз поддерживает данный тип. Снятие флажка с уже принятого типа приведет к тому, что платежи этого типа не будут обрабатываться.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Принимаемые типы платежей';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Настройки > Компания > Счета/Оплата > Принимаемые типы платежей';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.customization.remove'] = 'Удалить';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Семейство шрифтов';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Тип файла счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Дата выполнения - стандарт';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Дата выполнения - условная форма';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Дата выполнения - Черновики';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Платежи/кредиты';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Платный водяной знак';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Название/адрес компании';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Логотип';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Отображение в счете-фактуре';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Шаблон счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Размер бумаги';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Условия';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Фон';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Логотип';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Сжатие счетов-фактур в формате PDF';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Метод кэширования счетов-фактур';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Значение прироста котировки';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Начальная стоимость котировки';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Формат котировки';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Тип счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Символ отступов в счете-фактуре';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Размер подшивки счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Значение инкремента счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Форма счета-фактуры Начальная стоимость';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Начальное значение счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Формат Pro Forma Invoice';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Формат проекта счета-фактуры';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Формат счета-фактуры';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Внешний вид и ощущения';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Кэш';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Варианты котировок';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Основные опции';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Настройка счетов-фактур';
$lang['AdminCompanyBilling.customization.page_title'] = 'Настройки > Компания > Счета/Оплата > Настройка счета-фактуры';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(используется %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Доступные пакеты';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Назначенные пакеты';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Все';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Редактировать купон';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Фильтр группы пакетов';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Пакеты';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Удалить';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'Н/Д';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Условия';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Период';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Включено';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Этот купон может быть применен только к услугам, заказанным на один из выбранных сроков/периодов. Если ни один из них не включен, то срок действия услуги будет игнорироваться при оценке ограничений купона.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Условия';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Значение';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Тип';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Валюта';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Добавить дополнительную валюту';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Варианты скидок';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'Ограничения действуют при возобновлении услуг';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'Ограничения не распространяются на возобновление услуг';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Количество';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Дата окончания';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Дата начала';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Ограничения';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Сгенерируйте код';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Код купона';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Только для внутреннего пользования';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Применить к настраиваемым параметрам';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Применяется при добавлении или продлении услуги';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Применяется только при добавлении услуги';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'Основные';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Редактировать купон';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Настройки > Компания > Счета/Оплата > Редактировать купон';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Доступные пакеты';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Назначенные пакеты';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Все';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Создать купон';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Фильтр группы пакетов';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Пакеты';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Удалить';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'Н/Д';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Условия';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Период';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Включено';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Этот купон может быть применен только к услугам, заказанным на один из выбранных сроков/периодов. Если ни один из них не включен, то срок действия услуги будет игнорироваться при оценке ограничений купона.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Ограничения по срокам';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Значение';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Тип';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Валюта';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Добавить дополнительную валюту';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Варианты скидок';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'Ограничения действуют при возобновлении услуг';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'Ограничения не распространяются на возобновление услуг';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Количество';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Дата окончания';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Дата начала';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Ограничения';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Сгенерируйте код';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Код купона';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Только для внутреннего пользования';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Применить к настраиваемым параметрам';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Применяется при добавлении или продлении услуги';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Применяется только при добавлении услуги';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Включено';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'Основные';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Новый купон';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Настройки > Компания > Счета/Оплата > Новый купон';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = 'Вы уверены, что хотите удалить этот купон?';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Удалить';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Редактировать';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Множество';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Валюта';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Опции';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Дата окончания';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Дата начала';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Макс';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Подержанные';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Скидка';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Код';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Купоны';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Добавить купон';
$lang['AdminCompanyBilling.coupons.no_results'] = 'Купонов нет.';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Настройки > Компания > Счета/Оплата > Купоны';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Уведомление о предстоящем автоматическом списании средств';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Третье уведомление';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'Второе уведомление';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Первое уведомление';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Разрешить отправку уведомлений о платежах';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Разрешить отправку уведомлений об отмене услуги';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Редактирование шаблона электронной почты';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Инвалиды';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Дата выполнения';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s Дни';
$lang['AdminCompanyBilling.notices.text_day'] = 'День %1$s';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Дата выставления счета';
$lang['AdminCompanyBilling.notices.text_after'] = 'После';
$lang['AdminCompanyBilling.notices.text_before'] = 'До';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Уведомления о платежах могут использоваться как уведомления о просрочке или напоминания о платеже.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Уведомления';
$lang['AdminCompanyBilling.notices.page_title'] = 'Настройки > Компания > Счета/Оплата > Уведомления';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s Дни';
$lang['AdminCompanyBilling.invoices.text_day'] = 'День %1$s';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'В тот же день';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Никогда';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Любой -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Обновление настроек';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Очередь на обслуживание меняется до оплаты';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Показать поле налогового идентификатора в клиентском интерфейсе';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Аннулирование открытых счетов-фактур через несколько дней после наступления срока платежа';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Аннулирование открытых счетов при отмене услуги';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Автоматическое предоставление оплаченных услуг';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Автоматически применяйте кредиты на свободу';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Разрешить выдавать пропорциональные кредиты при снижении уровня обслуживания';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Разрешить клиентам изменять пакет услуг';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Разрешите клиентам изменять условия обслуживания';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Разрешите клиентам создавать дополнения к существующим услугам';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Разрешить синхронизацию служб дополнений с их родительскими службами';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Разрешите клиентам вручную продлевать услуги';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Разрешите клиентам отменять услуги';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Отображение диапазона дат обслуживания для настраиваемых параметров';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Включите описания пакетов в счета-фактуры';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Услуги по выставлению счетов-фактур вместе';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Счет-фактура Приостановленные услуги';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Разрешить клиенту устанавливать метод выставления счета';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Включить автоматическое списание';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Применять штраф за опоздание к открытым счетам после наступления срока оплаты';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Отмена изменений в услугах через несколько дней после наступления срока';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Попытки возобновления обслуживания';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Попытки автоматического списания средств';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Приостановить обслуживание через несколько дней после истечения срока';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Автоматическое списание за несколько дней до наступления срока платежа';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Цитата Процент депозита по умолчанию (%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Цитата Мертвые дни после истечения срока действия';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Дни истечения срока действия котировок';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Дни выставления счета до продления';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Варианты выставления счетов и начислений';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Настройки > Компания > Счета/Оплата > Параметры счетов и начислений';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'ПРИМЕЧАНИЕ: Эти настройки применяются только к группам клиентов, которые наследуют свои настройки от компании.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Введите условия оплаты или любую другую информацию, которую вы хотите отобразить в счете-фактуре.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Для получения дополнительных шрифтов распакуйте пользовательские шрифты TCPDF в каталог /vendors/tecnickcom/tcpdf/fonts/ в рамках вашей установки.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'Тип файла счета-фактуры. Шаблоны счетов-фактур могут поддерживать различные типы файлов.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'Шаблон счета-фактуры, который будет использоваться для отображения счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'Размер бумаги для счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Загрузите фон, который будет отображаться на счете-фактуре.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Загрузите логотип, который будет отображаться на счете-фактуре.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Сжимать кэшированные PDF-файлы для экономии места на диске. Включение этого параметра может снизить производительность.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Сохраняет на диске кэшированную копию каждого счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'Номера счетов-фактур, длина символов которых меньше размера прокладки счета-фактуры, будут добавлены слева на заданный символ.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'Размер подложки счета-фактуры задает минимальную длину символов для номеров счетов-фактур.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'Последующие номера счетов-фактур будут увеличиваться на это значение.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'Номера счетов-фактур будут начинаться (и увеличиваться) с этого начального значения.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'Номера счетов-фактур будут начинаться (и увеличиваться) с этого начального значения.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'Доступные теги включают: {num} - номер счета-фактуры (обязательно); {year} - четырехзначный год; {month} - двузначный месяц; {day} - двузначный день месяца.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'Доступные теги включают: {num} - номер счета-фактуры (обязательно); {year} - четырехзначный год; {month} - двузначный месяц; {day} - двузначный день месяца.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'Доступные теги включают: {num} - номер счета-фактуры (обязательно); {year} - четырехзначный год; {month} - двузначный месяц; {day} - двузначный день месяца.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'Тип счета-фактуры, который создается по умолчанию. После оплаты и закрытия счета-фактуры Pro forma превращаются в стандартные счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'Количество дней до автоматического списания средств со счета для отправки уведомления о предстоящем автоматическом списании средств по электронной почте.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'Количество дней до или после истечения срока оплаты счета для отправки третьего письма с уведомлением о просрочке.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'Количество дней до или после истечения срока оплаты счета для отправки второго письма с уведомлением о просрочке.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'Количество дней до или после истечения срока оплаты счета для отправки первого уведомления о просрочке.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Этот параметр устанавливает, можно ли отправлять клиентам уведомления об отмене услуги.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Этот параметр устанавливает, можно ли отправлять клиентам любое из доступных уведомлений об оплате.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Если тип комиссии - процент, установите этот флажок, чтобы рассчитать комиссию на основе общей суммы счета. Если флажок не установлен, комиссия будет рассчитываться только на основе неоплаченной суммы.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Если флажок установлен, изменения услуг (т. е. обновления/понижения) будут поставлены в очередь и предоставлены только после их оплаты. В противном случае они будут предоставляться немедленно.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Установите флажок, чтобы показать поле Tax ID в клиентском интерфейсе.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'Если счет, связанный с отмененной услугой, просрочен, он будет аннулирован только в том случае, если просрочен не более чем на выбранное количество дней.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Если флажок установлен, отмена услуги также аннулирует все открытые счета, связанные с отмененной услугой. Если такой счет содержит статьи, не связанные с услугой, то вместо них будут удалены статьи услуги, а счет не будет аннулирован.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Установите флажок, чтобы разрешить Blesta автоматически предоставлять услуги, которые находятся на рассмотрении и имеют оплаченный счет.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Установите флажок, чтобы разрешить Blesta автоматически применять кредиты к открытым счетам (сначала самые старые счета).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Установите флажок, чтобы разрешить пропорциональные кредиты для услуг или настраиваемых параметров услуг, которые были понижены в рейтинге.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Установите флажок, позволяющий клиентам изменять пакет повторяющихся услуг.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Установите флажок, чтобы разрешить клиентам изменять срок действия повторяющихся услуг.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Установите флажок, позволяющий клиентам заказывать аддоны для любых поддерживающих их сервисов.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Если флажок установлен, вновь созданные аддонные услуги, соответствующие месячным или годовым условиям родителя, будут пропорционально перенесены на дату обновления родителя.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Установите флажок, позволяющий клиентам заранее продлевать свои услуги.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Установите флажок, позволяющий клиентам отменять собственные услуги.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Установите флажок, чтобы включить диапазон дат обслуживания для каждого настраиваемого элемента счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Установите флажок, чтобы добавить текстовую версию описаний пакетов к линейным позициям услуг.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Создает единый счет для услуг, которые возобновляются в один день для клиента. Если флажок снят, для каждой услуги будет создан отдельный счет.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Установите флажок, чтобы продолжить выставление счетов за приостановленные услуги.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Установите флажок, чтобы клиент мог выбрать способ доставки счета (например, на бумаге или по электронной почте).';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Включает автодебетование клиента при наступлении срока оплаты.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Применяйте штраф за просрочку к открытым счетам через определенное количество дней после наступления срока оплаты.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'Изменения в очереди на обслуживание будут автоматически отменены, когда их счет останется неоплаченным в течение выбранного количества дней.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'Количество попыток и неудач при обработке обновления услуги до того, как эта услуга будет отключена от автоматического обновления.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'Количество попыток и неудач в обработке платежного счета до того, как этот платежный счет будет отключен от автоматического списания средств.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'Количество дней, в течение которых необходимо подождать после того, как счет за услугу был просрочен, чтобы приостановить предоставление услуги.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'Количество дней до выставления счета для автоматического списания средств со счета клиента по умолчанию (если клиент настроен на автоматическое списание).';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'Процент первоначального взноса по умолчанию для котировки.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'Количество дней после истечения срока действия котировки, чтобы установить ее как мертвую.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'Количество дней после выдачи котировки, через которое ее можно считать истекшей.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'Количество дней до продления срока действия услуги или повторяющегося счета для создания счета-фактуры.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'Количество означает максимальное число раз, которое можно использовать этот купон до истечения срока его действия.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'Условия должны быть введены в виде списка CSV (например, "1,3,4" означает 1 день, 3 дня и 4 дня при вводе в строке "День").';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'Для сжатия фактуры требуется расширение Zlib.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'Минимальная сумма сбора должна быть числом.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'Сумма сбора должна быть числом.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'Значение увеличения котировки должно быть числом.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'Начальное значение котировки должно быть числом.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'Значение инкремента счета-фактуры должно быть числом.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'Начальное значение счета-фактуры должно быть числом.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'Настройки настройки счета-фактуры были успешно обновлены!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'Настройки поздней оплаты были успешно обновлены!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'Настройки доставки счетов-фактур были успешно обновлены!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'Настройки типа принимаемых платежей были успешно обновлены!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'Купон был успешно удален!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'Купон был успешно обновлен!';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'Купон был успешно создан!';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Уведомления были успешно обновлены!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = 'Настройки счетов-фактур и начислений были успешно обновлены!';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = '2-ая попытка Расстояния';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = 'Пороговое значение интервала между 2-мя попытками';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = 'Интервал между попытками';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = 'Порог расстояния между попытками';
$lang['AdminCompanyBilling.invoices.field.attempts'] = 'Попытки';
$lang['AdminCompanyBilling.invoices.field.type'] = 'Тип';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = 'Действия службы';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = 'Попытки предоставления услуг';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = 'Количество попыток выполнения сервисных действий перед задержкой следующей попытки на величину, указанную в настройке интервала между вторыми попытками';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = 'Количество попыток выполнения сервисных действий перед задержкой следующей попытки на величину, указанную в настройке интервала между первыми попытками';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = 'Количество попыток и неудач обработки действия службы перед тем, как это действие службы будет отключено от автоматического завершения.';

