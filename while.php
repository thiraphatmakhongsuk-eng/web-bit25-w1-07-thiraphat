<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <style>
    body{
        font-family: 'Sarabun', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px;
        background-color: #fff382;
        font-size: 20px;
    }

    a{
        text-decoration: none;
        color: black;
        background-color: #fcffbe;
        padding: 10px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        width: 300px;
        text-align: center;
    }

    a:hover{
        background-color: #ffffff;
    }

    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 15px;
    }

    input[type="number"]{
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #fcfcfc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"]{
        padding: 10px 20px;
        background-color: #ff9100e3;
        color: black;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover{
        background-color: #ffffff;
    }

    .card {
        background-color: #fee86c;
        border-radius: 12px;
        padding: 24px 60px;
        text-align: center;
        line-height: 2;
        width: 450px;
    }

    h2{
        font-size: 40px;
        margin-bottom: 20px;
        margin-top: 0;
    }

    .result-title {
        background-color: #ff9100e3;
        color: black;
        border-radius: 8px;
        padding: 8px 16px;
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 12px;
        display: inline-block;
    }

    .row {
        background-color: white;
        border-radius: 8px;
        padding: 8px 20px;
        margin-bottom: 6px;
        color: #0026ff;
        font-weight: bold;
        transition: background 0.2s, transform 0.15s;
    }

    .row:hover {
        background-color: #dbeeff;
        transform: scale(1.02);
    }

    .row span {
        color: #e11d48;
        font-size: 20px;
    }
    </style>
</head>

<body>
    <h1>While Loop</h1>
    <a href="Index.php">For Loop</a>

    <div class="card">
        <h2>คำนวณสูตรคูณ</h2>

        <form action="">
            <input type="number" name="num" id="" placeholder="ใส่เลขแม่สูตรคูณ">
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            if(isset($_GET["num"])){
                $num = $_GET["num"];

                echo "<div class='result-title'>สูตรคูณแม่ " . $num . "</div><br>";

                $i = 1; 
                while($i <= 24){
                    echo "<div class='row'>" . $num . " x " . $i . " = <span>" . ($num * $i) . "</span></div>";
                    $i++;
                }
            }
        ?>
    </div>

</body>
</html>