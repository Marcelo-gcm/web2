<?php 
	
	//https://github.com/Marcelo-gcm/web2.git

	echo "Aula número 1"."<br />";
	$ano = array("2020","2019","2018","2017","2016");
	$mes = array("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
	$tem = array(30,25,32,31,15,15,18,20,15,17,20,23,
				 31,26,31,30,15,15,18,20,15,17,20,23,
				 32,27,30,29,15,15,18,20,15,17,20,23,
				 33,28,29,28,15,15,18,20,15,17,20,23,
				 34,29,29,27,15,15,18,20,15,17,20,23
				);
	
	function se($ano = null, $mes = null, $tem = null){
		
		if(@count($ano) > 0 ){
			
			foreach($ano as $k => $v){
				
				print($v."&nbsp;|&nbsp");
				
				for($i = 0; $i < count($mes); $i++){
				
					print("&nbsp;".$mes[$i]."&nbsp;|");
				
				}
				
				print("<br />");
				
				for($x = 0; (count($tem)); $x++){//$tem == 60
					
					if($x == 11 && $v == 2020){
						print("&nbsp;".$tem[$x]."&nbsp;|&nbsp");
						print("<br/>");
						exit($x);
					}elseif($x == 23 && $v == 2019){
						print("&nbsp;".$tem[$x]."&nbsp;|&nbsp");
						print("<br/>");
					}elseif($x == 35 && $v == 2018){
						print("&nbsp;".$tem[$x]."&nbsp;|&nbsp");
						print("<br/>");
					}elseif($x == 47 && $v == 2017){
						print("&nbsp;".$tem[$x]."&nbsp;|&nbsp");
						print("<br/>");
					}elseif($x == 59 && $v == 2016){
						print("&nbsp;".$tem[$x]."&nbsp;|&nbsp");
						print("<br/>");
					}elseif($x == 0){
						print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tem[$x]."&nbsp;|&nbsp");
					}else{
						print("&nbsp;&nbsp;".$tem[$x]."&nbsp;|&nbsp");
					}
					
					if($x == 59){
						break;
					}else{
					continue;
					}
				}
			}
		
		}else{
			
			exit('Não foi passado nenhum paramentro na função SE do tipo array o qualquer parametro');
			
		}
		
	}
	se($ano,$mes,$tem);

	
?>