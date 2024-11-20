<?php
/**
 * Solusvm
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Solusvm.!actions.boot'] = 'Bota';
$lang['Solusvm.!actions.reboot'] = 'Reiniciar';
$lang['Solusvm.!actions.shutdown'] = 'Cierre';
$lang['Solusvm.!actions.reinstall'] = 'Vuelva a instalar';
$lang['Solusvm.!actions.hostname'] = 'Cambiar nombre de host';
$lang['Solusvm.!actions.password'] = 'Cambiar contraseña';
$lang['SolusVM.!error.simplexml_required'] = 'La extensión simplexml es necesaria para este módulo.';
$lang['Solusvm.!error.server_name.empty'] = 'Por favor, introduzca una etiqueta de servidor.';
$lang['Solusvm.!error.user_id.empty'] = 'Por favor, introduzca un ID de usuario.';
$lang['Solusvm.!error.key.empty'] = 'Por favor, introduzca una clave.';
$lang['Solusvm.!error.host.format'] = 'El nombre de host parece no ser válido.';
$lang['Solusvm.!error.port.format'] = 'Introduzca un número de puerto válido.';
$lang['Solusvm.!error.meta[type].valid'] = 'Seleccione un tipo de virtualización válido.';
$lang['Solusvm.!error.meta[nodes].empty'] = 'Seleccione al menos un nodo o grupo de nodos.';
$lang['Solusvm.!error.meta[plan].empty'] = 'Seleccione un plan.';
$lang['Solusvm.!error.meta[set_template].format'] = 'Establezca si desea seleccionar una plantilla o permitir que los clientes establezcan una plantilla.';
$lang['Solusvm.!error.meta[template].empty'] = 'Seleccione una plantilla.';
$lang['Solusvm.!error.meta[total_base_ip_addresses].format'] = 'Introduzca sólo dígitos para la cantidad de direcciones IP, con un valor de 1 o más.';
$lang['Solusvm.!error.api.internal'] = 'Se ha producido un error interno o el servidor no ha respondido a la solicitud.';
$lang['Solusvm.!error.solusvm_hostname.format'] = 'Introduzca un nombre de dominio completo válido (por ejemplo, host.dominio.com) para el nombre de host.';
$lang['Solusvm.!error.solusvm_template.valid'] = 'Seleccione una plantilla válida.';
$lang['Solusvm.!error.create_client.failed'] = 'Se ha producido un error interno y no se ha podido crear la cuenta de cliente.';
$lang['Solusvm.!error.api.template.valid'] = 'La plantilla seleccionada no es válida.';
$lang['Solusvm.!error.api.confirm.valid'] = 'Debe reconocer que comprende la acción de reinstalación para poder realizar la reinstalación de la plantilla.';
$lang['Solusvm.!error.solusvm_root_password.length'] = 'La contraseña de root debe tener al menos 6 caracteres.';
$lang['Solusvm.!error.solusvm_root_password.matches'] = 'Las contraseñas raíz no coinciden.';
$lang['Solusvm.!error.solusvm_vserver_id.format'] = 'El ID del Servidor Virtual debe ser un número entero.';
$lang['Solusvm.!error.configoptions[customextraip].valid'] = 'No se puede disminuir el número de IPs adicionales sin especificar qué IPs eliminar.';
$lang['Solusvm.!success.boot'] = 'El servidor está arrancando.';
$lang['Solusvm.!success.reboot'] = 'El servidor se está reiniciando.';
$lang['Solusvm.!success.shutdown'] = 'El servidor se está apagando.';
$lang['Solusvm.!success.password'] = 'La contraseña se ha cambiado correctamente.';
$lang['Solusvm.!success.hostname'] = 'El nombre de host se ha cambiado correctamente.';
$lang['Solusvm.!success.reinstall'] = 'El servidor se está reinstalando.';
$lang['Solusvm.please_select'] = '-- Seleccione --';
$lang['Solusvm.!bytes.value'] = '%1$s%2$s';
$lang['Solusvm.!percent.used'] = '%1$s';
$lang['Solusvm.name'] = 'SolusVM';
$lang['Solusvm.description'] = 'Solus Virtual Manager (SolusVM) es un potente sistema de gestión de VPS basado en GUI con soporte completo de OpenVZ, Linux KVM, Xen Paravirtualization y Xen HVM.';
$lang['Solusvm.module_row'] = 'Servidor maestro SolusVM';
$lang['Solusvm.module_row_plural'] = 'Servidores';
$lang['Solusvm.module_group'] = 'Grupo principal SolusVM';
$lang['Solusvm.add_module_row'] = 'Añadir servidor';
$lang['Solusvm.add_module_group'] = 'Añadir grupo de servidores';
$lang['Solusvm.manage.module_rows_title'] = 'Servidores maestros SolusVM';
$lang['Solusvm.manage.module_groups_title'] = 'Grupos de servidores maestros SolusVM';
$lang['Solusvm.manage.module_rows_heading.server_label'] = 'Etiqueta de servidor';
$lang['Solusvm.manage.module_rows_heading.host'] = 'Nombre de host';
$lang['Solusvm.manage.module_rows_heading.options'] = 'Opciones';
$lang['Solusvm.manage.module_groups_heading.name'] = 'Nombre del grupo';
$lang['Solusvm.manage.module_groups_heading.servers'] = 'Recuento de servidores';
$lang['Solusvm.manage.module_groups_heading.options'] = 'Opciones';
$lang['Solusvm.manage.module_rows.edit'] = 'Editar';
$lang['Solusvm.manage.module_groups.edit'] = 'Editar';
$lang['Solusvm.manage.module_rows.delete'] = 'Borrar';
$lang['Solusvm.manage.module_groups.delete'] = 'Borrar';
$lang['Solusvm.manage.module_rows.confirm_delete'] = '¿Está seguro de que desea eliminar este servidor?';
$lang['Solusvm.manage.module_groups.confirm_delete'] = '¿Está seguro de que desea eliminar este grupo de servidores?';
$lang['Solusvm.manage.module_rows_no_results'] = 'No hay servidores.';
$lang['Solusvm.manage.module_groups_no_results'] = 'No hay grupos de servidores.';
$lang['Solusvm.order_options.first'] = 'Primer servidor no completo';
$lang['Solusvm.row_meta.server_name'] = 'Etiqueta de servidor';
$lang['Solusvm.row_meta.user_id'] = 'ID de usuario';
$lang['Solusvm.row_meta.key'] = 'Clave';
$lang['Solusvm.row_meta.host'] = 'Nombre de host';
$lang['Solusvm.row_meta.port'] = 'Número de puerto SSL';
$lang['Solusvm.row_meta.default_port'] = '5656';
$lang['Solusvm.types.openvz'] = 'OpenVZ';
$lang['Solusvm.types.xen'] = 'Xen';
$lang['Solusvm.types.xen_hvm'] = 'Xen HVM';
$lang['Solusvm.types.kvm'] = 'KVM';
$lang['Solusvm.add_row.box_title'] = 'Añadir servidor SolusVM';
$lang['Solusvm.add_row.basic_title'] = 'Configuración básica';
$lang['Solusvm.add_row.add_btn'] = 'Añadir servidor';
$lang['Solusvm.edit_row.box_title'] = 'Editar servidor SolusVM';
$lang['Solusvm.edit_row.basic_title'] = 'Configuración básica';
$lang['Solusvm.edit_row.add_btn'] = 'Servidor de actualización';
$lang['Solusvm.package_fields.total_base_ip_addresses'] = 'Dirección IP base Cantidad';
$lang['Solusvm.package_fields.tooltip.total_base_ip_addresses'] = 'Introduzca el número total de direcciones IP a incluir con los nuevos servicios. Debe haber al menos una, y las IP no se pueden eliminar.';
$lang['Solusvm.package_fields.type'] = 'Tipo';
$lang['Solusvm.package_fields.template'] = 'Plantilla';
$lang['Solusvm.package_fields.admin_set_template'] = 'Seleccione una plantilla';
$lang['Solusvm.package_fields.client_set_template'] = 'Dejar que el cliente establezca la plantilla';
$lang['Solusvm.package_fields.plan'] = 'Plan';
$lang['Solusvm.package_fields.assigned_nodes'] = 'Nodos asignados';
$lang['Solusvm.package_fields.available_nodes'] = 'Nodos disponibles';
$lang['Solusvm.package_fields.set_node'] = 'Asignar un conjunto de nodos';
$lang['Solusvm.package_fields.set_node_group'] = 'Asignar un grupo de nodos';
$lang['Solusvm.package_fields.node_group'] = 'Grupo de nodos';
$lang['Solusvm.service_field.solusvm_hostname'] = 'Nombre de host';
$lang['Solusvm.service_field.solusvm_template'] = 'Plantilla';
$lang['Solusvm.service_field.solusvm_vserver_id'] = 'ID del servidor virtual';
$lang['Solusvm.service_field.tooltip.solusvm_vserver_id'] = 'El ID del Servidor Virtual especifica el VPS de SolusVM al que se adjuntará este servicio. Cambiar este valor sólo afectará a este servicio localmente.';
$lang['Solusvm.service_info.solusvm_main_ip_address'] = 'Dirección IP principal';
$lang['Solusvm.tab_actions'] = 'Acciones del servidor';
$lang['Solusvm.tab_stats'] = 'Estadísticas';
$lang['Solusvm.tab_console'] = 'Consola';
$lang['Solusvm.tab_ips'] = 'Direcciones IP';
$lang['Solusvm.tab_actions.heading_actions'] = 'Acciones';
$lang['Solusvm.tab_actions.status_online'] = 'En línea';
$lang['Solusvm.tab_actions.status_offline'] = 'Fuera de línea';
$lang['Solusvm.tab_actions.status_disabled'] = 'Discapacitados';
$lang['Solusvm.tab_actions.server_status'] = 'Estado del servidor';
$lang['Solusvm.tab_actions.node'] = 'Nodo: %1$s';
$lang['Solusvm.tab_actions.heading_reinstall'] = 'Vuelva a instalar';
$lang['Solusvm.tab_actions.field_template'] = 'Plantilla';
$lang['Solusvm.tab_actions.field_confirm'] = 'Entiendo que al reinstalar, todos los datos en el servidor serán borrados permanentemente, y la plantilla seleccionada será instalada.';
$lang['Solusvm.tab_actions.field_reinstall_submit'] = 'Vuelva a instalar';
$lang['Solusvm.tab_actions.heading_hostname'] = 'Cambiar nombre de host';
$lang['Solusvm.tab_actions.text_hostname_reboot'] = 'Un cambio en el nombre de host sólo tendrá efecto después de que el servidor haya sido reiniciado.';
$lang['Solusvm.tab_actions.field_hostname'] = 'Nombre de host';
$lang['Solusvm.tab_actions.field_hostname_submit'] = 'Cambiar nombre de host';
$lang['Solusvm.tab_actions.heading_password'] = 'Cambiar contraseña';
$lang['Solusvm.tab_actions.field_password'] = 'Nueva contraseña raíz';
$lang['Solusvm.tab_actions.field_confirm_password'] = 'Confirmar contraseña';
$lang['Solusvm.tab_actions.field_password_submit'] = 'Cambiar contraseña';
$lang['Solusvm.tab_actions.text_generate_password'] = 'Generar contraseña';
$lang['Solusvm.tab_client_actions.heading_actions'] = 'Acciones';
$lang['Solusvm.tab_client_actions.heading_server_status'] = 'Estado del servidor';
$lang['Solusvm.tab_client_actions.heading_node'] = 'Nodo';
$lang['Solusvm.tab_client_actions.status_online'] = 'En línea';
$lang['Solusvm.tab_client_actions.status_offline'] = 'Fuera de línea';
$lang['Solusvm.tab_client_actions.status_disabled'] = 'Discapacitados';
$lang['Solusvm.tab_client_actions.heading_reinstall'] = 'Vuelva a instalar';
$lang['Solusvm.tab_client_actions.field_template'] = 'Plantilla';
$lang['Solusvm.tab_client_actions.field_confirm'] = 'Entiendo que al reinstalar, todos los datos en el servidor serán borrados permanentemente, y la plantilla seleccionada será instalada.';
$lang['Solusvm.tab_client_actions.field_reinstall_submit'] = 'Vuelva a instalar';
$lang['Solusvm.tab_client_actions.heading_hostname'] = 'Cambiar nombre de host';
$lang['Solusvm.tab_client_actions.text_hostname_reboot'] = 'Un cambio en el nombre de host sólo tendrá efecto después de que el servidor haya sido reiniciado.';
$lang['Solusvm.tab_client_actions.field_hostname'] = 'Nombre de host';
$lang['Solusvm.tab_client_actions.field_hostname_submit'] = 'Cambiar nombre de host';
$lang['Solusvm.tab_client_actions.heading_password'] = 'Cambiar contraseña';
$lang['Solusvm.tab_client_actions.field_password'] = 'Nueva contraseña raíz';
$lang['Solusvm.tab_client_actions.field_confirm_password'] = 'Confirmar contraseña';
$lang['Solusvm.tab_client_actions.field_password_submit'] = 'Cambiar contraseña';
$lang['Solusvm.tab_client_actions.text_generate_password'] = 'Generar contraseña';
$lang['Solusvm.tab_stats.heading_stats'] = 'Estadísticas';
$lang['Solusvm.tab_stats.bandwidth'] = 'Ancho de banda:';
$lang['Solusvm.tab_stats.bandwidth_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.bandwidth_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_stats.memory'] = 'Memoria:';
$lang['Solusvm.tab_stats.memory_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.memory_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_stats.space'] = 'Espacio en disco:';
$lang['Solusvm.tab_stats.space_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.space_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_status.no_results'] = 'Actualmente no se dispone de estadísticas.';
$lang['Solusvm.tab_stats.heading_graphs'] = 'Gráficos';
$lang['Solusvm.tab_client_stats.heading_stats'] = 'Estadísticas';
$lang['Solusvm.tab_client_stats.bandwidth'] = 'Ancho de banda';
$lang['Solusvm.tab_client_stats.memory'] = 'Memoria';
$lang['Solusvm.tab_client_stats.space'] = 'Espacio en disco';
$lang['Solusvm.tab_client_stats.usage'] = '(%1$s/%2$s)';
$lang['Solusvm.tab_client_stats.heading_graphs'] = 'Gráficos';
$lang['Solusvm.tab_console.heading_console'] = 'Consola';
$lang['Solusvm.tab_console.console_username'] = 'Nombre de usuario de la consola:';
$lang['Solusvm.tab_console.console_password'] = 'Contraseña de la consola:';
$lang['Solusvm.tab_console.vnc_ip'] = 'Anfitrión VNC:';
$lang['Solusvm.tab_console.vnc_port'] = 'Puerto VNC:';
$lang['Solusvm.tab_console.vnc_password'] = 'Contraseña VNC:';
$lang['Solusvm.tab_client_console.heading_console'] = 'Consola';
$lang['Solusvm.tab_client_console.console_username'] = 'Nombre de usuario de la consola';
$lang['Solusvm.tab_client_console.console_password'] = 'Contraseña de la consola';
$lang['Solusvm.tab_client_console.vnc_password'] = 'Contraseña VNC';
$lang['Solusvm.tab_ips.heading_ips'] = 'Direcciones IP';
$lang['Solusvm.tab_ips.primary_ip'] = 'Dirección IP primaria: %1$s';
$lang['Solusvm.tab_ips.heading_extra_ips'] = 'Direcciones IP adicionales';
$lang['Solusvm.tab_ips.heading_ip'] = 'Dirección IP';
$lang['Solusvm.tab_ips.heading_options'] = 'Opciones';
$lang['Solusvm.tab_ips.option_remove'] = 'Eliminar IP';
$lang['Solusvm.tab_ips.confirm_remove'] = '¿Estás seguro de que quieres eliminar permanentemente esta dirección IP?';
$lang['Solusvm.tab_client_ips.heading_extra'] = 'Direcciones IP adicionales';
$lang['Solusvm.tab_client_ips.primary_ip'] = 'Dirección IP principal';
$lang['Solusvm.tab_client_ips.heading_remove_ip'] = 'Eliminar IP %1$s';
$lang['Solusvm.tab_client_ips.confirm_remove_ip'] = '¿Está seguro de que desea eliminar permanentemente esta dirección IP?';
$lang['Solusvm.tab_client_ips.remove_ip'] = 'Eliminar IP';
$lang['Solusvm.tab_client_ips.cancel'] = 'Cancelar';

