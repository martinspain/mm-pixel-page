<?php

$class_path = '../../';
//language class
require_once('class.rich_lang.php');

    //extract variables submitted to this page
    @extract($_GET);

    $rich_lang = new rich_lang($lang, false); //text data in current language

?><HTML>

<HEAD>
    <TITLE>Rich Editor Help</TITLE>

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

<H1><a href="http://www.richarea.com/" target="_blank" class="rich_link" title="Rich Editor">Editor</a> Yard�m </H1>

<HR>

<!--
<P class="help_text">
<div>
&lt;br&gt; yerine paragraf eklemek istiyorsan�z Shift+Enter tu� kombinasyonunu kullan�n�z.
</div>
</P>
-->

<H2>Edit�r�n �zellikleri </H2>

<P>
<TABLE BORDER="1" CELLSPACING="0" CELLPADDING="0" WIDTH="100%" class="help_tips">
<TR BGCOLOR="#CCCCCC">
<TD class="help_action">
<B>Eylem</B>
</TD>
<TD ALIGN="CENTER" VALIGN="CENTER" WIDTH="100%">
<B>Tan�m</B></TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('FullScreen'); ?>" src="../images/fullscreen.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Edit�r� tam ekrana �evirir. (Piyasadaki di�er edit�rlerde hen�z bu �zellik yok)<br>
<br>

Bu modda iken kullanabilece�iniz butonlar se�ilebilir durumdad�r.<br>
<br>

<b>Not: </b>Bu mod MSIE 5.5 ve �zeri browserlar taraf�ndan desteklenmektedir </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Preview'); ?>" src="../images/preview.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Bulundu�unuz sayfan�n haricinde bir sayfa a�arak olu�turdu�unuz i�eri�e �n izleme yapman�z� sa�lar. <br>
<br>

 Olu�turdu�unuz sayfan�n internet taray�c�n�zda nas�l g�r�nd���n� bu buton sayesinde g�rebilirsiniz.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Find'); ?>" src="../images/find.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Editordeki yaz�lar i�inde arad���n�z metni kolay bir �ekilde bulup de�i�tirebilirsiniz. <br>
<br>

B�y�k k���k harf ve kelime bi�imi duyarl�l��� oldu�u i�in uzun metinlerde edit�r i�i aramalar�n�z da do�ru sonuca kolayl�kla ula�abilirsiniz.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Cut'); ?>" src="../images/cut.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili i�eri�i kesip haf�zaya al�r</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Copy'); ?>" src="../images/copy.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili i�eri�i kopyalar ve haf�zaya al�r
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Paste'); ?>" src="../images/paste.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Haf�zadaki i�eri�i imlecinizle g�sterdi�iniz yere yap��t�r�r.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Undo'); ?>" src="../images/undo.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
D�k�manda yapt���n�z son de�i�ikligi geri al�r</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Redo'); ?>" src="../images/redo.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
D�k�manda yapt���n�z son de�i�ikligi yineler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Bold'); ?>" src="../images/bold.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�y� kal�nla�t�r�r. E�er kal�n ise normal hale getirir.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Italic'); ?>" src="../images/italic.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�y� italik yapar. E�er italik ise normal hale getirir.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Underline'); ?>" src="../images/underline.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�n�n alt�n� �izer. E�er alt� �izili ise normal hale getirir.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Strikethrough'); ?>" src="../images/strikethrough.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�n�n �zerini �izer. E�er �zeri �izili ise normal hale getirir.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SuperScript'); ?>" src="../images/superscript.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u yerden itibaren �st simge yazabilirsiniz. Birkere daha t�klarsan�z normale d�ner . </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SubScript'); ?>" src="../images/subscript.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yerden itibaren alt simge yazabilirsiniz. Birkere daha t�klarsan�z normale d�ner . </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyLeft'); ?>" src="../images/left.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili d�k�man� yada imlecin bulundu�u pozisyondaki sat�r� sa�a do�ru hizalar.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyCenter'); ?>" src="../images/center.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili d�k�man� yada imlecin bulundu�u pozisyondaki sat�r� ortalar</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyRight'); ?>" src="../images/right.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili d�k�man� yada imlecin bulundu�u pozisyondaki sat�r� sola do�ru hizalar.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('JustifyFull'); ?>" src="../images/justify.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili d�k�man� iki yana yaslar. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertOrderedList'); ?>" src="../images/numlist.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili d�k�man� numara s�ral� listeye �evirir. Yada imlecin bulundu�u yerde numara s�ral� liste olu�turur. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertUnorderedList'); ?>" src="../images/bullist.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili d�k�man� madde i�aretli listeye �evirir. Yada imlecin bulundu�u yerde madde i�aretli liste olu�turur. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Outdent'); ?>" src="../images/outdent.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u pozisyondaki yaz�y� d��ar� kayd�r�r. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Indent'); ?>" src="../images/indent.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">�mlecin bulundu�u pozisyondaki yaz�y� i�eri kayd�r�r. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertHorizontalRule'); ?>" src="../images/h_line.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">�mlecin bulundu�u yere yatay �izgi ekler.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('RemoveFormat'); ?>" src="../images/rem_format.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili yada imlecin bulundu�u poziyondaki  yaz�n�n format�n� siler.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateTable'); ?>" src="../images/table.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yerde tablo olu�turmak i�in tablo ekleme penceresini a�ar yada se�ili tabloyu buradan de�i�tirebilirsiniz.<br>
<br>

Tablo Olu�tur/D�zenle:<br>
Sat�r say�s�-- Tablodaki sat�r say�s�; S�tun say�s�-- Tablodaki s�tun say�s�; Geni�lik --
Tablonun geni�li�i; Y�kseklik -- Tablonun y�ksekli�i; Dolgu rengi -- Tablonun arka fon rengi; Dolgu resim -- Tablonun arka fon resmi; H�cre i�i bo�luk-- H�cre i�indeki i�eri�in h�cre duvarlar�na olan mesafesi; H�cre d��� bo�luk-- Tablo h�creleri aras�ndaki bo�luk; �er�eve --
H�creler etraf�ndaki �er�eve kal�nl���; �er�eve ���k rengi-- H�crelerin sa� ve alt kenar renkleri; �er�eve g�lge rengi-- H�crelerin sol ve �st kenar renkleri <br>
<br>

H�cre �zelliklerinin D�zenlenmesi:<br>
Geni�lik -- h�crenin geni�li�i; Y�kseklik -- h�crenin y�ksekli�i; Hizalama -- h�crenin dikey olarak hizas�; Renk --h�crenin arka plan rengi <br>
<br>

Tablo �zelliklerinde de�i�iklik yapabilmeniz i�in �nce tablo �er�evesini t�klayarak tabloyu se�iniz sonra ilgili butona t�klayarak i�lemleri yap�n�z. <br>
H�creleri d�zenlemek-- h�creye sa� tu�la t�klay�n�z.<br>
<br>

Renk ayar� i�in, ilgili kutucu�u se�ip kar��n�za gelen pencerede be�endi�iniz rengi se�in <br>
Arka plan resmi i�in, ilgili se�imi yap�p kar��n�za gelen resim edit�r�nden be�endi�iniz resmi se�in <br>
Se�imleri iptal etmek i�in se�im kutular�n� bo� b�rak�n�z.<br>
<br>

<b>Not:</b> Sat�r ve s�tun say�lar�n� tekrar d�zenleyemessiniz. Fakar yeni sat�r ve s�tunlar ekleyebilir ve ��kartabilirsiniz </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertRow'); ?>" src="../images/insrow.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u sat�r�n alt�na sat�r ekler </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteRow'); ?>" src="../images/delrow.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u sat�r� siler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertColumn'); ?>" src="../images/inscol.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u s�tunun sa��na s�tun ekler </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteColumn'); ?>" src="../images/delcol.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u s�tunu siler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertCell'); ?>" src="../images/inscell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u pozisyondan sonra h�cre ekler.
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('DeleteCell'); ?>" src="../images/delcell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u pozisyondaki h�creyi siler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('MergeCells'); ?>" src="../images/mergecells.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u h�crenin yan�nda h�cre varsa ikisini birle�tirir.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SplitCell'); ?>" src="../images/splitcell.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �nceden birle�tirilmi� h�creler varsa bunlar� ay�rmaya yarar. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateForm'); ?>" src="../images/form.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecin bulundu�u yere Form Ekleme Penceresini �a��r�r. <br>
<br>

Form �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- Formun ad�; Y�netimi -- Formun veri g�nderme metodu (get/post);
Eylem -- T�kland�ktan sonra verilerin gidece�i yer <br>
<br>

D�k�mandaki t�m formlar� g�rmek i�in �er�eveleri g�ster butonu aktif olmal�d�r. <br>
<br>

�zelliklerini de�i�tirmek i�in i�ine sa� tu�la t�klay�p de�i�tir diyeceksiniz.<br>
<br>

Di�er form ��elerini de de�i�tirmek i�in �zerlerine sa� tu�la t�klay�n ve ilgili butonu se�in. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateText'); ?>" src="../images/text.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere yaz� kutusu ekleme penceresini getirir. <br>
<br>

Yaz� kutusu �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- yaz� kutusunun ad�; de�eri -- yaz� kutusunun varsay�lan de�eri;
tipi -- yaz� kutusunun tipi(text/password); max. karakter --
yaz� kutusununa yaz�labilecek maksimum karaker say�s�;
karakter geni�li�i-- yaz� kutusunun geni�li�i </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateTextArea'); ?>" src="../images/textarea.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere metin kutusu ekleme penceresini getirir. <br>
<br>
Metin kutusu �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- metin kutusunun ad�; De�eri -- metin kutusunun varsay�lan de�eri;
Sat�rlar -- Metin kutusuna ka� sat�r karakter yaz�labilece�i; S�tunlar -- Metin kutusunun geni�li�i
</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateButton'); ?>" src="../images/button.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere Buton ekleme penceresini getirir. <br>
<br>
Buton �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- butonun ad�; De�eri -- varsay�lan de�eri;
tipi -- Butonun tipi (button/reset/submit)</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateSelect'); ?>" src="../images/select.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere listeleme kutusu ekleme penceresini getirir. <br>
<br>
Listeleme kutusu �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- listeleme kutusunun ad�; Ebat -- ka� elemandan olu�tu�u; �oklu -- i�aretli ise �oklu se�im yap�labilir de�ilse tek bir se�im yap�l�r;
Elemanlar -- liste elemanlar� <br>
<br>

Liste kutusunu ayarlama/d�zeneme:<br>
��erik -- Eleman�n i�eri; De�eri -- Se�imin varsay�lan de�eri;
Se�ili -- i�aretli eleman �nse�ilmi� olarak kar��m�za gelir <br>
<br>

Butonlar:<br>
Ekle -- �zelliklerini belirledi�iniz elemanlar� listeye ekler; Sil -- Listedeki se�ilen eleman� siler; G�ncelle --
Se�ili eleman�n �zelliklerini de�i�tirebilirsiniz; /\ -- se�ili eleman� listede bulundu�u konumun bir �st�ne ta��r; \/ -- se�ili eleman� listede bulundu�u konumun bir alt�na kayd�r�r </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateHidden'); ?>" src="../images/hidden.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere gizli kutu ekleme penceresini getirir. <br>
<br>
gizli kutu �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- gizli kutunun ad�; De�eri -- gizli kutunun de�eri</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateCheckBox'); ?>" src="../images/checkbox.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere se�me kutusu ekleme penceresini getirir. <br>
<br>
se�me kutusu �zelliklerini ayarlama ve de�i�tirme:<br>
Ad� -- se�me kutusunun ad�; De�eri -- se�me kutusunun de�eri; Se�ili -- i�i dolu ise se�me kutusu se�ili olarak gelir </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateRadio'); ?>" src="../images/radio.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u yere se�enek d��mesi ekleme penceresini getirir. <br>
<br>
Se�enek d��mesi �zelliklerini ayarlama ve de�i�tirme::<br>
Ad� -- se�enek d��mesinin ad�; De�eri -- se�enek d��mesinin de�eri; Se�ili -- i�i dolu ise se�enek d��mesi se�ili olarak gelir </TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FormatBlock'); ?>
</TD>
<TD VALIGN="TOP">
Se�ili yaz�lar i�in paragraf �zelliklerini ayarlar yada imlecin bulundu�u konum i�in paragraf �zelli�i olu�turur.</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FontName'); ?>
</TD>
<TD VALIGN="TOP">
Se�ili yaz�lar i�in yaz� tipini  ayarlar yada imlecin bulundu�u konum i�in yaz� tipini belirler.</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('ClassName'); ?>
</TD>
<TD VALIGN="TOP"> D�k�man�n se�ili k�sm�n�n stil bi�imlerini ayarlar.</TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('FontSize'); ?>
</TD>
<TD VALIGN="TOP">
Se�ili yaz�lar i�in yaz� b�y�kl���n�  ayarlar yada imlecin bulundu�u konumun i�in yaz� tipini belirler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('ForeColor'); ?>" src="../images/fgcolor.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�lar�n rengini  ayarlar yada imlecin bulundu�u konumun i�in yaz� rengini belirler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('BackColor'); ?>" src="../images/bgcolor.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
Se�ili yaz�lar i�in yaz� dolgu rengini  ayarlar yada imlecin bulundu�u konumun i�in yaz� dolgu rengini belirler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateImage'); ?>" src="../images/image.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u konuma resim ekleyebilirsiniz yada se�ti�iniz resmi d�zenleyebilirsiniz<br>
<br>

Resim penceresi 4 b�l�mden olu�ur. <br>
Dosya Y�netim Alan� (pencerinin solunda), �nizleme Alan�(sa� �st k��ede), �zellikler Alan� (�nizleme alan�n�n alt�nda) ve Dosya Y�kleme Alan�(Pencerinin alt�nda)<br>
<br>

Dosya y�netim alan�nda klas�rler en �stte g�r�l�r. <br>
Klas�rlerin alt�ndaki klas�rlere ve i�indeki dosyalara ula�mak i�in ilgili klas�r�n yan�ndaki '+' t�klay�n�z. Klas�r i�eri�ini kapatmak i�in gene ilgili klas�rde olu�mu� olan '-' ye t�klay�n�z..
<br>
Dosya y�kleyece�iniz klas�r� se�ti�iniz zaman renki k�rm�z� olur. Klas�r� de�i�tirmek i�in farkl� bir klas�r� se�iniz.<br>
Yeni bir klas�r olu�turmak i�in 'Klas�r Olu�tur' linkine t�klay�n, Klas�r ad�n� girin ve
'Tamam' butonuna t�klay�n yada iptal i�in '�ptal' butonunu kullanabilirsiniz. <br>
Dosya ve klas�rleri yeniden adland�rmak i�in herbirinin yan�nda g�r�len 'r' linkini, silmek i�in ise 'x' linklerini kullan�n.<br>
<br>
<b>Not:</b> Bir klas�r i�inde ba�ka bir dosya yada klas�r varsa o klas�r silinemez.<br>
<br>

Dosya y�netim alan�ndan bir resim se�ildi�inde yada Dosya y�kleme alan� ile bilgisayar�m�zdan bir dosya se�ildi�inde �n izleme alan�nda se�im g�r�l�r. <br>
<br>

Bilgisayar�n�zdan dosyay� se�ip tamam dedi�inizde dosya upload edilir.<br>
<br>

Resim �zelliklerini ayarlama/d�zenleme: <br>
Hizala -- resmin yatay hizalanmas�; Geni�lik -- resim geni�li�i;
Y�kseklik -- resim y�ksekli�i; �er�eve -- Resim �er�evesinin kal�nl���; hizalama -- yaz� ve resim aras�ndaki dikey bo�luk; Y.bo�luk -- Resim ve yaz�lar aras�ndaki yatay bo�lukt;
Alt yaz�-- farenin imleci resim �zerindeyken g�r�nen yaz�;
Adresi -- resmin adresi <br>
<br>

Resim �zelliklerini d�zenlemek i�in resmi se�in ve sa� tu�la t�klayarak ilgili butonu t�klay�n. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateFlash'); ?>" src="../images/flash.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�mlecin bulundu�u konuma Flash objeleri ekleyebilirsiniz yada se�ti�iniz Flash objelerini d�zenleyebilirsiniz<br>
<br>

Flash �zelliklerini ayarlama/d�zenleme:<br>
Hizala -- flash objesinin yatay hizalanmas�; Geni�lik --  flash�n geni�li�i;
Y�kseklik -- flash�n y�ksekli�i; Oynat -- Y�kleme ile flash filmi oynamaya ba�lar;
D�ng� --Flash filmi bitti�i yerde tekrar ba�lar; Men� -- Flash filmi oynarken sa� tu�la t�klad���n�zda men�n�n g�r�l�p g�r�lmemesini ayarlars�n�z; Arka rengi-- Flash arka fon rengini de�i�tirir.; Kalite --
flash filminin kalitesi; Adresi --  flash objesinin internet adresi <br>
<br>

Resim d�zenleme penceresinde de flash objeleriyle �al��abilirsiniz. <br>
<br>

Flash �zelliklerini de�i�tirmek i�in edit�rde flash� se�in ve d�zenle deyiniz.<br>
<br>

<b>Not: </b>Flash objesini sa� tu�la d�zenleyebilmeniz i�in sisteminiz MSIE 6.0 ve �zeri olmal�d�r.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('CreateLink'); ?>" src="../images/link.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ti�iniz yaz� yada d�k�mana link eklemeye yada se�ti�iniz linki d�zenlemeye yarayan pencereyi a�ar. <br>
<br>

Link �zelliklerini ayarlama/d�zenleme: <br>
hedef -- linki t�klad���n�z zaman a��lmas�n� istedi�iniz yeri belirler; link -- linkin adresi bir URL; Ad --  linkin ad� (anchors olu�tururken kullan�l�r); Ba�l�k -- farenin imleci linkin �zerinde iken okunur.<br>
<br>

<b>Not: </b>Linki silmek i�in linki se�ip ilgili pencereyi a��n ve 'link' b�l�m�ne yazd���n�z URL yi silin<br>
<br>

Anchor olu�turmak i�in 'ad' k�sm�na yazd���n�z de�erler benzersiz olmal�d�r.<br>
<br>

Dosya y�kleme, de�i�tirme ve silme i�lemleri ayn� resim ekleme /de�i�tirme b�l�m�ndekiler gibidir. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('PasteWord'); ?>" src="../images/paste_word.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
 MS Word format�ndaki i�erikleri imlecinizle belirtti�iniz yere yap��t�r�r. Yap��t�rma i�leminden �nce eski bi�im ve stiller silinir. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('SwitchBorders'); ?>" src="../images/borders.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Baz� �er�eve kal�nl�klar� s�f�r oldu�u i�in g�r�lmezler. T�m tablo ve h�crelerin �er�evelerini g�sterir.<br>
Bu eylem d�k�man�n g�r�n���n� de�i�tirmemektedir.<br>
<br>

Bu �zellik aktif oldu�unda buton bas�l� g�r�l�r.</TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertChar'); ?>" src="../images/inschar.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> �mlecinizin bulundu�u konuma �zel karakterler eklemenizi sa�lar. <br>
<br>

Eklemek istedi�iniz sembol�n �zerine t�klay�n�z </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('InsertSnippet'); ?>" src="../images/snippet.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�nceden tan�mlanm�� haz�r ufak kod par�ac�klar�n� html kodlar�n� ekleyebilirsiniz. Se�ili �rneklerin �n izlemesi g�r�l�r. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('AbsolutePosition'); ?>" src="../images/abspos.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP"> Se�ili ��e i�in mutlak bir pozisyon belirler. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('PageProperties'); ?>" src="../images/page.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">
�al��t���n�z sayfan�n �zelliklerini d�zenlemeye yarayan pencereyi a�ar. <br>
<br>
Sayfa �zelliklerini d�zenleme:<br>
Ba�l�k -- sayfan�n ba�l��� sayfan�n en �st�nde g�r�l�r('title' b�l�m�); Tan�mlama --
Sayfan�z�n tan�m�(meta taglar�ndan 'description' ); Anahtar kelimeler-- Sayfa i�in anahtar kelimeleri ayarlar( meta taglar�ndan 'keywords' ); Renk --
Sayfa arkas� rengi; Resim -- Sayfa arkas� resmi; Yaz� --
yaz� rengi; link -- link rengi; Ge�mi� link-- �nceden ziyaret edilmi� linklerin g�sterilece�i renk; Aktif link -- daha �nce ziyaret edilmemi� �u anda i�inde bulunulan linklerin g�sterilece�i renk. <br>
<br>

Renkleri ayarlamak i�in ilgili se�me kutusunu i�aretleyin ve kar��n�za gelen pencereden be�endi�iniz rengi se�in. <br>
Arka fon resmini ayarlamak i�in ilgili se�me kutusunu se�in ve kar��n�za gelen resim d�zenleme penceresinden be�endi�iniz resmi se�in.<br>
Renk ve resimleri iptal etmek i�in se�me kutular�n�n i�ini bo�alt�n. <br>
<br>

<b>Not:</b> Bu �zellik sadece Sayfa modunda ge�erlidir. </TD>
</TR>

<TR>
<TD class="help_action">
  <img alt="<?php echo $rich_lang->item('Help'); ?>" src="../images/help.gif" align="absMiddle" width="20" height="20">
</TD>
<TD VALIGN="TOP">Yard�m Penceresini a�ar. (Hen�z a��lmad�ysa) </TD>
</TR>

<TR>
<TD class="help_action">
<?php echo $rich_lang->item('Source'); ?>
</TD>
<TD VALIGN="TOP">Kaynak kodu ve design modu aras�nda ge�i� yapman�z� sa�lar </TD>
</TR>

</TABLE>
</P>

<P class="help_text">
<div>
<b>Not: </b>Baz� �zellikler sistem y�neticisi taraf�ndan kapat�lm�� olabilir !
</div>
</P>

<HR>

<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" WIDTH="100%">
<TR>
<TD ALIGN="RIGHT">
<A HREF="#TOP">D�k�man�n ba��na git</A>
</TD>
</TR>
</TABLE>

</BODY>

</HTML>