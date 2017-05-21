<?php

	require "Orcamento.php";
    require "Desconto.php";
    require "Desconto5Itens.php";
    require "Desconto500Reais.php";
    require "Desconto300Reais.php";
    require "SemDesconto.php";
    require "Item.php";
	require "CalculadoraDeImpostos.php";
    require "CalculadoraDeDescontos.php";
	require "imposto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";
	
	$reforma = new Orcamento(301);

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

    $reforma->addItem(new Item("Tijolo", 250));

    $reforma->addItem(new Item("Cimento 1kg", 250));

    $reforma->addItem(new Item("Cimento 1kg", 250));
    $reforma->addItem(new Item("Cimento 1kg", 250));


	echo $calculadoraDeDescontos->desconto($reforma);