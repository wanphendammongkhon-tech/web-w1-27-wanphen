<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>โปรแกรมคำนวณแม่สูตรคูณ</h1>

        <a href="index.php"> index.php </a>

    <form action="">
            <label for=""> กรอกแม่สูตรคูณ :</label> 
            <input type="number" name="num" id="">
            <input type="submit" value="คำนวณ">
      </form>
    
        

     <?php
            if(isset($_GET["num"]))
                $num = $_GET["num"];
                  
            if($num > 12) {
                echo "<h2>คำเตือน: โปรแกรมนี้คำนวณได้ไม่เกินแม่ 12  </h2>";
      } 
      else {
            
            echo "<h2>สูตรคูณแม่ " . $num . "</h2>";
            echo "<table>";
            echo "<tr><th colspan='5'>แม่สูตรคูณม่</th></tr>";

            for($i = 1; $i <= 12; $i++){
                  echo "<tr><td>$num</td><td>x</td><td>$i</td><td>=</td><td>" . ($num * $i) . "</td></tr>";
            }
            echo "</table>";
      }
      ?>
<script src="script.js"></script>  

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: sans-serif;
            font-size: 18px;
            margin-top: 20px;
        }
        th {
            background-color: #6c5ce7;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f0ff;
            color: #6c5ce7;
            font-weight: bold;
        }
        h2 {
            font-family: sans-serif;
            color: #4a5568;
            margin-top: 20px;
        }
    </style>

</body>
</html>