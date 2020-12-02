<?php 
	
	//https://github.com/Marcelo-gcm/web2.git

	echo "Aula número 1"."<br />";
	$ano = array("2020","2019","2018","2017","2016");
	$mes = array("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
	$tem = array(1,2,3,4,5,6,7,8,9,10,11,12,
				 13,14,15,16,17,18,19,20,21,22,23,24,
				 25,26,27,28,29,30,31,32,33,34,35,36,
				 37,38,39,40,41,42,43,44,45,46,47,48,
				 49,50,51,52,53,54,55,56,57,58,59,60
				);
	
	function se($ano = null, $mes = null, $tem = null){
		$cont = 0;
		foreach($mes as $k => $v){
			print(($cont == 0) ? ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$v."&nbsp;|") : ($v."&nbsp;|"));
			$cont++;
		}
		$te = 0;
		for($a = 0; $a < count($ano); $a++){
			
			print("<label style='border-radius:25px ;border:solid 1px red;'>".$te."</label><br/>");
			print("<br/>".$ano[$a]);
			
			/*for($t = $te; $t < ($te + 12); $t++){
				print("<label>".$tem[$t]."</label>");//ok
				$te = $t++;
				
			}*/
			print("<br/>");
			
		}	
	}
	
	function tabela(int $linhas, int $colunas){
		/*vamos definir uma tabela de duas linhas e duas colunas*/
		print("<table border='1'>");/*definindo a tag principal da criação de uma tabela*/
		for($l = 1; $l <= $linhas; $l++){
			print("<tr>");/*Aqui é a formação das linhas*/
			for($c = 1; $c <= $colunas; $c++){
				print("<td>Linha ".$l." Coluna ".$c."</td>");
			}
			print("</tr>");
		}
		print("</table>");
	}
	
	se($ano,$mes,$tem);
	tabela(6,10);
	
?>