<?php
/**
 * Admin Tools
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminTools.!success.currency_converted'] = '%1$s = %2$s';
$lang['AdminTools.!success.collation_updated'] = 'El cotejo de la base de datos se ha actualizado correctamente.';
$lang['AdminTools.!success.max_updated'] = 'Se ha actualizado correctamente el máximo de intentos de renovación.';
$lang['AdminTools.!success.dequeue'] = 'El servicio se ha eliminado correctamente de la cola de renovaciones.';
$lang['AdminTools.getlognames.text_module'] = 'Módulo';
$lang['AdminTools.getlognames.text_messenger'] = 'Mensajería';
$lang['AdminTools.getlognames.text_gateway'] = 'Pasarela';
$lang['AdminTools.getlognames.text_email'] = 'Email';
$lang['AdminTools.getlognames.text_users'] = 'Inicios de sesión';
$lang['AdminTools.getlognames.text_contacts'] = 'Contactos';
$lang['AdminTools.getlognames.text_client_settings'] = 'Ajustes de clientes';
$lang['AdminTools.getlognames.text_accountaccess'] = 'Acceso a cuentas';
$lang['AdminTools.getlognames.text_transactions'] = 'Transacciones';
$lang['AdminTools.getlognames.text_cron'] = 'Cron';
$lang['AdminTools.getlognames.text_invoice_delivery'] = 'Entrega de facturas';
$lang['AdminTools.convertcurrency.page_title'] = 'Herramientas Conversión de monedas';
$lang['AdminTools.convertcurrency.boxtitle_currency'] = 'Convertir moneda';
$lang['AdminTools.convertcurrency.field_amount'] = 'Importe';
$lang['AdminTools.convertcurrency.field_from'] = 'Desde';
$lang['AdminTools.convertcurrency.field_to'] = 'Para';
$lang['AdminTools.convertcurrency.field_currencysubmit'] = 'Convertir moneda';
$lang['AdminTools.utilities.page_title'] = 'Herramientas Utilidades';
$lang['AdminTools.utilities.boxtitle_utilities'] = 'Servicios';
$lang['AdminTools.utilities.heading_utility'] = 'Utilidad';
$lang['AdminTools.utilities.heading_description'] = 'Descripción';
$lang['AdminTools.utilities.heading_options'] = 'Opciones';
$lang['AdminTools.utilities.update_collation'] = 'Actualizar la intercalación de la base de datos';
$lang['AdminTools.utilities.field_update_to_utf8mb4'] = 'Actualización a utf8mb4';
$lang['AdminTools.utilities.text_update_to_utf8mb4'] = 'Actualiza el juego de caracteres y la intercalación de tu base de datos, tablas y columnas a utf8mb4 para que admitan caracteres de 4 bytes como los emojis.  Esto puede tardar varios minutos.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_requirements'] = 'Por favor, actualiza MySQL a 5.7+ o MariaDB a 10.2.2+ para soportar caracteres utf8mb4 como los emojis.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_supported'] = 'La base de datos ya soporta utf8mb4.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_config'] = 'Para insertar y recuperar caracteres utf8mb4 actualice su archivo de configuración blesta.php para utilizar \'charset_query\' => "SET NAMES \'utf8mb4\'".';
$lang['AdminTools.logs.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logs.boxtitle_logs'] = 'Registros';
$lang['AdminTools.renewals.page_title'] = 'Cola de servicios';
$lang['AdminTools.renewals.boxtitle_renewals'] = 'Cola de renovación de servicios';
$lang['AdminTools.renewals.heading_client'] = 'Cliente';
$lang['AdminTools.renewals.heading_service_id'] = 'Identificación del servicio';
$lang['AdminTools.renewals.heading_failed_attempts'] = 'Intentos fallidos';
$lang['AdminTools.renewals.heading_maximum_attempts'] = 'Número máximo de intentos';
$lang['AdminTools.renewals.heading_invoice'] = 'Factura';
$lang['AdminTools.renewals.heading_options'] = 'Opciones';
$lang['AdminTools.renewals.confirm_dequeue'] = '¿Está seguro de que desea eliminar este servicio de la cola de renovaciones?';
$lang['AdminTools.renewals.option_view'] = 'Ver factura';
$lang['AdminTools.renewals.option_dequeue'] = 'Desencolar';
$lang['AdminTools.renewals.option_change_max'] = 'Cambiar máximo';
$lang['AdminTools.renewals.no_results'] = 'Actualmente no hay servicios en cola para su renovación.';
$lang['AdminTools.change_max_attempts.boxtitle_change_max_attempts'] = 'Cambiar Intentos máximos';
$lang['AdminTools.change_max_attempts.field_max_attempts'] = 'Número máximo de intentos';
$lang['AdminTools.change_max_attempts.field_cancel'] = 'Cancelar';
$lang['AdminTools.change_max_attempts.btn_save'] = 'Guardar';
$lang['AdminTools.logmodule.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logmodule.text_name'] = 'Nombre';
$lang['AdminTools.logmodule.text_staffname'] = 'Personal';
$lang['AdminTools.logmodule.text_date'] = 'Fecha';
$lang['AdminTools.logmodule.no_results'] = 'No hay registros de módulos.';
$lang['AdminTools.moduleloglist.text_direction'] = 'Dirección';
$lang['AdminTools.moduleloglist.text_data'] = 'Datos';
$lang['AdminTools.moduleloglist.text_date'] = 'Fecha';
$lang['AdminTools.moduleloglist.text_status'] = 'Estado';
$lang['AdminTools.moduleloglist.text_input'] = 'Entrada';
$lang['AdminTools.moduleloglist.text_output'] = 'Salida';
$lang['AdminTools.moduleloglist.text_error'] = 'Error';
$lang['AdminTools.moduleloglist.text_success'] = 'Éxito';
$lang['AdminTools.moduleloglist.no_results'] = 'No hay datos para el registro de este módulo.';
$lang['AdminTools.logmessenger.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logmessenger.text_name'] = 'Nombre';
$lang['AdminTools.logmessenger.text_recipient'] = 'Destinatario';
$lang['AdminTools.logmessenger.text_date'] = 'Fecha';
$lang['AdminTools.logmessenger.no_results'] = 'No hay registros de mensajería.';
$lang['AdminTools.messengerloglist.text_direction'] = 'Dirección';
$lang['AdminTools.messengerloglist.text_data'] = 'Datos';
$lang['AdminTools.messengerloglist.text_date'] = 'Fecha';
$lang['AdminTools.messengerloglist.text_status'] = 'Estado';
$lang['AdminTools.messengerloglist.text_input'] = 'Entrada';
$lang['AdminTools.messengerloglist.text_output'] = 'Salida';
$lang['AdminTools.messengerloglist.text_error'] = 'Error';
$lang['AdminTools.messengerloglist.text_success'] = 'Éxito';
$lang['AdminTools.messengerloglist.no_results'] = 'No hay datos para este registro de mensajería.';
$lang['AdminTools.loggateway.page_title'] = 'Herramientas Registros';
$lang['AdminTools.loggateway.text_name'] = 'Nombre';
$lang['AdminTools.loggateway.text_staffname'] = 'Personal';
$lang['AdminTools.loggateway.text_date'] = 'Fecha';
$lang['AdminTools.loggateway.no_results'] = 'No hay registros de puerta de enlace.';
$lang['AdminTools.gatewayloglist.text_direction'] = 'Dirección';
$lang['AdminTools.gatewayloglist.text_data'] = 'Datos';
$lang['AdminTools.gatewayloglist.text_date'] = 'Fecha';
$lang['AdminTools.gatewayloglist.text_status'] = 'Estado';
$lang['AdminTools.gatewayloglist.text_input'] = 'Entrada';
$lang['AdminTools.gatewayloglist.text_output'] = 'Salida';
$lang['AdminTools.gatewayloglist.text_error'] = 'Error';
$lang['AdminTools.gatewayloglist.text_success'] = 'Éxito';
$lang['AdminTools.gatewayloglist.no_results'] = 'No hay datos para este registro de puerta de enlace.';
$lang['AdminTools.logemail.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logemail.text_date'] = 'Fecha';
$lang['AdminTools.logemail.text_subject'] = 'Asunto';
$lang['AdminTools.logemail.text_summary'] = 'Resumen';
$lang['AdminTools.logemail.text_status'] = 'Estado';
$lang['AdminTools.logemail.text_to'] = 'Para';
$lang['AdminTools.logemail.text_cc'] = 'CC';
$lang['AdminTools.logemail.text_from'] = 'Desde';
$lang['AdminTools.logemail.text_resend'] = 'Reenviar';
$lang['AdminTools.logemail.text_sent'] = 'Enviado';
$lang['AdminTools.logemail.text_unsent'] = 'No enviado';
$lang['AdminTools.logemail.no_results'] = 'No hay registros de email.';
$lang['AdminTools.logusers.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logusers.text_name'] = 'Nombre';
$lang['AdminTools.logusers.text_username'] = 'Usuario';
$lang['AdminTools.logusers.text_type'] = 'Tipo';
$lang['AdminTools.logusers.text_result'] = 'Resultado';
$lang['AdminTools.logusers.text_ipaddress'] = 'Dirección IP';
$lang['AdminTools.logusers.text_date'] = 'Fecha';
$lang['AdminTools.logusers.text_staff'] = 'Personal';
$lang['AdminTools.logusers.text_client'] = 'Cliente';
$lang['AdminTools.logusers.text_contact'] = 'Póngase en contacto con';
$lang['AdminTools.logusers.text_success'] = 'Exitoso';
$lang['AdminTools.logusers.text_failure'] = 'Fallido';
$lang['AdminTools.logusers.text_location'] = 'Ubicación';
$lang['AdminTools.logusers.no_results'] = 'No hay registros de inicios de sesión.';
$lang['AdminTools.logcontacts.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logcontacts.text_name'] = 'Nombre';
$lang['AdminTools.logcontacts.text_date'] = 'Fecha';
$lang['AdminTools.logcontacts.text_field'] = 'Campo';
$lang['AdminTools.logcontacts.text_previous'] = 'Valor anterior';
$lang['AdminTools.logcontacts.text_new'] = 'Nuevo valor';
$lang['AdminTools.logcontacts.no_results'] = 'No hay registros de contactos.';
$lang['AdminTools.logclientsettings.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logclientsettings.text_client'] = 'Cliente';
$lang['AdminTools.logclientsettings.text_user'] = 'Ejecutado por';
$lang['AdminTools.logclientsettings.text_ip_address'] = 'Dirección IP';
$lang['AdminTools.logclientsettings.text_date'] = 'Fecha';
$lang['AdminTools.logclientsettings.text_field'] = 'Campo';
$lang['AdminTools.logclientsettings.text_previous'] = 'Valor anterior';
$lang['AdminTools.logclientsettings.text_new'] = 'Nuevo valor';
$lang['AdminTools.logclientsettings.no_results'] = 'No hay registros de ajustes de clientes.';
$lang['AdminTools.logtransactions.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logtransactions.text_client_name'] = 'Cliente';
$lang['AdminTools.logtransactions.text_staff_name'] = 'Personal';
$lang['AdminTools.logtransactions.text_date'] = 'Fecha';
$lang['AdminTools.logtransactions.text_field'] = 'Campo';
$lang['AdminTools.logtransactions.text_previous'] = 'Valor anterior';
$lang['AdminTools.logtransactions.text_new'] = 'Nuevo valor';
$lang['AdminTools.logtransactions.no_results'] = 'No hay registros de transacciones.';
$lang['AdminTools.logaccountaccess.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logaccountaccess.name'] = 'Personal';
$lang['AdminTools.logaccountaccess.type'] = 'Tipo';
$lang['AdminTools.logaccountaccess.date'] = 'Fecha';
$lang['AdminTools.logaccountaccess.text_cc'] = 'Tarjeta de crédito';
$lang['AdminTools.logaccountaccess.text_ach'] = 'ACH';
$lang['AdminTools.logaccountaccess.no_results'] = 'No hay registros de acceso a cuentas.';
$lang['AdminTools.accountaccess.name'] = 'Nombre';
$lang['AdminTools.accountaccess.type'] = 'Tipo';
$lang['AdminTools.accountaccess.last4'] = '4 últimos';
$lang['AdminTools.accountaccess.type_cc'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.type_ach'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.no_results'] = 'No hay detalles de cuenta para este registro.';
$lang['AdminTools.logcron.page_title'] = 'Herramientas Registros';
$lang['AdminTools.logcron.task'] = 'Tarea';
$lang['AdminTools.logcron.start_date'] = 'Fecha de inicio';
$lang['AdminTools.logcron.end_date'] = 'Fecha final';
$lang['AdminTools.logcron.output'] = 'Salida';
$lang['AdminTools.logcron.no_output'] = 'No se ha registrado ninguna salida para este registro.';
$lang['AdminTools.logcron.no_results'] = 'No hay registros cron.';
$lang['AdminTools.loginvoicedelivery.page_title'] = 'Herramientas Registros';
$lang['AdminTools.loginvoicedelivery.invoice_id_code'] = 'Factura #';
$lang['AdminTools.loginvoicedelivery.first_name'] = 'Cliente';
$lang['AdminTools.loginvoicedelivery.method'] = 'Método de entrega';
$lang['AdminTools.loginvoicedelivery.date_sent'] = 'Fecha de envío';
$lang['AdminTools.loginvoicedelivery.no_results'] = 'No hay registros de entrega de facturas.';
$lang['AdminTools.!success.rule_removed'] = 'La regla se ha eliminado correctamente.';
$lang['AdminTools.!success.rule_added'] = 'La regla se ha añadido correctamente.';
$lang['AdminTools.!tooltip.rule'] = 'Puede ser una dirección de email (por ejemplo, joe@example.com), un comodín (por ejemplo, *@ejemplo.com), una dirección IP (ipv4 o ipv6) o una regla CIDR (por ejemplo, 192.168.0.0/24 o 2001:db8:1234::/48).';
$lang['AdminTools.renewals.heading_date_renews'] = 'Renueva el';
$lang['AdminTools.renewals.heading_date_next_attempt'] = 'Próximo intento';
$lang['AdminTools.blacklist.boxtitle_blacklist'] = 'Lista negra';
$lang['AdminTools.blacklist.heading_rule'] = 'Regla';
$lang['AdminTools.blacklist.heading_type'] = 'Tipo';
$lang['AdminTools.blacklist.heading_list'] = 'Lista';
$lang['AdminTools.blacklist.heading_note'] = 'Nota';
$lang['AdminTools.blacklist.heading_options'] = 'Opciones';
$lang['AdminTools.blacklist.text_type_ip'] = 'Dirección IP';
$lang['AdminTools.blacklist.text_type_email'] = 'Dirección de email';
$lang['AdminTools.blacklist.text_system'] = 'Sistema';
$lang['AdminTools.blacklist.option_delete'] = 'Borrar';
$lang['AdminTools.blacklist.modal_delete'] = '¿Está seguro de que desea eliminar esta regla?';
$lang['AdminTools.blacklist.no_results'] = 'No hay normas de listas negras.';
$lang['AdminTools.blacklistadd.boxtitle_addrule'] = 'Añadir regla';
$lang['AdminTools.blacklistadd.field_rule'] = 'Regla';
$lang['AdminTools.blacklistadd.field_type'] = 'Tipo';
$lang['AdminTools.blacklistadd.field_note'] = 'Nota';
$lang['AdminTools.blacklistadd.field_submit'] = 'Añadir regla';
$lang['AdminTools.logservicechanges.text_type'] = 'Tipo';
$lang['AdminTools.logservicechanges.text_gateway'] = 'Pasarela';
$lang['AdminTools.logservicechanges.text_transaction_id'] = 'ID de transacción';
$lang['AdminTools.logservicechanges.text_new'] = 'Nuevo valor';
$lang['AdminTools.logservicechanges.text_previous'] = 'Valor anterior';
$lang['AdminTools.logservicechanges.text_field'] = 'Campo';
$lang['AdminTools.logservicechanges.text_date'] = 'Fecha de modificación';
$lang['AdminTools.logservicechanges.text_amount'] = 'Importe';
$lang['AdminTools.logservicechanges.text_package'] = 'Nombre del paquete';
$lang['AdminTools.logservicechanges.text_name'] = 'Nombre del servicio';
$lang['AdminTools.logservicechanges.text_service_id'] = 'ID de servicio';
$lang['AdminTools.logservicechanges.no_results'] = 'No hay registros de cambios de servicio.';
$lang['AdminTools.logemail.text_html'] = 'HTML';
$lang['AdminTools.logemail.text_text'] = 'Texto';
$lang['AdminTools.renewals.heading_date_cancelation'] = 'Fecha de cancelación';
$lang['AdminTools.renewals.heading_date_unsuspension'] = 'Fecha de suspensión';
$lang['AdminTools.renewals.heading_date_suspension'] = 'Fecha de suspensión';
$lang['AdminTools.renewals.heading_date_renewal'] = 'Fecha de renovación';
$lang['AdminTools.renewals.heading_date_provision'] = 'Fecha de provisión';
$lang['AdminTools.renewals.category_cancelation'] = 'Cancelación';
$lang['AdminTools.renewals.category_unsuspension'] = 'Insuspensión';
$lang['AdminTools.renewals.category_suspension'] = 'Suspensión';
$lang['AdminTools.renewals.category_renewal'] = 'Renovación';
$lang['AdminTools.renewals.category_provision'] = 'Provisión';
$lang['AdminTools.renewals.boxtitle_service_queue'] = 'Cola de servicio';
$lang['AdminTools.getlognames.text_service_changes'] = 'Cambios en el servicio';

