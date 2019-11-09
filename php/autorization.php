<?php
    include 'config.php';
     if (!isset($_POST['submit']))
    {
        echo 'Не натиснута кнопка!';
    }
    else
    {
      
        if ($_POST['username'] == $user && $_POST['password'] == $pass)
        {
        ?>
            <script>
            location='../admin/adminHome.php';
            </script>
        <?
        }
        else
        {
            echo "Неправильні вхідні дані, спробуйте ще раз!</br>";
            echo "<a href='../index.php'>На головну</a>";
        }
    }

?>