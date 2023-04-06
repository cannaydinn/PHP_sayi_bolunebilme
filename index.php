<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÖDEV</title>
</head>
<body>
    
    <form action="" method="post">
        Bir sayı giriniz: 
        <input type="number" name="sayi"><br>
        <button type="submit">Gönder</button>
    </form>
<?php 
    if (isset($_POST["sayi"])) { 
        $number = $_POST["sayi"]; 
        if($number == ""){  
            echo "Boş Bırakmayın !"."<br>";
        }else{

            if ($number % 3 == 0) { 
                
                echo "${number} sayısı 3 ile tam bölünüyor";
                header('Refresh:2 ; URL=index.php');

            }else {
                
                $newNumber = $number;
                $newNumber++;
                while ($newNumber % 3 !== 0) { 
                
                    $newNumber++;
                }
                echo "${number} Sayısı 3 İle Tam Bölünemiyor ve Girdiğin Değere En Yakın 3 İle Tam Bölünen Sayı:
                ${newNumber}";
            }
        }
    }
?>
</body>
</html>