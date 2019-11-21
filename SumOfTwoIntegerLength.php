<?php
  //By Hitesh Patel
  function sumofStr($str1, $str2) {
  		
  		$total=0; 
  		$rem=0;  
  		$grandTotal = '';
  		//$total = (int)$str1 + (int)$str2;
  		for($i=0; $i<=strlen($str1); $i++){
  			$rem = $str1%10;
  			$total = $total+$rem;
  			$str1 = $str1/10;
  		}
  		
  		$total2=0; 
  		$rem2=0;

  		for($j=0; $j<=strlen($str2); $j++){
  			$rem2 = $str2%10;
  			$total2 = $total2+$rem2;
  			$str2 = $str2/10;
  		}
  		
  		//echo $total2;
  		return $grandTotal = $total + $total2;
  	}
  	$str1 = 25; 
  	$str2 = 2296;
	
  print(sumofStr($str1, $str2));
  
  ?>
