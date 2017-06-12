<?php

    // deutsch
    // 21.11.2003
    // �bersetzung von Paulo M. Santos
    // santos@astalavista.com

$class_path = '../../';
//language class
require_once('class.rich_lang.php');

    //extract variables submitted to this page
    @extract($_GET);

    $rich_lang = new rich_lang($lang, false); //text data in current language

?><HTML>

<HEAD>
    <TITLE>Rich Editor Hilfe</TITLE>

    <META name="Copyright" content="Copyright (c) 2002-2004 Vyacheslav Smolin">
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $rich_lang->item("Charset"); ?>">
<STYLE type="text/css">
.help_tips{
  font-family: "Verdana";
  font-size: xx-small;
}
.help_text p,div{
  font-family: "Verdana";
  font-size: x-small;
}
td.help_action{
  text-align: center;
  vertical-align: center;
}
a.rich_link {
  text-decoration:none;
  color:blue;
}
</STYLE>

</HEAD>

<BODY
BGCOLOR="#FFFFFF"
TEXT="#000000"
LINK="#0000FF"
VLINK="#840084"
ALINK="#0000FF"
>

<H1><a href="http://www.richarea.com/" target="_blank" class="rich_link" title="Rich Editor">Editor</a> Hilfe</H1>


<HR>

<!--
<P class="help_text">
<div>
Um &lt;br&gt; statt eines neuen Absatzes einzuf�gen: Shift+Enter dr�cken.
</div>
</P>
-->

<H2>Vorhandene Schaltfl�chen</H2>

<P>
<TABLE BORDER="1" CELLSPACING="0" CELLPADDING="0" WIDTH="100%" class="help_tips">
<TR BGCOLOR="#CCCCCC">
<TD class="help_action">
<B>Schaltfl�che</B>
</TD>
<TD ALIGN="CENTER" VALIGN="CENTER" WIDTH="100%">
<B>Beschreibung</B>
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('FullScreen'); ?>" src="../images/fullscreen.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Schaltet den Editor in den Ganzer-Bildschirm Modus um (wenn sich keine andere Editoren
im Ganzer-Bildschirm Modus befinden)<br><br>

Wenn der Modus eingeschaltet ist, erscheint die Schaltfl�che gedr�ckt.<br><br>

<b>Anmerkung: </b>der Modus ist nur mit MSIE 5.5+ vorhanden!
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Preview'); ?>" src="../images/preview.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Zeigen die Vorschau des Inhalts, der im unteren Fenster editiert wird.<br><br>

Verwenden Sie es, um zu sehen, wie der Inhalt in Ihrem Browser aussieht.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Find'); ?>" src="../images/find.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein Dialog-Fenster zum Suchen/Ersetzen von Text innerhalb des Editors<br><br>

Die Suche nach Gro�-/Kleinschreibungen ist ebenso m�glich wie die Suche nach ganzen W�rtern
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Cut'); ?>" src="../images/cut.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Schneidet den markierten Teil des Dokuments in die Zwischenablage aus.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Copy'); ?>" src="../images/copy.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Kopiert den markierten Teil des Dokumentes in die Zwischenablage.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Paste'); ?>" src="../images/paste.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt den Inhalt der Zwischenablage in die gegenw�rtige Cursor-Position ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Undo'); ?>" src="../images/undo.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Macht die vorhergehende �nderung r�ckg�ngig.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Redo'); ?>" src="../images/redo.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Stellt die letze �nderung am Dokument wieder her.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Bold'); ?>" src="../images/bold.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Formatiert den markieten Text fett. Ist die Markierung bereits fett formatiert, wird die diese Formatierung entfernt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Italic'); ?>" src="../images/italic.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Formatiert den markierten Text kursiv. Ist die Markierung bereits kursiv formatiert, wird diese Formatierung entfernt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Underline'); ?>" src="../images/underline.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Unterstreicht den markierten Text. Ist die Markierung bereits unterstrichen, wird die Formatierung entfernt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Strikethrough'); ?>" src="../images/strikethrough.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Zeichnet eine Linie durch den markierten Text. Ist die Markierung bereits durchstrichen, wird diese Formatierung entfernt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SuperScript'); ?>" src="../images/superscript.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ndert das Format des markierten Textes in Hochgestellt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SubScript'); ?>" src="../images/subscript.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ndert das Format des markierten Textes in Tiefgestellt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyLeft'); ?>" src="../images/left.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Richtet die in der Zeile befindlichen Objekte linksb�ndig mit einem unregelm�ssigen rechten Rand aus.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyCenter'); ?>" src="../images/center.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Zentriert die in der Zeile befindlichen Objekte.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyRight'); ?>" src="../images/right.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Richtet die in der Zeile befindlichen Objekte rechtsb�ndig mit einem unregelm�ssigen linken Rand aus.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyFull'); ?>" src="../images/justify.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Richtet die markierten Abs�tze am linken und rechten Seitenrand aus.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertOrderedList'); ?>" src="../images/numlist.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt den markierten Abs�tzen eine Nummerierung hinzu oder entfernt diese.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertUnorderedList'); ?>" src="../images/bullist.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt den markierten Abs�tzen Aufz�hlungszeichen hinzu oder entfernt diese.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Outdent'); ?>" src="../images/outdent.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
R�ckt den markierten Absatz bis zum vorherigen Tabstop ein oder r�ckt den Inhalt
der markierten Elemente auf der Grundlage der Standardschriftart um eine
Zeichenbreite nach links ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Indent'); ?>" src="../images/indent.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
R�ckt den markierten Absatz bis zum n�chsten Tabstop ein oder r�ckt den Inhalt
der markierten Elemente auf der Grundlage der Standardschriftart um eine
Zeichenbreite nach rechts ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertHorizontalRule'); ?>" src="../images/h_line.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt eine Horizontale Linie an der Position des Cursors ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('RemoveFormat'); ?>" src="../images/rem_format.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Entfernt die Formatierung des markierten Textes.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateTable'); ?>" src="../images/table.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um eine neue Tabelle an der Stelle des Cursors
zu erstellen oder um die Eigeschaften der ausgw�hlten Tabelle zu definieren.<br><br>

Tabelleneigenschaften setzen/�ndern:<br>
Zeilenanzahl -- Anzahl der Zeilen in der Tabelle;
Spaltenanzahl -- Anzahl der Spalten in der Tabelle;
Breite -- Breite der Tabelle;
H�he -- H�he der Tabelle;
Hintergrund Farbe -- Hintergrundfarbe der Tabelle;
Hintergrund Grafik -- Hintergrundgrafik der Tabelle;
Innenabstand -- Innenabstand der Zelle; Aussenabstand -- Aussenabstand der Zelle;
Rahmen Breite -- Breite der Rahmen um die Tabellenzellen;
Rahmen Helle Farbe -- Farbe des oberen und linken Rahmens der Tabellenzellen;
Rahmen Dunkle Farbe -- Farbe des unteren und rechten Rahmens der Tabellenzellen<br><br>

Zelleneigenschaften �ndern:<br>
Breite -- Breite der Zelle; H�he -- H�he der Zelle; Ausrichten -- Vertikale
Ausrichtung der Zelle; Farbe -- Hintergrundfarbe der Zelle<br><br>

Um die Eingenschaften der Tabelle zu �ndern klicken Sie mit der rechten
Maustaste auf den Rahmen oder markieren Sie sie und w�hlen den entsprechenden
Knopf auf der Toolbar.<br>
Um die Zelleneigenschaften zu �ndern klicken Sie mit der rechten Maustaste
in der Zelle.<br><br>

Um Farben zu setzen, klicken Sie auf das entsprechende Kontrollk�stchen or
auf das farbige Feld links vom Kontrollk�stchen.<br>
Um einen Grafikhintergrund zu setzen, klicken Sie auf das entsprechende
Kontrollk�stchen oder auf das farbige Feld zwischen dem Kontrollk�stchen und
dem Text 'Image:'<br>
Um die Farbe/Grafik zu l�schen schalten Sie das entsprechende Kontrollk�stchen
aus<br><br>

<b>Anmerkung:</b> Die Felder 'Zeilen' und 'Spalten' k�nnen nicht ver�ndert
werden -- Benutzen Sie stattdessen Zeile/Spalte einf�gen/l�schen

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertRow'); ?>" src="../images/insrow.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt eine Zeile nach der Zeile, in der man sich befindet, ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteRow'); ?>" src="../images/delrow.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
L�scht die Zeile, in der man sich befindet.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertColumn'); ?>" src="../images/inscol.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt eine Spalte nach der Spalte, in der man sich befindet, ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteColumn'); ?>" src="../images/delcol.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
L�scht die Spalte, in der man sich befindet.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertCell'); ?>" src="../images/inscell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt eine Zelle nach der Zelle, in der man sich befindet ein.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteCell'); ?>" src="../images/delcell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
L�scht die Zelle, in der man sich befindet.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('MergeCells'); ?>" src="../images/mergecells.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Verbindet die ausgew�hlte Zelle mit der n�chsten, wenn diese vorhanden ist.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SplitCell'); ?>" src="../images/splitcell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Teilt die markierte Zelle in zwei auf, wenn die Zellen fr�her verbunden wurden.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateForm'); ?>" src="../images/form.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um ein neues Formular an der Stelle des
Cursors zu erstellen.<br><br>

Formulareigenschaften setzen/�ndern:<br>
Name -- Name des Formulars; �bertragungs-Methode -- Art der �bertragung der
Daten des Formulars (get/post);
Aktion -- Bestimmungsort der gesendeten Daten<br><br>

Schalten Sie 'Gitternetzlinien einblenden' ein, um alles in den Formularen des Dokuments
zu sehen.<br><br>

Um die Eigenschaften eines Formulars zu �ndern, klicken Sie mit der rechten
Maustaste darauf.<br><br>

Um die Eigenschaften von anderen Formularen zu bearbeiten, klicken Sie mit der
rechten Maustaste auf den Rahmen, oder markieren Sie es und klicken
dann auf die entsprechende Schaltfl�che auf der Toolbar.

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateText'); ?>" src="../images/text.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um ein neues Textfeld an der Stelle des
Cursors zu erstellen.<br><br>

Textfeldeigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Text -- Vorbelegter Text des Elements;
Typ -- Art des Textfeldes (text/password); Maximale L�nge --
Maximale Anzahl verf�gbare Zeichen im Element;
Feldl�nge -- Breite des Elements in Zeichen

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateTextArea'); ?>" src="../images/textarea.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um einen neuen Textbereich an der Stelle des
Cursors zu erstellen.<br><br>

Textbereicheigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Text -- Vorbelegter Text im Element;
Zeilen -- H�he des Elements in Zeichen; Spalten --
Breite des Elements in Zeichen

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateButton'); ?>" src="../images/button.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um einen neuen Button (neue Schaltfl�che) an der
Stelle des Cursors zu erstellen.<br><br>

Button-Eigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Text -- Vorbelegter Text im Element;
Typ -- Art des Buttons (button/reset/submit)

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateSelect'); ?>" src="../images/select.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Ruft ein Dialogfenster auf, um eine Auswahlliste an der aktuellen Cursorposition zu erstellen
<br><br>

Setzen/-ndern von Listen-Eigenschaften:<br>
Name -- Name des Listen-Elements; Gr�-e -- gibt die Zahl der Zeilen der Liste an,
die gleichzeitig angezeigt werden sollen; Mehrfach -- Wenn gesetzt, sind Mehrfach-Auswahlen
m�glich. Wenn nicht gesetzt, ist nur eine Einzelauswahl erlaubt;
Items -- Optionen eines Listen-Elements
<br><br>

Eigenschaften von Listen-Optionen setzen/�ndern:<br>
Text -- Inhalt der Auswahl; Wert -- Anfangswert der Auswahl;
Ausgew�hlt -- wenn gesetzt, wird diese Option vorausgew�hlt
<br><br>

Buttons:<br>
Hinzuf�gen -- f�gt eine Auswahl mit den angegebenen Werten f�r Text, Wert und
Ausgew�hlt hinzu; L�schen -- l�scht das gew�hlte Element aus der Auswahlliste; Aktualisieren --
aktualisiert eine Auswahl mit den angegebenen Werten f�r Text, Wert und
Ausgew�hlt; /\ -- verschiebt die ausgew�hlte Option um ein Feld nach oben; \/ -- verschiebt
die ausgew�hlte Option um ein Feld nach unten

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateHidden'); ?>" src="../images/hidden.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um ein verstecktes Feld an der Stelle des
Cursors zu erstellen.<br><br>

Verstecktes Feld-Eigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Wert -- Wert des Elements

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateCheckBox'); ?>" src="../images/checkbox.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um ein neues Kontrollk�stchen an der Stelle des
Cursors zu erstellen.<br><br>

Kontrollk�stchen-Eigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Wert -- Wert des Elements; Gesetz -- wenn gesetzt
befindet sich im Kontrollk�stchen ein H�cklein, andernfalls - nicht gesetzt

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateRadio'); ?>" src="../images/radio.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet eines neues Dialog Fenster um ein neues Optionsfeld an der Stelle des
Cursors zu erstellen.<br><br>

Optionsfeldeigenschaften setzen/�ndern:<br>
Name -- Name des Elements; Wert -- Wert des Elements; Gesetzt -- wenn gesetzt
befindet sich im Optionsfeld ein Punkt, andernfalls - nicht gesetzt

</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FormatBlock'); ?>
</TD>
<TD VALIGN="TOP">
Setzt ein Absatz-Format f�r den markierten Text.
</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FontName'); ?>
</TD>
<TD VALIGN="TOP">
�ndert die Schriftart des markierten Textes.
</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('ClassName'); ?>
</TD>
<TD VALIGN="TOP">
Setzt ein StyleSheet f�r den markierten Bereich des Dokuments.
</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FontSize'); ?>
</TD>
<TD VALIGN="TOP">
�ndert den Schriftgrad des markierten Textes.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('ForeColor'); ?>" src="../images/fgcolor.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ndert die Farbe des markierten Textes.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('BackColor'); ?>" src="../images/bgcolor.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ndert die Hintergrundfarbe des markierten Textes.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateImage'); ?>" src="../images/image.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">

�ffnet ein neues Dialog Fenster um eine neue Grafik an der Stelle des Cursors
zu erstellen.<br><br>

Das Dialogfenster besteht auf vier Abschnitten:<br>
Datei-Manager (in der linken Seite des Fensters), Vorschau (in der oberen
rechten Ecke), Eigenschaften (unter der Vorschau) und Datei-Uploading (ganz unten
im Dialogfenster)<br><br>

Datei-Manager zeigt den Aufbau der Ordner vom Hauptordner der hinaufgeladenen
Dateien.<br>
Um Unterordner und Dateien zu sehen, klicken Sie auf das entsprechende
'+' Zeichen. Um den Ordner wieder zu schliessen, klicken Sie auf das '-' Zeichen.
<br>
Der Name des gegenw�rtigen Ordners f�r das Datei-Uploading ist mit roter Farbe
hervorgehoben. Um den Ordner zu �ndern, klicken Sie auf den Namen des gew�nschten
Ordners.<br>
Um einen neuen Ordner zu erstellen, klicken Sie auf 'Ordner erstellen',
geben Sie einen Namen ein und klicken Sie auf 'Ok' um zu best�tigen, oder auf
'Abbrechen' und die Aktion zu beenden.<br>
Klicken Sie auf 'r'/'x' um den Ordner bzw. die Datei umzubenennen oder zu
l�schen.<br><br>
<b>Anmerkung:</b> Ordner k�nnen nur gel�scht werden, wenn sich keine weiteren
Ordner oder Dateien darin befinden.<br><br>

Wenn eine Grafik ausgew�hlt wird, wird sie direkt im Vorschau Fenster angezeigt.
<br><br>

Klicken Sie auf 'Durchsuchen' um eine eigene Grafik hinaufzuladen.<br><br>

Grafikeigenschaften setzen/�ndern:<br>

Ausrichtung -- Horizontale Ausrichtung der Grafik; Breite -- Breite der Grafik;
H�he -- H�he der Grafik; Rahmen -- Dicke des Rahmens um die Grafik; Vspace --
Vertikaler Abstand zwischen Grafik und Text; Hspace -- Horizontaler Abstand zwischen
Grafik und Text; Alternativer Text -- Alternativer Text f�r die Grafik (erscheint
wenn sich der Mauszeiger �ber der Grafik befindet); Quelle -- definiert den
Bild-Speicherort<br><br>

Um die Eigenschaften zu �ndern, klicken Sie mit der rechten Maustaste darauf oder
w�hlen Sie die Grafik und klicken Sie dann auf die entsprechende Schaltfl�che
auf der Toolbar.

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateFlash'); ?>" src="../images/flash.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um eine neue Flash Datei an der Stelle des
Cursors zu erstellen.<br><br>

Flasheigenschaften setzen/�ndern:<br>
Ausrichtung -- Horizontale Ausrichtung des Objekts; Breite -- Breite des Objekts;
H�he -- H�he des Objekts; Abspielen -- Wenn gesetzt startet Flash automatisch die
Abspielung; Schleife -- wenn gesetzt wird das Abspielen wiederholt; Men� -- wenn gesetzt
wird das vollst�ndige Flashmen� bei rechtem Mausklick angezeigt;
Hintergrundfarbe -- Hintergrundfarbe des Objekts; Qualit�t --
Definiert die Qualit�t von Flash; Source -- defines flash location<br><br>

Das Arbeiten mit diesem Fenster funktioniert genau gleich wie das Arbeiten mit
dem Fenster f�r neue Grafiken.<br><br>

Um die Eigenschaften des Falsh Objekt zu �ndern klicken Sie mit der rechten
Maustaste darauf, oder markieren Sie es und klicken Sie auf die entsprechende
Schaltfl�che auf der Toolbar<br><br>

<b>Anmerkung: </b>Um das Flash Objekt zu bearbeiten k�nnen Sie den Rechtsklick
nur unter MSIE 6.0+
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateLink'); ?>" src="../images/link.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um einen Hyperlink (Verweis) an der Stelle des
Cursors zu erstellen.<br><br>

Hyperlinkeigenschfaten setzen/�ndern:<br>
Ziel -- Definiert das Ziel des Hyperlinks beim Draufklicken; Hyperlink -- Definiert
die URL f�r den Hyperlink; Name -- Linkname (um Ankerpunkte zu erstellen);
Titel -- dieser Text wird angezeigt, wenn man mit dem Mauszeiger �ber den Link
f�hrt<br><br>

<b>Anmerkung: </b>Um den Hyperlink zu entfernen, �ffnen Sie das Dialog Fenster,
und entfernen Sie 'link'<br><br>

Um die Eigenschaften zu bearbeiten markieren Sie den ganzen Link oder einen
Teilst�ck und klicken Sie dann auf die entsprechende Schaltfl�che auf der
Toolbar. Um einen Ankerpunkt zu erstellen, kann ausschlie�lich der Wert des
'name'-Attributs angegeben werden<br><br>

Funktioniert gleich wie das Dialogfenster f�r neue Grafiken.

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('PasteWord'); ?>" src="../images/paste_word.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
F�gt MS Word formatierte Elemente von der Zwischenablage an die Stelle des
Cursors. Ausserdem entfernt es vor dem Einf�gen alle leeren Tags und Formatierungen.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SwitchBorders'); ?>" src="../images/borders.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Zeigt alle unsichtbaren Rahmen. Alle Tabellen und Zellen haben graue Rahmen.
<br>
Diese Aktion �nder nicht am Dokument selber.<br><br>

Wenn der Modus an ist, erscheint die Schaltfl�che gedr�ckt.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertChar'); ?>" src="../images/inschar.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um spezielle Sonderzeichen an der Stelle des
Cursors zu erstellen.<br><br>

Klicken Sie auf das gew�nschte Symbol um es einzuf�gen.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertSnippet'); ?>" src="../images/snippet.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um einen Snippet (custom html code) einzuf�gen.
Der ausgew�hlte Snippet wird in der Vorschau angezeit.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('PageProperties'); ?>" src="../images/page.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�ffnet ein neues Dialog Fenster um die Eigenschaften des Editor zu �ndern.<br><br>

Seiteneigenschaften �ndern:<br>
Titel -- Titel der Seite (wie 'title'-tag); Beschreibung --
Beschreibung der Seite (wie 'description'-tag); Keywords -- Setzt die
Keywords der Seite fest (wie 'keywords'-tag); Farbe --
Hintergrundfarbe f�r das Dokument; Grafik -- Hintergrundgrafik der Seite; Text --
Farbe des Textes; Hyperlink -- Farbe der Hyperlinks; Besuchter Hyperlink -- Farbe der besuchten
Hyperlinks; Aktiver Hyperlink -- Farbe der aktiven (noch nicht besuchten) Hyperlinks<br><br>

Um die Farben zu w�hlen, klicken Sie auf das entsprechende Kontrollk�stchen oder
auf den farbigen Bereich links vom Kontrollk�stchen.<br>
Um eine Hintergrundgrafik zu w�hlen, klicken Sie auf das entsprechende Kontrollk�stchen
oder auf den Abstand zwischen Kontrollk�stchen und dem Text 'Image:'<br>
Um die Farbe des Bildes zu l�schen, schalten Sie das entsprechende Kontrollk�stchen
aus<br><br>

<b>Anmerkung: </b>Diese Eigenschaft ist nur im Seitenmodus verf�gbar.

</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Help'); ?>" src="../images/help.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Zeigt diese Hilfe-Datei an (falls noch nicht ge�ffnet).
</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('Source'); ?>
</TD>
<TD VALIGN="TOP">
Schaltet den Editor zwischen WYSIWYG und Quellcode Modus um.
</TD>
</TR>

</TABLE>
</P>

<P class="help_text">
<div>
<b>Anmerkung </b>Bitte beachten Sie, dass einige dieser Aktionen vielleicht vom
Administrator ge�ndert wurden und somit nicht angezeigt werden!
</div>
</P>

<HR>

<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" WIDTH="100%">
<TR>
<TD ALIGN="RIGHT">
<A HREF="#TOP">Nach oben</A>
</TD>
</TR>
</TABLE>
</BODY>
</HTML>