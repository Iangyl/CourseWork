<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/order.css" type="text/css" media="all">
</head>
<body>
    <?php
        $sql = "INSERT into salesLog(ID_Flight) values('".$_POST['id']."')";
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
    ?>
    <div id="container">
        <section>
            <div id="letter-block">
                <div>Заповніть данні</div>
                <div>
                    <form name='form-forBuy' action="php/buy.php" method="post">
                        <input name="f_name" type="text" class="input-order" placeholder="ПІБ" required/></br>
                        <input name="p_num" type="text" class="input-order" placeholder="Номер телефону" required/></br>
                        <input name="email" type="email" class="input-order" placeholder="Email" required/></br>
                        <input name="card" type="text" class="input-order" placeholder="Номер карти" required/></br>
                        <input name="civCode" type="text" class="input-order" placeholder="CIV" required/></br>
                        <?$fl_Id = $_POST['id'];?>
                        <input type="hidden" name="fl_id" value="<?echo $fl_Id;?>"/>
                        <input type="submit" name="add" id="btn-buy" value="Придбати"/>            
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>