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

$hesklang['enter_subject']='Fehlerbeschreibung für dieses Gerät';
$hesklang['enter_ticket_subject']='Bitte den Fehlerbeschreibung für das Gerät angeben.';
$hesklang['e_tid']='Fehler beim Erstellen einer eindeutigen Geräte-Nr., die Anfrage bitte später nochmals absenden.';
$hesklang['import']='Es wird ein <em>privates Geräte</em> in einen <em>öffentlichen Artikel</em> umgewandelt.<br /><br />Unbedingt sicherstellen dass private und sensible Informationen aus der Fehlerbeschreibung sowie dem Artikel selbst entfernt werden!';

// Erledigt wird zu anbgeholt
$hesklang['close']='Abgeholt'; // Closed ticket STATUS
$hesklang['all_not_closed']='Alle außer abgeholte';
$hesklang['thist3']='<li class="smaller">%s &#124; Abgeholt von %s</li>'; // %s = date, user making change
$hesklang['ccct']='Vom Besitzer abgeholt';
$hesklang['statistics']['resolved']='Abgeholt';

$hesklang['closed']='Abgeholt'; // Geräte has been RESOLVED
$hesklang['close_this_ticket']='Dieses Gerät als abgeholt markieren';
$hesklang['close_selected']='Ausgewählte Geräte als &quot;Abgeholt&quot; markieren';
$hesklang['tickets_closed']='Geräte abgeholt';
$hesklang['num_tickets_closed']='<b>%d</b> Gerät wurden als abgeholt markiert';
$hesklang['aclose']='Geräte autom. als abgeholt markieren';
$hesklang['close_action']='Geräte als abgeholt markieren'; // Close ACTION
$hesklang['maxopen']='Das Maximum möglicher offener Geräte wurde erreicht (%d von %d). Neue Geräte sind erst wieder möglich nachdem offene Geräte abgeholt wurden.';
$hesklang['ticket_closed']='[#%%TRACK_ID%%] Geräte geschlossen/abgeholt';
$hesklang['notclo']='Ein Geräte als abgeholt markiert wird';
$hesklang['statistics']['axis2']='% von Geräte abgeholt';
$hesklang['statistics']['pie_title_ro']='Offene gegen Abgeholte Geräte';


// Beantwortet wird zu Fertig
$hesklang['replied']='Fertig';
$hesklang['statistics']['answered']='Fertig';
$hesklang['statistics']['unanswered']='Noch nicht fertig';
$hesklang['escalate']['nrep']='vom Mitarbeiter noch nicht fertig gemacht';


$hesklang['can_edit_tickets']='Fertige Geräte bearbeiten';
$hesklang['showtic']='Das soeben fertiggestellte Geräte anzeigen';
$hesklang['ticall']='Fertige Geräte';
$hesklang['atbr']='Dieses Geräte muss zugewiesen werden bevor es fertiggestellt werden kann.';
$hesklang['statistics']['pie_title_au']='Offene Reparaturen: Fertig vs. noch nicht fertig';
$hesklang['statistics']['chart_title_tfrc']='Geräte, die innerhalb eines Zeitrahmens fertiggestellt wurden';
$hesklang['statistics']['axis1']='% von Geräte fertig';
$hesklang['escalate']['feat1']='Geräte, die nicht innerhalb eines bestimmten Zeitrahmens zugewiesen, fertig oder gelöst werden';
$hesklang['escalate']['titlet']='Ein beschreibender Titel, zum Beispiel: Geräte, die nicht innerhalb eines Tages fertig werden, neu zuweisen';
$hesklang['satisfaction']['h3']='Wenn Ihre Umfrage fertig ist, aktivieren Sie Follow-up-E-Mails über das unten stehende Formular. Hesk wird gelöste Geräte mit mindestens einer Antwort pro Stunde bearbeiten und den Link zu Ihrer Umfrage an Ihre Kunden senden.';

// in Bearbeitung wird zu in Reparatur:
$hesklang['in_progress']='In Reparatur';

// Besitzer (Ticketowner) wird zu Techniker:
$hesklang['owner']='Techniker';
$hesklang['tasi']='Techniker zugewiesen';
$hesklang['nose']='Kein Techniker ausgewählt';
$hesklang['onasc']='Dieser Techniker hat keinen Zugriff auf die ausgewählte Kategorie.';
$hesklang['owneed']='Techniker erforderlich';
$hesklang['ycto']='JA, Techniker ändern';
$hesklang['ncto']='NEIN, aktuellen Techniker behalten';
$hesklang['fass']='Techniker erforderlich';
$hesklang['assign_no']='Kein Techniker ausgewählt, keine Änderungen vorgenommen';
$hesklang['tunasi2']='Gerät hat keinen Techniker und kann wieder zugewiesen werden';
$hesklang['nwts']='Ein Gerät übermittelt wird mit dem Techniker:';
$hesklang['ncrt']='Ein Kunde beantwortete ein Gerät mit dem Techniker:';
$hesklang['escalate']['feat4']='Regeln basierend auf Gerätekategorie, Techniker, Status anwenden';
$hesklang['ntoverdue']='Ein Gerät ist beim Techniker überfällig:';


// Maintenance Mode Meldungen werden angepasst:
$hesklang['mm2']='Je nach Anzahl der Anfragen und des Ablaufes werden wir dieses Feature evtl. in Zukunft aktivieren.';
$hesklang['mm3']='Wir bitten um Verständnis';
$hesklang['mma1']='Herzlich Willkommen!';
$hesklang['mma2']='Beim Reparaturtreff Buxtehude.';

// Nachricht absenden wird zu gerät eintragen:
$hesklang['sub_ticket']='Reparaturregeln zustimmen und Gerät eintragen';


// Ticket wird zu Gerät: 
// (enthält evtl auch Ersetzungen von Punkten weiter oben
// z.B. Wenn Techniker und Gerät in einer Übersetzung vorkommen)
$hesklang['new_ticket_staff']='[#%%TRACK_ID%%] Neues Gerät: %%SUBJECT%%';
$hesklang['ticket_received']='[#%%TRACK_ID%%] Gerät erhalten: %%SUBJECT%%';
$hesklang['ticket_assigned_to_you']='[#%%TRACK_ID%%] Gerät zugewiesen: %%SUBJECT%%';
$hesklang['category_moved']='[#%%TRACK_ID%%] Gerät verschoben: %%SUBJECT%%';
$hesklang['forgot_ticket_id']='Liste eigener Geräte';
$hesklang['not_authorized_tickets']='Keine Berechtigung Geräte in dieser Kategorie einzusehen!';
$hesklang['ticket_not_found']='Gerät nicht gefunden - bitte angegebene Tracking-Nr. überprüfen';
$hesklang['no_selected']='Für Änderungen bitte ein Gerät auswählen.';
$hesklang['displaying_pages']='Anzahl Geräte: <b>%d</b> - Seiten';
$hesklang['open_action']='Gerät wiedereröffnen'; // Open ACTION
$hesklang['del_selected']='Ausgewählte Geräte löschen';
$hesklang['show_tickets']='Geräte anzeigen';
$hesklang['tickets_page']='Geräte pro Seite';
$hesklang['find_ticket']='Gerät finden';
$hesklang['ticket']='Gerät';
$hesklang['tickets']='Geräte';
$hesklang['ticket_been']='Dieses Gerät wurde';
$hesklang['view_ticket']='Gerät anzeigen';
$hesklang['open_tickets']='Offene Reparaturen';
$hesklang['ticket_marked']='Gerät wurde markiert';
$hesklang['ticket_status']='Geräte';
$hesklang['ticket_trackID']='Tracking-Nr. des Gerätes';
$hesklang['tickets_deleted']='Gerät gelöscht.';
$hesklang['num_tickets_deleted']='<b>%d</b> Geräte wurden gelöscht';
$hesklang['cat_intro']='Kategorien können helfen, Geräte nach Relevanz zu sortieren (z.B. &quot;Verkauf&quot;, &quot;Produkte&quot;, &quot;Hardwareprobleme&quot;, &quot;Softwareprobleme&quot; usw.) sowie Benutzer einzelnen Kategorien zuzuordnen (z.B. einem Vertriebsmitarbeiter nur Geräte der ihm zugewiesenen Kategorie anzuzeigen)';
$hesklang['users_intro']='Hier werden die Benutzer verwaltet, z.B. Zugriff auf die Administrationsoberfläche und Geräte beantworten. Administratoren können Geräte jeder Kategorie sehen sowie bearbeiten und haben Zugriff auf alle Administratorfunktionen (Benutzer- & Kategorieverwaltung, usw.). Normale Benutzer haben nur Zugriff auf die ihnen gewährten Funktionen.';
$hesklang['notify_new_posts']='Benachrichtigung bei neuen Geräten und Einträgen in den zugewiesenen Kategorien';
$hesklang['new_ticket_submitted']='Neues Gerät ist eingegangen.';
$hesklang['end_ticket']='--- Ende des Geräte ---';
$hesklang['your_ticket_been']='Das Gerät wurde';
$hesklang['view_your_ticket']='Gerät anzeigen';
$hesklang['submit_ticket']='Gerät senden';
$hesklang['reply_submitted_success']='Die Antwort zu diesem Gerät wurde erfolgreich gesendet';
$hesklang['ticket_submitted']='Geräte-Anfrage versendet';
$hesklang['ticket_submitted_success']='Das Gerät wurde erfolgreich gesendet, Geräte-Nr.';
$hesklang['your_ticket']='Gerät';
$hesklang['move_to_catgory']='Geräte verschieben nach';
$hesklang['moved']='Gerät verschoben';
$hesklang['moved_to']='Dieses Gerät wurde in die neue Kategorie verschoben.';
$hesklang['tid_send']='Bitte meine Geräte-Nr. zusenden!';
$hesklang['tid_not_found']='Zu der angegebenen Emailadresse konnte kein Gerät gefunden werden!';
$hesklang['tid_sent']='Gerät-Nr. wurde erfolgreich per Email zugesendet';
$hesklang['tid_sent2']='Ein Email mit den Gerätedetails wurde an die angegbene Emailadresse gesendet.';
$hesklang['sub_support']='Ein Gerät senden';
$hesklang['open_ticket']='Geräte-Anfrage erstellen';
$hesklang['view_existing']='Vorhandenes Gerät anzeigen';
$hesklang['vet']='Gerät anzeigen, welche früher erstellt wurden';
$hesklang['tickets_on_pages']='Geräteanzahl: %d - Anzahl Seiten: %d'; // First %d is replaced with number of Geräte, second %d with number of pages
$hesklang['no_tickets_open']='Keine offenen Geräte gefunden';
$hesklang['no_tickets_crit']='Keine Geräte gefunden, die den Kriterien entsprechen';
$hesklang['kb_intro']='Die Wissensdatenbank ist u.a. eine Sammlung von Antworten auf häufig gestellte Fragen (FAQ) sowie Texten um Kunden eventuell das Erstellen eines Gerätes zu ersparen. Eine umfassende und gut geschriebene Wissensdatenbank kann die Zahl der Geräte drastisch senken und somit viel Arbeitszeit ersparen. Die Datenbank kann in Kategorien und Unterkategorien organisiert werden.'; // Description in ADMIN panel
$hesklang['kb_is']='Diese Wissensdatenbank ist eine Sammlung von Antworten auf (häufig) gestellte Fragen (FAQ) sowie anderen Texten.<br />Sie soll eine Ersthilfe sein - ist die gesuchte Antwort nicht vorhanden, kann ein Gerät erstellt werden.'; // Description for CUSTOMERS
$hesklang['can_view_tickets']='Geräte anzeigen';
$hesklang['can_reply_tickets']='Geräte beantworten';
$hesklang['can_assign_tickets']='Geräte zuordnen';
$hesklang['can_del_tickets']='Geräte löschen';
$hesklang['can_change_cat']='Gerätekategorie ändern';
$hesklang['can_del_notes']='Anmerkungen zu Geräten löschen';
$hesklang['dan']='Mitarbeiter können prinzipiell ihre eigenen Anmerkungen zu Geräte löschen, daher nur auswählen wenn Benutzer auch Notizen <strong>anderer</strong> Benutzer löschen dürfen!';
$hesklang['na_view_tickets']='Keine Berechtigung um Geräte einzusehen';
$hesklang['cw2']='Fenster schließen und Geräte senden';
$hesklang['nosr']='Leider keine passenden Artikel zum Suchbegriff gefunden.<br />Möglicherweise ist aber zu diesem Thema ein Artikel vorhanden, andernfalls kann ein neues Geräte erstellt werden.';
$hesklang['not']='Geräte'; // Number of all Geräte in category

$hesklang['s_ucrt']='Geräte wiedereröffnen';
$hesklang['cid']='Geräte-Nr. des Falls';
$hesklang['dele']='Dieses Geräte löschen';
$hesklang['aftrep']='Nach Beantwortung eines Geräte';

$hesklang['shownext']='Nächstes offenes Geräte öffnen (Verwaltungsübersicht öffnet sich autom. wenn keine offenen Geräte vorhanden sind)';
$hesklang['rssn']='Nächstes Geräte anzeigen das bearbeitet werden soll';
$hesklang['chpri2']='Priorität des Geräte geändert in %s';
$hesklang['genl2']='Diesen Link verwenden um eine Kategorie für das Formular &quot;Ein Geräte übermitteln&quot; vorzugeben.';
$hesklang['asst2']='Dieses Geräte zuweisen an:';
$hesklang['asss2']='Dieses Geräte mir selbst zuweisen';
$hesklang['can_assign_self']='Kann Geräte sich selbst zuweisen';
$hesklang['can_assign_others']='Kann Geräte anderen zuweisen';
$hesklang['can_view_ass_others']='Kann Geräte einsehen, die anderen zugewiesen sind';
$hesklang['tasy']='Dieses Geräte wurde zugewiesen';
$hesklang['taso']='Dieses Geräte wurde dem ausgewählten Benutzer zugewiesen';
$hesklang['tunasi']='Geräte nicht zugewiesen';
$hesklang['nyt']='Dieses Geräte ist zugewiesen an';
$hesklang['reports_intro']='Im Bereich Berichte können verschiedene Berichte sowie Statistiken über Geräte zu definierten Zeiträumen erstellt werden.';
$hesklang['t1']='Geräte pro Tag';
$hesklang['t2']='Geräte pro Monat';
$hesklang['t3']='Geräte pro Benutzer';
$hesklang['t4']='Geräte pro Kategorie';
$hesklang['ticass']='Zugewiesene Geräte';
$hesklang['atik']='Neue Geräte';

$hesklang['s_un']='Nicht zugewiesene Geräte';
$hesklang['find_ticket_by']='Geräte finden';
$hesklang['e_nose']='Keine Zuweisungen ausgewählt, alle Geräte werden angezeigt.';
$hesklang['tlo']='Geräte sperren';
$hesklang['tul']='Geräte freigeben';
$hesklang['isloc']='Kunden können gesperrte Geräte weder beantworten noch wiedereröffnen. Ein gesperrtes Geräte wird als gelöst markiert.';
$hesklang['tlock']='Geräte wurde gesperrt';
$hesklang['tunlock']='Geräte wurde freigegeben';
$hesklang['tislock']='Geräte wurde gesperrt - der Kunde kann keine Antwort mehr hinzufügen.';
$hesklang['tislock2']='Geräte wurde gesperrt - es können keine Antworten mehr hinzugefügt werden.';
$hesklang['thist7']='<li class="smaller">%s &#124; Geräte eröffnet von %s</li>'; // %s = date, user making change
$hesklang['elocked']='Geräte wurde gesperrt oder gelöscht.';
$hesklang['nti2']='Ein neues Geräte anlegen';
$hesklang['nti3']='Dieses Formular dient dazu im Namen eines Besitzers ein neues Gerät anzulegen.<br /><strong>Bei Name und Email sind jeweils die Daten des Besitzers/in anzugeben!</strong><br />Das Gerät wird angelegt, als hätte der Kunde es eingetragen.';
$hesklang['otas']='Besitzer stimmt den Reparaturregeln zu';
$hesklang['ntam']='Mir ein Geräte zugewiesen wird';
$hesklang['ycvtao']='Keine Erlaubnis Geräte einzusehen welche anderen zugewiesen sind';
$hesklang['seqid']='Gerätenummer';
$hesklang['archived2']='Markiertes Geräte';
$hesklang['add_archive']='Markiere dieses Geräte';
$hesklang['add_archive_quick']='Markiere ausgewählte Geräte';
$hesklang['remove_archive']='Demarkiere dieses Geräte';
$hesklang['remove_archive_quick']='Demarkiere ausgewählte Geräte';
$hesklang['added_archive']='Geräte markiert';
$hesklang['removed_archive']='Geräte demarkiert';
$hesklang['added2archive']='Geräte wurde markiert';
$hesklang['removedfromarchive']='Geräte wurde demarkiert';
$hesklang['num_tickets_tag']='<b>%d</b> Geräte wurden markiert';
$hesklang['can_add_archive']='Kann Geräte markieren';
$hesklang['disp_only_archived']='Nur markierte Geräte';
$hesklang['search_only_archived']='Nur markierte Geräte';
$hesklang['tid_mail']='Bitte Emailadresse angeben, die Geräte-Nr. wird zugesendet:';
$hesklang['eytid']='Bitte Geräte-Nr. eingeben.';
$hesklang['enmdb']='Die eingegebene Emailadresse stimmt nicht mit jener zu dieser Geräte-Nr. zugewiesenen überein.';
$hesklang['cot']='Kritische Geräte nicht erzwingen an den Anfang gereiht zu werden';
$hesklang['gbou']='Diese Geräte sind <strong>nicht zugewiesen</strong>:';
$hesklang['gbom']='Geräte an <strong>mich</strong> zugewiesen:';
$hesklang['gboo']='Geräte an <strong>%s</strong> zugewiesen:';
$hesklang['perat']='%s von allen Geräte'; // Will change to "23% of all Geräte"
$hesklang['tsst']='Gerätetatus wurde gesetzt auf %s';
$hesklang['aaon']='Autom. Zuweisung von Geräte ist aktiviert (zum Deaktivieren klicken)';
$hesklang['aaoff']='Autom. Zuweisung von Geräte ist deaktiviert (zum Aktivieren klicken)';
$hesklang['uaaon']='Autom. Zuweisung von Geräte wurde für den ausgewählten Mitarbeiter aktiviert';
$hesklang['uaaoff']='Autom. Zuweisung von Geräte wurde für den ausgewählten Mitarbeiter deaktiviert';
$hesklang['taasy']='Dieses Geräte wurde mir automatisch zugewiesen';
$hesklang['can_view_unassigned']='Kann nicht zugewiesene Geräte einsehen';
$hesklang['ycovtay']='Es können nur mir zugewiesene Geräte angesehen werden';
$hesklang['import_kb']='Dieses Geräte in einen Artikel der Wissendatenbank importieren';

$hesklang['viewvtic']='Geräteansicht';
$hesklang['reqetv']='Emailadresse wird benötigt um Geräte einsehen zu können';
$hesklang['subnot2']='Zeigt Übermittlungshinweis den Kunden, welche ein Geräte absenden';
$hesklang['saass']='Autom. Zuweisung von Geräte';
$hesklang['noopen']='Keine offenen Geräte zu dieser Emailadresse gefunden.';
$hesklang['ntnote']='Andere Person hat eine Notiz zu einem mir zugewiesenen Geräte hinzugefügt';
$hesklang['cat_aa']='Autom. Zuweisung von Geräte in diese Kategorie.';
$hesklang['user_aa']='Autom. Zuweisung von Geräte für diesen Mitarbeiter aktivieren.';
$hesklang['oo']='Nur offene Reparaturn anzeigen';
$hesklang['ool']='Zeigt nur offene Reparaturen in der &quot;Tracking-ID vergessen?&quot; Email auf';
$hesklang['mop']='Max. offene Geräte';
$hesklang['can_merge_tickets']='Geräte zusammenlegen';
$hesklang['mer_selected']='Ausgewählte Geräte zusammenlegen';
$hesklang['merged']='Ausgewählte Geräte wurden zu Einem zusammengelegt.';
$hesklang['merge_err']='Es gab ein Problem beim Zusammenlegen der Geräte:';
$hesklang['merr1']='mindestens zwei Geräte auswählen.';
$hesklang['merr2']='Zielgerät nicht gefunden.';
$hesklang['merr3']='Geräte in einer Kategorie, auf die kein Zugriff erlaubt ist.';
$hesklang['tme']='Geräte %s wurde mit diesem Geräte (%s) zusammengelegt.';
$hesklang['tme1']='Geräte %s wurde mit Geräte %s zusammengelegt';
$hesklang['tme2']='Um auf Geräte %s zugreifen zu können bitte die passende Emailadresse eingeben.';
$hesklang['thist']='Geräteverlauf';
$hesklang['thist13']='<li class="smaller">%s &#124; Zusammengelegt mit Geräte %s von %s</li>'; // %s = date, merged ticket ID, user making change
$hesklang['autoss']='Autom. Start der Zeitzählers wenn ein Geräte geöffnet wird';
$hesklang['pem']='[Zugeleitete Mail]'; // Default subject of piped Geräte without subject
$hesklang['pde']='[Kunde]'; // Default customer name for piped Geräte without name
$hesklang['sconfe2']='Email Bestätigungsfeld im Formular &quot;Ein Geräte übermitteln&quot; anzeigen';
$hesklang['wrepo']='Bitte eine Antwort schreiben nachdem das Geräte wiedereröffnet wurde.';
$hesklang['can_export']='Kann Geräte exportieren';
$hesklang['roo']='<em>(nur mir selbst zugeordnete Geräte sind im Bericht enthalten)</em>';
$hesklang['export']='Geräte exportieren'; // Tab title
$hesklang['export_btn']='Geräte exportieren'; // Button title
$hesklang['export_intro']='Mit diesem Werkzeug werden Geräte in eine XML-Datei exportiert welche z.B. in Excel geöffnet werden kann.';
$hesklang['stte']='Geräte für Export auswählen';
$hesklang['sequentially']='Sequenziell'; // Order Geräte: Sequentially
$hesklang['n2ex']='Keine Geräte gefunden welche den Kriterien entsprechen, daher nichts zum Exportieren!';
$hesklang['ticket_tpl']='Geräte-Vorlage';
$hesklang['can_man_ticket_tpl']='Geräte-Vorlagen verwalten'; // Permission title
$hesklang['ticket_tpl_man']='Geräte-Vorlagen verwalten'; // Page and link title
$hesklang['ticket_tpl_intro']='Erstellen und verändern von Gerätevorlagen welche verwendet werden können um schnell neue Geräte aus dem Adminbereich zu erstellen.';
$hesklang['no_ticket_tpl']='Keine Gerätevorlagen';
$hesklang['new_ticket_tpl']='Hinzufügen und Bearbeiten einer Gerätevorlage';
$hesklang['ticket_tpl_add']='Erstellen einer neuen Gerätevorlage';
$hesklang['ticket_tpl_edit']='Bearbeiten der gewählten Gerätevorlage';
$hesklang['save_ticket_tpl']='Gerätevorlage speichern';
$hesklang['ticket_tpl_saved']='Gerätevorlage wurde gespeichert und kann jetzt angewendet werden';
$hesklang['ticket_tpl_removed']='Ausgewählte Gerätevorlage wurde aus der Datenbank entfernt';
$hesklang['ticket_tpl_not_found']='Gerätevorlage nicht gefunden';
$hesklang['sel_ticket_tpl']='Bitte Gerätevorlage zum bearbeiten auswählen';
$hesklang['ticket_tpl_id']='Fehlende Gerätevorlagen Nr.';
$hesklang['select_ticket_tpl']='Eine Gerätevorlage wählen';
$hesklang['list_tickets_cat']='Alle Geräte aus dieser Kategorie anzeigen';
$hesklang['tab_7']='Geräteliste';
$hesklang['fitl']='Felder der Geräteliste';
$hesklang['cat_pri']='Die Kategorie-Priorität wird verwendet wenn es Kunden nicht erlaubt ist einem Geräte eine Priorität zuzuordnen das über die Kundenoberfläche gelegt wurde';
$hesklang['mm1']='Aktuell können Gäste des Reparaturcafes keine Geräte selber anmelden.';
$hesklang['banemail_intro']='Das Einreichen von Geräte durch bestimmte Emailadressen verhindern';
$hesklang['email_banned']='Die Emailadresse <i>%s</i> wurde verboten und HESK wird keine weiteren Geräte von dieser akzeptieren.'; // %s will be replaced with email
$hesklang['baned_e']='Neue Geräte mit dieser Emailadresse sind nicht mehr erlaubt';
$hesklang['banip_intro']='Besucher von verbotenen IP-Adressen können weder Geräte sehen noch einreichen und können sich nicht im Helpdesk anmelden.';
$hesklang['ip_banned']='Die IP-Adresse <i>%s</i> wurde verboten und HESK wird keine weiteren Geräte von dieser IP-Adresse akzeptieren.'; // %s will be replaced with IP
$hesklang['ip_rbanned']='Der IP-Bereich <i>%s</i> wurde verboten und HESK wird keine weiteren Geräte aus diesem IP-Bereich akzeptieren.'; // %s will be replaced with IP
$hesklang['pncn']='Option Kundenbenachrichtigung im Bereich neuer Geräte auswählen';
$hesklang['pncr']='Option Kundenbenachrichtigung im Geräte-Antwort Bereich auswählen';
$hesklang['notnew']='Ein neues Geräte eingereicht wird';
$hesklang['kbo2']='<br /><br />Benutzer können keine neuen Geräte einreichen und werden direkt zur Wissensdatenbank weitergeleitet.';
$hesklang['oon1']='Mir nur OFFENE Geräte senden';
$hesklang['oon2']='Mir ALLE meine Geräte senden';
$hesklang['yhbr']='Aufgrund zu vieler Antworten auf ein Geräte, wurde dieses Konto für %s Minuten vom System blockiert.';
$hesklang['attm']='Mir dieses Geräte zuweisen';
$hesklang['taat']='Dieses Geräte ist bereits an <b>%s</b> zugeordnet';
$hesklang['scoy']='Sicher dieses Geräte slebst zuweisen?';
$hesklang['scot']='Sicher dieses Geräte an <b>%s</b> zuweisen?';
$hesklang['default_subject']='Geräte von %s';
$hesklang['write_down']='<span style="color:red">Wir empfehlen die Geräte Nr. zum späteren Nachschlagen aufzuschreiben.</span>';
$hesklang['re_confirm1']='Wenn diese Option deaktiviert ist, wird auch die Option "Emails erforderlich um Geräte zu sehen" unter "Sicherheit" deaktiviert .. fortfahren?';
$hesklang['desc_forgot_ticket_id']='(Kunde) Geräte Nr. vergessen';
$hesklang['desc_new_ticket']='(Kunde) Geräte erhalten';
$hesklang['desc_ticket_closed']='(Kunde) Geräte geschlossen/gelöst';
$hesklang['desc_category_moved']='(Mitarbeiter) Geräte in eine neue Kategorie verschoben';
$hesklang['desc_new_ticket_staff']='(Mitarbeiter) Neues Geräte eingereicht';
$hesklang['desc_ticket_assigned_to_you']='(Mitarbeiter) wurde ein neues Geräte zugewiesen';
$hesklang['desc_new_note']='(Mitarbeiter) Neue Notiz auf einem mir zugewiesenen Geräte';
$hesklang['ticket_url']='Geräte URL';
$hesklang['et_num']='Anzahl der Geräte';
$hesklang['et_list']='Liste der Support-Geräte';
$hesklang['select_category_staff']='Bitte eine Gerätekategorie auswählen';
$hesklang['cf_intro']='Diese Funktion verwenden um benutzerdefinierte Felder zum Einreichen eines Geräteformulars hinzuzufügen, damit zusätzliche Daten von Kunden erfassen werden können.';
$hesklang['can_resolve']='Kann Geräte lösen';
$hesklang['can_change_own_cat']='Gerätekategorie ändern (erlauben)';
$hesklang['can_submit_any_cat']='Kann Geräte für jede Kategorie einreichen';
$hesklang['noauth_submit']='Keine Berechtigung Geräte für diese Kategorie einzureichen';
$hesklang['noauth_move']='Keine Berechtigung Geräte in diese Kategorie zu verschieben';
$hesklang['noauth_resolve']='Keine Berechtigung Geräte zu lösen';
$hesklang['statuses_intro']='Dieses Werkzeug anwenden, um einen benutzerdefinierten Gerätestatus zum Helpdesk hinzuzufügen';
$hesklang['list_tkt_status']='Liste aller Geräte mit diesem Status';
$hesklang['status_not_empty']='Dieser Status kann nicht entfernt werden, da Geräte mit diesem Status vorhanden sind';
$hesklang['numsub']='Übermittelte Geräte';
$hesklang['hidf']='Ausgeblendete Eingaben sind für Kunden nicht sichtbar (der Wert ist weiterhin auf der Geräte-Detailseite sichtbar, sofern als öffentlich festgelegt ist). Nur Mitarbeiter können die versteckten Felder sehen.';
$hesklang['fetch_warning']='Dies könnte zu einer Emailschleife führen, in der neue Geräte aus Benutzeremailbenachrichtigungen erstellt werden. Die Abrufemailadresse sollte eindeutig sein und nicht von anderen Personen verwendet werden.';
$hesklang['can_view_ass_by']='Kann Geräte anzeigen welche anderen zugewiesen wurden';
$hesklang['can_privacy']='Kann Geräte anonymisieren';
$hesklang['confirm_anony']='Dieses Geräte anonymisieren';
$hesklang['privacy_anon_info']='Entferne alle persönlich identifizierbaren Daten und Inhalte von Geräte (Kundenname, E-Mail, Nachricht, Anhänge, IP ...), aber behalte Geräte in der Datenbank für Statistiken (DSGVO: Recht vergessen zu werden).';
$hesklang['success_anon']='Geräte erfolgreich anonymisiert';
$hesklang['num_tickets_anon']='Anzahl der anonymisierten Geräte: <b>%d</b>';
$hesklang['anon_IP']='0.0.0.0'; // IP in anonymized Geräte
$hesklang['anon_name']='[Kunde]'; // Customer name in anonymized Geräte
$hesklang['anon_email']=''; // Customer email in anonymized Geräte

$hesklang['anon_message']='[Nachricht]'; // Geräte message in anonymized Geräte
$hesklang['print_selected']='Ausgewählte Geräte drucken';
$hesklang['assign_1']='Ausgewählte Geräte wurden auf "Nicht zugewiesen" festgelegt.';
$hesklang['assign_2']='Geräte Nr. %1$s nicht zugewiesen'; // %1$s = ticket numerical ID
$hesklang['assign_5']='%1$s Fehler: %2$s kann auf diese Gerätekategorie nicht zugreifen'; // %1$s = ticket tracking ID, %2$s = owner name
$hesklang['anon_subject']='[Fehlerbeschreibung]'; // Geräte subject of anonymized Geräte
$hesklang['assign_log']='Sammelgerätzuweisung Ergebnis:<br /><br />Zugewiesen: %1$s<br />Fehler: %2$s<br /><br />Log:<br /><pre>%3$s</pre>'; // %1$s = number of Geräte assigned, %2$s = number of errors, %3$s = log
$hesklang['btn_lock']='Geräte sperren';
$hesklang['btn_tag']='Geräte markieren';
$hesklang['btn_untag']='Gerätemarkierung entfernen';
$hesklang['btn_anony']='Geräte anonymisieren';
$hesklang['btn_delt']='Geräte löschen';
$hesklang['tns']='Gerätebenachrichtigungen wurden erneut gesendet';
$hesklang['export_selected']='Ausgewählte Geräte exportieren';
$hesklang['create_new_ticket']='Neues Gerät eintragen';
$hesklang['view_existing_tickets']='Vorhandene Geräte anzeigen';
$hesklang['ticket_details']='Geräte Details';
$hesklang['hide_replies']='Geräte-Antworten ausblenden';
$hesklang['lwidth']='Geräte-Breite begrenzen';
$hesklang['statistics']['ntsp']='Keine Geräte in der ausgewählten Zeitspanne.';
$hesklang['statistics']['pie_title_as']='Offene Reparaturen: Zugeteilt vs. Nicht zugeteilt';
$hesklang['statistics']['pie_title_so']='Status der offenen Geräte';
$hesklang['statistics']['retic']='Geräte:';
$hesklang['statistics']['chart_title_md']='Geräte pro Tag des Monats';
$hesklang['statistics']['chart_title_wd']='Geräte pro Wochentag';
$hesklang['statistics']['chart_title_ttr']='Zeit vom Einreichen bis zum Lösen eines Geräte';
$hesklang['statistics']['chart_title_ttrc']='Geräte innerhalb eines Zeitrahmens gelöst';
$hesklang['statistics']['chart_title_srt']='Mitarbeiterantworten pro Geräte';
$hesklang['statistics']['chart_title_srtr']='Mitarbeiterantworten pro Geräte (nur gelöste Geräte)';
$hesklang['statistics']['chart_title_srt1']='Mitarbeiterantworten pro Geräte (Geräte mit mindestens 1 Antwort)';
$hesklang['statistics']['axis3']='% von Geräte';
$hesklang['statistics']['axis7']='Anzahl der Geräte';
$hesklang['statistics']['attr']='Durchschnittliche Stunden und Minuten zur Lösung eines Geräte:';
$hesklang['statistics']['trept']='Gesamtzahl der Geräte, auf die das Personal geantwortet hat:';
$hesklang['statistics']['trnr']='Gesamtzahl der Geräte ohne Antwort des Personals gelöst:';
$hesklang['statistics']['tsrt']='Durchschnittliche Personalantworten pro Geräte:';
$hesklang['statistics']['tsro']='Durchschnittliche Personalantworten pro Geräte (Geräte mit mindestens 1 Personalantwort):';
$hesklang['statistics']['tsrc']='Durchschnittlich erforderliche Antworten des Personals zur Lösung eines Geräte:';
$hesklang['statistics']['tsrr']='Durchschnittlich erforderliche Antworten des Personals zur Lösung eines Geräte (Geräte mit mindestens 1 Antwort des Personals):';
$hesklang['overdue_ticket']='[#%%TRACK_ID%%] Geräte Überfällig';
$hesklang['escalate']['page_title']='Eskalations Geräte'; // Page H2 title
$hesklang['escalate']['intro']='Dieses Modul hilft Ihnen, Geräte zu eskalieren, die nicht rechtzeitig bearbeitet werden.';
$hesklang['escalate']['feat2']='Geräte, die sich dem Fälligkeitsdatum nähern und überfällige Geräte';
$hesklang['escalate']['feat3']='Gerätepriorität automatisch ändern, ein Geräte neu zuweisen, eine E-Mail-Benachrichtigung senden';
$hesklang['escalate']['ifat']='Ein Support-Geräte ist:'; // If a ticket is not (resolved) within X (minutes) of submitting, then (resend notification)
$hesklang['escalate']['assto']='Geräte zuweisen an:';
$hesklang['escalate']['tic']='Geräte in der Kategorie:';
$hesklang['escalate']['tat']='Geräte zugewiesen an:';
$hesklang['escalate']['tws']='Geräte mit Status:';
$hesklang['escalate']['tall']='Wenden Sie diese Regel auf bestehende und zukünftige Geräte an';
$hesklang['escalate']['tfn']='Diese Regel nur auf zukünftige Geräte anwenden, bestehende Geräte ignorieren';
$hesklang['escalate']['tfi']='Wenden Sie diese Regel nur auf Geräte mit einer ID höher als an:';
$hesklang['escalate']['e_a']='Wählen Sie mindestens eine Aktion aus, die bei übereinstimmenden Geräte ausgeführt werden soll';
$hesklang['escalate']['edit_notice']='Das Ändern des Regelauslösers hat keine Auswirkungen auf Geräte, die bereits durch diese Regel eskaliert wurden (es sei denn, Sie setzen die Regel zurück).';
$hesklang['escalate']['reset2']='Sind Sie sicher, dass Sie diese Regel zurücksetzen wollen?<br><br>Regeltreffer werden auf 0 gesetzt und jedes Geräte, das dieser Regel entspricht, wird erneut eskaliert.';
$hesklang['escalate']['thist6']='<li class="smaller">%1$s | - Fehler: %2$s hat nicht die Berechtigung, auf die Geräte-Kategorie</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist7']='<li class="smaller">%1$s | - Fehler: %2$s hat nicht die Berechtigung, Geräte anzusehen</li>'; // %1$s = date, %2$s = owner
$hesklang['escalate']['thist8']='<li class="smaller">%1$s | - Fehler: kein anderer Benutzer, der dieses Geräte sehen kann</li>'; // %1$s = date
$hesklang['escalate']['matched']='Anzahl der gefundenen übereinstimmenden Geräte: %1$s '; // %1$s = number of Geräte
$hesklang['escalate']['tbef']='Bevor eine Regel aktiv wird, müssen Sie sie aktivieren, indem Sie auf das Kontrollkästchen in der Spalte &quot;AKTIV&quot; klicken.<br><br>
                               Wir empfehlen Ihnen dringend, jede Regel zu <strong>simulieren</strong>, indem Sie auf das Symbol %1$s (Diese Regel simulieren) in der Regeltabelle klicken
                               um zu sehen, wie sie sich auf Ihre bestehenden Geräte auswirkt, bevor Sie sie aktivieren.<br><br>
                               <strong>Aktive Regeln werden alle %2$s Minuten verarbeitet. Ein Geräte kann von jeder Regel nur einmal eskaliert werden</strong>.'; // %1$s = replaced by icon, %2$s = number of minutes, usually 5 or more

$hesklang['desc_ticket_escalated']='(Mitarbeiter) Geräte wurde eskaliert'; // Email description in admin panel
$hesklang['ticket_formatting_staff']='Geräte Formatierung (Mitarbeiter)';
$hesklang['due_date_updated']='Das Geräte-Fälligkeitsdatum wurde aktualisiert.';
$hesklang['ql_all']='Alle Geräte';
$hesklang['ql_alo']='Alle offenen Geräte';
$hesklang['ql_fit']='Gefilterte Geräte';
$hesklang['not_aos']='Einige offene Reparaturen, auf die Sie Zugriff haben, werden aufgrund Ihrer Filter nicht angezeigt.';
$hesklang['desc_overdue_ticket']='(Mitarbeiter) Geräte Überfällig';
$hesklang['overdue_starting']='Benachrichtigungsprozess für überfällige Geräte starten';
$hesklang['overdue_sim']='Das Senden von E-Mails und das Aktualisieren von Geräte ist im Modus SIMULATION deaktiviert.';
$hesklang['overdue_ticket_count']='%s Geräte gefunden, die überfällig sind.'; // %s = Number of Geräte
$hesklang['overdue_finished']='Beendete überfällige Geräte. %s E-Mails gesendet. %s E-Mails konnten nicht gesendet werden.'; // %s = Successful emails, failed emails
$hesklang['chg_cat']='Klicken Sie, um die Gerätekategorie zu ändern';
$hesklang['tlan']='Geräte Sprache';
$hesklang['new_ticket_by_staff']='[#%%TRACK_ID%%] Geräte erhalten: %%SUBJECT%%';
$hesklang['aa_cat']='Geräte in dieser Kategorie automatisch zuweisen';
$hesklang['autoassign_off']='Nein, Geräte als nicht zugewiesen einreichen';
$hesklang['autoassign_selected_include']='Ausgewählte Benutzer sollten bei der automatischen Zuweisung von Geräte in dieser Kategorie <strong>miteinbezogen</strong> werden';
$hesklang['autoassign_selected_exclude']='Ausgewählte Benutzer sollten <strong>ausgeschlossen</strong> werden, wenn Geräte in dieser Kategorie automatisch zugewiesen werden';
$hesklang['email_to_ticket']='E-Mail an Geräte';
$hesklang['email_to_ticket_info']='Die Umwandlung von E-Mails in Geräte erfordert einige serverseitige Einstellungen. Für Details siehe bitte <a href="%s" target="_blank">dieser Wissensdatenbank-Leitfaden</a>.'; // %s = link to article
$hesklang['block_ignore']='E-Mail an Geräte - E-Mails ignorieren und Schleifen verhindern';
$hesklang['satisfaction']['after']='nachdem das Geräte gelöst wurde, bevor die E-Mail versendet wird';
$hesklang['satisfaction']['tc']='Es wurden %s der geschlossenen Geräte gefunden, für die keine Zufriedenheitsumfrage gesendet wurde.'; // %s = Number of Geräte
$hesklang['satisfaction']['finished']='Beendete Umfrage zur Kundenzufriedenheit. E-Mails gesendet: %1$s. E-Mails konnten nicht gesendet werden: %2$s. Geräte ohne E-Mail: %3$s. Geräte mit Opt-out-E-Mail: %4$s.'; // %1$s = successful emails, %2$s = failed emails, %3$s = number of Geräte without an email, %4$s = number of Geräte with opt-out users
$hesklang['satisfaction']['ne']='Ignorieren, dieses Geräte ist ohne Email-Adresse';
$hesklang['satisfaction']['feat3']='Wenn Sie ein Geräte gelöst haben, sendet Hesk Ihrem Kunden den Link zur Umfrage per E-Mail.';
$hesklang['wrn_imap']='Sie haben viele ungelesene E-Mails in Ihrer Mailbox (%1$s). Hesk wird alle diese E-Mails in Geräte umwandeln.<br><br>Möglicherweise möchten Sie vorhandene E-Mails als gelesen markieren, bevor Sie die %2$s oder verwenden Sie ein neues E-Mail-Konto für Hesk.'; // %1$s = number of emails, %2$s = IMAP or POP3 fetching
$hesklang['wrn_pop3']='Sie haben viele E-Mails in Ihrer Mailbox (%1$s). Hesk wird alle diese E-Mails in Geräte umwandeln.<br><br>Sie können bestehende E-Mails löschen, bevor Sie %2$s aktivieren oder ein neues E-Mail-Konto für Hesk verwenden.'; // %1$s = number of emails, %2$s = IMAP or POP3 fetching
$hesklang['desc_new_ticket_by_staff']='(Kunde) Neues, von Mitarbeitern eingereichtes Geräte';
$hesklang['previous_tickets']='Frühere Geräte';
$hesklang['no_previous']='Keine vorherigen Geräte von %s'; // %s = email address
$hesklang['all_previous']='Alle bisherigen Geräte auflisten';
$hesklang['confirm_delete_ticket']='Sind Sie sicher, dass Sie dieses Geräte dauerhaft löschen möchten?';
$hesklang['select_new_category']='Anzahl der Geräte in dieser Kategorie: %s<br><br>Bitte wählen Sie eine neue Kategorie, in die diese Geräte übertragen werden sollen:'; // %s = Number of Geräte
$hesklang['deleting_user_with_tickets']='Anzahl der Geräte, die diesem Benutzer zugewiesen wurden: %1$s<br>Anzahl der <b>Offenen</b> Geräte, die diesem Benutzer zugewiesen sind: %2$s<br><br><b>Offene</b> Geräte werden <b>nicht zugewiesen</b> nachdem dieser Benutzer gelöscht wurde.'; // %1$s = total Geräte, %2$s = open Geräte
$hesklang['antdemo']='Das Einreichen von Geräte über das Admin-Panel wurde im Demo-Modus deaktiviert.<br><br>Bitte verwenden Sie die <a href="%s" target="_blank">öffentliche Seite</a> um ein Testgerät einzureichen.';
// Fix senden button, because it will change status to 'Fertig' 
$hesklang['submit_reply']='Gerät als Fertig markieren';
// Absenden wird zu Status ändern:
$hesklang['submit_as']='Eintrag speichern:';

$hesklang['copy_link']='Geräte-Link kopieren';
$hesklang['copy_link_title']='Öffentlichen Link zu diesem Gerät kopieren';

// DO NOT CHANGE BELOW
if (!defined('IN_SCRIPT')) die('PHP syntax OK!');