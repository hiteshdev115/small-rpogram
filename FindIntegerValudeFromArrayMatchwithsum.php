<?php
//Find two integers that sum to in an array element

function hasArrayTwoCandidates($A, $arr_size, $sum) 
	{ 
	    $l; $r; 
	  
	    /* Sort the elements */
	    //sort($A, A + arr_size); 
	    sort($A); 
	  
	    /* Now look for the two candidates  
	    in the sorted array*/
	    $l = 0; 
	    $r = $arr_size - 1;
	    $m = '';  
	    while ($l < $r) 
	    { 
	        if($A[$l] + $A[$r] == $sum) 
	            return $m = $A[$l].','.$A[$r];  
	        else if($A[$l] + $A[$r] < $sum) 
	            $l++; 
	        else // A[i] + A[j] > sum 
	            $r--; 
	    }  
	    return 0; 
	} 
	  
	// Driver Code 
	$A = array (1, 4, 45, 6, 10, -8); 
	$n = 46; 
	$arr_size = sizeof($A); 
	print(hasArrayTwoCandidates($A, $arr_size, $n));
	
  /*
  O/p:-
  1,45
  
  */
  ?>
