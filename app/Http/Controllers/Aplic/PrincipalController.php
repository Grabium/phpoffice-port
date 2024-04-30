<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use PhpOffice\PhpWord\PhpWord;//objeto documento
//use PhpOffice\PhpWord\Style\Font;//objeto fonte (obrigatório apenas para explicitar fontes)
//use PhpOffice\PhpWord\IOFactory; //para salvamento do arquivo.

class PrincipalController extends Controller
{
  private array  $formactFile = [];
  private string $nameFile = '';

  public function __construct()
  {
    //futuramente o valor do argumento será recebido dinamicamente pela requisição post
    $this->formactFile = (new FormactFileController)->filterFormact('odt');
    //false=demonstration.//recebe nome e número da port.//A extenção será colocada durante a config do download.
    $this->nameFile = (new NamerDocContrller)->nameDocSet();
  }
  
  
  public function principal()
  {
    $phpWord = (new RenderController)->renderDoc();
    return (new DownloadDocController($phpWord, $this->formactFile, $this->nameFile))->playDownload();
  }

  
}
