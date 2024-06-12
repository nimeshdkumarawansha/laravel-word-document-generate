<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpWord\Shared\Html;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DocumentController extends Controller
{
    public function generateDocument()
    {
        // Prepare data to pass to the Blade view
        $data = [
            'title' => 'Sample Document',
            'content' => 'This is a sample content for the Word document.'
        ];

        // Render the Blade view to HTML
        $html = view('document2', $data)->render();

        // Debug: output HTML to check its structure
        file_put_contents(storage_path('app/public/debug.html'), $html);

        // Create a new PhpWord object
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        try {
            // Ensure HTML is properly encoded
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);
            libxml_clear_errors();

            $html = $dom->saveHTML();

            // Use the fully encoded HTML content
            \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        } catch (\Exception $e) {
            // Log detailed error information
            Log::error('Failed to generate document: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to generate document: ' . $e->getMessage()], 500);
        }

        // Save the document
        $fileName = 'document.docx';
        $filePath = storage_path('app/public/' . $fileName);
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filePath);

        // Return the document as a download
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
    public function convertHtmlToWord()
    {
        // // Path to your HTML file
        // $htmlFilePath = resource_path('views/document3.html');

        // // Check if the file exists
        // if (!file_exists($htmlFilePath)) {
        //     abort(404, "HTML file not found.");
        // }

        // // Load your HTML content
        // $htmlContent = file_get_contents($htmlFilePath);

        // // Create a new PHPWord object
        // $phpWord = new PhpWord();
        // $section = $phpWord->addSection();

        // // Add HTML content to the Word document
        // Html::addHtml($section, $htmlContent, false, false);

        // // Save the document
        // $fileName = 'converted-document.docx';
        // $filePath = storage_path($fileName);
        // $phpWord->save($filePath, 'Word2007');

        // // Output the file for download
        // return response()->download($filePath)->deleteFileAfterSend(true);




        // Load your HTML content
        // $htmlContent = file_get_contents(resource_path('views/document3.html'));
        
        $htmlContent =  View::make('document2')->render();
        // Create a new PHPWord object
        // dd($htmlContent);
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
        header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileName));
        flush(); // Flush system output buffer
        readfile($fileName);

        // Delete the file from server after download
        unlink($fileName);
    }
}
