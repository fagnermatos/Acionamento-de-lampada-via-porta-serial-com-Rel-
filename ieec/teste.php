<?php

class AsyncOperation extends Thread {

   

    public function run() {
                sleep(1);

        
    }
}

$thread = new AsyncOperation();


$message = '1';
$portAddress = 'COM3';




?>