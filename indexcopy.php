<?php include "./logic.php" ?>

<head>
    <?php include "./head.php" ?>

</head>

<style>

</style>

<body>
   
    <h2><span class="line-center">Shopping List </span></h2>

    <!-- <h2><span>Pirkinių sąrašas</span></h2> -->


    <!-- <hr width="30%" /> -->


    <h4> Duomenų suvedimas</h4>
    <form action="" method="post">
        <h4>Prekių sąrašas</h4>
        <input type="text" name="item">

        <h4>Prekių kategorija</h4>
        <input type="text" name="category">

        <input class="btn btn-primary" type="submit" value="Pateikti">

    </form>



    <table class="table">
        <thead>
            <tr>
                <th scope="">Item</th>
                <th scope="">Category</th>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 0; $i < count($_SESSION['shop']); $i++) {  ?>
                <tr>
                    <td><?= $_SESSION['shop'][$i]['item'] ?></td>
                    <td><?= $_SESSION['shop'][$i]['category'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>  


  