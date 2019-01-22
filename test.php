<?php include_once("./view/layouts/header.php"); ?>
  <style media="screen">
    main div .row div{
      border: solid black 1px;
      padding: 10px 15px;

    }
  </style>
  <main>
    <div class="container" style="background-color:skyblue">
      <h1>Fixed Container</h1>
    </div>
    <div class="container-fluid" style="background-color:skyblue">
      <div class="row" style="background:red">
        <div class="col-8"style="background:yellow">
          col-xl-8
        </div>
        <div class="col-4">
          col-xl-4
        </div>
      </div>
      <div class="row justify-content-md-center" style="background:aquamarine">
        <div class="col-md-4"style="background:">
          col-xl-8
        </div>
        <div class="col-md-4">
          col-xl-4
        </div>
      </div>


    </div>
    <h1>Hello, world!</h1>
    <h2>YOLO</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod turpis id dui vulputate, et aliquam leo pretium. In vitae viverra eros. Nullam rutrum orci nibh, vitae eleifend eros euismod vel. Ut quis purus sit amet purus vulputate molestie ac at massa. Fusce hendrerit ut nisl vel sagittis. Vivamus porta ullamcorper tellus a hendrerit. Phasellus sem orci, vulputate a risus vitae, hendrerit lacinia elit. Aenean et velit eget quam convallis semper vel eget lorem. Pellentesque eleifend nunc id massa fermentum malesuada. Vestibulum convallis dapibus est vel dignissim. Mauris eu posuere ipsum, ac posuere tellus. Nulla vitae facilisis enim, a dictum purus. Curabitur facilisis diam non porta auctor. Quisque bibendum dictum enim non blandit.
    </p>
    <ul>
      <li>Hamze</li>
      <li>Jonas</li>
      <li>Le meilleur</li>
    </ul>
    <form class="" action="./test.php" method="post">
      <label for="title">title</label>
      <input type="text" name="champ" value="" placeholder="E-mail">
      <input type="submit" name="submit" value="Envoyez">
    </form>
  </main>
<?php include_once("./view/layouts/footer.php"); ?>
