<html>
    <head>
        <title>Nearby Services</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1 id="rootHeader">Nearby Services</h1>
        <form class="form" method="GET" action="show.php">
            <select  id="towntxt" name="town">
                <?php
                    include('DB.php');
                    $rows = $db->getRows('SELECT DISTINCT(City) from service',array());
                    foreach($rows as $row){
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Search" id="searchbtn">
        </form>
    </body>
</html>