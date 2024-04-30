<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontesController extends Controller
{

  public function getFonts()
  {
    return $this->setFonts();
  }

  
  public function setFonts()
  {
    return [
      'cabecalho' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false, 'align' => 'center'],
      'titulo' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false, 'align' => 'center'],
      'superior' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false,'align' => 'left' ],
      'resolve' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false, 'align' => 'center'],
      'inferior-1' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false,'align' => 'left' ],
      'inferior-2' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false,'align' => 'left' ],
      'inferior-3' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false,'align' => 'left' ],
      'assinante' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false, 'align' => 'center'],
      'cargo' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false, 'align' => 'center'],
    ];
  }
}
