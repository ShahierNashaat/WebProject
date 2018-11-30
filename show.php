<html>
    <head>
        <title>Nearby Services</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include('DB.php');
            $city = $_GET['town'];
            $rows = $db->getRows('SELECT Name,Address,Phone from service where City=?',array($city));
            foreach($rows as $row){
                echo "<div id='show_div'>";
                echo "<h3>".$row[0]."</h3>";
                echo "<p>Address: ".$row[1];
                if($row[2] != null){
                    echo "<br><br>Phone: 0".$row[2];
                }
                echo "</p></div>";
            }
        ?>
    </body>
<html>