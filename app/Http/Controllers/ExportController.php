<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class ExportController extends Controller
{
    public function exportWord()
    {
        // // // Load Blade view content
        // $htmlContent = view('document')->render();

        // // // Create a new PhpWord object
        // $phpWord = new PhpWord();

        // // // Add a new section to the document
        // $section = $phpWord->addSection();

        // // // Add HTML content to the section
        // // \PhpOffice\PhpWord\Shared\Html::addHtml($section, $htmlContent);

        // // // Save the document as Word file
        // // $fileName = 'exported-document.docx';
        // // $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        // // $objWriter->save(storage_path($fileName));

        // // // Return the file as a response to download
        // // return response()->download(storage_path($fileName))->deleteFileAfterSend(true);

        // $wordTest = new \PhpOffice\PhpWord\PhpWord();
        // $newSection = $wordTest->addSection();

        // $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        //     $objectWriter->save(storage_path('TestWordFile.docx'));


        // return response()->download(storage_path('TestWordFile.docx'));

        // $view = View::make('document')->render();
        // $file_name = strtotime(date('Y-m-d H:i:s')) . '_advertisement_template.docx';
        // $headers = array(
        //     "Content-type" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        //     "Content-Disposition" => "attachment;Filename=$file_name"
        // );
        // return response()->make($view, 200, $headers);

          // Load Blade view content
          $htmlContent = view('document')->render();

          // Log the HTML content for debugging
          Log::debug('HTML Content: ' . $htmlContent);
  
          // Create a new DOMDocument instance and load the HTML content
          $dom = new \DOMDocument();
          
          // Suppress errors due to invalid HTML
          libxml_use_internal_errors(true);
  
          // Check if the HTML content is loaded successfully
          if (!$dom->loadHTML($htmlContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)) {
              foreach (libxml_get_errors() as $error) {
                  Log::error('Libxml error: ' . $error->message);
              }
              libxml_clear_errors();
              return response()->json(['error' => 'Invalid HTML content'], 500);
          }
  
          libxml_clear_errors();
  
          // Save cleaned HTML
          $cleanedHtml = $dom->saveHTML();
  
          // Log the cleaned HTML for debugging
          Log::debug('Cleaned HTML: ' . $cleanedHtml);
  
          // Create a new PhpWord object
          $phpWord = new PhpWord();
  
          // Add a new section to the document
          $section = $phpWord->addSection();
  
          // Add cleaned HTML content to the section
          try {
              \PhpOffice\PhpWord\Shared\Html::addHtml($section, $cleanedHtml);
          } catch (\Exception $e) {
              Log::error('Error adding HTML to PhpWord: ' . $e->getMessage());
              return response()->json(['error' => 'Error adding HTML to Word document'], 500);
          }
  
          // Save the document as a Word file
          $fileName = 'exported-document.docx';
          $filePath = storage_path($fileName);
          $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
          $objWriter->save($filePath);
  
          // Return the file as a response to download
          return response()->download($filePath)->deleteFileAfterSend(true);

        // return view('document');
    }
}
