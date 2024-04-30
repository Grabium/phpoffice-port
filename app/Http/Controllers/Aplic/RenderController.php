<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;//objeto documento
use Illuminate\Support\Collection;
use PhpOffice\PhpWord\Element\Section;

class RenderController extends Controller
{
  private array $textos = [];
  private array $fontes = [];
  private array $arraySections = [];
  public Collection $fontStyles;
  private PhpWord $phpWord;
  private Section $section;
  

  public function __construct()
  {
    $this->textos = (new TextosController)->getTexts();
    $this->fontes = (new FontesController)->getFonts();
    $this->phpWord = new PhpWord();
    $this->section = $this->phpWord->addSection();
  }

 
  public function renderDoc()
  {
    $this->addFontToPhpWord();
    $this->addTextToPhpWord();
    return $this->phpWord;
  }

  public function addFontToPhpWord()
  {
    $this->fontStyles = collect($this->fontes)->map(function ($fonte, $key){
      return $this->phpWord->addFontStyle(
        $key,
        ['name' => $fonte['name'], 'size' => $fonte['size'], 'color' => $fonte['color'], 'bold' => $fonte['bold']]
      );
    });
  }

  public function addTextToPhpWord()
  {
    collect($this->fontStyles)->map(function ($fonte, $keyFonte){
      $this->arraySections[$keyFonte] = $this->section->addText($this->textos[$keyFonte],$keyFonte);
    });
  }
}
