<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html;

// Load your HTML content
$htmlContent = file_get_contents('path/to/your/file.html');

// Create a new PHPWord object
$phpWord = new PhpWord();
$section = $phpWord->addSection();

// Add HTML content to the Word document
Html::addHtml($section, $htmlContent, false, false);

// Save the document
$fileName = 'converted-document.docx';
$phpWord->save($fileName, 'Word2007');

// Output the file for download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($fileName));
flush(); // Flush system output buffer
readfile($fileName);

// Delete the file from server after download
unlink($fileName);
?>
