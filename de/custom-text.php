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
$hesklang['enter_subject']='Fehlerbeschreibung für dieses Ticket';
$hesklang['enter_ticket_subject']='Bitte den Ticketbeschreibung für das Gerät angeben.';
$hesklang['e_tid']='Fehler beim Erstellen einer eindeutigen Ticket-Nr., die Anfrage bitte später nochmals absenden.';
$hesklang['import']='Es wird ein <em>privates Ticket</em> in einen <em>öffentlichen Artikel</em> umgewandelt.<br /><br />Unbedingt sicherstellen dass private und sensible Informationen aus der Fehlerbeschreibung sowie dem Artikel selbst entfernt werden!';
$hesklang['assign_5']='%1$s Fehler: %2$s kann auf diese Ticketkategorie nicht zugreifen'; // %1$s = ticket tracking ID, %2$s = owner name
$hesklang['anon_subject']='[Fehlerbeschreibung]'; // Ticket subject of anonymized Geräte
$hesklang['assign_log']='Sammelticketzuweisung Ergebnis:<br /><br />Zugewiesen: %1$s<br />Fehler: %2$s<br /><br />Log:<br /><pre>%3$s</pre>'; // %1$s = number of Tuckets assigned, %2$s = number of errors, %3$s = log



// Erledigt wird zu anbgeholt
$hesklang['close']='Abgeholt'; // Closed ticket STATUS
$hesklang['all_not_closed']='Alle außer abgeholte';
$hesklang['thist3']='<li class="smaller">%s &#124; Abgeholt von %s</li>'; // %s = date, user making change
$hesklang['ccct']='Vom Kunden abgeholt';
$hesklang['statistics']['resolved']='Abgeholt';

$hesklang['closed']='Abgeholt'; // Tickets has been RESOLVED
$hesklang['close_this_ticket']='Dieses Ticket als abgeholt markieren';
$hesklang['close_selected']='Ausgewählte tickets als &quot;Abgeholt&quot; markieren';
$hesklang['tickets_closed']='Ticket abgeholt';
$hesklang['num_tickets_closed']='<b>%d</b> Ticket wurden als abgeholt markiert';
$hesklang['aclose']='Ticket autom. als abgeholt markieren';
$hesklang['close_action']='Ticket als abgeholt markieren'; // Close ACTION
$hesklang['maxopen']='Das Maximum möglicher offener Tickets wurde erreicht (%d von %d). Neue Tickets sind erst wieder möglich nachdem offene Tickets abgeholt wurden.';
$hesklang['ticket_closed']='[#%%TRACK_ID%%] Tickets geschlossen/abgeholt';
$hesklang['notclo']='Ein Tickets als abgeholt markiert wird';
$hesklang['statistics']['axis2']='% von Ticket abgeholt';
$hesklang['statistics']['pie_title_ro']='Offene gegen Abgeholte Tickets';

// Beantwortet wird zu Fertig
$hesklang['replied']='Fertig';
$hesklang['statistics']['answered']='Fertig';
$hesklang['statistics']['unanswered']='Unfertig';
$hesklang['escalate']['nrep']='vom Mitarbeiter noch nicht fertig gemacht';


$hesklang['can_edit_tickets']='Fertige Tickets bearbeiten';
$hesklang['showtic']='Das soeben fertiggestellte Tickets anzeigen';
$hesklang['ticall']='Fertige Tickets';
$hesklang['atbr']='Dieses Tickets muss zugewiesen werden bevor es fertiggestellt werden kann.';
$hesklang['statistics']['pie_title_au']='Offene Tickets: Fertig vs. Unfertig';
$hesklang['statistics']['chart_title_tfrc']='Tickets, die innerhalb eines Zeitrahmens fertiggestellt wurden';
$hesklang['statistics']['axis1']='% von Tickets fertig';
$hesklang['escalate']['feat1']='Tickets, die nicht innerhalb eines bestimmten Zeitrahmens zugewiesen, fertig oder gelöst werden';
$hesklang['escalate']['titlet']='Ein beschreibender Titel, zum Beispiel: Tickets, die nicht innerhalb eines Tages fertig werden, neu zuweisen';
$hesklang['satisfaction']['h3']='Wenn Ihre Umfrage fertig ist, aktivieren Sie Follow-up-E-Mails über das unten stehende Formular. Hesk wird gelöste Ticket mit mindestens einer Antwort pro Stunde bearbeiten und den Link zu Ihrer Umfrage an Ihre Kunden senden.';

// in Bearbeitung wird zu in Reparatur:
$hesklang['in_progress']='In Reparatur';

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
$hesklang['tunasi2']='Ticket hat keinen Techniker und kann wieder zugewiesen werden';
$hesklang['nwts']='Ein Ticket übermittelt wird mit dem Techniker:';
$hesklang['ncrt']='Ein Kunde beantwortete ein Ticket mit dem Techniker:';
$hesklang['escalate']['feat4']='Regeln basierend auf Ticketkategorie, Techniker, Status anwenden';
$hesklang['ntoverdue']='Ein Ticket ist beim Techniker überfällig:';


// Maintenance Mode Meldungen werden angepasst:
$hesklang['mm2']='Je nach Anzahl der Anfragen und des Ablaufes werden dieses Feature evtl. in Zukunft aktivieren.';
$hesklang['mm3']='Wir bitten um Verständnis';
$hesklang['mma1']='Herzlich Willkommen!';
$hesklang['mma2']='Beim Reparaturtreff Buxtehude.';



// DO NOT CHANGE BELOW
if (!defined('IN_SCRIPT')) die('PHP syntax OK!');