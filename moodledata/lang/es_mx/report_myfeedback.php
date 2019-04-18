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
 * Strings for component 'report_myfeedback', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   report_myfeedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academicyear'] = 'Año académico';
$string['academicyearinfo'] = 'El año académico al cual se relaciona esta instancia de Moodle.';
$string['accumulativetitle'] = 'Acumulativo:';
$string['addeditfeedback'] = 'Añadir/Editar retroalimentación';
$string['addeditnotes'] = 'Añadir/Editar notas';
$string['addfeedback'] = 'No es posible mostrar automáticamente retroalimentación de Turnitin. Usted puede';
$string['addfeedbacktitle'] = 'Hacer clic aquí para añadir retroalimentación de Turnitin';
$string['addnotes'] = 'Añadir notas';
$string['addnotestitle'] = 'Haga click aquí para añadir notas auto-reflectivas';
$string['allparts'] = '(todas las partes)';
$string['alltutees'] = 'Buscar estudiantes';
$string['analyse'] = 'Analizar';
$string['apostrophe_s'] = '\'s';
$string['archivedbhost'] = 'Host BD archivado';
$string['archivedbhostinfo'] = 'Nombre del host de BasedeDatos Archivada (en el cual serán ejecutadas las consultas SQL)';
$string['archivedbnotexist'] = 'Esta base de datos no existe o accede a detalles incorrectamente. ¡Los administradores deben de configurar correctamente la página de configuraciones del Reporte de Mi Retroalimentación!';
$string['archivedbpass'] = 'Contraseña BasedeDatos archivada';
$string['archivedbpassinfo'] = 'Contraseña Base de Datos archivada (para nombre_de_usuario de arriba).';
$string['archivedbsettings'] = 'Configuraciones de BasedeDatos Archivada (no recomendado para intalaciones en producción)';
$string['archivedbuser'] = 'Nombre_de_usuario BasedeDatos archivada';
$string['archivedbuserinfo'] = 'Nombre_de_usuario BasedeDatos archivada (debería tener privilegios SELECT en BasedeDatos de arriba).';
$string['archivedinstance'] = 'Instancia archivada';
$string['archivedinstanceinfo'] = 'Si es que esta instancia de Moodle es una instancia archivada.';
$string['archivedomain'] = 'El Nombre del Dominio Completamente Calificado Archivado';
$string['archivedomaindefault'] = 'https://';
$string['archivedomaininfo'] = 'El Nombre de Dominio Completamente Calificado (FQDN) con http/https';
$string['archivenamingconvention'] = 'Convención para nombrar BD archivadas';
$string['archivenamingconventiondefault'] = 'moodle_archivo_';
$string['archivenamingconventioninfo'] = 'Qué convención para nombrar usa antes del año académico; por ejemplo "moodle_archivo_xxxx" donde xxxx es el valor de dos dígitos para los años académicos, por ejemplo"1415". <br>La versión actual solamente usa la convención por defecto.';
$string['archiveyears'] = 'Años archivados';
$string['archiveyearsinfo'] = '¿Cuantos años de archivo quiere tener disponibles?<br /> La configuración recomendada es  0 fpara instalaciones Moodle en producción, debido a problemas con permisos para revisar en versiones antiguas de Moodle.';
$string['assessmentbreakdown'] = 'Desglose de Evaluación';
$string['attempt'] = 'intento';
$string['attempts'] = 'intentos';
$string['bargraphdesc'] = 'La calificación mínima es {$a->minimum}%, la mediana de calificación es {$a->mean}% y la calificación más alta es {$a->maximum}%. El número de estudiantes que puntearon dentro de cada rango de calificación es mostrado dentro de la propia gráfica.';
$string['blockstring'] = 'Cadena-de-caracteres de Mi Retroalimentación';
$string['blocktitle'] = 'Mi Retroalimentación';
$string['browsersupport'] = 'Su navegador no soporta tag canvas HTML5';
$string['category'] = 'Categoría';
$string['categorystaff'] = 'Staff de categoría';
$string['categorystudents'] = 'Categoría estudiantes';
$string['comment'] = 'Comentario:';
$string['comments'] = 'Estrategia de comentarios:';
$string['copyfeedback'] = 'pegar retroalimentación general de Turnitin';
$string['coursebreakdown'] = 'Desglose del curso';
$string['coursecolon'] = 'Curso:';
$string['courselimit'] = 'Límite del curso';
$string['courselimitheading'] = 'Dept Admin Segundo Nivel Categoría Curso Límite';
$string['courselimitinfo'] = '<p style="color: #990000;">Demasiados cursos para mostrar estadísticas para esta categoría. Por favor, elija un curso dentro de la lista desplegable para mostrar las estadísticas para ese curso.</p>';
$string['courselimitsettings'] = 'Configurar el límite para el número de cursos a mostrar estadísticas para categoría de segundo nivel.';
$string['coursestaff'] = 'Staff del curso';
$string['coursestudents'] = 'Estudiantes del curso';
$string['dashboard'] = 'Tablero de Mi Retroalimentación';
$string['dashboard_assessments'] = 'Evaluaciones';
$string['dashboard_students'] = 'Estudiantes';
$string['dbhost'] = 'Host DB';
$string['dbhostinfo'] = 'Nombre del host de la BasedeDatos (en la cual se ejecutarán las consultas MySQL - debe ser un duplicado de esta instancia de base de datos Moodle - usada para evitar problemas de carga en la base de datos primaria de Moodle.<br />Dejar vacío para usar la base de datos por defecto de Moodle.';
$string['dbname'] = 'Nombre DB';
$string['dbnameinfo'] = 'Nombre de la BasedeDatos (en la cual se ejecutarán las consultas MySQL - debe ser un duplicado de esta instancia de base de datos Moodle - usada para evitar problemas de carga en la base de datos primaria de Moodle.<br />Dejar vacío para usar la base de datos por defecto de Moodle.';
$string['dbpass'] = 'Contraseña DB';
$string['dbpassinfo'] = 'Contraseña de BasedeDatos remota (para el nombre_De_usuario de arriba).<br />Déjelo vacío para usar la BasedeDatos por defecto de Moodle.';
$string['dbsettings'] = 'Configuraciones de BasedeDatos de Año Académico Actual';
$string['dbuser'] = 'Nombre_de_usuario DB';
$string['dbuserinfo'] = 'Nombre_de_usuario de base de datos remota (debería tener privilegios SELECT en la base de datos de arriba).<br />Déjelo vacío para usar la base de datos por defecto de Moodle.';
$string['department'] = 'Departamento';
$string['dept_admin_exportheader'] = 'Nombre del Curso/Nombre(s) del Usuario,Apellido(s),Evaluaciones,N-envíos,Envíos tardíos,Evaluaciones Calificadas,Calificaciones bajas';
$string['dept_admin_filename'] = 'MyFeedback_dept_admin_reporte_';
$string['dept_admin_report'] = 'Reporte de tablero administrativo Departamental - estadísticas solamente a categoría seleccionada de segundo nivel';
$string['draft'] = 'borrador';
$string['draft_submission'] = 'envío de borrador';
$string['draft_submission_msg'] = 'Esta tarea todavía está en estatus de borrador. Aun no ha sido enviada';
$string['editfeedback'] = 'Editar retroalimentación';
$string['editfeedbacktitle'] = 'Hacer clic aquí para editar';
$string['editnotes'] = 'Editar notas';
$string['editnotestitle'] = 'Hacer clic aquí para editar';
$string['email_address'] = 'Dirección Email:';
$string['email_dept_subject'] = 'Su%20Administrador%20Departamental';
$string['email_tutee_subject'] = 'Su%20Tutor%20Personal';
$string['email_tutor'] = 'Enviar Email a su tutor';
$string['email_tutor_subject'] = 'Su%20Tutoreado%20Personal';
$string['enrolledmodules'] = 'Módulos actualmente inscrito en:';
$string['enrolledstudents'] = 'Estudiantes inscritos:';
$string['eventmtutordownload'] = 'Análitica de tablero de tutor de módulo descargada';
$string['eventptutordownload'] = 'Análitica de tablero de tutor personal descargada';
$string['eventreportaddfeedback'] = 'Retroalimentación Turnitin de Mi Retroalimentación añadida';
$string['eventreportaddnotes'] = 'Se añadieron mis notas de retroalimentación';
$string['eventreportdownload'] = 'Tabla de reporte de Mi Retroalimentación descargada';
$string['eventreportupdatefeedback'] = 'Retroalimentación Turnitin de Mi Retroalimentación actualizada';
$string['eventreportupdatenotes'] = 'Se actualizaron mis notas de retroalimentación';
$string['eventreportviewed'] = 'Reporte de Mi Retroalimentación visto';
$string['eventreportviewed_dept'] = 'Tablero administrativo Departamental de Mi Retroalimentación visto';
$string['eventreportviewed_mtutor'] = 'Tablero de tutor de Módulo de Mi Retroalimentación visto';
$string['eventreportviewed_mystudents'] = 'Pestaña de estudiantes de Mi Retroalimentación vista';
$string['eventreportviewed_ptutor'] = 'Tablero de tutor personal de Mi Retroalimenmtación visto';
$string['eventreportviewed_usage'] = 'Tablero de uso de Mi retroalimentación visto';
$string['exportheader'] = 'Curso,Evaluación,Tipo,Fecha esperada,Fecha del Envío,Calificación,Rango de calificación,Retroalimentación general,Visto';
$string['export_to_excel'] = 'Exportar a Excel';
$string['faculty'] = 'Nivel superior:';
$string['feedback'] = 'ver retroalimentación';
$string['filename'] = 'Mi Reporte_de_administración';
$string['for'] = 'para';
$string['fullfeedback'] = 'ver retroalimentación completa';
$string['grade'] = 'Calificación -';
$string['grademark'] = 'GradeMark';
$string['gradetblheader_assessment'] = 'Evaluación (nombre de parte)';
$string['gradetblheader_assessment_info'] = 'El nombre y el enlace a la evaluación. Las Tareas Turnitin pueden contener múltiples partes, por lo que el nombre de la parte para la tarea aparece entre paréntesis después. Los talleres proporcionan una calificación/retroalimentación para el trabajo enviado, además de unacalificación/retroalimentación por qué tan bien los estudiantes valoraron el trabajo de los demás; tanto si es el \'envío\' original o la \'evaluación por pares\' el trabajo aparece entre paréntesis después.';
$string['gradetblheader_availablegrade'] = 'Calificación disponible';
$string['gradetblheader_bar'] = 'Gráfica de Barras';
$string['gradetblheader_bar_info'] = 'Una representación visual de la calificación lograda como un porcentaje (solamente para calificacines numéricas).';
$string['gradetblheader_course'] = 'Curso';
$string['gradetblheader_course_info'] = 'El nombre y el enlace hacia el curso que contiene la evaluación.';
$string['gradetblheader_duedate'] = 'Fecha esperada';
$string['gradetblheader_duedate_info'] = 'La fecha en la que se esperaba la evaluación (si es aplicable).';
$string['gradetblheader_feedback'] = 'Retroalimentación completa';
$string['gradetblheader_feedback_info'] = 'Un enlace hacia la retroalimentación completa, que muestra cualquier retroalimentación sobre calificación, comentarios escritos, comentarios en-el-texto, rúbricas o guías de puntaje contra cualquier criterio. Cualquier comentario-en-línea será mostrado dentro del archivo de retroalimentación para Tareas de Moodle. Si un archivo de retroalimentación estuviera disponible, se mostrará un ícono de archivo.';
$string['gradetblheader_generalfeedback'] = 'Retroalimentación general';
$string['gradetblheader_generalfeedback_info'] = 'Los comentarios de retroalimentación proporcionados por el tutor (o por pares o los propios estudiantes donde estuviera indicado para los talleres). La retroalimentación de guías de puntaje para cada criterio y la retroalimentación para rúbrica seleccionada también será mostrada para las Tareas de Moodle. La retroalimentación para Tarea Turnitin debe de ser copiada y pegada adentro del reporte por un estudiante o por su tutor.';
$string['gradetblheader_grade'] = 'Calificación';
$string['gradetblheader_grade_info'] = 'La calificación que obtuvo el estudiante para la evaluación.';
$string['gradetblheader_module'] = 'Módulo';
$string['gradetblheader_range'] = 'Rango';
$string['gradetblheader_range_info'] = 'El rango de calificaciones posibles para la evaluación.';
$string['gradetblheader_relativegrade'] = 'Calificación relativa';
$string['gradetblheader_selfreflectivenotes'] = 'Notas auto-reflectivas';
$string['gradetblheader_selfreflectivenotes_info'] = 'Notas auto-reflexivas añadidas por el estudiante. Todas las notas auto-reflexivas son visibles para un tutor personal del estudiante y los administradores departamentales.';
$string['gradetblheader_submissiondate'] = 'Fecha de envío';
$string['gradetblheader_submissiondate_info'] = 'La fecha en la que fue enviada la Tarea. Si se envió tardíamente, aparecerá un ícono de advertencia que muestra que tan tardíamente era cuando Usted pasó el ratón sobre de ella. Los exámenes con intentos múltiples mostrarán la última fecha. Las Tareas de Moodle que hayan sido dubidas, pero que no hayan sido enviadas (que todavía estén en estatus de borrador) mostrarán \'borrador\' en lugar de una fecha. Las tareas no enviadas (pero con calificaciones o retroalimentación) mostrarán \'sin envío\'.';
$string['gradetblheader_submission_feedback'] = 'Envío / Retroalimentación';
$string['gradetblheader_type'] = 'Tipo';
$string['gradetblheader_type_info'] = 'El tipo de evaluación, ya sea una Tarea de Moodle, Tarea de Turnitin, Examen, Taller (para evaluación por pares), o un ítem de calificación manual ingresado directamente en el Libro de calificaciones de Moodle.';
$string['gradetblheader_viewed'] = 'Visto';
$string['gradetblheader_viewed_info'] = 'La fecha en la que primeramente fue vista la retroalimentación por el estudiante después de haber sido liberada.';
$string['gradetblheader_weighting'] = 'Ponderación';
$string['grading_form'] = 'ver formato de calificación';
$string['groupname'] = 'Nombre del grupo';
$string['groupwork'] = 'grupo';
$string['hasfeedbackfile'] = 'Tiene archivo de retroalimentación.';
$string['insertsuccessful'] = 'Datos insertados exitosamente';
$string['lastmoodlelogin'] = 'Último ingreso a Moodle:';
$string['latefeedback'] = 'Días de retroalimentación tardía';
$string['latefeedbackheading'] = 'Retroalimentación tardía';
$string['latefeedbacksettings'] = 'El número de días para que la retroalimentación sea tardía';
$string['late_submission_msg'] = 'Esta tarea fue enviada';
$string['livedomain'] = 'Nombre de Dominio Completamente Calificado Vivo';
$string['livedomaindefault'] = 'https://';
$string['livedomaininfo'] = 'El Nombre de Dominio Completamente Calificado (FQDN) con http/https';
$string['manual_gradeitem'] = 'Ítem manual';
$string['markingguide'] = 'Guía de Puntaje';
$string['meet_tutor'] = 'Encontrarme con mi tutor';
$string['moddescription'] = 'Usar CTRL/Shift para seleccionar cursos múltiples si fuera aplicable (Shift=Mayúsculas)';
$string['mod_tutor_exportheader'] = 'Nombre del Curso/Nombre(s) del Usuario,Apellido(s),Evaluaciones,No-envíos,Envíos tardíos,Evaluaciones calificadas,Calificaciones bajas';
$string['mod_tutor_filename'] = 'MyFeedback_mod_tutor_report_';
$string['mod_tutor_report'] = 'Reporte del Tablero del Tutor de módulo';
$string['modtutorstats'] = 'Estadísticas del tutor Moodle';
$string['moduleleaderview'] = '- vista tutor';
$string['modulesteach'] = 'Módulos actualmente enseñando';
$string['moduletutors'] = 'Tutores del módulo';
$string['moodle_assignment'] = 'Tarea';
$string['more'] = ', ...más';
$string['moreinfo'] = 'Haga click para ver la lista completa de cursos';
$string['my_feedback'] = 'Mi retroalimentación';
$string['myfeedback:modtutor'] = 'Mi tutor del módulo de retroalimentación';
$string['myfeedback:personaltutor'] = 'Mi tutor de retroalimentación personal';
$string['myfeedback:progadmin'] = 'Administración del programa de Mi retroalimentación';
$string['myfeedback:student'] = 'Mi estudiante para retroalimentación';
$string['myfeedback:usage'] = 'Mis estadísticas de uso de retroalimentación';
$string['myfeedback:view'] = 'Ver mi retroalimentación';
$string['mymodules'] = 'Mis cursos';
$string['mystudentssrch_relationship_info'] = 'Ya sea su \'Tutoreado personal\' o el nombre corto de los cursos que Usted enseña o administra en donde el estudiante está inscrito.';
$string['mystudentssrch_username_info'] = 'El nombre completo del estudiante quien es tu tutoreado personal, o la persona a quien enseñas o apoyas.';
$string['new_window_msg'] = 'Abre en una ventana nueva';
$string['noarchivesupporth1'] = '<h1>¡Sin soporte para esa versión de Moodle!</h1>';
$string['noarchivesupporth2'] = '<h2>¡Se hicieron demasiados cambios a la Base de Datos para que el reporte soporte esto!</h2><h2>Seleccione una pestaña diferente o refresque su pantalla para continuar...</h2>';
$string['nodata'] = 'Sin datos';
$string['nodataforyear'] = 'Sin datos para este año académico';
$string['nodatatodisplay'] = 'Sin datos para mostrar';
$string['noenrolments'] = 'Este usuario todavía no ha sido inscrito en ningún curso';
$string['nographtodisplay'] = 'Sin gráfico para mostrar';
$string['nomodule'] = 'Sin curso para este año académico';
$string['nopermission'] = 'Usted no tiene permiso para ver esta página';
$string['no_submission'] = 'sin envío';
$string['no_submission_msg'] = 'No hay envío y ya h pasado la fecha límite. No lo tome en cuenta si a Usted le hubieran dado una extensión individual.';
$string['notutor'] = 'Usted no tiene detalles de tutor personal';
$string['numerrortitle'] = 'Número de errores:';
$string['offline_assignment'] = 'fuera-de-línea';
$string['or'] = 'o';
$string['originality'] = 'Originalidad';
$string['othertutee'] = 'Otros tutelados';
$string['overallfeedback'] = 'Retroalimentación global';
$string['overallmodule'] = 'Moodle general (a la fecha):';
$string['overallstudentusage'] = 'Uso general de estudiante';
$string['overview'] = 'vista_general';
$string['overviewlimit'] = 'Límite del curso para pestaña de vista general';
$string['overviewlimitheading'] = 'Límite del Curso para Pestaña de Vista General';
$string['overviewlimitsettings'] = 'Configurar el número de cursos a mostrar en la pestaña de vista general';
$string['overview_text_dept'] = 'Este tablero muestra una vista general de evaluaciones y estudiantes para todos los cursos Moodle dentro de categorías donde Usted haya asignado acceso de \'Administrador Departamental de Mi Retroalimentación\' en Moodle. Elija el nivel superior (facultad) y después el segundo nivel (departamento) de la lista desplegable. Si Usted elige \'no-categorizado\' para la lista del segundo nivel, Usted verá cursos desde la categoría del nivel superior (asumiendo que Usted tenga acceso a este nivel). Usted también puede ver tareas para un curso particular dentro de una categoría al hacer clic en un nombre de  curso, o elegirlo desde la lista del menú desplegable de cursos. Cuando Usted selecciona un curso Moodle particular, Usted también puede ver información del grupo y del tutor del módulo para ese curso. Usted también puede enviar un Email a los tutores del módulo (con copia ciega, para que no vean los nombres entre ellos) al seleccionar la casilla en la columna para enviar Email y hacer clic en el botón para [enviar Email].';
$string['overview_text_mtutor'] = 'Este tablero muestra una vista general de evaluaciones para los módulos que Usted enseña. Usted puede seleccionar los módulos que desea analizar en la lista de Mis Cursos y después hacer clic en el botón para [analizar]. Mantenga oprimida la tecla SHIFT (Mayúsculas) para seleccionar un rango de cursos o la tecla Ctrl para seleccionar individualmente varios cursos. Para cada curso Moodle Usted verá un desglose de información para cada evaluación. Usted también puede ver un desglose por estudiante para cada evaluación al hacer clic en el alternador debajo del nombre de la evaluación, o al hacer clic en el botón de [desglose por estudiante].';
$string['overview_text_ptutor'] = 'Este tablero muestra una vista general de evaluaciones para cada uno de sus tutoreados. Usted puede ver el desglose de un curso para cada estudiante al hacer clic en el alternador debajo de sus nombres. Usted también puede enviar un Email (copia oculta, para que los estudiantes no vean los nombres de los otros estudiantes) al seleccionar la casilla en la columna para Enviar Correo y hacer clic en el botón para [Enviar correo].';
$string['overview_text_ptutor_tab'] = 'Si Usted es un estudiante que estudia un programa enseñado, los detalles de su Tutor Personal aparecerán debajo.  Usted puede contactarlo para pedir asesoría en su progreso académico en general y su desarrollo personal y profesional.';
$string['overview_text_usage'] = 'Este Tablero muestra estadísticas para el uso del reporte de Mi Retroalimentación. Por favor, use solamente una ventana o pestaña a la vez, ya que abrir más de una podría producir resultados inusuales.';
$string['ownreport'] = 'Ver Tablero propio';
$string['parent'] = 'Padre';
$string['parentdepartment'] = 'Departamento paterno:';
$string['peerfeedback'] = 'Retroalimentación por pares:';
$string['personaltutee'] = 'Tutelado personal';
$string['personaltutees'] = 'Aprendices Personales';
$string['personaltutors'] = 'Tutores personales';
$string['personaltutorstudents'] = 'Estudiantes personales del tutor';
$string['personaltutorview'] = '- Vista tutor';
$string['pluginname'] = 'Mi retroalimentación';
$string['print_msg'] = 'Use Esc para salir de pantalla de impresión';
$string['print_report'] = 'Imprimir';
$string['progadmin_dashboard'] = 'Tablero administrativo departamental';
$string['progadminview'] = '- Vista admin del programa';
$string['programme'] = 'Programa:';
$string['provisional_grades'] = 'Las puntuaciones aquí mostradas son provisionales y pueden incluir puntuaciones por evaluaciones que no cuentan para su calificación final. Por favor, refiérase al
<a href="" title="Student Record System login" rel="tooltip">sistema de registro estudiantil</a>para ver un registro formal de su calificación.';
$string['p_tutor_exportheader'] = 'Nombre(s) del Tutoreado/Nombre_corto del curso,Apellido(s),Evaluaciones,No-envíos,Envíos tardíos,Evaluaciones calificadas,Calificaciones bajas';
$string['p_tutor_filename'] = 'MyFeedback_p_tutor_report_';
$string['p_tutor_report'] = 'Reporte del Tablero de tutor personal';
$string['p_tut_programme'] = 'Programa';
$string['quiz'] = 'Examen';
$string['relationship'] = 'Relación';
$string['relativegradedescription'] = 'Esto muestra su posición de la calificación relativa a la clase para todas las calificaciones numéricas.';
$string['reportfor'] = 'Reporte para';
$string['reporttype'] = 'Tipo de Reporte';
$string['reset_table'] = 'Re-iniciar tabla';
$string['return-2-dash'] = 'regresar a mi Tablero';
$string['review'] = 'revisar';
$string['reviewaattempt'] = 'revisar intento {$a}';
$string['reviewlastof'] = 'revisar último intento de {$a}';
$string['rubric'] = 'ver rúbrica';
$string['rubrictext'] = 'Rúbrica';
$string['savefeedback'] = 'Guardar retroalimentación y cerrar';
$string['savenotes'] = 'Guardar notas y cerrar';
$string['search'] = 'Buscar';
$string['searchcategory'] = 'Ingresar nombre de categoría';
$string['searchcourses'] = 'Ingresar nombre o código del curso';
$string['searchusers'] = 'Ingresar dirección Email';
$string['secondlevelcat'] = 'Categoría de segundo nivel:';
$string['selectall'] = 'Seleccionar todo';
$string['selectallforemail'] = 'Seleccionar a todos para mandar Email';
$string['selfaddedfeedback'] = 'Retroalimentación auto-añadida';
$string['selfassessment'] = 'Auto-evaluación:';
$string['sendmail'] = 'Enviar Email';
$string['settingsacademicyear'] = 'Año académico';
$string['staff'] = 'staff';
$string['staffmember'] = 'Miembro del staff';
$string['statsperassessment'] = 'Estadísticas por evaluación';
$string['statspercourse'] = 'Estadísticas por curso';
$string['statsperstudent'] = 'Estadísticas por estudiante';
$string['student'] = 'Estudiante';
$string['studentaddedfeedback'] = 'Retroalimentación añadida por el estudiante';
$string['studentbreakdown'] = 'Desglose de estudiante';
$string['student_due_info'] = 'El número de estudiantes que se espera que completen esta evaluación.';
$string['student_feed_info'] = 'El número de estudiantes cuya retroalimentación fue regresada a ellos más de {$a->lte} días después de la fecha esperada, o fecha de envío, la que sea más tarde.';
$string['student_graded_info'] = 'El número de estudiantes calificados a la fecha con retroalimentación visible para esta tarea.';
$string['studentgraphdesc'] = 'La calificación mínima es {$a->minimum}%, la mediana de calificación es {$a->mean}% y la calificación más alta es {$a->maximum}%. El puntaje del estudiante es {$a->studentscore}%.';
$string['student_late_info'] = 'El número de estudiantes con envíos tardíos para esta evaluación.';
$string['student_low_info'] = 'El número de estudiantes que puntearon debajo de 50% para esta evaluación.';
$string['student_nonsub_info'] = 'El número de estudiantes a quienes les faltaron envíos para esta evaluación.';
$string['student_overall_info'] = 'El número de estudiantes que puntearon en cada percentil y la calificación más baja, mediana de calificación (en rojo) y calificación más alta (numeradas y marcadas arriba de la gráfica)';
$string['studentrecordsystem'] = 'Invocar Sistema de Registro de Estudiante';
$string['studentrecordsystemlink'] = 'https://';
$string['studentsaccessto'] = 'Todos los estudiantes a los que tengo acceso';
$string['submission'] = 'ver envío';
$string['suborassessed'] = 'Valorado';
$string['tabs_academicyear'] = 'Año académico';
$string['tabs_feedback'] = 'Comentarios a la retroalimentación';
$string['tabs_feedback_text'] = 'Aquí puede Usted ver la retroalimentación general de las partes evaluadas de sus módulos. Esto se toma de la sección de Retroalimentación General de las Tareas de Moodle y Turnitin. Seleccione Ver retroalimentación para ver cualquiera de sus evaluaciones.';
$string['tabs_mtutor'] = 'Tablero del tutor en Moodle';
$string['tabs_mymodules'] = 'Mis módulos';
$string['tabs_mytutees'] = 'Mis estudiantes';
$string['tabs_overview'] = 'Vista general';
$string['tabs_progadmin'] = 'Vista general de admin del programa';
$string['tabs_ptutor'] = 'Tutor personal';
$string['tabs_tutor'] = 'Tutor personal';
$string['togglegrade'] = 'Alternar calificación';
$string['togglegradedescription'] = 'Usted puede alternar entre las gráficas de calificación relativa y de calificación absoluta.';
$string['turnitin_assignment'] = 'Turnitin';
$string['tutee'] = 'Tutoreado';
$string['tutees_plus_minus'] = 'Tutoreados (+/-)';
$string['tutorfeedback'] = 'Retroalimentación del tutor:';
$string['tutorgroups'] = 'Grupos del tutors (+/-)';
$string['tutor_messages'] = 'Mensajes';
$string['tutortblheader_assessment'] = 'Evaluaciones';
$string['tutortblheader_assessment_info'] = 'Un número de todas las evaluaciones con una fecha esperada en el pasado, o que han sido enviadas a, más cualquier ítems de calificación manual.';
$string['tutortblheader_graded'] = 'Valoraciones <br> calificadas';
$string['tutortblheader_graded_info'] = 'El número de evaluaciones calificadas a la fecha con retroalimentación visible para los estudiantes.';
$string['tutortblheader_latefeedback'] = 'Retroalimentación tardía';
$string['tutortblheader_latefeedback_info'] = 'El número de evaluaciones en donde la retroalimentación fue regresada a los estudiantes más de {$a->lte} días después de la fecha esperada, ola  fecha de envío, cualquiera que sea más tarde.';
$string['tutortblheader_latesubmissions'] = 'Envíos <br> tardíos';
$string['tutortblheader_latesubmissions_info'] = 'El número de envíos tardíos para todas las tareas esperadas.';
$string['tutortblheader_lowgrades'] = 'Con calificación baja <br> (<50%)';
$string['tutortblheader_lowgrades_info'] = 'El número de tareas calificadas a la fecha que puntearon debajo de 50%.';
$string['tutortblheader_name'] = 'Nombre';
$string['tutortblheader_nonsubmissions'] = 'No-envíos';
$string['tutortblheader_nonsubmissions_info'] = 'El número de envíos faltantes para todas las tareas esperadas.';
$string['tutortblheader_overallgrade'] = 'Calificación global';
$string['tutortblheader_overallgrade_info'] = 'La gráfica muestra la calificación más baja, la mediana de calificación (en rojo) y la calificación más alta (numerada y marcada arriba de la gráfica). La calificación de cada estudiante es mostrada de un total de 100 (debajo de la gráfica a la derecha) y es mostrada en rojo (<40%), ámbar (41-50%) o verde (>50%).';
$string['tutortblheader_personaltutees'] = 'Tutoreados personales / Nombres de cursos';
$string['uncategorized'] = 'No-categorizado';
$string['updatesuccessful'] = 'Datos actualizados exitosamente';
$string['usage'] = 'Uso';
$string['usage_categorystaff_info'] = 'Este reporte muestra una lista del staff y su uso individual dentro de una categoría.';
$string['usage_categorystaffoverview_info'] = 'Este reporte muestra una vista general del staff y su uso individual dentro de una categoría.';
$string['usage_categorystudents_info'] = 'Este reporte muestra una lista de estudiantes  y su uso individual dentro de una categoría.';
$string['usage_categorystudentsoverview_info'] = 'Este reporte muestra una vista general de estudiantes y su uso individual dentro de una categoría.';
$string['usage_coursestaff_info'] = 'Este reporte muestra una lista del staff y su uso individual dentro de un curso.';
$string['usage_coursestaffoverview_info'] = 'Este reporte muestra una vista general del uso del staff  dentro de cada curso dentro de una categoría particular.';
$string['usage_coursestudents_info'] = 'Este reporte muestra una lista de estudiantes y su uso individual dentro de un curso.';
$string['usage_coursestudentsoverview_info'] = 'Este reporte muestra una vista general del uso de estudiantes  dentro de cada curso dentro de una categoría particular.';
$string['usage_dashboard'] = 'Tablero de uso';
$string['usage_personaltutorstudents_info'] = 'El reporte muestra una vista general de un tutoreado personal y sus actividades en MiRetroalimentación.';
$string['usagereport'] = 'reporte de uso';
$string['usagesrchheader_catname_info'] = 'El nombre de la categoría y el enlace hacia su reporte de uso.';
$string['usagesrchheader_coursecatname_info'] = 'El nombre de la categoría en la que está incluido este curso y el enlace hacia su reporte de uso.';
$string['usagesrchheader_coursename_info'] = 'El nombre completo del curso ( y el nombre corto entre paréntesis) y el enlace hacia su reporte de uso.';
$string['usagesrchheader_pcatname_info'] = 'El nombre de la categoría paterna en la cual está esta incluida categoría y el enlace hacia su reporte de uso.';
$string['usagesrchheader_userdept_info'] = 'El nombre del departamento del usuario, para ayudar a encontrar a  personas con nombres similares.';
$string['usagesrchheader_username_info'] = 'El nombre completo del usuario y el enlace hacia sus reportes de uso. Muestra sus direcciones Email al pasar el ratón encima.';
$string['usage_staff_exportheader'] = 'Nombre,Total vistas,Reporte propio vistas,Pestaña Mis estudiantes vistas,Estudiantes vistos,Reporte de estudiantes vistos,Tablero del Tutor personal vistas,Tablero del Tutor del módulo vistas,Tablero admin departamento vistas,Descargas,Último accesado,Tutoreados Personales';
$string['usage_staffmember_info'] = 'Este reporte muestra el uso de un miembro particular del staff a lo ancho de todos sus cursos.';
$string['usage_staffoverview_exportheader'] = 'Nombre,Staff,Total vistas,Own report views,Pestaña Mis Estudiante vistas,Estudiantes vistas,Reporte de estudiante vistas,Tablero del Tutor Personal vistas,Tablero Tutor Módulo vistas,Tablero admin departamental vistas,Descargas,Último acceso,Tutoreados Personales';
$string['usage_student_exportheader'] = 'Nombre,Visto por,Total vistas,Notas auto-reflectivas,Retroalimentación Turnitin,Descargas,Tutor Personal,Último acceso';
$string['usage_student_info'] = 'Este reporte muestra el uso de un estudiante individual a lo ancho de sus cursos.';
$string['usage_studentoverview_exportheader'] = 'Nombre,Estudiantes,Visto por,Total vistas,Notas auto-reflectivas,Retroalimentación Turnitin,Descargas,Tutor Personal,Último acceso';
$string['usagetblheader_courses'] = '# cursos';
$string['usagetblheader_courses_info'] = 'El número de cursos adentro de esta categoría.';
$string['usagetblheader_downloads'] = 'Descargas';
$string['usagetblheader_downloads_info'] = 'El número de veces que se han descargado los Reportes de MiRetroalimentación.';
$string['usagetblheader_enrolled'] = '# inscritos';
$string['usagetblheader_lastaccessed'] = 'Notas auto-reflectivasÚltimo acceso';
$string['usagetblheader_lastaccessed_info'] = 'La última hora en la que este reporte fue accesado.';
$string['usagetblheader_modtutorviews_info'] = 'El número de veces que el usuario ha visto el tablero del modulo del tutor.';
$string['usagetblheader_mystudenttabviews'] = 'Vistas de pestaña Mis estudiantes';
$string['usagetblheader_mystudenttabviews_info'] = 'El número de veces que fue vista la pestaña de Mis Estudiantes.';
$string['usagetblheader_name_info'] = 'El nombre del curso o usuario.';
$string['usagetblheader_notes'] = 'Notas auto-reflectivas';
$string['usagetblheader_notes_info'] = 'El número de notas auto-reflectivas añadidas.';
$string['usagetblheader_ownreportviews'] = 'Vistas de reporte propio';
$string['usagetblheader_ownreportviews_info'] = 'El número de veces que el usuario vió sus vistas de reporte (la vista por defecto).';
$string['usagetblheader_personaltutees_info'] = 'El número de tutoreados personales / enlace hacia el reporte tutoreado personal para este usuario.';
$string['usagetblheader_personaltutor_info'] = 'El número de tutores personales / nombre de los tutores personales del estudiante y enlace hacia su reporte de uso.';
$string['usagetblheader_personaltutorviews_info'] = 'El número de veces que el usuario ha visto el tablero del tutor personal.';
$string['usagetblheader_progadminviews_info'] = 'El número de veces que el usuario ha visto el tablero del administrador departamental.';
$string['usagetblheader_staff_info'] = 'El número de staff inscritos en este curso/categoría.';
$string['usagetblheader_studentreportviews'] = 'Vistas de reporte de estudiante';
$string['usagetblheader_studentreportviews_info'] = 'El número de veces que los reportes de estudiantes han sido vistos en total.';
$string['usagetblheader_students_info'] = 'El número de estudiantes inscritos en este curso/categoría.';
$string['usagetblheader_studentsviewed'] = 'Estudiantes vistos';
$string['usagetblheader_studentsviewed_info'] = 'El número de reportes de MiRetroalimentación de estudiantes vistos por el usuario.';
$string['usagetblheader_tiifeedback'] = 'Retroalimentación Turnitin';
$string['usagetblheader_tiifeedback_info'] = 'El número de notas de retroalimentación de Turnitin añadidas.';
$string['usagetblheader_totalviews'] = 'Vistas totales';
$string['usagetblheader_totalviews_info'] = 'El número de veces de cualquier reporte de MiRetroalimentación.';
$string['usagetblheader_viewed'] = 'Visto';
$string['usagetblheader_viewedby'] = 'Visto por';
$string['usagetblheader_viewedby_info'] = 'Cuantos del staff han visto el reporte para este estudiante.';
$string['usagetblheader_viewed_info'] = 'Cuantos usuarios ( o si es que un usuario ha) han visto el reporte por al menos una vez.';
$string['userprogramme'] = 'Programa:';
$string['view'] = 'vista';
$string['viewfeedback'] = 'ver la retroalimentación directamente en Turnitin';
$string['viewfeedbacktitle'] = 'Haga click aquí para ver retoalimentación en Turnitin';
$string['views'] = 'vistas';
$string['waslate'] = '{$a->late} tardío.';
$string['wordcloud_text'] = 'La nube de palabras muestra la frecuencia de palabras y frases que han aparecido en su retroalimentación - mientras más grande la palabra, mayor es la frecuencia con que es usada en retroalimentación. Pase el ratón encima de una palabra para ver cuantas veces y en donde ha sido usada.';
$string['wordcloud_title'] = 'Palabras usadas frecuentemente en retroalimentación';
$string['workshop'] = 'Taller';
$string['year'] = 'Año';
$string['yearlevel'] = 'Nivel del año';
