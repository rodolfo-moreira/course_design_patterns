<?php

	class ISS extends TemplateDeImpostosCondicional {

		public function calcula(Orcamento $orcamento){

		    if($orcamento->getValor() > 300){

                return $orcamento->getValor() * 0.15;

            }else{

                return $orcamento->getValor() * 0.1;

            }

		}

        public function deveUsarOMaximo(Orcamento $orcamento){
            return $orcamento->getValor() > 300;
        }

        public function taxacaoMaxima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.1;
        }

        public function taxacaoMinima(Orcamento $orcamento){
            return $orcamento->getValor() * 0.15;
        }

	}