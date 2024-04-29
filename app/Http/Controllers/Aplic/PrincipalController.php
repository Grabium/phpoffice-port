<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;//objeto documento
use PhpOffice\PhpWord\Style\Font;//objeto fonte (obrigatório apenas para explicitar fontes)
use PhpOffice\PhpWord\IOFactory; //para salvamento do arquivo.

class PrincipalController extends Controller
{
  public function principal()
  {
    //cria o documento vazio
    $phpWord = new PhpWord();

    //cria uma seção no documento (acho que é um container)
    $section = $phpWord->addSection();

    //cria um padrão de fonte e o nomeia para futuramente configurar a seção.
    $fontStyleName = 'oneUserDefinedStyle';
    $phpWord->addFontStyle(
      $fontStyleName,
      array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
    );

    //concatena um texto à seção mencionada enteriormente
    $section->addText(
      '"The greatest accomplishment is not in never falling, '
        . 'but in rising again after you fall." '
        . '(Vince Lombardi)',
      $fontStyleName
    );

    $fontStyle = new Font();//cria um obj fonte para configurações
    $fontStyle->setBold(true);
    $fontStyle->setName('Tahoma');
    $fontStyle->setSize(13);
    //concatena
    $myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
    //insere configuração de fonte ao elenento de forma explícita.
    $myTextElement->setFontStyle($fontStyle);


    // Saving the document as OOXML file...
    $nameFile = 'testeDauloudi.odt';

    header("Content-Description: File Transfer");
    header('Content-Disposition: attachment; filename="' . $nameFile . '"');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');


    //$objWriter = IOFactory::createWriter($phpWord, 'Word2007');
    //$saved = $objWriter->save('doc 01.docx');//salva na pasta /public diretamente
    //$saved = $objWriter->save("php://output");//"php://output" inicia download automático.


    // Saving the document as ODF file...
    $objWriter = IOFactory::createWriter($phpWord, 'ODText');
    //$objWriter->save('helloWorld.odt');
    $saved = $objWriter->save("php://output");//"php://output" inicia download automático.

    // Saving the document as HTML file...
    //$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
    //$objWriter->save('helloWorld.html');

    //echo 'abra a sua pasta de download e busque: '.$nameFile;
    //dump($phpWord, $section, $myTextElement, $objWriter, $saved);
    dd();
  }
}
