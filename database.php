<?php
try{
        $db = new PDO('mysql:host=as228644-001.privatesql;port=35116;dbname=solutionstress', 'solutionstress', '6e5aW7J2xq6cbxx2');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

?>