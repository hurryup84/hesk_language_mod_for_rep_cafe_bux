<?php
/*
 * ==> HOW TO CUSTOMIZE TEXT
 *
 * Follow this guide:
 * http://www.hesk.com/knowledgebase/?article=88
 *
 * ==> IMPORTANT: FILE ENCODING
 *
 * This file *must* be saved in UTF-8 encoding without byte order mark (BOM)
 * Test chars: àáâãäåæ
 *
 * http://www.hesk.com/knowledgebase/?article=87
 *
 */

// ADD AND MODIFY TEXT BELOW THIS LINE

// On hold wird zur Wartet auf Ersatzteil
$hesklang['on_hold']='Wartet auf Ersatzteil';

// Fehlerbeschreibung und Details
$hesklang['subject']='Fehlerbeschreibung';
$hesklang['message']='Fehlerdetails';
$hesklang['place_after']='Nach den Fehlerdetails';
$hesklang['place_before']='Vor den Fehlerdetails';
$hesklang['kb_subject']='Fehlerbeschreibung';
$hesklang['m_sub']='Fehlerbeschreibung:'; // Mail subject
$hesklang['m_esu']='Fehlerbeschreibung fehlt';
$hesklang['enn']='Außer für Email Piping/POP3 wenn im Fehlerbeschreibung vorkommt:';
$hesklang['req_sub']='Fehlerbeschreibung erforderlich';

// Erledigt wird zu anbgeholt
$hesklang['close']='Abgeholt'; // Closed ticket STATUS
$hesklang['all_not_closed']='Alle außer abgeholte';
$hesklang['thist3']='<li class="smaller">%s &#124; Abgeholt von %s</li>'; // %s = date, user making change
$hesklang['ccct']='Vom Kunden abgeholt';
$hesklang['statistics']['resolved']='Abgeholt';

// Beantwortet wird zu Fertig
$hesklang['replied']='Fertig';
$hesklang['statistics']['answered']='Fertig';
$hesklang['statistics']['unanswered']='Unfertig';
$hesklang['escalate']['nrep']='vom Mitarbeiter noch nicht fertig gemacht';

// in Bearbeitung wird zu in Reparatur:
$hesklang['in_progress']='In Reparatur';
$hesklang['mma2']='Beim Reparaturtreff Buxtehude.';

// Absenden wird zu Status ändern:
$hesklang['submit_as']='Status ändern auf:';

// Besitzter (Ticketowner) wird zu Techniker:
$hesklang['owner']='Techniker';
$hesklang['tasi']='Techniker zugewiesen';
$hesklang['nose']='Kein Techniker ausgewählt';
$hesklang['onasc']='Dieser Techniker hat keinen Zugriff auf die ausgewählte Kategorie.';
$hesklang['owneed']='Techniker erforderlich';
$hesklang['ycto']='JA, Techniker ändern';
$hesklang['ncto']='NEIN, aktuellen Techniker behalten';
$hesklang['fass']='Techniker erforderlich';
$hesklang['assign_no']='Kein Techniker ausgewählt, keine Änderungen vorgenommen';


// Maintenance Mode Meldungen werden angepasst:
$hesklang['mm2']='Je nach Anzahl der Anfragen und des Ablaufes werden dieses Feature evtl. in Zukunft aktivieren.';
$hesklang['mm3']='Wir bitten um Verständnis';
$hesklang['mma1']='Herzlich Willkommen!';
$hesklang['mma2']='Beim Reparaturtreff Buxtehude.';

// DO NOT CHANGE BELOW
if (!defined('IN_SCRIPT')) die('PHP syntax OK!');