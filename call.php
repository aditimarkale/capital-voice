<?php
$number = $_POST['From'];
$body = $_POST['Body'];       
            echo "<Response>
    <Say>
           Capital 
    </Say>
</Response>
";
header('Content-Type: text/xml');
?>