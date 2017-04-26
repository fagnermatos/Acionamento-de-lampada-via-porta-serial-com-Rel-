<?php

session_start();
set_time_limit(900);
require 'e_ligar.php';


class ThreadAssyc extends Thread {
    public function run() {
    			$_SESSION['arq'];
				$_SESSION['arq1'];
				$estado = true;
    			while($estado) {
    				$_SESSION['arq'] = fopen('C:\xampp\htdocs\ieec\estado.txt', 'r');
				$_SESSION['arq1'];
    				$_SESSION['arq1'] = fgets($_SESSION['arq'], 4096);
    				sleep(1);
    				if ($_SESSION['arq1'] == '1') {
    					$estado = true;
    					echo "string";
    				}elseif ($_SESSION['arq1'] == '2') {
    					$estado = false;
    					echo "not string";
    				}
    				
    			}
    			echo $_SESSION['arq1'];
    			     
    }
}




	$thread = new ThreadAssyc();

	$_SESSION['porta_endereco'] = 'COM3';
	$_SESSION['porta'];
	$msg = '1';

	$_SESSION['porta'] = fopen($_SESSION['porta_endereco'], 'w');
	fwrite($_SESSION['porta'], $msg);

	$thread->start();
	





?>