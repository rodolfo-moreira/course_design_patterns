<?php

	class Orcamento {

		private $valor;
		private $itens;


		private $valor;

		function __construct($novoValor){
			$this->valor = $novoValor;
			$this->itens = array();
		}

		public function addItem(Item $item){
			$this->itens[] = $novoItem;
		}

		public function getValor(){
			return $this->valor;
		}
	}