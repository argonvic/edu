<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_remlab_manager', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   block_remlab_manager
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Disponible';
$string['active_help'] = 'Si este laboratorio remoto se encuentra operativo en este momento o no.';
$string['block_title'] = 'Gestor de Laboratorios Remotos';
$string['cancel_delete_button'] = 'No';
$string['configure_existing_local_experience'] = 'Configurar experiencia local';
$string['configure_lab'] = 'Configurar laboratorio remoto';
$string['configure_new_local_experience'] = 'Crear nueva experiencia local';
$string['confirm_delete_button'] = 'Sí';
$string['confirm_deletion'] = '¿Está seguro de que desea borrar la experiencia seleccionada?';
$string['dailyslots'] = 'Franjas de trabajo diarias';
$string['dailyslots_help'] = 'Cantidad diaria de franjas m&aacute;ximas que se le permitir&aacute; usar a cada alumno para trabajar con este laboratorio. Adem&aacute;s, si el laboratorio es abierto, determina el n&uacute;mero m&aacute;ximo de franjas de tiempo consecutivas que se permite trabajar con el mismo.';
$string['default_communication_set'] = 'Opciones de comunicaci&oacute;n. (Importante s&oacute;lo si tambi&eacute;n usa Sarlab';
$string['delete_existing_local_experience'] = 'Eliminar experiencia local';
$string['delete_sarlab_keys'] = 'Eliminar claves Sarlab';
$string['existing_practice_id'] = 'ADVERTENCIA: Este identificador de práctica ya existe. Elija un nombre diferente.';
$string['free_access'] = 'Acceso libre';
$string['free_access_help'] = 'Habilitar el acceso libre (sin necesidad de realizar reservas) a este laboratorio remoto.';
$string['go_to_sarlab'] = 'Ir a Sarlab';
$string['inserterror'] = 'Error al grabar la configuración de la experiencia de laboratorio remoto';
$string['ip_lab'] = 'Direcci&oacute;n IP';
$string['ip_lab_help'] = 'Dirección IP del sistema experimental.';
$string['ip_lab_required'] = 'ATENCI&Oacute;N: Debe proporcionar una direcci&oacute;n IP valida.';
$string['mail_content1_lab_down'] = 'Uno de sus laboratorios remotos previamente operativos (';
$string['mail_content1_lab_not_checkable'] = 'El estado de uno de sus laboratorios remotos (';
$string['mail_content1_lab_up'] = 'Uno de sus laboratorios remotos previamente inaccesible (';
$string['mail_content2_lab_down'] = '- IP:';
$string['mail_content2_lab_not_checkable'] = '- IP:';
$string['mail_content2_lab_up'] = '- IP:';
$string['mail_content3_lab_down'] = ') ha dejado de ser accesible. \\r\\n';
$string['mail_content3_lab_not_checkable'] = ') no pudo ser revisado';
$string['mail_content3_lab_up'] = ') es operativo una vez más.';
$string['mail_content4_lab_down'] = 'Una lista de los dispositivos inaccesibles o inoperativos es proporcionada debajo: \\r\\n';
$string['mail_subject_lab_down'] = 'Alerta Laboratorio Caído';
$string['mail_subject_lab_not_checkable'] = 'Alerta de Estado de Laboratorio No Revisable';
$string['mail_subject_lab_up'] = 'Aviso de Laboratorio Arriba';
$string['or'] = 'o';
$string['ping_remote_labs'] = 'Revisar si los equipos de laboratorio s remotos están vivos';
$string['pluginname'] = 'Gestor de laboratorios remotos';
$string['port'] = 'Puerto';
$string['port_help'] = 'El puerto a usar para establecer la comunicación.';
$string['port_required'] = 'ATENCI&Oacute;N: Debe proporcionar un puerto v&aacute;lido.';
$string['practiceintro'] = 'Identificador de la pr&aacute;ctica';
$string['practiceintro_help'] = 'El identificador de la pr&aacute;ctica con el que desea etiquetar esta configuraci&oacute;n.';
$string['practiceintro_required'] = 'ATENCI&Oacute;N: Debe especificar una pr&aacute;ctica.';
$string['privacy:metadata'] = 'El bloque del Gestor Remlab solamente proporciona opciones de configuración para experiencias de laboratorio remoto.';
$string['reboottime'] = 'Tiempo de inactividad (minutos)';
$string['reboottime_help'] = 'Espacio m&iacute;nimo de tiempo (en minutos) desde que alguien deja de usar el laboratorio remoto hasta que otra persona puede empezar a usarlo. &Uacute;til para darle tiempo al laboratorio remoto de resetearse o volver a su estado inicial.';
$string['refresh_usestate_field'] = 'Refrescar el estado del uso de laboratorios remotos';
$string['remlab_manager:addinstance'] = 'Añadir un nuevo bloque Gestor Remlab';
$string['remlab_manager:myaddinstance'] = 'Añadir un nuevo bloque Gestor Remlab';
$string['remlab_manager:view'] = 'Ver el bloque de Gestor Remlab';
$string['sarlabdesigner'] = 'Siseñador Starlab';
$string['sarlabdesigner_desc'] = 'Los diseñadores de Sarlab pueden crear, eliminar, editar y usar experiencias Sarlab';
$string['sarlab_header'] = 'Configurar Sarlab para esta instancia del bloque';
$string['sarlab_IP'] = 'Nombre y direcci&oacute;n IP del servidor Sarlab';
$string['sarlab_IP_description'] = 'Si usa Sarlab (un sistema que gestiona las conexiones a recursos de laboratorios remotos), debe proporcionar la direcci&oacute;n IP del servidor que ejecuta el sistema Sarlab que desea utilizar. En caso contrario, esta variable no se usa, de modo que puede dejar el valor por defecto. Si tiene m&aacute;s de un servidor Sarlab (por ejemplo, uno en 127.0.0.1 y otro en 127.0.0.2), inserte las direcciones IP separadas por puntos y comas: 127.0.0.1;127.0.0.2. Adem&aacute;s, puede proporcionar un nombre para identificar cada servidor Sarlab: \'Sarlab Madrid\'127.0.0.1;\'Sarlab Huelva\'127.0.0.2';
$string['sarlab_lti_url'] = 'URL hacia la actividad LTI Sarlab';
$string['sarlabmanager'] = 'Gestor Sarlab';
$string['sarlabmanager_desc'] = 'Los gestores Sarlab pueden editar y usar experiencias Sarlab existentes';
$string['sarlab_port'] = 'Puerto(s) de comunicaci&oacute; con Sarlab';
$string['sarlab_port_description'] = 'Si usa Sarlab (un sistema que gestiona las conexiones a recursos de laboratorios remotos), debe proporcionar un puerto v&aacute;lido para establecer las comunicaciones necesarias con el servidor de Sarlab. En caso contrario, esta variable no se usa, de modo que puede dejar el valor por defecto. Si tiene m&aacute;s de un servidor Sarlab (por ejemplo, uno usando el puerto 443 y un segundo usando tambi&eacute;n el puerto 443), inserte los valores separados por puntos y comas: 443;443';
$string['slotsduration'] = 'Duraci&oacute;n de las franjas (minutos)';
$string['slotsduration_help'] = 'Duraci&oacute;n de las franjas de tiempo (en minutos) en las que los usuarios podr&aacute;n trabajar con el laboratorio.';
$string['synchronise_sarlab_users'] = 'Sincronizar usuarios Sarlab';
$string['totalslots'] = 'Franjas de trabajo totales';
$string['totalslots_help'] = 'Cantidad total de franjas m&aacute;ximas que se le permitir&aacute; usar a cada alumno para trabajar con este laboratorio.';
$string['weeklyslots'] = 'Franjas de trabajo semanales';
$string['weeklyslots_help'] = 'Cantidad semanal de franjas m&aacute;ximas que se le permitir&aacute; usar a cada alumno para trabajar con este laboratorio.';
