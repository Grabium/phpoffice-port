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
      'cabecalho' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'titulo' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'superior' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'resolve' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'inferior-1' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'inferior-2' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'inferior-3' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'assinante' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
      'cargo' => ['name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'bold' => false],
    ];
  }
}
