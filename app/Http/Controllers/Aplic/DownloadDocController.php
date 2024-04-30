<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;//objeto documento
//use PhpOffice\PhpWord\Style\Font;//objeto fonte (obrigatório apenas para explicitar fontes)
use PhpOffice\PhpWord\IOFactory; //para salvamento do arquivo.

class DownloadDocController extends Controller
{
  private array  $formactFile = [];
  private string $nameFile = '';
  private PhpWord $phpWord;
  
  public function __construct(PhpWord $phpWord, array $formactFile, string $nameFile)
  {
    $this->formactFile = $formactFile;
    $this->nameFile = $nameFile;
    $this->phpWord = $phpWord;
  }
  
  public function playDownload()
  {
    $this->namer();
    $this->headerSeter();
    $this->finallyDownload();
  }

  public function namer()
  { 
    $this->nameFile = $this->nameFile . '.' . $this->formactFile['nameFormact'];
  }

  public function headerSeter()
  {
    header("Content-Description: File Transfer");
    header('Content-Disposition: attachment; filename="' . $this->nameFile . '"');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    //dd($this->nameFile);//uma nova guia abre-se ???
  }

  public function finallyDownload()
  {
    // Saving the document as ODF file...
    $objWriter = IOFactory::createWriter($this->phpWord, $this->formactFile['driver']);
    //$objWriter->save('helloWorld.odt');//fazer isso em outra function
    $saved = $objWriter->save("php://output");//"php://output" inicia download automático.
    dd();
  }
}
