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
 * Strings for component 'tool_moodlebox', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_moodlebox
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['changepassworderror'] = 'La contraseña de MoodleBox no ha cambiado. Las contraseñas no coinciden.';
$string['changepasswordmessage'] = 'La contraseña principal de la MoodleBox  (cuenta UNIX) fue cambiada.<br /><br />¡Advertencia! La contraseña del usuario administrador de Moodle <b>NO fue cambiada</b>. Para cambiarla, por favor use la página de preferencias de este usuario.';
$string['changepasswordsetting'] = 'Cambio de contraseña de MoodleBox';
$string['changewifipassword'] = 'Cambiar contraseña Wi-Fi';
$string['changewifisettings'] = 'Cambiar configuraciones Wi-Fi';
$string['cpufrequency'] = 'Frecuencia del CPU';
$string['cpuload'] = 'Carga del CPU';
$string['cputemperature'] = 'Temperatura del CPU';
$string['currentwifipassword'] = 'Contraseña Wi-Fi actual';
$string['datetime'] = 'fecha y Hora';
$string['datetime_help'] = 'Si la MoodleBox no está conectada a Internet, no tendrá su hora del reloj a tiempo. Se puede configurar manualmente usando este ajuste.';
$string['datetimemessage'] = 'Se configuraron fecha y hora de la MoodleBox. Para mayor exactitud, se recomienda conectar la MoodleBox a una red conectada al Internet mediante un cable Ethernet.';
$string['datetimeset'] = 'Configurar fecha y hora';
$string['datetimesetmessage'] = 'El reloj de la MoodleBox no está a tiempo. Es altamente recomendable configurar la fecha y hora a la hora y fecha actual.';
$string['datetimesetting'] = 'Fecha y hora';
$string['dhcpclientinfo'] = 'Dirección IP y nombre del cliente';
$string['dhcpclientnumber'] = 'Número de clientes';
$string['dhcpclients'] = 'Clientes DHCP';
$string['hidden'] = 'Oculta';
$string['information'] = 'Información';
$string['kernelversion'] = 'Versión del kernel';
$string['missingconfigurationerror'] = 'Esta sección no está disponible.  La instalación del plugin no está completa, por lo que la configuración no puede ser manejada por la MoodleBox. Por favor, lea la  <a href="https://github.com/moodlebox/moodle-tool_moodlebox/blob/master/README.md" target="_blank">installation documentation</a>  para corregir este error.';
$string['moodleboxinfo'] = 'Versión de MoodleBox';
$string['moodleboxinfofileerror'] = 'Información no disponible';
$string['moodleboxpluginversion'] = 'Versión del plugin de MoodleBox';
$string['newwifipassword'] = 'Nueva contraseña Wi-Fi';
$string['nopassworddefined'] = 'Sin contraseña Wi-Fi definida';
$string['parameter'] = 'Parámetro';
$string['passwordprotected'] = 'Protegido por contraseña';
$string['passwordsetting'] = 'Contraseña MoodleBox';
$string['passwordsetting_help'] = 'Aquí puede cambiarse la contraseña principal de MoodleBox. __Se recomienda encarecidamente que no conserve la contraseña por defecto__. Usted __debe__ definitivamente cambiarla como una medida mínima de seguridad.';
$string['pluginname'] = 'MoodleBox';
$string['privacy:metadata'] = 'El plugin MoodleBox muestra información desde el Raspberry Pi y permite algunos cambios de configuración, pero no afecta ni almacena datos personales por sí mismo.';
$string['raspberryhardware'] = 'Modelo de Raspberry Pi';
$string['raspbianversion'] = 'Versión de Raspbian';
$string['resizepartition'] = 'Re-cambiar tamaño de partición de tarjeta SD';
$string['resizepartition_help'] = 'Usar este botón para cambiar el tamaño de la partición de la tarjeta SD.';
$string['resizepartitionmessage'] = 'La partición de tarjeta SD ha sido cambiada en tamaño a su tamaño máximo. La MoodleBox está reiniciando ahora. Estará nuevamente en línea en un momento.';
$string['resizepartitionsetting'] = 'Cambiado de tamaño de partición de tarjeta SD';
$string['restart'] = 'Reiniciar MoodleBox';
$string['restartmessage'] = 'La MoodleBox está reiniciando. Estará de nuevo en-línea en un momentito.';
$string['restartstop'] = 'Reiniciar y apagar';
$string['restartstop_help'] = 'Use estos botones para reiniciar o para desactivar la MoodleBox. No se recomienda desenchufar el cable de energía para apagar la MoodleBox.';
$string['rpi1'] = 'Raspberry Pi 1';
$string['rpi2'] = 'Raspberry Pi 2B';
$string['rpi3'] = 'Raspberry Pi 3B';
$string['rpi3bplus'] = 'Raspberry Pi 3B+';
$string['rpizerow'] = 'Raspberry Pi Zero W';
$string['sdcardavailablespace'] = 'Espacio libre en tarjeta SD';
$string['shutdown'] = 'Apagar MoodleBox';
$string['shutdownmessage'] = 'La MoodleBox está apagándose. Por favor espere unos cuantos segundos antes de desconectar la alimentación de energía.';
$string['systeminfo'] = 'Información de MoodleBox';
$string['systeminfo_help'] = 'El Tablero de información de  MoodleBox muestra varios datos importantes acerca de MoodleBox. Esta información incluye:

* Detalles críticos de la operación de MoodleBox, tales como el espacio restante en disco en la tarjeta SD y la carga del procesador, temperatura y frecuencia
* Configuraciones actuales de la red Wi-Fi proporcionadas por la MoodleBox
* Número, dirección IP y nombre de todos los dispositivos conectados a la MoodleBox
* Modelo y sistema operativo del Raspberry Pi
* Versión de MoodleBox y versión del plugin MoodleBox';
$string['unknownmodel'] = 'Modelo de Raspberry Pi desconocido';
$string['unsupportedhardware'] = '¡Hardware de servidor no-soportado detectado! Este plugin solamente funciona en Raspberry Pi';
$string['uptime'] = 'Tiempo-arriba del sistema';
$string['visible'] = 'Visible';
$string['wifichannel'] = 'Canal Wi-Fi';
$string['wifichannel_help'] = 'No es necesario cambiar el canal de transmisión Wi-Fi a menos que el desempeño sea bajo por causa de interferencia.';
$string['wificountry'] = 'País regulatorio Wi-Fi';
$string['wificountry_help'] = 'Por razones legales, se recomienda conffigurar su país como el país regulatorio del Wi-Fi.';
$string['wifipassword'] = 'Contraseña Wi-Fi';
$string['wifipassworderror'] = 'La contraseña de red Wi-Fi debe tener entre 8 y 63 caracteres.';
$string['wifipassword_help'] = 'Si Usted ha elegido una red Wi-Fi protegida por contraseña, para impedir que los extraños usen la red Wi-Fi de MoodleBox; se recomienda cambiar su contraseña por defecto. La contraseña de la red Wi-Fi debe tener entre 8 y 32 caracteres.';
$string['wifipasswordmessage'] = 'La contraseña de red Wi-Fi fue cambiada. No se le olvide comunicárselo a sus estudiantes.';
$string['wifipasswordon'] = 'Protección de contraseña de red Wi-Fi';
$string['wifipasswordonhelp'] = 'Si se habilita, los usuarios tienen que escribir una contraseña para comunicarse a la red  Wi-Fi de MoodleBox.';
$string['wifipasswordon_help'] = 'Si se habilita, los usuarios tendrán que escribir una contraseña para conectarse a la red Wi-Fi de la MoodleBox.';
$string['wifipasswordsetting'] = 'Cambio de contraseña de red Wi-Fi';
$string['wifisettings'] = 'Configuraciones Wi-Fi';
$string['wifisettingsmessage'] = 'Se cambiaron las configuraciones Wi-Fi. No olvide comunicarles el nuevo SSID y la nueva contraseña a sus estudiantes.';
$string['wifissid'] = 'Nombre de red Wi-Fi';
$string['wifissid_help'] = 'El Nombre de la red Wi-Fi (SSID) de la MoodleBox. La cadena de caracteres debe tener un mínimo de 1 byte y un máximo de 32 bytes. Recuerde que algunos caracteres como los emojis, usan más de un byte.';
$string['wifissidhidden'] = 'Red Wi-Fi oculta';
$string['wifissidhiddenstate'] = 'Visibilidad Wi-Fi SSID';
$string['wifissidhiddenstate_help'] = 'Si se habilita, Wi-Fi SSID estará oculta de los usuarios, los que no sabrán que hay una MoodleBox cerca. Esto reducirá notablemente la usabilidad del dispositivo, pero mejora ligeramente su seguridad.';
