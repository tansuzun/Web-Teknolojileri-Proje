<html>
<body>

İsim: <?php echo $_POST["isim"]; ?><br>
Soyisim: <?php echo $_POST["soyisim"]; ?><br>
Email: <?php echo $_POST["email"]; ?> <br>
Şehir: <?php echo $_POST["sehir"]; ?><br>
Cinsiyet: <?php echo $_POST["cinsiyet"]; ?><br>
Hobiler: <?php 
if(isset($_POST["hobiler"]))
 {
    $hobiler = $_POST["hobiler"];
 
    foreach($hobiler as $hobi) {
        echo $hobi . ", ";
    }
    } else {
    echo "Hiç hobi seçmediniz.";
    }
?>


</body>
</html>