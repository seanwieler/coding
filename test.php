<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
<!--		<base href="https://zeroanalog.ca/resume/">-->

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
	    <body>
             <pre>
            <?php
            $a = 5;
            
            while ($a > 2) {
                $a = mt_rand(0,10);
                echo "Hello\n";
            }
            include("something.php");
             
            $_COOKIE['awdm'] = 'bob';
            echo "Get: {$_GET['value']}\n";
            echo "Get: {$_COOKIE['awdm']}\n";

            //require("topdog.php");
            echo "oooppps";

            echo "My get value of \"myvar\" is " . $_GET['myvar'];
            if ($_GET['myvar'] == "yes") {
                echo "\nIt is agreed";
            } else {
                echo "\nIt is not agreed";
            }
            ?>
            </pre>
       
   	 </body>
</html>

		
		
		
		
		
		

