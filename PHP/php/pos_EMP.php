<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POS</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.15752-9/327284110_2283893938463493_6584739285693366318_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGeQZJONwkMqsj23XWYSoD29vxamglmJ_n2_FqaCWYn-fSeNcU_knq8Q1P8mANg1wYz1fjMRIEHzokvfntdXo2Z&_nc_ohc=M14OemqviMQAX_5-FJ-&_nc_ht=scontent.fmnl4-1.fna&oh=03_AdRQM7ikv4u-q4pES6Jg2XYSPlrGlz4mccTHCFYtkpJfQg&oe=63FB8FDD
) no-repeat center center fixed;
      background-size: cover;
    }
    
    @media only screen and (max-width:900px) {
    body {
        background-size: contain;
    }
    }
    form  {
      display: table;
      height: 50%;
    }
    .form1 {
    margin-top: 50px;
    }
    p     {
      display: table-row;
    }
    label {
      display: table-cell;
    }
    input {
      display: table-cell;
      margin: 5px;
    }
    table th {
      height: 30%;
      width: 90%;
    }
    table tr:hover {
      cursor: pointer;
    }
    table thead {
      background: #dc3545;
    }
    table thead tr th {
      color: #fff;
      width: 100px;

    }
    table {
      margin-left: 30px;
    }
    h2 {
      margin-top:30px;
      margin-left: 30px;
      color: white;
      font-size: 50px;
    }
    .button {
      margin-top: 50px;
      background-color: #3b5998;
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      font-size: 16px;
      text-decoration: none;
      border-radius: 5px;
      margin-left: 30px;
    }
    .button: hover {
      background-color: white;
      cursor: pointer;
    }
    .container {
      background-color: white;
      height: 600%;
      width: 90%;
      margin: auto;
      border-radius: 10px;
    }
    table {
      height: 600%;
      width: 90%;
    }
    .tble {
      overflow-x: auto;
    }


    #nav {
       background-color: #333;
       overflow: hidden;
       margin-top: 30px;
       border-top-left-radius: 25px;
       border-top-right-radius: 25px;
       border-bottom-left-radius: 25px;
       border-bottom-right-radius: 25px;
     }
     #nav a {
       float: left;
       color: #f2f2f2;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 10px;
       font-family: montserrat;
     }
     #nav a:hover {
       background-color: #ddd;
       color: black;
     }
     #nav {

       display: flex;
       justify-content: space-between;
       align-items: center;
       background-color: #1d1f23;
       color: white;
       padding: 10px 20px;
     }

     #nav a {
       color: white;
       text-decoration: none;
       margin-right: 10px;
     }

     /* Styles for the responsive table */
     .responsive-table {
       width: 100%;
       overflow-x: auto;
     }
     /*Button search */
     .sales-search {
    float: right;
    display: flex;
    align-items: center;
    }

    label {
      margin-right: 10px;
    }
    input[type="text"] {
      margin-right: 10px;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 8px 16px;
      border-radius: 4px;
      background-color: #dc3545;
      color: #fff;
      border: none;
    }
    #searchbtnn {
      margin-right: 30px;
      margin-bottom: 10px;
    }
    p {
      margin-left: 20px;
    }
    .cta {
      margin-left: 30px;
    }
    h3 {
      font-size: 30px;
      font-family: montserrat;
      margin-left: 30px;
    }
    h4 {
      font-size: 40px;
      font-family: montserrat;
      margin-left: 30px;
      font-style: italic;
    }
    h5 {
      font-family: montserrat;
      margin-left: 30px;
      margin-bottom: 120px;
    }
    form  {
      display: table;
    }
    p     {
      display: table-row;
    }
    label {
       display: table-cell;
     }
    input {
      display: table-cell;
    }
    body {
      background-color: #F2D2BD;
    }
    h1{
      margin-top: 1px;
      margin-left: 125px;

    }
    .parent {
      display: flex;
    }
    .lbl {
      float: left;
      margin-left: 80px;
      margin-top: 5px;
      margin-bottom: 5px;
      margin-right: 10px;
    }
    #l1 {
      margin-left: 13px;
      margin-right: 75px;
    }
    .bx {
      float: left;
      margin: 10px;
    }
    #tbx {
      height: 60px;
      width: 200px;
    }
    .cash {
      float: left;
      font-weight: bolder;
      font-size: 25px;
      margin-left: 10px;
      color: white;
    }
    #cash{
      margin-left: 20%;
    }
    .f1 {
      width: 550px;
    }
    .xx {
      margin-top: 5px;
      margin-bottom: 5px;
      color: white;

    }
    .float {
      float: left;
      margin-bottom: 5px;
      align-items: center;
      border-top-left-radius: 25px;
      border-top-right-radius: 25px;
      border-bottom-left-radius: 25px;
      border-bottom-right-radius: 25px;
    }
    .form1 {
      margin-left: 10px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-items: stretch;
      box-sizing: border-box;
    }
    #btn {
      color: black;
      margin-left: 10px;
      background-color: #DEB887	;
      border-color: white;
      width: 120px;
      font-weight: bold;
    }
    #btnx {
      color: white;
      margin-left: 10px;
      background-color: #FF6347	;
      border-color: white;
      width: 200px;
    }
    .p1 {
      margin-top: 5px;
      margin-bottom: 5px;
    }
    .legend {
      font-weight: bold;
      color: white;
    }
    .legend1 {
      font-weight: bold;
      color: white;
    }
    #enter {
      height:170px;
      width: 170px;
      background-color: #2F4F4F;
      border-color: white;
      margin-left: 10px;
    }
    #btn_number {
      height:40px;
      width: 80px;
      background-color: red;
      border-color: white;
      margin-bottom: 5px;
    }
    #btn_numberx {
      height: 40px;
      width: 165px;
      background-color: red;
      border-color: white;
    }
    .calc {
      float: left;
      margin: 5px;
    }
    .itm {
      float: left;
      display: flex;
      margin: 20px;
      margin-bottom: 1px;
      margin-top: 2px;
    }
    .itm1 {
      float: left;
      display: flex;
      margin: 30px;
      margin-bottom: 1px;
      margin-top: 2px;
    }

    #child2 {


    }
    .fset2 {
      margin-left: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    .ffset {
      margin-left: 15px;
    }
    .lblfood {
      float: left;
      color: white;
      margin: 30px;
      margin-right: 35px;
      margin-top: 5px;
      margin-bottom: 3px;
    }
    #mla {
      margin-left: 40px;
    }
    .lblfood1 {
      color: white;
      float: left;
      margin: 45px;
      margin-right: 35px;
      margin-top: 5px;
      margin-bottom: 3px;
    }
    .lblfood2 {
      float: left;
      color: white;
      margin: 60px;
      margin-right: 35px;
      margin-top: 5px;
      margin-bottom: 3px;
    }
    #kfma {
      margin-left: 50px;
    }
    #cgm1 {
      margin-left: 50px;
    }
    .p1 {
      margin-bottom: 5px;
    }
    #a2 {
      width: 400px;
      margin-bottom: 5px;
      font-family: "Monospace", Courier New, serif;
      font-weight: bold;
      font-size:20px;
      text-align:center;
    }
    #a4{
      font-family: "Monospace", Courier New, serif;
      font-weight: bold;
      text-align:center;
    }
    #a3 {
      margin-bottom: 5px;
    }
    #a1 {
      margin-bottom: 10px;
    }

  </style>

  <script>
    $(document).ready(function(){
      $('table tr').click(function(){
        var id = $(this).attc('cov_id');
        window.open(" " + id);
      });
    });
  </script>
  <?php
  $item_name="";
  $price="";
  $quantity="";
  $discountamount="";
  $discountedamount="";
  $totalquantity="";
  $totaldiscount="";
  $totalamount="";
  $change="";
  $changedisplay="";
  $cash="";

  if(isset($_POST['submit']))
  {
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $item = $_POST['item_name'];
      $cash = $_POST['cash'];

      $discountamount = ($quantity * $price) * 0.25;
      $discountedamount = ($quantity * $price) - $discountamount;

      $item_name = $item;
      $totalquantity = $quantity;
      $totaldiscount = $discountamount;
      $totalamount = $discountedamount;

  }
  if(isset($_POST['change1']))
  {
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $item = $_POST['item_name'];
      $cash = $_POST['cash'];

      $discountamount = ($quantity * $price) * 0.25;
      $discountedamount = ($quantity * $price) - $discountamount;

      $item_name = $item;
      $totalquantity = $quantity;
      $totaldiscount = $discountamount;
      $totalamount = $discountedamount;
      $change= $cash - $totalamount;

  }

  if(isset($_POST['reset']))
  {
      $item_name = "";
      $totalquantity = "";
      $totaldiscount = "";
      $totalamount = "";
  }
  ?>
    <body>
      <div id="nav">
        <a href="#">Home</a>
        <a href="#">Employee</a>
        <a href="#">Payroll</a>
        <a href="cashier_EMP.php">Cashier</a>
        <a href="pos_EMP.php">POS</a>
        <a href="#">Point of Sale A</a>

        <a href="#">Point of Sale B</a>

        <a href="#">Employee Form</a>
        <a href="logout0.php">Log out</a>
      </div>
      <h2>Point of Sale</h2>



      <br><br>

      <section class="parent">
        <section class="child">
          <div class="form1">
            <form action="" method="POST" class="float">
              <fieldset class="f1">
                <p class="p1"><label class="xx" for="a" >Name of an Item:</label>
                  <input id="a1" type="text" name="item_name" value="<?php echo $item_name ?>">
                </p>
                <p class="p1"><label class="xx" for="a">Quantity:</label>
                  <input id="a3" type="text" name="quantity" value="<?php echo $quantity ?>">

                  <button id="btn" type="submit" value="submit" name="submit"><b>CALCULATE</b></button>
                </p>
                <p class="p1"><label class="xx" for="a">Price:</label>
                  <input id="a3" type="text" name="price" value="<?php echo $price ?>">

                  <button id="btn" type="exit"><b>NEW</b></button>
                </p>
                <p class="p1"><label class="xx" for="a">Discount Amount:</label>
                  <input id="a4" type="text" name="discountamount" value="<?php echo $discountamount ?>" disabled>

                  <button id="btn" type="exit"><b>CANCEL</b></button>
                </p>
                <p class="p1"><label class="xx" for="a">Discounted Amount:</label>
                  <input id="a4" type="text" name="discountedamount" value="<?php echo $discountedamount ?>" disabled>

                  <button id="btn" type="exit"><b>EXIT</b></button>
                </p>
              </fieldset>

              <fieldset class="f1">
                <legend class="legend">Summary</legend>
                <p><label class="xx" for="a">Item Name:</label>
                  <input id="a2" type="text" name="item_name" value="<?php echo $item_name ?>"  disabled>
                </p>
                <p><label class="xx" for="a">Total Quantity:</label>
                  <input id="a2" type="text" name="totalquantity" value="<?php echo $totalquantity ?>"  disabled>
                </p>
                <p><label class="xx" for="a">Total Discount Given:</label>
                  <input id="a2" type="text" name="totaldiscount" value="<?php echo $totaldiscount ?>"  disabled>
                </p>
                <p><label class="xx" for="a">Total Amount:</label>
                  <input id="a2" type="text" name="totalamount" value="<?php echo $totalamount ?>"  disabled>
                </p>
              </fieldset>

              <br>

              <fieldset>
                <div class="c_ash">
                  <div class="cash"><label>Cash Rendered:</label></div>
                  <div class="cash" id="cash"><label>Change:</label></div>
                </div>

                <div class="box">
                  <form name="calc">
                    <div class="bx"><input id="tbx" type="text" name="cash" value="<?php echo $cash ?>" ></div>
                    <div class="bx"><input id="tbx" type="text" name="change" value="<?php echo $change ?>" disabled></div>



                <br>
                      <input id="btn" type="submit" name="change1" value="CHANGE">


                  </form>
                  </div>
              </fieldset>
            </form>
          </div>
        </section>

        <section class="child" id="child2">
          <div class="items">
            <fieldset class="ffset">
              <legend class="legend1">Items Display</legend>
            <fieldset class="fset2">

                <div class="itm">
                  <input type="image" src="https://www.acouplecooks.com/wp-content/uploads/2020/10/How-to-make-an-Americano-004.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://www.littlesugarsnaps.com/wp-content/uploads/2022/01/white-chocolate-mocha-square.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://bakingmischief.com/wp-content/uploads/2019/10/easy-caramel-latte-image-square-500x375.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://lianaskitchen.co.uk/wp-content/uploads/how-to-make-a-cappuccino-without-an-espresso-machine.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://spoonuniversity.com/cdn-cgi/image/width=1024,f=auto/https://s3.amazonaws.com/secretsaucefiles/photos/images/000/170/822/original/espresso.jpg?1499291377" width="100" height="100" >
                </div>

                <br>

                <div class="lblfood">
                  <label>Americano</label>
                </div>
                <div class="lblfood">
                  <label>White Mocha</label>
                </div>
                <div class="lblfood">
                  <label>Caramel Latte</label>
                </div>
                <div class="lblfood">
                  <label>Cappuccino</label>
                </div>
                <div class="lblfood">
                  <label>Espresso</label>
                </div>
            </fieldset>

                <br>

            <fieldset class="fset2">

                <div class="itm">
                  <input type="image" src="https://www.verybestbaking.com/sites/g/files/jgfbjl326/files/srh_recipes/341fc55a9452f98df178f6171d7c3d13.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://img.buzzfeed.com/video-api-prod/assets/93263b90bdc842b7b56760b657389baa/BFV12155_CookieDoughPrep-ThumbTextless1080.jpg?resize=1200😘" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://rasamalaysia.com/wp-content/uploads/2019/09/best-banana-bread-thumb.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://sugargeekshow.com/wp-content/uploads/2019/10/chocolate-chip-muffins-featured.jpg" width="100" height="100" >
                </div>
                <div class="itm">
                  <input type="image" src="https://preppykitchen.com/wp-content/uploads/2016/04/Fruit-tart-2019-Recipe.jpg" width="100" height="100" >
                </div>

                <br>

                <div class="lblfood1">
                  <label>Brownies</label>
                </div>
                <div class="lblfood1">
                  <label>Cookies</label>
                </div>
                <div class="lblfood1">
                  <label>Banana Bread</label>
                </div>
                <div class="lblfood1">
                  <label>Muffins</label>
                </div>
                <div class="lblfood1">
                  <label>Tarts</label>
                </div>
            </fieldset>




                <br>
            </fieldset>
            </div>
        </section>
      </section>
    </body>
</html>
