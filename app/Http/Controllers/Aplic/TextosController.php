<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextosController extends Controller
{

  public function getTexts()
  {
    return $this->setTexts();
  }
  
  public function setTexts()
  {
    return [
      'cabecalho' => 'Rua Ivonne Silveira, 243, Loteamento Centro Executivo – Doron – Salvador – BA – CEP 41.194-015. Fone (71) 3617-2200 – FAX (71) 3617-2520',
      'linha' => "---------------------------------------------------------",
      'titulo' => 'PORTARIA Nº 04, DE 08 DE MAIO DE 2023.',
      'superior' => 'O SECRETÁRIO ESTADUAL DA PROCURADORIA DA REPÚBLICA NA BAHIA, no uso das   atribuições previstas no art. 41, inc. XVIII, do Regimento Interno Administrativo do Ministério Público Federal, aprovado pela Portaria SG/MPF nº 382, de 5 de maio de 2015, e em cumprimento do quanto previsto na Portaria nº 174, de 20 de março de 2019, resolve:',
      'resolve' => 'Art. 1º Designar o Fiscal Técnico e respectivo Substituto do contrato:',
      'inferior-1' => 'Art. 2º. Para fins desta portaria, a chefia da Divisão de Contratações e Gestão Contratual – DICGC ficará encarregada da gestão dos referidos contratos.',
      'inferior-2' => 'Art. 3º. Esta Portaria e seus anexos entram em vigor na data de sua publicação.',
      'inferior-3' => 'Art. 4º. Revogam-se as disposições em contrário.',
      'assinante' => 'ASSINANTE',
      'cargo' => 'Importante'
    ];
  }
}
