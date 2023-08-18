<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <h1>To check prime or not</h1>
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>

    <?php 
    if($_POST)  
    {  
        $num=$_POST['number'];  
        for ($i = 2; $i <= $num-1; $i++) {  
          if ($num % $i == 0) {  
          $value= True;  
          }  
    }  
    if (isset($value) && $value) {  
         echo 'The Number '. $num . ' is not prime';  
    }  else {  
       echo 'The Number '. $num . ' is prime';  
       }   
    }  
    ?>
</body>
</html>