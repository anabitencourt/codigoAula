<style>
div{
	height: 40px; /*altura*/
	/*border: 1px solid silver;*/
}
.nota{
		width: 50px; /*largura*/
}
label{
	font-weight: bold; /*negrito*/
}
</style>
<form action="controleNota.php" method="get">
		<div>
			<label> ANO </label> 
				<input type="text" name="ano">
		</div>
		<div>	
			<label> ALUNO </label> 
				<input type="text" name="aluno">
		</div>
		<div>
			<label> NOTA 1 </label> 
				<input class="nota" type="text" name="n1">
		</div>
		<div>
			<label> NOTA 2 </label> 
				<input class="nota" type="text" name="n2">
		</div>
		<div>
			<label> NOTA 3 </label> 
				<input class="nota" type="text" name="n3">
		</div>
		<div>
			<label> NOTA 4 </label> 
				<input class="nota" type="text" name="n4">
		</div>
	<div>
		<input type="submit" value="CALCULAR">
		<input type="reset" value="LIMPAR">
	</div>
</form>