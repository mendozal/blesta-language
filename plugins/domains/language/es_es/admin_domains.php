<?php
/**
 * Admin Domains
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminDomains.!success.registrar_upgraded'] = 'El módulo se ha actualizado correctamente.';
$lang['AdminDomains.!success.registrar_installed'] = 'El módulo se ha instalado correctamente.';
$lang['AdminDomains.!success.registrar_uninstalled'] = 'El módulo se ha desinstalado correctamente.';
$lang['AdminDomains.!success.configuration_updated'] = 'Se ha actualizado la configuración del Administrador de dominios.';
$lang['AdminDomains.!success.tld_disabled'] = 'El TLD se ha desactivado correctamente.';
$lang['AdminDomains.!success.tld_enabled'] = 'El TLD se ha activado correctamente.';
$lang['AdminDomains.!success.tld_added'] = 'El TLD se ha añadido correctamente.';
$lang['AdminDomains.!success.tld_updated'] = 'El TLD se ha actualizado correctamente.';
$lang['AdminDomains.!success.tlds_updated'] = 'Los TLD se han actualizado correctamente.';
$lang['AdminDomains.!success.tld_sync'] = 'Los precios de los TLD se han sincronizado correctamente.';
$lang['AdminDomains.!success.change_status'] = 'Los estados de los TLD se han actualizado correctamente.';
$lang['AdminDomains.!success.change_auto_renewal'] = 'Se ha actualizado la renovación automática del dominio.';
$lang['AdminDomains.!success.domain_renewal'] = 'El dominio ha sido renovado.';
$lang['AdminDomains.!success.update_nameservers'] = 'Se han actualizado los servidores de nombres de dominio.';
$lang['AdminDomains.!success.domains_pushed'] = 'Los dominios seleccionados se han transferido correctamente al nuevo cliente.';
$lang['AdminDomains.!success.packages_imported'] = 'Paquetes de dominios importados correctamente';
$lang['AdminDomains.!success.configurable_option_updated'] = '¡Se ha actualizado la opción configurable!';
$lang['AdminDomains.!success.tlds_imported'] = 'Los TLD se han importado correctamente.';
$lang['AdminDomains.!error.value_id_invalid'] = 'El ID de valor proporcionado no es válido.';
$lang['AdminDomains.!error.tlds_bulk[action].valid'] = 'Valor no válido para TLDs Bulk Action, debe ser "enable" o "disable".';
$lang['AdminDomains.!warning.automatic_currency_conversion'] = 'Tiene un tipo de cambio definido para esta moneda, por lo que no es necesario definir precios aquí. Si no se definen precios para esta moneda, la moneda se convertirá automáticamente de %1$s. Si define un precio aquí, se utilizará en su lugar.';
$lang['AdminDomains.!warning.price_sync_unsupported'] = 'Este módulo de registro no admite la sincronización de precios, los TLD se importarán sin precios.';
$lang['AdminDomains.browse.page_title'] = 'Dominios > Navegar';
$lang['AdminDomains.browse.boxtitle_browse'] = 'Dominios';
$lang['AdminDomains.browse.heading_domain'] = 'Dominio';
$lang['AdminDomains.browse.heading_client'] = 'Cliente';
$lang['AdminDomains.browse.heading_registrar'] = 'Registrador';
$lang['AdminDomains.browse.heading_price'] = 'Precio';
$lang['AdminDomains.browse.heading_registration'] = 'Fecha registro';
$lang['AdminDomains.browse.heading_renewal'] = 'Fecha renovación';
$lang['AdminDomains.browse.heading_expiration'] = 'Fecha expiración';
$lang['AdminDomains.browse.heading_renew'] = 'Autorenovar';
$lang['AdminDomains.browse.heading_options'] = 'Opciones';
$lang['AdminDomains.browse.option_delete'] = 'Borrar';
$lang['AdminDomains.browse.option_parent'] = 'Padres';
$lang['AdminDomains.browse.option_manage'] = 'Gestionar';
$lang['AdminDomains.browse.confirm_delete'] = '¿Está seguro de que desea eliminar este servicio de dominio?';
$lang['AdminDomains.browse.text_none'] = 'No hay dominios registrados.';
$lang['AdminDomains.browse.text_on'] = 'Sí';
$lang['AdminDomains.browse.text_off'] = 'No';
$lang['AdminDomains.browse.category_active'] = 'Activo';
$lang['AdminDomains.browse.category_canceled'] = 'Cancelado';
$lang['AdminDomains.browse.category_suspended'] = 'Suspendido';
$lang['AdminDomains.browse.category_pending'] = 'Pendiente';
$lang['AdminDomains.browse.category_in_review'] = 'En revisión';
$lang['AdminDomains.browse.category_scheduled_cancellation'] = 'Programado';
$lang['AdminDomains.browse.field_actionsubmit'] = 'Enviar';
$lang['AdminDomains.browse.tooltip_renew'] = 'La renovación automática para Blesta significa que se facturará automáticamente al cliente y que el dominio se renovará una vez pagada la factura.';
$lang['AdminDomains.browse.change_auto_renewal'] = 'Cambiar la renovación automática';
$lang['AdminDomains.browse.domain_renewal'] = 'Renovar dominio';
$lang['AdminDomains.browse.update_nameservers'] = 'Actualizar servidores de nombres';
$lang['AdminDomains.browse.push_to_client'] = 'Empujar al cliente';
$lang['AdminDomains.browse.action.field_years'] = 'Años';
$lang['AdminDomains.browse.action.field_nameservers'] = 'Servidores de nombres';
$lang['AdminDomains.browse.action.field_client'] = 'Cliente';
$lang['AdminDomains.registrars.page_title'] = 'Dominios > Registradores';
$lang['AdminDomains.registrars.boxtitle_registrars'] = 'Registradores';
$lang['AdminDomains.registrars.text_author'] = 'Autor:';
$lang['AdminDomains.registrars.text_author_url'] = 'Autor URL';
$lang['AdminDomains.registrars.text_version'] = '(ver %1$s)';
$lang['AdminDomains.registrars.btn_install'] = 'Instalar';
$lang['AdminDomains.registrars.btn_uninstall'] = 'Desinstalar';
$lang['AdminDomains.registrars.btn_manage'] = 'Gestionar';
$lang['AdminDomains.registrars.btn_upgrade'] = 'Actualizar';
$lang['AdminDomains.registrars.text_none'] = 'No hay registradores disponibles.';
$lang['AdminDomains.registrars.confirm_uninstall'] = '¿Está seguro de que desea desinstalar este registrador?';
$lang['AdminDomains.configuration.page_title'] = 'Dominios > Configuración';
$lang['AdminDomains.configuration.boxtitle'] = 'Configuración';
$lang['AdminDomains.configuration.tab_general'] = 'General';
$lang['AdminDomains.configuration.tab_notifications'] = 'Notificaciones';
$lang['AdminDomains.configuration.tab_advanced'] = 'Avanzado';
$lang['AdminDomains.configuration.tab_tld_sync'] = 'Sincronización de TLD';
$lang['AdminDomains.configuration.tab_importpackages'] = 'Importar paquetes';
$lang['AdminDomains.configuration.tab_configurableoptions'] = 'Opciones configurables';
$lang['AdminDomains.configuration.heading_package_options'] = 'Opciones de paquetes';
$lang['AdminDomains.configuration.heading_taxes'] = 'Impuestos';
$lang['AdminDomains.configuration.heading_markup'] = 'Marcado';
$lang['AdminDomains.configuration.heading_automation'] = 'Automatización';
$lang['AdminDomains.configuration.field_dns_management_option_group'] = 'Grupo de opciones de gestión de DNS';
$lang['AdminDomains.configuration.field_email_forwarding_option_group'] = 'Grupo de opciones de reenvío de email';
$lang['AdminDomains.configuration.field_id_protection_option_group'] = 'Grupo de opciones de protección de identidad';
$lang['AdminDomains.configuration.field_first_reminder_days_before'] = '1er recordatorio de caducidad Días antes';
$lang['AdminDomains.configuration.field_second_reminder_days_before'] = '2º recordatorio de caducidad Días antes';
$lang['AdminDomains.configuration.field_expiration_notice_days_after'] = 'Notificación de expiración Días después';
$lang['AdminDomains.configuration.field_spotlight_tlds'] = 'TLD destacados';
$lang['AdminDomains.configuration.field_renewal_days_before_expiration'] = 'Renovar días antes de la expiración';
$lang['AdminDomains.configuration.field_taxable'] = 'Activar impuestos para dominios';
$lang['AdminDomains.configuration.field_override_price'] = 'Fijar los precios de los dominios';
$lang['AdminDomains.configuration.field_sync_price_markup'] = 'Margen de precios (%)';
$lang['AdminDomains.configuration.field_sync_renewal_markup'] = 'Incremento del precio de renovación (%)';
$lang['AdminDomains.configuration.field_sync_transfer_markup'] = 'Incremento del precio de transferencia (%)';
$lang['AdminDomains.configuration.field_enable_rounding'] = 'Activar redondeo';
$lang['AdminDomains.configuration.field_markup_rounding'] = 'Vuelta a la siguiente';
$lang['AdminDomains.configuration.field_automatic_sync'] = 'Activar la sincronización automática';
$lang['AdminDomains.configuration.field_sync_frequency'] = 'Sincronizar cada';
$lang['AdminDomains.configuration.text_manual_sync_title'] = '¿Quieres sincronizar manualmente?';
$lang['AdminDomains.configuration.text_manual_sync'] = 'Para sincronizar los TLD manualmente, visite la página Precios de TLD, utilice las casillas de verificación para seleccionar los TLD que desea sincronizar y seleccione la acción Sincronizar registrador.';
$lang['AdminDomains.configuration.field_submit'] = 'Actualizar configuración';
$lang['AdminDomains.configuration.link_template'] = 'Editar plantilla de email';
$lang['AdminDomains.configuration.tooltip_dns_management_option_group'] = 'El grupo de opciones configurable que se utiliza para controlar si un dominio dispondrá de servicios de gestión DNS.';
$lang['AdminDomains.configuration.tooltip_email_forwarding_option_group'] = 'El grupo de opciones configurable que se utiliza para controlar si un dominio tendrá servicios de reenvío de email.';
$lang['AdminDomains.configuration.tooltip_id_protection_option_group'] = 'El grupo de opciones configurable utilizado para controlar si un dominio tendrá servicios de protección de ID.';
$lang['AdminDomains.configuration.tooltip_override_price'] = 'Si está activada, esta opción evitará que los cambios de precio de los TLD afecten a los dominios existentes estableciendo una "precios fijos" en los dominios de nueva creación.';
$lang['AdminDomains.configuration.tooltip_first_reminder_days_before'] = 'Seleccione el número de días antes de que caduque un dominio para enviar el primer email de recordatorio (26-35 según las especificaciones de ICANN). Utilice el enlace Plantilla de email para modificar/desactivar este email.';
$lang['AdminDomains.configuration.tooltip_second_reminder_days_before'] = 'Seleccione el número de días antes de que caduque un dominio para enviar el segundo email recordatorio (4-10 según las especificaciones de ICANN). Utilice el enlace Plantilla de email para modificar/desactivar este email.';
$lang['AdminDomains.configuration.tooltip_expiration_notice_days_after'] = 'Seleccione el número de días después de que caduque un dominio para enviar el email de aviso de caducidad (1-5 según las especificaciones de ICANN). Utilice el enlace Plantilla de email para modificar/desactivar este email.';
$lang['AdminDomains.configuration.tooltip_spotlight_tlds'] = 'TLDs que se destacarán en los formularios de pedido a través del Plugin de Pedido.';
$lang['AdminDomains.configuration.tooltip_renewal_days_before_expiration'] = 'Cuando se facturen dominios, la factura vencerá este número de días antes de la fecha de expiración del dominio.';
$lang['AdminDomains.getroundingoptions.custom'] = 'A medida';
$lang['AdminDomains.importpackages.page_title'] = 'Dominios > Configuración';
$lang['AdminDomains.importpackages.boxtitle'] = 'Configuración';
$lang['AdminDomains.importpackages.order_form'] = 'Los formularios de pedido de dominios deben actualizarse para utilizar el grupo de paquetes %1$s';
$lang['AdminDomains.importpackages.description'] = 'Esta importación:<br/>
* Buscará todos los paquetes asignados a un módulo registrador (es posible que los módulos de terceros no se identifiquen como registradores y, por lo tanto, no se reconozcan)<br/>*.
* Para cada TLD asignado al paquete, creará un nuevo paquete de precios de TLD con los mismos detalles en el Administrador de dominios.
* Omita cualquier paquete/TLD con el mismo registrador que un paquete/TLD encontrado anteriormente.
* Omita los paquetes que no tengan periodos de tarificación anuales.
* Marcar el primer paquete/Registrador encontrado para cada TLD como el principal, mientras que los otros paquetes de importación se utilizarán cuando se cambie el registrador en la página de Precios de TLDs<br/>
* Desactivar los antiguos paquetes importados si no tienen servicios después de la importación<br/>';
$lang['AdminDomains.importpackages.field_migrate_services'] = 'Servicios de migración';
$lang['AdminDomains.importpackages.tooltip_migrate_services'] = 'Si se selecciona esta opción, todos los servicios asignados a los paquetes clonados se migrarán a los paquetes recién creados.  Esto solo se aplicará a los servicios con un periodo de tarificación anual.';
$lang['AdminDomains.importpackages.field_overwrite_packages'] = 'Sobrescribir paquetes TLD';
$lang['AdminDomains.importpackages.tooltip_overwrite_packages'] = 'Si se selecciona esta opción, se eliminarán los paquetes TLD actuales del Administrador de Dominios y se sustituirán por paquetes TLD externos.  Los paquetes del Administrador de Dominios con servicios asignados se omitirán durante este proceso.';
$lang['AdminDomains.importpackages.title_imported_packages'] = 'TLD importados';
$lang['AdminDomains.importpackages.text_collecting_list_tlds'] = 'Recopilación de una lista de TLD para importar...';
$lang['AdminDomains.importpackages.field_submit'] = 'Importar paquetes';
$lang['AdminDomains.configurableoptions.page_title'] = 'Dominios > Configuración';
$lang['AdminDomains.configurableoptions.boxtitle'] = 'Configuración';
$lang['AdminDomains.configurableoptions.heading_configurable_option'] = 'Opción configurable';
$lang['AdminDomains.configurableoptions.heading_options'] = 'Opciones';
$lang['AdminDomains.configurableoptions.option_edit'] = 'Editar';
$lang['AdminDomains.configurableoptions_pricing.boxtitle_edit_configurable_option'] = 'Editar %1$s';
$lang['AdminDomains.configurableoptions_pricing.field_update'] = 'Actualización';
$lang['AdminDomains.configurableoptions_pricing.field_cancel'] = 'Cancelar';
$lang['AdminDomains.configurableoptions_pricing.heading_term'] = 'Plazo';
$lang['AdminDomains.configurableoptions_pricing.heading_price'] = 'Precio';
$lang['AdminDomains.configurableoptions_pricing.heading_renew_price'] = 'Renovar precio';
$lang['AdminDomains.tlds.page_title'] = 'Dominios > TLD';
$lang['AdminDomains.tlds.boxtitle_tld_pricing'] = 'Precios de los TLD';
$lang['AdminDomains.tlds.categorylink_tldsadd'] = 'Añadir TLD';
$lang['AdminDomains.tlds.heading_tld'] = 'TLD';
$lang['AdminDomains.tlds.heading_dns_management'] = 'Gestión de DNS';
$lang['AdminDomains.tlds.heading_email_forwarding'] = 'Reenvío de email';
$lang['AdminDomains.tlds.heading_id_protection'] = 'Protección ID';
$lang['AdminDomains.tlds.heading_epp_code'] = 'Código PPE';
$lang['AdminDomains.tlds.heading_module'] = 'Módulo';
$lang['AdminDomains.tlds.heading_options'] = 'Opciones';
$lang['AdminDomains.tlds.option_edit'] = 'Editar';
$lang['AdminDomains.tlds.option_disable'] = 'Desactivar';
$lang['AdminDomains.tlds.option_enable'] = 'Activar';
$lang['AdminDomains.tlds.option_add'] = 'Añadir';
$lang['AdminDomains.tlds.option_submit'] = 'Enviar';
$lang['AdminDomains.tlds.option_configure_sync'] = 'Configurar la sincronización de TLD';
$lang['AdminDomains.tlds.field_action'] = 'Acción';
$lang['AdminDomains.tlds.field_status'] = 'Estado';
$lang['AdminDomains.tlds.confirm_disable'] = '¿Está seguro de que desea desactivar este TLD?';
$lang['AdminDomains.tlds.confirm_enable'] = '¿Está seguro de que desea activar este TLD?';
$lang['AdminDomains.tlds.tooltip_dns_management'] = 'La disponibilidad de la gestión de DNS dependerá de si el módulo registrador implementa dicha funcionalidad y puede no estar disponible para todos los TLD o registradores.';
$lang['AdminDomains.tlds.tooltip_email_forwarding'] = 'La disponibilidad del reenvío de email dependerá de si el módulo del registrador implementa dicha funcionalidad y puede no estar disponible para todos los TLD o registradores.';
$lang['AdminDomains.tlds.tooltip_id_protection'] = 'La disponibilidad de la protección de ID dependerá de si el módulo de registro implementa dicha funcionalidad y puede no estar disponible para todos los TLD o registradores.';
$lang['AdminDomains.tlds.tooltip_epp_code'] = 'La disponibilidad del Código EPP dependerá de si el módulo registrador implementa dicha funcionalidad y puede no estar disponible para todos los TLD o registradores';
$lang['AdminDomains.getTldActions.option_change_status'] = 'Cambiar estado';
$lang['AdminDomains.getTldActions.option_tld_sync'] = 'Sincronización de precios';
$lang['AdminDomains.getTldStatuses.option_disabled'] = 'Deshabilitado';
$lang['AdminDomains.getTldStatuses.option_enabled'] = 'Activado';
$lang['AdminDomains.pricing.boxtitle_edit_tld'] = 'Actualizar TLD %1$s';
$lang['AdminDomains.pricing.tab_pricing'] = 'Precios';
$lang['AdminDomains.pricing.tab_nameservers'] = 'Servidores de nombres';
$lang['AdminDomains.pricing.tab_welcome_email'] = 'Email de bienvenida';
$lang['AdminDomains.pricing.tab_advanced'] = 'Avanzado';
$lang['AdminDomains.pricing.heading_term'] = 'Plazo';
$lang['AdminDomains.pricing.heading_register_price'] = 'Precio de registro';
$lang['AdminDomains.pricing.heading_renew_price'] = 'Renovar precio';
$lang['AdminDomains.pricing.heading_transfer_price'] = 'Precio de transferencia';
$lang['AdminDomains.pricing.heading_nameservers'] = 'Servidores de nombres';
$lang['AdminDomains.pricing.heading_module_options'] = 'Opciones de módulos';
$lang['AdminDomains.pricing.heading_advanced_options'] = 'Opciones avanzadas';
$lang['AdminDomains.pricing.heading_welcome_email'] = 'Email de bienvenida';
$lang['AdminDomains.pricing.text_tags'] = 'Etiquetas:';
$lang['AdminDomains.pricing.text_confirm_load_email'] = '¿Está seguro de que desea cargar el email de muestra? Esto descartará todos los cambios.';
$lang['AdminDomains.pricing.text_advanced_options'] = 'Edite el paquete básico para definir los límites de clientes, las opciones configurables, la cantidad disponible, las integraciones de plugins, las descripciones y mucho más.';
$lang['AdminDomains.pricing.field_nameserver'] = 'Servidor de nombres %1$s';
$lang['AdminDomains.pricing.field_modulegroup_any'] = 'Cualquier';
$lang['AdminDomains.pricing.field_edit_package'] = 'Editar paquete';
$lang['AdminDomains.pricing.field_load_sample_email'] = 'Cargar ejemplo de email';
$lang['AdminDomains.pricing.field_description_html'] = 'HTML';
$lang['AdminDomains.pricing.field_description_text'] = 'Texto';
$lang['AdminDomains.pricing.field_cancel'] = 'Cancelar';
$lang['AdminDomains.pricing.field_update'] = 'Actualización';
$lang['AdminDomains.meta.boxtitle_meta_tld'] = 'Actualizar Meta Paquete para TLD %1$s';
$lang['AdminDomains.meta.heading_module_options'] = 'Opciones de módulos';
$lang['AdminDomains.meta.heading_update_required'] = 'Es posible que sea necesario actualizar la meta del paquete.';
$lang['AdminDomains.meta.heading_update_no_required'] = 'Para este módulo no es necesario actualizar la meta del paquete.';
$lang['AdminDomains.meta.text_update_required_note'] = 'Al actualizar el módulo registrador de un TLD puede ser necesario en algunos casos actualizar el meta paquete. Blesta intentará mapear automáticamente tantos campos como sea posible, pero algunos campos pueden requerir una actualización manual.';
$lang['AdminDomains.meta.text_update_no_required_note'] = 'El nuevo módulo de registro no tiene campos meta de paquete para actualizar.';
$lang['AdminDomains.meta.field_modulegroup_any'] = 'Cualquier';
$lang['AdminDomains.meta.field_continue'] = 'Continuar';
$lang['AdminDomains.meta.field_finish'] = 'Acabado';
$lang['AdminDomains.meta.field_update'] = 'Actualización';
$lang['AdminDomains.whois.page_title'] = 'Dominios > Whois';
$lang['AdminDomains.whois.boxtitle_whois'] = 'Whois';
$lang['AdminDomains.whois.title_row'] = 'Búsqueda de dominios';
$lang['AdminDomains.whois.available'] = 'Dominio disponible';
$lang['AdminDomains.whois.unavailable'] = 'Dominio no disponible';
$lang['AdminDomains.whois.field_domain'] = 'Dominio';
$lang['AdminDomains.whois.field_submit'] = 'Búsqueda';
$lang['AdminDomains.import.boxtitle_import'] = 'Importar TLD';
$lang['AdminDomains.import.title_module'] = 'Módulo';
$lang['AdminDomains.import.title_terms'] = 'Términos';
$lang['AdminDomains.import.title_tlds'] = 'TLDs';
$lang['AdminDomains.import.field_module'] = 'Módulo';
$lang['AdminDomains.import.field_import'] = 'Importar TLD';
$lang['AdminDomains.import.text_refresh'] = 'Actualizar';
$lang['AdminDomains.import.text_install_modules'] = 'Instalar módulos';
$lang['AdminDomains.import.text_tld_settings'] = 'Los recargos, redondeos, etc. de los precios de los TLD se establecerán en función de la configuración de la Sincronización de TLD.';
$lang['AdminDomains.import.text_configuration'] = 'Configurar ajustes';
$lang['AdminDomains.import.text_year'] = '%1$s Año';
$lang['AdminDomains.import.text_years'] = '%1$s Años';
$lang['AdminDomains.import.text_terms_notice'] = 'Debe seleccionarse al menos un plazo.';
$lang['AdminDomains.getDays.same_day'] = 'El mismo día';
$lang['AdminDomains.getDays.text_day'] = '%1$s Día';
$lang['AdminDomains.getDays.text_days'] = '%1$s Días';
$lang['AdminDomains.getPeriods.day'] = 'Día';
$lang['AdminDomains.getPeriods.week'] = 'Semana';
$lang['AdminDomains.getPeriods.month'] = 'Mes';
$lang['AdminDomains.getPeriods.year'] = 'Año';
$lang['AdminDomains.getOperators.later'] = 'Más tarde';
$lang['AdminDomains.getOperators.earlier'] = 'Anteriormente';
$lang['AdminDomains.getfilters.any'] = 'Cualquier';
$lang['AdminDomains.getfilters.field_module_id'] = 'Módulo Registrador';
$lang['AdminDomains.getfilters.field_package_name'] = 'TLD';
$lang['AdminDomains.getfilters.field_service_meta'] = 'Nombre de dominio';
$lang['AdminDomains.gettldfilters.any'] = 'Cualquier';
$lang['AdminDomains.gettldfilters.field_module_id'] = 'Módulo Registrador';
$lang['AdminDomains.gettldfilters.field_search_tld'] = 'TLD';
$lang['AdminDomains.gettldfilters.field_limit'] = 'Límite';
$lang['AdminDomains.leftnav.nav_utilities'] = 'Servicios';
$lang['AdminDomains.leftnav.nav_domains_whois'] = 'Whois';
$lang['AdminDomains.leftnav.nav_tlds'] = 'TLDs';
$lang['AdminDomains.leftnav.nav_tlds_pricing'] = 'Precios de los TLD';
$lang['AdminDomains.leftnav.nav_tlds_registrars'] = 'Registradores';
$lang['AdminDomains.leftnav.nav_tlds_import'] = 'Importar TLD';
$lang['AdminDomains.leftnav.nav_configuration'] = 'Configuración';
$lang['AdminDomains.!success.domains_unparented'] = 'Los dominios seleccionados se han eliminado de sus servicios principales y el precio se ha restablecido correctamente.';
$lang['AdminDomains.!error.tlds_imported'] = 'No se han podido importar todos los TLDS debido a un error.';
$lang['AdminDomains.browse.unparent'] = 'Unparent and Reset Price';
$lang['AdminDomains.import.field_restart'] = 'Volver a empezar';
$lang['AdminDomains.browse.heading_added'] = 'Fecha añadido';
$lang['AdminDomains.!success.domain_registrar_updated'] = 'El registrador de dominios ha sido actualizado.';

