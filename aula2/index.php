<?php

	require "Orcamento.php";
	require "CalculadoraDeImpostos.php";
	require "imposto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";
	
	$reforma = new Orcamento(500);

	$calculadora = new CalculadoraDeImpostos();

	echo $calculadora->calcula($reforma, new ICMS);

	echo "<br/>";

	echo $calculadora->calcula($reforma, new ISS);

	echo "<br/>";

	echo $calculadora->calcula($reforma, new KCV);

	//Teste de Descontos

	echo "<br/><br/>";

	echo "Teste de Descontos";

	echo "<br/>";

	$calculadoraDeDescontos = new CalculadoraDeDescontos();

	echo "Deconto";

	echo "<br/>";

	echo $calculadoraDeDescontos->desconto($reforma);