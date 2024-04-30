<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParagrathsController extends Controller
{
  public function getParagraths()
  {
    return $this->setParagraths();
  }
  
  public function setParagraths()
  {
    return [
      'cabecalho' => ['align' => 'center' ],
      'titulo' => ['align' => 'center' ],
      'superior' => ['align' => 'left' ],
      'resolve' => ['align' => 'center' ],
      'inferior-1' => ['align' => 'left' ],
      'inferior-2' => ['align' => 'left' ],
      'inferior-3' => ['align' => 'left' ],
      'assinante' => ['align' => 'center' ],
      'cargo' => ['align' => 'center' ],
    ];
  }
}
