<?php
    include('config.php');
    $query="SELECT * from karakter";
    $result=mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="FP LBE NCC/styles_karakter.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Character</title>
</head>
<body>
    <Header>
        <div class="jumbotron">
            <h1>
                <p>
                Database Character
                </p>
            </h1>
        </div>
    </Header>
    <main class="konten">
        <div class="body">
            <table border="2" cellspacing="0" cellpadding="5">
                <tr>
                    <th colspan="3">
                        <h2>
                            Character
                        </h2>
                    </th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Grade</th>
                    <th>Gambar</th>
                </tr>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                        <tr>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['star_rank']; ?></td>
                            <td><img src="<?php echo $row['gambar']; ?>"></img></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </main>
</body>
</html>