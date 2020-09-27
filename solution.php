function cmp($a, $b)
{
    $a = strval($a);
    $b = strval($b);

    $aTmp=strlen($a);
    $bTmp=strlen($b);
   

    if ($aTmp == $bTmp) {   //If strings have same lenghts

        for($i=0;$i<$aTmp;$i++) //Compare every char
        {	

        	$aTmp2 = intval($a[$i]);
        	$bTmp2 = intval($b[$i]);
        	
        	if ($aTmp2 > $bTmp2) {return 1;}
            if ($aTmp2 < $bTmp2) {return -1;}
    
         }
        
        return 0;
    }
    
    return ($aTmp < $bTmp) ? -1 : 1;
}



function bigSorting($unsorted) {
  
     usort($unsorted,"cmp"); //Compare strings by their lenghts;
     return $unsorted;
    
}