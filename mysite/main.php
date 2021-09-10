<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $privet  ?> </h1>

            <div class="data">
                <div class="myImg" align="RIGHT" valign="top">
                    <?php  echo '<img src="/mysite/img/portrait-of-white-cat-wearing-glasses_43525-1167.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Я из города: ', ' ', $city; ?>
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <hr><br><br>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>
            <br>
            <div class="knowledge">
                Отработка навыков:<br>
                    <?php  include 'knowledge.inc.php'; ?>
                    1. <?php   echo $a, ' ', $b, ' ', $c, ' ', $d;; ?> <br><br>
                    2. Сложение чисел
                    <?php
                        $a = 23123432;
                        $b = 22343240;
                    echo $a, ' и ', $b, ' равно:'. '<br>';
                        $c = $a + $b;
                        echo $c;
                    ?>   <br> <br>

                    3. Сравнение:<br>
                     <?php
                        echo $s;
                    ?><br><br>

            </div>


        </div>
            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
