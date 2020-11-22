<?php

function faktorial($n){
	if($n==1){
		return $n;
	}else{
		return $n * faktorial($n-1);
	}
}
$nilai = 5;
echo "Hasil ".$nilai."! adalah = ".faktorial($nilai);

?>