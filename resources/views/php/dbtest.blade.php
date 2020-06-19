<?php
    $mysqli = new mysqli('localhost:3306','root','bksroot','jukumanagedb');
    
    if($mysqli -> connect_error){
        die('Connect Error:(' .$mysqli -> connect_errno .')' .$mysqli -> connect_error);
    }
    
    print 'mysqli クラスによる接続に成功しました。';
    
    $mysqli -> close();
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>