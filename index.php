<?php include "./logic.php" ?>

<head>
    <?php include "./head.php" ?>

</head>

<style>

</style>

<body>
    <div class="hero-image"></div>
    <div class="bc-image"></div>

    <h2><span class="line-center">Shopping List </span></h2>

    <!-- <h2><span>Pirkinių sąrašas</span></h2> -->


    <!-- <hr width="30%" /> -->




    <div class="row project-lightbox top-m-90">
        <div class="inputfield col-md-3">
            <!-- <img class="img-fluid" src="image/meall.jpg" data-action="zoom" data-original="image/meall.jpg">  -->


            </form>
        </div>
        <div class="col-md-7 align-self-center">
            <!-- <h4> <span class="number">01</span>Pirkinių sąrašas</h4> -->








            <!-- geras kodas stulpeliu-->

            <!-- <form action="" method="post">
                <h6>Prekių sąrašas</h6>
                <input type="text" name="item">

                <h6>Prekių kategorija</h6>
                <input type="text" name="category">

                <input class="btn btn-primary" type="submit" value="Pateikti">

            </form>  -->
<!-- 
linijoje --> 
             <form class="form-inline" action="" method="post">
                <label for=""></label>
                <input type="textitem" id="item" placeholder=" Enter item" name="item">
                <label for=""></label>

                <input type="textcategory" id="category" placeholder=" Enter category" name="category">

                <button type="submit"> Add to the list </button>

            </form>
        </div>
        <div class="col-md-2">
        </div>
    </div>


    <!-- </div>
    <div class="col-md-4">
    </div>
    </div> -->

    <div class="row content top-m-90">
        <div class="col-md-3"></div>
        <div class="duomenuatvaizdavimas col-md-7">
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
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- input 1 -->

    <!-- <form class="form-inline" action="/action_page.php">
  <label for=""></label>
  <input type="" id="item" placeholder=" Enter item" name="item">
  <label for=""></label>
  <input type="" id="category" placeholder=" Enter category" name="category">
  <label>
    <input type="checkbox" name="remember"> Remember me
  </label> 
  <button type="submit">Submit</button>
</form>

    <! input 2 -->

    <!-- <div class="d-flex justify-content-center mb-4">
    <div class="form-outline me-3" style="width: 14rem">
        <input type="text" id="form1" class="form-control" />
        <label class="form-label" for="form1">Example input</label>
    </div>
    <button type="button" class="btn btn-primary">Button</button>
</div> -->

    <!-- Input group -->
    <!-- <div class="d-flex justify-content-center">
    <div class="input-group w-auto">
        <input
          type="text"
          class="form-control"
          placeholder="Example input"
          aria-label="Example input"
          aria-describedby="button-addon1"
        />
        <button class="btn btn-primary" type="button" id="button-addon1" data-mdb-ripple-color="dark">
            Button
        </button>
    </div>
</div> -->


    <!-- <form class="form-inline" action="/action_page.php">
  <label for=""></label>
  <input type="" id="item" placeholder=" Enter item" name="item">
  <label for=""></label>
  <input type="" id="category" placeholder=" Enter category" name="category"> -->
    <!-- <label>
    <input type="checkbox" name="remember"> Remember me
  </label> -->
    <!-- <button type="submit">Submit</button>
</form> -->


    <!-- 
<form class="form-inline" action="" method="post">
<label for=""></label>
                <input type="text" id="item" placeholder=" Enter item" name="item">
                <label for=""></label>
              
                <input type="text" id="category" placeholder=" Enter category" name="category">

                <button type="submit"> Add to the list </button>

            </form> 
        </div>
        <div class="col-md-2">
        </div>
    </div>
    -->

</body>

</html>