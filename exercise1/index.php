<?php
    //include
    require_once 'database.php';

    $result = mysqli_query($connect, "SELECT * FROM `db_auto`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Machine</title>
    <link rel="stylesheet" href="css/bootstrap.main.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <header>
        <div class="header">
            <div class="menu">
                <div class="container">
                            <div class="col-md-5">
                               <div class="logo" align="right">
                                   <img src="https://sun4-11.userapi.com/s/v1/if2/XKNbLpM9Q6Q3dB7odSvpT3LAxZI1N38SgByl8_npcVuEY8TDzDPEEOGxn_3BK2LheeqCG7tYxErAyGT23j6I5pIP.jpg?size=200x200&quality=96&crop=20,20,260,260&ava=1" height="100" width="119" alt="">
                               </div>
                            </div>
                            <div class="col-md-7">
                                <nav>
                                    <table align="center">
                                        <tr align="center">
                                            <th>Бренд</th>
                                            <th>Модель</th>
                                            <th>Цвет</th>
                                            <th>Количество</th>
                                            <th>Цена</th>
                                        </tr>
                                        <?php
                                        while($cars = mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                            <tr align="center">
                                                <td><?= $cars['brand']?></td>
                                                <td><?= $cars['model']?></td>
                                                <td><?= $cars['colour']?></td>
                                                <td><?= $cars['number']?></td>
                                                <td><?= $cars['price']?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                    <h3>Add new auto</h3>
                                    <form action="database.php" method="post">
                                        <p>brand</p>
                                        <input type="text" name="brand">
                                        <p>model</p>
                                        <input type="text" name="model"></>
                                        <p>colour</p>
                                        <input type="text" name="colour"></>
                                         <p>number</p>
                                        <input type="number" name="number">
                                         <p>price</p>
                                        <input type="number" name="price">

                                    <button type="submit">add new product</button>
                                    </form>
                                </nav>
                            </div>
                </div>

            </div>


        </div>
    </header>

    <footer>
    </footer>


</body>
</html>