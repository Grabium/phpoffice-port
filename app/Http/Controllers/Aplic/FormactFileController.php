<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormactFileController extends Controller
{
  
  private array $possiblesFormact = [
    ['nameFormact' => 'odt', 'driver' => 'ODText']
  ];
  
  public function filterFormact($formact)
  {
    if($formctDriver = collect($this->possiblesFormact)->firstWhere('nameFormact', $formact)){
      return $formctDriver;
    }else{
      return ['error' => [ 'Formato não aceitável!' ]];
    }
    
  }
}
