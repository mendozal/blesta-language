<?php
/**
 * Client Services
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientServices.!error.password_mismatch'] = 'La contraseña no coincide con la contraseña de inicio de sesión.';
$lang['ClientServices.!error.invoices_manage_options'] = 'Las opciones configurables no pueden modificarse hasta que se hayan pagado todas las facturas que contengan este servicio.';
$lang['ClientServices.!error.invoices_change_term'] = 'El plazo no podrá modificarse hasta que se hayan abonado todas las facturas que contengan este servicio.';
$lang['ClientServices.!error.invoices_renew_service'] = 'El servicio no podrá renovarse hasta que se hayan abonado todas las facturas que lo contengan.';
$lang['ClientServices.!error.invoices_upgrade_package'] = 'El paquete no podrá modificarse hasta que se hayan abonado todas las facturas que contengan este servicio.';
$lang['ClientServices.!error.tab_unavailable'] = 'No se puede acceder a esa sección mientras el servicio esté en estado %1$s.';
$lang['ClientServices.!warning.invoices_upgrade_package'] = 'Los paquetes no podrán modificarse hasta que se hayan abonado todas las facturas correspondientes a este servicio.';
$lang['ClientServices.!warning.invoices_change_term'] = 'El plazo no podrá modificarse hasta que se hayan abonado todas las facturas correspondientes a este servicio.';
$lang['ClientServices.!warning.invoices_manage_options'] = 'Las opciones configurables no pueden modificarse hasta que se hayan abonado todas las facturas correspondientes a este servicio.';
$lang['ClientServices.!notice.queued_service_change'] = 'Este servicio tiene cambios pendientes. No se podrán realizar cambios adicionales hasta que se hayan procesado los cambios pendientes actuales.';
$lang['ClientServices.!notice.client_limit'] = 'No se puede asignar el paquete. Ya ha alcanzado el límite de servicio para el paquete de destino.';
$lang['ClientServices.!success.manage.tab_updated'] = 'Los datos se han actualizado correctamente.';
$lang['ClientServices.!success.service_canceled'] = 'El servicio se ha cancelado correctamente.';
$lang['ClientServices.!success.service_schedule_canceled'] = 'Está previsto que el servicio se cancele al final de su vigencia.';
$lang['ClientServices.!success.service_not_canceled'] = 'El servicio no se cancelará.';
$lang['ClientServices.!success.service_term_updated'] = 'El plazo de servicio se ha actualizado y entrará en vigor en la próxima fecha de renovación.';
$lang['ClientServices.!success.addon_service_created'] = 'El servicio addon se ha creado correctamente. Sin embargo, no se activará hasta que se haya recibido el pago.';
$lang['ClientServices.!success.service_package_updated'] = 'Se ha actualizado el paquete de servicios.';
$lang['ClientServices.!success.config_options_updated'] = 'Las opciones configurables se han actualizado correctamente.';
$lang['ClientServices.!success.service_queue_pay'] = 'La actualización del servicio se ha puesto en cola para ser procesada. Sin embargo, no se procesará hasta que se haya recibido un pago.';
$lang['ClientServices.!success.service_queue'] = 'La actualización del servicio se ha puesto en cola y se procesará en breve.';
$lang['ClientServices.!success.service_renewed'] = 'El servicio se ha renovado con éxito.';
$lang['ClientServices.index.page_title'] = 'Cliente #%1$s Servicios';
$lang['ClientServices.index.boxtitle_services'] = 'Servicios';
$lang['ClientServices.index.category_active'] = 'Activo';
$lang['ClientServices.index.category_pending'] = 'Pendiente';
$lang['ClientServices.index.category_suspended'] = 'Suspendido';
$lang['ClientServices.index.category_canceled'] = 'Cancelado';
$lang['ClientServices.index.heading_addons'] = 'Complementos';
$lang['ClientServices.index.heading_status'] = 'Estado';
$lang['ClientServices.index.heading_package'] = 'Paquete';
$lang['ClientServices.index.heading_label'] = 'Etiqueta';
$lang['ClientServices.index.heading_term'] = 'Plazo';
$lang['ClientServices.index.heading_datecreated'] = 'Creado el';
$lang['ClientServices.index.heading_daterenews'] = 'Renueva el';
$lang['ClientServices.index.heading_datesuspended'] = 'Fecha suspensión';
$lang['ClientServices.index.heading_datecanceled'] = 'Fecha cancelación';
$lang['ClientServices.index.heading_options'] = 'Opciones';
$lang['ClientServices.index.option_manage'] = 'Gestionar';
$lang['ClientServices.index.recurring_term'] = '%1$s %2$s @ %3$s';
$lang['ClientServices.index.text_never'] = 'Nunca';
$lang['ClientServices.index.no_results'] = 'No tiene servicios %1$s.';
$lang['ClientServices.serviceinfo.no_results'] = 'Este servicio no tiene detalles.';
$lang['ClientServices.serviceinfo.cancellation_reason'] = 'Motivo de la cancelación: %1$s';
$lang['ClientServices.manage.page_title'] = 'Cliente #%1$s Gestionar servicio';
$lang['ClientServices.manage.boxtitle_manage'] = 'Gestionar %1$s - %2$s';
$lang['ClientServices.manage.tab_service_info'] = 'Información';
$lang['ClientServices.manage.tab_addons'] = 'Complementos';
$lang['ClientServices.manage.tab_service_return'] = 'Volver al tablero';
$lang['ClientServices.manage.button_active'] = 'Activo';
$lang['ClientServices.manage.button_pending'] = 'Pendiente';
$lang['ClientServices.manage.button_suspended'] = 'Suspendido';
$lang['ClientServices.manage.button_in_review'] = 'En revisión';
$lang['ClientServices.manage.button_canceled'] = 'Cancelado';
$lang['ClientServices.manage.button_renew'] = 'Renovar ahora';
$lang['ClientServices.manage.button_cancel'] = 'Opciones de cancelación';
$lang['ClientServices.manage.button_change_service_term'] = 'Cambiar plazo';
$lang['ClientServices.manage.button_change_service_package'] = 'Paquete de cambios';
$lang['ClientServices.manage.button_config_options'] = 'Cambiar opciones configurables';
$lang['ClientServices.manage.heading_package'] = 'Paquete';
$lang['ClientServices.manage.heading_date_added'] = 'Creado el';
$lang['ClientServices.manage.heading_package_term'] = 'Ciclo de facturación';
$lang['ClientServices.manage.heading_service_name'] = 'Etiqueta';
$lang['ClientServices.manage.heading_date_renews'] = 'Renueva el';
$lang['ClientServices.manage.heading_date_next_invoice'] = 'Siguiente factura';
$lang['ClientServices.manage.heading_price_initial'] = 'Importe';
$lang['ClientServices.manage.heading_price'] = 'Importe recurrente';
$lang['ClientServices.manage.heading_setup_fee'] = 'Cargo de configuración';
$lang['ClientServices.manage.heading_price_onetime'] = 'Importe';
$lang['ClientServices.manage.heading_recurring_coupon'] = 'Cupón recurrente';
$lang['ClientServices.manage.text_coupon_percent'] = '%1$s (%2$s%%)';
$lang['ClientServices.manage.text_coupon_amount'] = '%1$s (%2$s)';
$lang['ClientServices.manage.text_price'] = '%1$sx %2$s';
$lang['ClientServices.manage.text_date_never'] = 'Nunca';
$lang['ClientServices.manage.text_date_suspended'] = 'Este servicio se suspendió el %1$s.';
$lang['ClientServices.manage.text_date_canceled'] = 'Este servicio se canceló el %1$s.';
$lang['ClientServices.manage.text_date_to_cancel'] = 'Está previsto que este servicio se cancele el %1$s.';
$lang['ClientServices.manage.heading_options'] = 'Acciones';
$lang['ClientServices.manage.heading_config_options'] = 'Opciones configurables';
$lang['ClientServices.renew.page_title'] = 'Cliente #%1$s Renovar servicio';
$lang['ClientServices.renew.heading_renew'] = 'Renovar el servicio';
$lang['ClientServices.renew.field_pricing_id'] = 'Plazo de renovación';
$lang['ClientServices.renew.field_password'] = 'Contraseña de acceso para confirmar los cambios';
$lang['ClientServices.renew.field_renew_cancel'] = 'Cancelar, no renovar';
$lang['ClientServices.renew.field_renew_submit'] = 'Renovar';
$lang['ClientServices.renew.confirm_renew'] = 'Al hacer clic en "Guardar" se generará una nueva factura para la renovación del servicio por el plazo "%1$s", que cubrirá el servicio hasta "%2$s", al hacer clic en "Guardar" será redirigido a la página de pago para abonar la factura generada.';
$lang['ClientServices.cancel.page_title'] = 'Cliente #%1$s Cancelar servicio';
$lang['ClientServices.cancel.heading_cancel'] = 'Cancelar servicio';
$lang['ClientServices.cancel.field_term_date'] = 'Al final del plazo (%1$s)';
$lang['ClientServices.cancel.field_term'] = 'Al final del mandato';
$lang['ClientServices.cancel.field_now'] = 'Inmediatamente';
$lang['ClientServices.cancel.field_do_not'] = 'No cancelar';
$lang['ClientServices.cancel.field_cancellation_reason'] = 'Motivo de la cancelación';
$lang['ClientServices.cancel.field_password'] = 'Contraseña de acceso para confirmar los cambios';
$lang['ClientServices.cancel.field_cancel_cancel'] = 'Cancelar, no cambiar';
$lang['ClientServices.cancel.field_cancel_submit'] = 'Guardar';
$lang['ClientServices.cancel.confirm_cancel'] = '¿Está seguro de que desea cancelar este servicio al final de su periodo de vigencia?';
$lang['ClientServices.cancel.confirm_cancel_now'] = '¿Estás seguro de que quieres cancelar este servicio?';
$lang['ClientServices.cancel.confirm_cancel_now_fee'] = 'La cancelación inmediata de este servicio conllevará unos gastos de cancelación de %1$s.';
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = 'La cancelación inmediata de este servicio conllevará unos gastos de cancelación de %1$s más impuestos.';
$lang['ClientServices.changeterm.page_title'] = 'Cliente #%1$s Cambiar plazo';
$lang['ClientServices.change_term.boxtitle'] = 'Cambiar plazo para %1$s - %2$s';
$lang['ClientServices.change_term.field_current_term'] = 'Vigencia actual';
$lang['ClientServices.change_term.field_pricing_id'] = 'Nueva legislatura';
$lang['ClientServices.change_term.cancel'] = 'Cancelar';
$lang['ClientServices.change_term.review'] = 'Consulte';
$lang['ClientServices.get_package_terms.term'] = '%1$s %2$s - %3$s';
$lang['ClientServices.get_package_terms.term_recurring'] = '%1$s %2$s - %3$s (renueva @ %4$s)';
$lang['ClientServices.get_package_terms.term_onetime'] = '%1$s - %2$s';
$lang['ClientServices.upgrade.page_title'] = 'Cliente #%1$s Cambiar paquete';
$lang['ClientServices.upgrade.boxtitle'] = 'Cambiar paquete de %1$s - %2$s';
$lang['ClientServices.upgrade.btn_make_payment'] = 'Realizar un pago';
$lang['ClientServices.upgrade.field_current_package'] = 'Paquete actual';
$lang['ClientServices.upgrade.field_pricing_id'] = 'Paquete nuevo';
$lang['ClientServices.upgrade.field_cancel'] = 'Cancelar';
$lang['ClientServices.upgrade.field_submit'] = 'Consulte';
$lang['ClientServices.upgrade.text_prorate'] = 'Si el nuevo paquete que elija cuesta más, se le facturará la diferencia prorrateada.';
$lang['ClientServices.upgrade.current_package'] = '%1$s (%2$s %3$s - %4$s)';
$lang['ClientServices.upgrade.current_package_onetime'] = '%1$s (%2$s - %3$s)';
$lang['ClientServices.addons.page_title'] = 'Cliente #%1$s Addons';
$lang['ClientServices.addons.boxtitle_addons'] = 'Complementos para %1$s - %2$s';
$lang['ClientServices.addons.create_addon'] = 'Añadir complemento';
$lang['ClientServices.addons.no_results'] = 'Este servicio no incluye ningún complemento.';
$lang['ClientServices.!error.addon_invalid'] = 'Seleccione un complemento válido.';
$lang['ClientServices.addaddon.page_title'] = 'Cliente #%1$s Addon';
$lang['ClientServices.addaddon.boxtitle_addons'] = 'Añadir complemento para %1$s - %2$s';
$lang['ClientServices.addaddon.header_add'] = 'Complementos';
$lang['ClientServices.addaddon.term'] = '%1$s %2$s';
$lang['ClientServices.addaddon.term_price'] = '%1$s - %2$s';
$lang['ClientServices.addaddon.term_price_recurring'] = '%1$s - %2$s (renueva @ %3$s)';
$lang['ClientServices.addaddon.term_price_setupfee'] = '%1$s - %2$s + %3$s configuración';
$lang['ClientServices.addaddon.term_price_setupfee_recurring'] = '%1$s - %2$s + %3$s instalación (renueva @ %4$s)';
$lang['ClientServices.addaddon.submit_add'] = 'Crear';
$lang['ClientServices.getaddonoptions.field_module_group_id'] = 'Grupo';
$lang['ClientServices.configure_addon.header_options'] = 'Opciones configurables';
$lang['ClientServices.manageoptions.page_title'] = 'Cliente #%1$s Gestionar opciones configurables';
$lang['ClientServices.manageoptions.boxtitle_options'] = 'Gestionar opciones configurables para %1$s - %2$s';
$lang['ClientServices.manageoptions.heading_current'] = 'Opciones actuales';
$lang['ClientServices.manageoptions.heading_new'] = 'Nuevas opciones';
$lang['ClientServices.manageoptions.no_options'] = 'Actualmente no hay opciones configurables disponibles para actualizar.';
$lang['ClientServices.manageoptions.cancel'] = 'Cancelar';
$lang['ClientServices.manageoptions.review'] = 'Consulte';
$lang['ClientServices.review.page_title'] = 'Cliente #%1$s Servicio de revisión';
$lang['ClientServices.review.boxtitle_review'] = 'Revisar los cambios en %1$s - %2$s';
$lang['ClientServices.review.heading_current_service'] = 'Servicio actual';
$lang['ClientServices.review.heading_updated_service'] = 'Servicio actualizado';
$lang['ClientServices.review.heading_label'] = 'Opción';
$lang['ClientServices.review.heading_old_value'] = 'Valor actual';
$lang['ClientServices.review.heading_new_value'] = 'Nuevo valor';
$lang['ClientServices.review.value'] = '%1$s (%2$sx %3$s)';
$lang['ClientServices.review.value_setup_fee'] = '%1$s (%2$sx %3$s, %4$s Cuota de instalación)';
$lang['ClientServices.review.none'] = '-';
$lang['ClientServices.review.cancel'] = 'Cancelar';
$lang['ClientServices.review.update'] = 'Guardar';
$lang['ClientServices.totals.subtotal'] = 'Subtotal:';
$lang['ClientServices.totals.total'] = 'Total a pagar hoy:';
$lang['ClientServices.totals.total_recurring'] = 'Total al renovar:';
$lang['ClientServices.!tooltip.total_recurring'] = 'El precio total al renovar representa el coste total de este servicio y todas sus opciones previstas en la próxima renovación.';

