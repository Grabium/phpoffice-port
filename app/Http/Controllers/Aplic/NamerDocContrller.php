<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NamerDocContrller extends Controller
{
  
  private string $defaultName = 'QuickDoc';//sem a extensão e número do doc.
    
  
  
  public function nameDocSet(bool $authenticDoc = false, string $nameFile = null, ):string
  {
    $nameFile = (is_null($nameFile)) ? $this->defaultName : $nameFile ;
    
    $n = $this->getNumberDoc($authenticDoc);
    return $nameFile . $n ;
  }

  public function getNumberDoc(bool $authenticDoc):string
  {
    if($authenticDoc == false){
      return ' - DEMONSTRATION';
    }else{
      return ' - Ainda não há BD';//futuramente dinâmico com query no DB
    }
  }
}
