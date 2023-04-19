<?php
/**
* Program memanfaatkan Class Form untuk membuat form inputan sederhana.
**/

// include class Form
include "form.php";

// buat objek form baru dengan action kosong dan label tombol Submit Form
$form = new Form("", "Submit Form");

// tambahkan field untuk input NIM, Nama, dan Alamat
$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

// tampilkan form dengan memanggil method displayForm
echo "<html><head><title>Form Mahasiswa</title></head><body>";
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
?>