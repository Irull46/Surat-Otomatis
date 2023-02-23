<?php

// mengambil data dari yang dikirim dari form index.php 
$nomorsurat = $_POST['nomorsurat'];
$dasar      = $_POST['dasar'];
$untuk      = $_POST['untuk'];
$tanggal    = $_POST['tanggal'];


//mengambil dokumen surat
$document = file_get_contents("surat.rtf");


//mereplace semua kata yang ada di file dengan variabel
$document = str_replace("#nomorsurat", $nomorsurat, $document);
$document = str_replace("#dasar", $dasar, $document);
$document = str_replace("#untuk", $untuk, $document);
$document = str_replace("#tanggal", date('d-m-Y', strtotime($tanggal)), $document);


// header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
// nama file yang dihasilkan adalah surat izin.docx
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat.doc");
header("Content-length: " . strlen($document));
echo $document;
