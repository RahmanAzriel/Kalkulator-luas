<style>
    * {
    font-family: "Poppins", sans-serif;
    font-weight: 800;
    font-style: normal;
    margin: 0;
    padding: 0;
}
body {
    /*background-image: url(wallpaperflare.com_wallpaper.jpg);*/
    background-size: cover;
    background-color: rgb(228, 228, 228);
}
.hrefan {
    display: flex;
    margin: 10px;
    justify-content: center;
}
.hrefan a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    border: 1px solid rgb(54, 54, 54);
    margin: 0px 5px;
    font-size: 20px;
    background-color: white;
    border-radius: 10px;
}
.hrefan .ba {
    width: 300px;
    text-align: center;
    display: flex;
    height: 50px;
    justify-content: center;
    align-items: center;
}
.hrefan .bi {
    width: 300px;
    text-align: center;
    display: flex;
    height: 50px;
    justify-content: center;
    align-items: center;
}
form {
    background-color: rgb(255, 255, 255);
    height: 300px;
    width: 600px;
    border-radius: 10px;
}
form h1 {
    background-color: rgb(255, 255, 255);
    border-radius: 10px  ;
}
.hihir1 {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.hihir {
    background-color: rgb(204, 204, 204);
    width: 800px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
}
form input {
        padding: 5px 15px;
        border: 0px;
        border: 1px solid rgb(131, 131, 131);
        background-color: white;
        margin: 10px;
        width: 200px;
        border-radius: 5px ;
        transition: all 0.2s;
}
form input:hover {
    box-shadow: 2px 1px 2px 1px rgba(70, 114, 236, 0.4);
}
form input:focus {
    box-shadow: 2px 1px 2px 1px rgba(70, 114, 236, 0.4);
}
form label {
    background-color: white;
}
form  .sambit {
    background-color: rgb(69, 69, 228);
    color: white;
}
.test {
    font-size: 20px;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="hrefan">
        <a href="segi.php" class="bi" style="background-color: rgb(69, 69, 228); color : white;">Luas Segitiga</a>
        <a href="index.php" class="ba" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">Luas Persegi Panjang</a>
    </div>
    <div class="hihir1">
        <div class="hihir" style="border-radius: 5px;">
            <form action="" method="post">
                <H1>Hitung Nilai Luas Segitiga</H1>
                <label for="Nilai Panjang">Nilai Alas <br><input type="number" name="a" id="Nilai Panjang" placeholder="Masukan Nilai"></label><br>
                <label for="Nilai Lebar">Nilai Tingi <br><input type="number" name="b" id="Nilai Lebar" placeholder="Masukan Nilai"></label><br>
                <input type="submit" class ="sambit"><br>
                <div class="test">
                    <?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $a = $_POST['a'];
    $b = $_POST['b']; 
} if (@$a > 0 && $b > 0 ){
    echo 1/2 * $a * $b;
}

?>
</div>
            </form>
        </div>
    </div>
</body>
</html>