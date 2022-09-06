<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sanjeev BMI Calculator</title>
    </head>
    <style>
body {
  background-color: lightblue;
}
h1{
    color:blue;
   text-align:center; 
}

*{
  font-family: Algerian;
  font-size: 20px;
  color:green;
  text-align:center;
}
P{
    font-family: verdana;
  font-size: 20px;
  color:red;
  text-align:center;
}
a{
    color:blue;
}
</style>
    <body>
        <b> <h1>Sanjeev BMI Calculator</h1></b>
        <form action="index.php" method="post">
            Height:<input type="text" name="height" value-hidden="Enter your Height" required><br><br>
            Weight:<input type="text" name="weight" value-hiden="Enter your Weight" required><br><br>
            <input type="submit">
            </form>
        <pre>
        <?php
        $height=$_POST["height"];
        $weight=$_POST["weight"];
        $height=$height/100;
        $BMI=$weight/($height*$height);
        echo "your Body Mass Index is:",$BMI,"<br>";
        if($BMI>0){
            if($BMI<=16){
            echo "[you are severely underweight]";    
            }
            else if($BMI<=18.5){
                echo "[you are underweight]";
            }
            else if($BMI<=25){
                echo "[you are Healthy]";
            }
            else if($BMI<=30){
                echo "[you are overweight]";
            }
            else{
                echo "[you are severely overweight]";
            }
        }else{
            echo "[enter valid details]"; 
        }
        ?>
<p>Copyright &copy; 2022 Created by UMA AJAY KUMAR REDDY P S </P>
<a href="https://umaajay.netlify.app/">ABOUT US</a>
        
    </body>
</html>
