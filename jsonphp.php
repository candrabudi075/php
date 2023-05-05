<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>ALamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $no=1;
        $json_string = file_get_contents('file:///C:/Users/User/Downloads/data.json');
        $json = json_decode($json_string, true);
        foreach($json as $data ){      
            $lahir = new DateTime($data["tanggal_lahir"]);
                    $today = new DateTime();
                    $umur = $today->diff($lahir);          
            switch (true) {
                case ($data["nilai"] >= 90 && $nilai <= 100):
                    $grade = "A";
                    break;
                case ($data["nilai"] >= 70 && $nilai <= 89):
                    $grade = "B";
                    break;
                case ($data["nilai"] >= 60 && $nilai <= 69):
                    $grade = "C";
                    break;
                default:
                    $grade = "D";
                    break;
                }
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["tanggal_lahir"];?></td>
            <td><?php echo $umur->y;;?></td>
            <td><?php echo $data["alamat"];?></td>
            <td><?php echo $data["kelas"];?></td>
            <td><?php echo $data["nilai"];?></td>
            <td><?php echo $grade;?></td>
        </tr>
        <?php
       }
        ?>
    </table>
</body>

</html>