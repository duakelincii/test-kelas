<?php
	$data = [93, 78, 14, 10, 31, 73, 18, 12, 1, 73, 48, 1, 16, 18, 39, 9, 21, 
    6, 80, 27, 63, 72, 14, 86, 99, 44, 52, 51, 22, 70, 28, 14, 57, 13, 3, 75, 45, 6, 96, 42, 
    74, 5, 14, 44, 95, 15, 19, 97, 76, 37, 4, 5, 54, 54, 53, 88, 75, 7, 17, 59];

    $jenis[]=null;
    $cek="";
    $i=0;
    for($j=0;$j<count($data);$j++)
    {
        $index2=array_search($data[$j],$jenis);
        if($index2 == "")
        {    
            $jenis[$i]=$data[$j];
            $i++;
        }
    }

    cari($data, $jenis);
    
    function cari($data, $data2)
    {
        
        for($K=0;$K<count($data2);$K++)
        {    
            echo $data2[$K]."=>".cariyangsama($data,$data2[$K])."</br>";
        }
    }
    
    function cariyangsama($data,$dupval) {
        $nb= 0;
        foreach($data as $key => $val)
        if ($val==$dupval) $nb++;
        return $nb++;
    }    
    
?>