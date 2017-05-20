<?php

    require "Desconto5Itens.php";
    require "Desconto500Reais.php";

	class CalculadoraDeDescontos{

		public function desconto(Orcamento $Orcamento){
            $desconto5Itens = new Desconto5Itens();
            $desconto500Reais = new Desconto500Reais();

            $desconto5Itens->setProximo($desconto500Reais);
			//$valorDesconto =
		
		}

	}