<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
  <tr style="background-color: blue;">
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
  </tr>
  
  <?php
  for ($i=1; $i<=10; $i++) {
    $nama = "Nama ke ".$i;
    $kelas = 11 - $i;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo "Kelas ".$kelas; ?></td>
    </tr>
    <?php
  }
  ?>
  
</table>

</body>
</html>