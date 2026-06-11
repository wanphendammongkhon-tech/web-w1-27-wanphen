<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
      <?php
            echo "<h1 style='color:red'>งานที่ 1 Wanphen Dammongkhon BIT.2/4 เลขที่ 27</h1>";
      ?>

        <a href="while.php"> Whlie Loop </a>

      <form action="">
            <label for="">เลขแม่สูตรคูณ</label> <br>
            <input type="number" name="num" id="">
            <input type="submit" value="คำนวณ">
      </form>

      <?php
            if(isset($_GET["num"])){
                  $num = $_GET["num"];
                  
                  echo "<h2>สูตรคูณแม่" . $num . "<h2>";
                  
                  echo "<table>";
                  echo "<tr><th colspan='5'>แม่สูตรคูณ</th></tr>";

                  //.เริ่มต้น    สิ้นสุด.       เพิ่มทีละ1
                  for($i = 1; $i <= 12; $i++){
                        echo "<tr>";
                        echo "<td>" . $num . "</td>";
                        echo "<td>x</td>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>=</td>";
                        echo "<td>" . ($num * $i) . "</td>";
                        echo "</tr>";
                  }
                  
            }
      ?>

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