<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;//objeto documento
//use Illuminate\Support\Collection;
use PhpOffice\PhpWord\Element\Section;
//use PhpOffice\PhpWord\Style\Alignment;

class RenderController extends Controller
{
  private array $textos        = [];
  private array $fontes        = [];
  private array $paragrafos    = [];
  
  private array $fontStyles        = [];
  private array $paragrathStyles   = [];
  private Section $section;
  private PhpWord $phpWord;

  public function __construct()
  {
    $this->textos     = (new TextosController)->getTexts();
    $this->fontes     = (new FontesController)->getFonts();
    $this->paragrafos = (new ParagrathsController)->getParagraths();
    $this->phpWord    = new PhpWord();
    $this->section    = $this->phpWord->addSection();
  }

 
  public function renderDoc()
  {
    $this->addParagraphStyleToPhpWord();
    $this->addFontsStyleToPhpWord();
    $this->addTextToPhpWord();
    return $this->phpWord;
  }


  public function addParagraphStyleToPhpWord()
  {
    foreach($this->paragrafos as $key => $paragrafo){
      $this->phpWord->addParagraphStyle(
        $key, ['align' => $paragrafo['align'] ]);
    };
    unset($this->paragrafos);
  }

  public function addFontsStyleToPhpWord()
  {
    foreach($this->fontes as $key => $fonte){
      $this->phpWord->addFontStyle(
        $key, [
          'name' => $fonte['name'], 
          'size' => $fonte['size'], 
          'color' => $fonte['color'], 
          'bold' => $fonte['bold']
        ]
      );
    };
  }

  public function addTextToPhpWord()
  {
    foreach($this->fontes as $key => $fonte){
      $this->section->addTextBreak(3);
      $this->section->addText(
        $this->textos[$key],
        $key, //estilo da fonte
        $key  //estilo do parágrafo
      );
    };
  }
}
