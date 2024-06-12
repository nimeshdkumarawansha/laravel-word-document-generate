<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Exception;
use HTMLPurifier;
use HTMLPurifier_Config;

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





        //   // Load Blade view content
        //   $htmlContent = view('document')->render();

        //   // Log the HTML content for debugging
        //   Log::debug('HTML Content: ' . $htmlContent);
  
        //   // Create a new DOMDocument instance and load the HTML content
        //   $dom = new \DOMDocument();
          
        //   // Suppress errors due to invalid HTML
        //   libxml_use_internal_errors(true);
  
        //   // Check if the HTML content is loaded successfully
        //   if (!$dom->loadHTML($htmlContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)) {
        //       foreach (libxml_get_errors() as $error) {
        //           Log::error('Libxml error: ' . $error->message);
        //       }
        //       libxml_clear_errors();
        //       return response()->json(['error' => 'Invalid HTML content'], 500);
        //   }
  
        //   libxml_clear_errors();
  
        //   // Save cleaned HTML
        //   $cleanedHtml = $dom->saveHTML();
  
        //   // Log the cleaned HTML for debugging
        //   Log::debug('Cleaned HTML: ' . $cleanedHtml);
  
        //   // Create a new PhpWord object
        //   $phpWord = new PhpWord();
  
        //   // Add a new section to the document
        //   $section = $phpWord->addSection();
  
        //   // Add cleaned HTML content to the section
        //   try {
        //       \PhpOffice\PhpWord\Shared\Html::addHtml($section, $cleanedHtml);
        //   } catch (\Exception $e) {
        //       Log::error('Error adding HTML to PhpWord: ' . $e->getMessage());
        //       return response()->json(['error' => 'Error adding HTML to Word document'], 500);
        //   }
  
        //   // Save the document as a Word file
        //   $fileName = 'exported-document.docx';
        //   $filePath = storage_path($fileName);
        //   $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        //   $objWriter->save($filePath);
  
        //   // Return the file as a response to download
        //   return response()->download($filePath)->deleteFileAfterSend(true);

        // // return view('document');


        try {
            // Render the Blade view to HTML
            $html = View::make('document')->render();

            // Sanitize HTML (optional but recommended)
            $html = $this->sanitizeHtml($html);

            // Create a new PhpWord object
            $phpWord = new PhpWord();

            // Add a section to the document
            $section = $phpWord->addSection();

            // Add HTML content to the section
            \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html);

            // Save the document to a temporary file
            $fileName = 'sample-document.docx';
            $tempFile = tempnam(sys_get_temp_dir(), $fileName);

            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save($tempFile);

            // Return the document as a download response
            return response()->download($tempFile, $fileName)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            Log::error('Error generating Word document: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to generate document'], 500);
        }

        // dd("Generate export");
    }
    private function sanitizeHtml($html)
    {
        $config = \HTMLPurifier_Config::createDefault();
        $purifier = new \HTMLPurifier($config);
        return $purifier->purify($html);
    }

    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


        // $section->addImage("http://itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));
    }

    public function createWordFile()
    {
        // Create a new PHPWord object
        $phpWord = new PhpWord();

        // Add a new section to the document
        $section = $phpWord->addSection();

        // Add a title to the document
        $section->addTitle('Sample Word File', 1);

        // Add some text to the document
        $section->addText('This is a sample Word file generated using PHPWord in Laravel.');

        // Define the filename
        $fileName = 'sample.docx';

        // Save the file to a temporary path
        $tempFilePath = storage_path($fileName);

        // Save the document as a Word file
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($tempFilePath);

        // Return the file as a response for download
        return response()->download($tempFilePath, $fileName)->deleteFileAfterSend(true);
    }
}
