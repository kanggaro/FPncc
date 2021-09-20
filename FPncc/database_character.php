<?php
    include('config.php');
    include('simple_html_dom.php');

    $html = file_get_html('https://www.gensh.in/characters');
    
    $list = $html->find('div[class="row character-list"]', 0);
    // echo $list;
    for($i = 0; $i < 42; $i++){
        $charac = $list->children($i)->children(0)->children(1)->children(0)->plaintext;
        $grade = $list->children($i)->children(0)->children(1)->children(1)->plaintext;
        $img = "https://www.gensh.in/";
        $img .= $list->children($i)->children(0)->children(0)->children(0)->find('img',0)->src;
        echo $img;
        $i++;
        //mysqli_query($conn ,"INSERT INTO karakter(number,nama, star_rank, gambar) VALUES ('$i','$charac', '$grade', '$img')");
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
    <form action="./character.php">
        <h2>
            Data base telah masuk
        </h2>
        <button>
            click
        </button>
    </form>
</body>
</html>



