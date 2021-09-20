<?php
    include('config.php');
    include('simple_html_dom.php');

    $html = file_get_html('https://www.gensh.in/database/artifact-set');

    $list = $html->find('div[class="row"]', 0);
    // echo $list;
    for($i = 0; $i < 35; $i++){
        $single_set = $list->children($i)->children(0)->children(0)->children(0)->children(2)->plaintext;
        $artifact = $list->children($i)->children(0)->children(0)->children(0)->children(0)->plaintext;
        $bonus_set = $list->children($i)->children(0)->children(0)->children(0)->children(3)->plaintext;
        $img = "https://www.gensh.in/";
        $img .= $list->children($i)->children(0)->children(0)->children(0)->children(1)->find('img',0)->src;
        $i++;
        //mysqli_query($conn ,"INSERT INTO artifact(number, nama, single_set, bonus_set, gambar) VALUES ('$i','$artifact', '$single_set', '$bonus_set', '$img')");
        // echo $artifact;
        // echo "<br>";
        // echo $single_set;
        // echo "<br>";
        // echo $bonus_set;
        // echo "<br>";
        // echo "<br>";
        $i--;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Character</title>
</head>
<body>
    <form action="./artifact.php">
        <h2>
            data base telah masuk
        </h2>
        <button>
            click
        </button>
    </form>
</body>
</html>
