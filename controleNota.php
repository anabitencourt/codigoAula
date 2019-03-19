<?php
	if(filter_input(INPUT_GET,"aluno") &&
		filter_input(INPUT_GET,"ano") &&
		filter_input(INPUT_GET,"n1") &&
		filter_input(INPUT_GET,"n2") &&
		filter_input(INPUT_GET,"n3") &&
		filter_input(INPUT_GET,"n4")
	){
		$aluno = filter_input(INPUT_GET,"aluno");
		$ano = filter_input(INPUT_GET,"ano");
		$n1 = filter_input(INPUT_GET,"n1");
		$n2 = filter_input(INPUT_GET,"n2");
		$n3 = filter_input(INPUT_GET,"n3");
		$n4 = filter_input(INPUT_GET,"n4");
			echo "Aluno = " . $aluno;
			echo "<br>Ano = " . $ano;
			echo "<br>Ano = " . $n1;
			echo "<br>Ano = " . $n2;
			echo "<br>Ano = " . $n3;
			echo "<br>Ano = " . $n4;
			
	}else{
		echo "Campos não preenchidos!!!";	
	}			
	
?>