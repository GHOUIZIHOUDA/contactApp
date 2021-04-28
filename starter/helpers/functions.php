<?php
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "conntac";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

        if($conn){
            echo "connected";
        }else{
            echo "no connected";
        }
 
    }

    function test(){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';        
    }

?>