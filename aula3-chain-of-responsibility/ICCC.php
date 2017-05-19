<?php

	class ISS implements imposto{

		public function calcula(Orcamento $orcamento){

			$valor = $orcamento->getValor();
			
			if($valor < 1000){

				return $orcamento->getValor() * 0.05;

			}else if($valor >= 1000 || $valor <= 3000){

				return $orcamento->getValor() * 0.07;

			}else if($valor > 1000){

				return $orcamento->getValor() * 0.08;
			}
			

		}

	}