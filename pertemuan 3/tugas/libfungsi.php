<?php

	function kelulusan($uts, $uas, $tugas){
		$rerata = $uts + $uas + $tugas;
		$lulus = $rerata / 3;

		if($lulus >= 55 ) {
			return 'Lulus';
		} else {
			return 'Tidak Lulus';
		}
	}	
	
	function grade($rerata) {
	  	if($rerata >= 100) {
			return 'A';
		} elseif($rerata >= 85) {
			return 'B';
		} elseif($rerata >= 69) {
			return 'C';
		} elseif($rerata >= 55) {
			return 'D';
		} elseif($rerata >= 35) {
			return 'E';
		} else {
			return 'I';
		}
	}
		
	function predikat($lulus, $rerata){
		switch (grade($rerata) ){
			case 'A':
				return 'Sangat Memuaskan';
				break;
			case 'B':
				return 'Memuaskan';
				break;
			case 'C':
				return 'Cukup';
				break;
			case 'D':
				return 'Kurang';
				break;
			case 'E':
				return 'Sangat Kurang';
				break;
			case 'I':
				return 'Tidak ada';
				break;
		}
	}

	function keterangan($grade) {
		if ($grade == 'E') {
		  return 'Tidak Lulus';
		} else {
		  return 'Lulus';
		}
	}
?>