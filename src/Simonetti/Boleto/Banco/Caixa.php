<?php
namespace Simonetti\Boleto\Banco;

use Simonetti\Boleto\Banco;

class Caixa extends Banco
{
    protected function init()
    {
        $this->setCarteira("01");
        $this->setEspecie("R$");
        $this->setEspecieDocumento("SR");
        $this->setCodigo("104");
        $this->setNome("Caixa");
        $this->setAceite("SIM");
        $this->setLogomarca("logocaixa.jpg");
        $this->setLocalPagamento("Pag�vel em qualquer Banco at� o vencimento");
        $this->setLayoutCarne('caixa/carne.html.twig');
    }

}