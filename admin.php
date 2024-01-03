
<?php
    require_once('db.php');
    include('validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <script>
        $(document).ready(function(){
            var minDate=new Date();
            $("#date").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: 'minDate',
                dateFormat: 'yy-mm-dd',
                onClose: function(selectDate){
                    $('#return').datepicker("option","minDate",selectDate)
                }
            });
            $('#time').timepicker({ 
                timeFormat: 'H:mm',
                minHour: '9',
                maxHour: '22',
                scrollbar: true
             });
        });
    </script>
    
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .container-fluid{
            background: lightgrey;
        }

        .exit{
            text-align: right;
            padding: 15px;
            padding-right: 50px;
            display:block;
            color: black;
            font-weight: 900;
            font-size: 18px;
        }
        thead{
            background: lightblue;
        }
        .jumbotron-fluid{
            text-align: center;
        }
        .jumbotron{
            margin-bottom: 0;
        }
        p{
            color:red;
        }
        .row{
            margin: 10px auto;
            justify-content: center;
            width: 90%;
        }
        input.submit{
            border: 0;
            background: -webkit-linear-gradient(bottom,lightgreen,green);
            padding:5px;
            border-radius: 5px;
            color: white;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 700;
        }
        input.submit:hover{
            opacity: .9;
        }
        input{
            width: 100%;
            margin: 5px 0;
        }
        .col-75 {
            float: left;
            width: 85%;
            margin-top: 6px;
        }
        .btn-link {
            border: 2px;
            border-radius: 10px;
            outline: none;
            background: red;
            cursor: pointer;
            color: white;
            padding: 5px;
            text-decoration: underline;
            font-family: inherit;
            font-size: inherit;
        }
        
    </style>
</head>
<body>
    <?php

        if(isset($_SESSION['enter'])){

    ?>
    
    <div class="container-fluid">
            <div class="dropdown">
                <a href="exit.php" class="exit">KILÉPÉS</a>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Összes koncert</h2>
    </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th scope="col">Mikor</th>
            <th scope="col">Helyszín</th>
            <th scope="col">Kezdés ideje</th>
            <th scope="col">Törlés</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql2 = "SELECT * FROM concert ORDER BY mikor";
                $result = mysqli_query($con,$sql2);
                $row=mysqli_num_rows($result);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['mikor']."</td><td>".$row['hol']."</td><td>".$row['hour']."</td>";
                    echo "<td><form method='post' action='delete.php'><input type='submit' value='Törlés' name='delete' class='btn-link'/><input type='hidden' name='id' value='".$row['id']."'></form></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
    </div>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Új koncert bevitele az adatbázisba</h2>
    </div>
    </div>
    <div class="container">
        <form action="insert.php" method="post">
            <div class="row">
                <div class="col-75">
                    <input type="text" name="date" id="date" placeholder="Dátum">
                </div>
                <div class="col-75">
                    <input type="text" name="hol" id="hol" placeholder="Helyszín">
                </div>
                <div class="col-75">
                    <input type="text" name="time" id="time" placeholder="Kezdés ideje">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="submit" class="submit" name="insert" value="Bevitel">
                </div>
            </div>
        </form>   
    </div>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2>Köszi, hogy benéztél!</h2>
    </div>
    </div>

    <footer class="container-fluid" style="background:black; color:white; text-align:center;">
        <div style="padding:20px;">&copy; by Borysz</div>
    </footer>
    <?php
        }else{
            echo "Jelentkezz be!";
        }
    ?>

</body>
</html>