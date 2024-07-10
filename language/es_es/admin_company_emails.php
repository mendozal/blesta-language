<?php
/**
 * Admin Company Emails
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyEmails.!success.edittemplate_updated'] = 'La configuración de la plantilla de email se ha actualizado correctamente.';
$lang['AdminCompanyEmails.!success.editsignature_updated'] = 'La firma de email se ha actualizado correctamente.';
$lang['AdminCompanyEmails.!success.addsignature_created'] = 'La firma de email se ha creado correctamente.';
$lang['AdminCompanyEmails.!success.deletesignature_deleted'] = 'La firma de email se ha eliminado correctamente.';
$lang['AdminCompanyEmails.!success.mail_updated'] = 'La configuración de Mail se ha actualizado correctamente.';
$lang['AdminCompanyEmails.!success.smtp_test'] = 'La conexión SMTP se ha realizado correctamente.';
$lang['AdminCompanyEmails.!success.sendmail_test'] = 'La conexión a Sendmail se ha realizado correctamente.';
$lang['AdminCompanyEmails.!tooltip.from_name'] = 'Es el nombre amigable de la dirección de email que muestra el cliente de correo del destinatario.';
$lang['AdminCompanyEmails.!tooltip.from'] = 'Esta es la dirección de email desde la que debe aparecer este mensaje.';
$lang['AdminCompanyEmails.!tooltip.subject'] = 'Es el asunto del mensaje. Los asuntos del email pueden utilizar etiquetas.';
$lang['AdminCompanyEmails.!tooltip.email_signature_id'] = 'El mensaje se adjuntará con la firma seleccionada.';
$lang['AdminCompanyEmails.!tooltip.include_attachments'] = 'Si se envían archivos adjuntos con esta plantilla de email, al desmarcar esta opción ya no se adjuntarán a los correos electrónicos.';
$lang['AdminCompanyEmails.!tooltip.status'] = 'No se enviarán correos electrónicos utilizando esta plantilla a menos que se active esta opción.';
$lang['AdminCompanyEmails.!tooltip.html_email'] = 'Marque esta casilla para permitir el envío de email con contenido HTML. Siempre se enviará una versión de texto sin formato de los correos electrónicos.';
$lang['AdminCompanyEmails.!tooltip.mail_delivery'] = 'SMTP utiliza un servidor SMTP configurado para la entrega de email, mientras que Sendmail intentará enviar email a través del binario Sendmail en el sistema. SMTP es generalmente más rápido, más seguro y más fiable, por lo que es la opción recomendada.';
$lang['AdminCompanyEmails.!tooltip.sendmail_path'] = 'El comando sendmail a ejecutar incluyendo ruta y banderas.';
$lang['AdminCompanyEmails.!tooltip.sendmail_from'] = 'Esto es sólo para probar el comando send mail y se utilizará para enviar un email de prueba a una dirección de email desechable al azar.';
$lang['AdminCompanyEmails.!tooltip.smtp_host'] = 'Establezca el nombre de host utilizado para comunicarse con el servidor SMTP.';
$lang['AdminCompanyEmails.!tooltip.smtp_port'] = 'Establezca el puerto utilizado para comunicarse con el servidor SMTP.';
$lang['AdminCompanyEmails.!tooltip.smtp_user'] = 'Establezca la cuenta de usuario SMTP a través de la cual se enviará el correo.';
$lang['AdminCompanyEmails.!tooltip.smtp_password'] = 'Establezca la contraseña de la cuenta de usuario SMTP.';
$lang['AdminCompanyEmails.!tooltip.smtp_from'] = 'La dirección de origen que se utilizará para probar la configuración.';
$lang['AdminCompanyEmails.!tooltip.smtp_to'] = 'Esto es sólo para probar el comando send mail y se utilizará para enviar un email de prueba a la dirección de email especificada (o una desechable al azar).';
$lang['AdminCompanyEmails.!tooltip.submitmail'] = 'Actualizar ajustes';
$lang['AdminCompanyEmails.!cancel.field.cancel'] = 'Cancelar';
$lang['AdminCompanyEmails.templates.page_title'] = 'Configuración > Empresa > Correos electrónicos > Plantillas de email';
$lang['AdminCompanyEmails.templates.boxtitle_templates'] = 'Plantillas de email';
$lang['AdminCompanyEmails.templates.heading_client'] = 'Correos electrónicos de clientes';
$lang['AdminCompanyEmails.templates.heading_staff'] = 'Correos electrónicos del personal';
$lang['AdminCompanyEmails.templates.heading_shared'] = 'Correos electrónicos compartidos';
$lang['AdminCompanyEmails.templates.heading_plugins'] = 'Plugin Emails';
$lang['AdminCompanyEmails.templates.text_name'] = 'Nombre';
$lang['AdminCompanyEmails.templates.text_plugin'] = 'Plugin';
$lang['AdminCompanyEmails.templates.text_description'] = 'Descripción';
$lang['AdminCompanyEmails.templates.text_options'] = 'Opciones';
$lang['AdminCompanyEmails.templates.option_edit'] = 'Editar';
$lang['AdminCompanyEmails.templates.no_results'] = 'No existen plantillas de este tipo.';
$lang['AdminCompanyEmails.templates.field_templatesubmit'] = 'Actualización';
$lang['AdminCompanyEmails.templates.payment_cc_approved_name'] = 'Pago aprobado (tarjeta de crédito)';
$lang['AdminCompanyEmails.templates.payment_cc_approved_desc'] = 'Aviso enviado tras la aprobación de un pago con tarjeta de crédito.';
$lang['AdminCompanyEmails.templates.payment_cc_declined_name'] = 'Pago rechazado (tarjeta de crédito)';
$lang['AdminCompanyEmails.templates.payment_cc_declined_desc'] = 'Aviso enviado tras el rechazo de un intento de pago con tarjeta de crédito.';
$lang['AdminCompanyEmails.templates.payment_cc_error_name'] = 'Error de pago (tarjeta de crédito)';
$lang['AdminCompanyEmails.templates.payment_cc_error_desc'] = 'Aviso enviado después de que un intento de pago con tarjeta de crédito resulte en error.';
$lang['AdminCompanyEmails.templates.payment_ach_approved_name'] = 'Pago aprobado (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_approved_desc'] = 'Aviso enviado tras la aprobación de un pago ACH correcto.';
$lang['AdminCompanyEmails.templates.payment_ach_declined_name'] = 'Pago rechazado (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_declined_desc'] = 'Aviso enviado tras el rechazo de un intento de pago ACH.';
$lang['AdminCompanyEmails.templates.payment_ach_error_name'] = 'Error de pago (ACH)';
$lang['AdminCompanyEmails.templates.payment_ach_error_desc'] = 'Aviso enviado después de que un intento de pago ACH resulte en error.';
$lang['AdminCompanyEmails.templates.payment_manual_approved_name'] = 'Pago recibido (entrada manual)';
$lang['AdminCompanyEmails.templates.payment_manual_approved_desc'] = 'Aviso enviado tras el registro manual de un pago.';
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_name'] = 'Pago recibido (no comerciante)';
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_desc'] = 'Aviso enviado tras la recepción de un pago desde una pasarela no comercial.';
$lang['AdminCompanyEmails.templates.credit_card_expiration_name'] = 'Expiración de la tarjeta de crédito';
$lang['AdminCompanyEmails.templates.credit_card_expiration_desc'] = 'Aviso enviado cuando una tarjeta de crédito activa está a punto de caducar.';
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_name'] = 'Entrega de facturas (impagadas)';
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_desc'] = 'Notificación que contiene una copia en PDF de una factura impagada.';
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_name'] = 'Entrega de facturas (pagadas)';
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_desc'] = 'Notificación que contiene una copia en PDF de una factura pagada.';
$lang['AdminCompanyEmails.templates.invoice_notice_first_name'] = 'Notificación de factura (1ª)';
$lang['AdminCompanyEmails.templates.invoice_notice_first_desc'] = 'Primer aviso de factura, ya sea un recordatorio de pago o un aviso de demora.';
$lang['AdminCompanyEmails.templates.invoice_notice_second_name'] = 'Notificación de factura (2ª)';
$lang['AdminCompanyEmails.templates.invoice_notice_second_desc'] = 'Segundo aviso de factura, ya sea un recordatorio de pago o un aviso de demora.';
$lang['AdminCompanyEmails.templates.invoice_notice_third_name'] = 'Notificación de factura (3ª)';
$lang['AdminCompanyEmails.templates.invoice_notice_third_desc'] = 'Tercer aviso de factura, ya sea un recordatorio de pago o un aviso de demora.';
$lang['AdminCompanyEmails.templates.reset_password_name'] = 'Restablecer contraseña';
$lang['AdminCompanyEmails.templates.reset_password_desc'] = 'Email de restablecimiento de contraseña que contiene un enlace para cambiar la contraseña de la cuenta.';
$lang['AdminCompanyEmails.templates.forgot_username_name'] = 'Usuario olvidado';
$lang['AdminCompanyEmails.templates.forgot_username_desc'] = 'Email de recuperación del nombre de usuario que contiene el nombre de usuario registrado para la cuenta.';
$lang['AdminCompanyEmails.templates.service_cancellation_name'] = 'Cancelación del servicio';
$lang['AdminCompanyEmails.templates.service_cancellation_desc'] = 'Aviso de cancelación de servicio, enviado cuando se cancela un servicio.';
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_name'] = 'Servicio programado Anulación';
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_desc'] = 'Aviso de cancelación programada de un servicio, enviado cuando se programa la cancelación de un servicio.';
$lang['AdminCompanyEmails.templates.service_suspension_name'] = 'Suspensión del servicio';
$lang['AdminCompanyEmails.templates.service_suspension_desc'] = 'Aviso de suspensión del servicio, enviado cuando se suspende automáticamente un servicio.';
$lang['AdminCompanyEmails.templates.service_unsuspension_name'] = 'Suspensión del servicio';
$lang['AdminCompanyEmails.templates.service_unsuspension_desc'] = 'Aviso de servicio no suspendido, enviado cuando un servicio se suspende automáticamente.';
$lang['AdminCompanyEmails.templates.account_management_invite_name'] = 'Invitación a la gestión de cuentas';
$lang['AdminCompanyEmails.templates.account_management_invite_desc'] = 'Aviso enviado después de que un usuario le haya invitado a gestionar su cuenta.';
$lang['AdminCompanyEmails.templates.account_welcome_name'] = 'Registro de cuentas';
$lang['AdminCompanyEmails.templates.account_welcome_desc'] = 'Aviso de bienvenida enviado para el registro de nuevas cuentas.';
$lang['AdminCompanyEmails.templates.report_ar_name'] = 'Informe de facturas antiguas';
$lang['AdminCompanyEmails.templates.report_ar_desc'] = 'Informes de facturación vencida a treinta, sesenta y noventa días, entregados una vez al mes.';
$lang['AdminCompanyEmails.templates.report_tax_liability_name'] = 'Informe de deuda tributaria';
$lang['AdminCompanyEmails.templates.report_tax_liability_desc'] = 'Un informe mensual de obligaciones fiscales, generado para el mes anterior.';
$lang['AdminCompanyEmails.templates.report_invoice_creation_name'] = 'Informe de creación de facturas';
$lang['AdminCompanyEmails.templates.report_invoice_creation_desc'] = 'Un informe diario de las facturas generadas el día anterior.';
$lang['AdminCompanyEmails.templates.service_suspension_error_name'] = 'Error de suspensión';
$lang['AdminCompanyEmails.templates.service_suspension_error_desc'] = 'Aviso enviado tras un intento fallido de suspender un servicio.';
$lang['AdminCompanyEmails.templates.service_unsuspension_error_name'] = 'Error de suspensión';
$lang['AdminCompanyEmails.templates.service_unsuspension_error_desc'] = 'Aviso enviado tras un intento fallido de desbloquear un servicio.';
$lang['AdminCompanyEmails.templates.service_cancel_error_name'] = 'Error de cancelación';
$lang['AdminCompanyEmails.templates.service_cancel_error_desc'] = 'Aviso enviado tras un intento fallido de cancelar un servicio.';
$lang['AdminCompanyEmails.templates.service_creation_error_name'] = 'Error de creación';
$lang['AdminCompanyEmails.templates.service_creation_error_desc'] = 'Aviso enviado tras un intento fallido de aprovisionar un servicio.';
$lang['AdminCompanyEmails.templates.service_renewal_error_name'] = 'Error de renovación';
$lang['AdminCompanyEmails.templates.service_renewal_error_desc'] = 'Aviso enviado tras un intento fallido de renovar un servicio.';
$lang['AdminCompanyEmails.templates.auto_debit_pending_name'] = 'Débito automático pendiente';
$lang['AdminCompanyEmails.templates.auto_debit_pending_desc'] = 'Aviso enviado que indica que se intentará realizar un pago automático en breve.';
$lang['AdminCompanyEmails.templates.staff_reset_password_name'] = 'Restablecer contraseña';
$lang['AdminCompanyEmails.templates.staff_reset_password_desc'] = 'Email de restablecimiento de contraseña que contiene un enlace para cambiar la contraseña de la cuenta.';
$lang['AdminCompanyEmails.templates.service_creation_name'] = 'Creación de servicios';
$lang['AdminCompanyEmails.templates.service_creation_desc'] = 'Aviso de creación de servicio, enviado cuando se ha creado un servicio.';
$lang['AdminCompanyEmails.templates.verify_email_name'] = 'Verificación del email';
$lang['AdminCompanyEmails.templates.verify_email_desc'] = 'Enlace de verificación por email, enviado cuando se crea un nuevo inicio de sesión o un cliente cambia su dirección de email.';
$lang['AdminCompanyEmails.templates.quotation_delivery_name'] = 'Presupuesto';
$lang['AdminCompanyEmails.templates.quotation_delivery_desc'] = 'Aviso que contiene una copia en PDF de un presupuesto.';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_name'] = 'Aprobación del presupuesto';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_desc'] = 'Aviso enviado tras la aprobación de un presupuesto por parte del cliente.';
$lang['AdminCompanyEmails.edittemplate.page_title'] = 'Configuración > Empresa > Correos electrónicos > Editar plantilla de email';
$lang['AdminCompanyEmails.edittemplate.boxtitle_edittemplate'] = 'Editar plantilla de correo %1$s';
$lang['AdminCompanyEmails.edittemplate.text_none'] = 'Ninguno';
$lang['AdminCompanyEmails.edittemplate.field.status'] = 'Activado';
$lang['AdminCompanyEmails.edittemplate.field.from_name'] = 'De Nombre';
$lang['AdminCompanyEmails.edittemplate.field.from'] = 'Del email';
$lang['AdminCompanyEmails.edittemplate.field.subject'] = 'Asunto';
$lang['AdminCompanyEmails.edittemplate.field.tags'] = 'Etiquetas disponibles';
$lang['AdminCompanyEmails.edittemplate.field.text'] = 'Texto';
$lang['AdminCompanyEmails.edittemplate.field.html'] = 'HTML';
$lang['AdminCompanyEmails.edittemplate.field.email_signature_id'] = 'Firma';
$lang['AdminCompanyEmails.edittemplate.field.include_attachments'] = 'Incluir anexos';
$lang['AdminCompanyEmails.edittemplate.field.edittemplatesubmit'] = 'Plantilla de actualización';
$lang['AdminCompanyEmails.signatures.page_title'] = 'Configuración > Empresa > Emails > Firmas';
$lang['AdminCompanyEmails.signatures.boxtitle_signatures'] = 'Firmas';
$lang['AdminCompanyEmails.signatures.categorylink_newsignature'] = 'Nueva firma';
$lang['AdminCompanyEmails.signatures.no_results'] = 'No hay firmas de email.';
$lang['AdminCompanyEmails.signatures.text_name'] = 'Nombre';
$lang['AdminCompanyEmails.signatures.text_description'] = 'Descripción';
$lang['AdminCompanyEmails.signatures.text_options'] = 'Opciones';
$lang['AdminCompanyEmails.signatures.option_edit'] = 'Editar';
$lang['AdminCompanyEmails.signatures.option_delete'] = 'Borrar';
$lang['AdminCompanyEmails.signatures.confirm_delete'] = '¿Estás seguro de que quieres borrar esta firma de email?';
$lang['AdminCompanyEmails.addsignature.page_title'] = 'Configuración > Empresa > Correos electrónicos > Añadir firma';
$lang['AdminCompanyEmails.addsignature.boxtitle_addsignature'] = 'Añadir firma';
$lang['AdminCompanyEmails.addsignature.field_name'] = 'Nombre';
$lang['AdminCompanyEmails.addsignature.field_text'] = 'Texto';
$lang['AdminCompanyEmails.addsignature.field_html'] = 'HTML';
$lang['AdminCompanyEmails.addsignature.field_addsignaturesubmit'] = 'Crear firma';
$lang['AdminCompanyEmails.addsignature.text_signatures'] = 'Las firmas se utilizan para plantillas de email, lo que facilita la modificación de firmas de email en bloque.';
$lang['AdminCompanyEmails.editsignature.page_title'] = 'Configuración > Empresa > Correos electrónicos > Editar firma';
$lang['AdminCompanyEmails.editsignature.boxtitle_editsignature'] = 'Editar firma';
$lang['AdminCompanyEmails.editsignature.field_name'] = 'Nombre';
$lang['AdminCompanyEmails.editsignature.field_text'] = 'Texto';
$lang['AdminCompanyEmails.editsignature.field_html'] = 'HTML';
$lang['AdminCompanyEmails.editsignature.field_editsignaturesubmit'] = 'Firma de actualización';
$lang['AdminCompanyEmails.mail.page_title'] = 'Configuración > Empresa > Email > Configuración de correo';
$lang['AdminCompanyEmails.mail.boxtitle_mail'] = 'Configuración del correo';
$lang['AdminCompanyEmails.mail.text_section'] = 'Esta sección controla cómo se entrega el email desde Blesta. Sendmail es el método de entrega más sencillo, pero SMTP suele ser más rápido y fiable.';
$lang['AdminCompanyEmails.mail.field.sendmail_path'] = 'Ruta de Sendmail';
$lang['AdminCompanyEmails.mail.field.sendmail_from'] = 'Dirección del remitente de prueba de Sendmail';
$lang['AdminCompanyEmails.mail.field.html_email'] = 'Activar HTML';
$lang['AdminCompanyEmails.mail.field.mail_delivery'] = 'Método de entrega';
$lang['AdminCompanyEmails.mail.field.test'] = 'Prueba estos ajustes';
$lang['AdminCompanyEmails.mail.field.smtp_host'] = 'Host SMTP';
$lang['AdminCompanyEmails.mail.field.smtp_port'] = 'Puerto SMTP';
$lang['AdminCompanyEmails.mail.field.smtp_user'] = 'Usuario SMTP';
$lang['AdminCompanyEmails.mail.field.smtp_password'] = 'Contraseña SMTP';
$lang['AdminCompanyEmails.mail.field.smtp_from'] = 'Prueba de correo desde:';
$lang['AdminCompanyEmails.mail.field.smtp_to'] = 'Prueba de correo para:';
$lang['AdminCompanyEmails.mail.field.submitmail'] = 'Actualizar ajustes';
$lang['AdminCompanyEmails.mail.text_optional'] = 'Opcional';
$lang['AdminCompanyEmails.getRequiredMethods.sendmail'] = 'Sendmail';
$lang['AdminCompanyEmails.getRequiredMethods.smtp'] = 'SMTP';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.none'] = 'Ninguno';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.ssl'] = 'SSL';
$lang['AdminCompanyEmails.getsmtpsecurityoptions.tls'] = 'TLS';
$lang['AdminCompanyEmails.gettemplateactions.update_from_email'] = 'Actualizar "De email"';
$lang['AdminCompanyEmails.gettemplateactions.update_from_name'] = 'Actualizar "Nombre del remitente"';
$lang['AdminCompanyEmails.edittemplate.field_continue'] = 'Continuar';
$lang['AdminCompanyEmails.edittemplate.field_cancel'] = 'Cancelar';
$lang['AdminCompanyEmails.edittemplate.field_attachment'] = 'Adjunto';
$lang['AdminCompanyEmails.edittemplate.option_delete'] = 'Borrar';
$lang['AdminCompanyEmails.edittemplate.confirm_delete_attachment'] = '¿Estás seguro de que quieres borrar este archivo adjunto?';
$lang['AdminCompanyEmails.edittemplate.heading_options'] = 'Opciones';
$lang['AdminCompanyEmails.edittemplate.heading_file_name'] = 'Nombre del archivo';
$lang['AdminCompanyEmails.edittemplate.heading_additional_attachments'] = 'Anexos adicionales';
$lang['AdminCompanyEmails.edittemplate.heading_email_template'] = 'Plantilla de email';

