
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font face="Arial">
    <center>
    <fieldset>
        <legend>Ucapan Pengingat</legend>
        <img src="images/kihoo.png" width="300px">
        <br>
        <?php
        $po=FILTER_INPUT(INPUT_POST,'op');
        echo ("Sudah waktunya Kembali Masuk kuliah,<b> " . $po .
         "</b>.<br>'Kelemahan terbesar kita terletak pada menyerah.
          Cara paling pasti untuk sukses adalah selalu mencoba sekali lagi.'");
        ?>
    </fieldset>
    </center>
</body>
</html>