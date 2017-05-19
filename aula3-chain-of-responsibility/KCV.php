<?php

	class KCV implements imposto{

		public function calcula(Orcamento $orcamento){

			return $orcamento->getValor() * 0.2;

		}

	}