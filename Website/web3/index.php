<?php
session_start();   
include "connection.php";

$name = "";
$price ="";
$quantity = "";


if(isset($_POST['btn1']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 1";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn2']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 2";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn3']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 3";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['btn4']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 4";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn5']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 5";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn6']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 6";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn7']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 7";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn8']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 8";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn9']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 9";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn10']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 10";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn11']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 11";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn12']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 12";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn13']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 13";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn14']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 14";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn15']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 15";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn16']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 16";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn17']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 17";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn18']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 18";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn19']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 19";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}


if(isset($_POST['btn20']))
{
$quantity = "1";
$namequery = "SELECT name, price FROM `item` WHERE id = 20";
$search = mysqli_query($conn, $namequery);
while ($row = mysqli_fetch_array($search)) {
  $name = $row['name'];
  $price = $row['price'];
}
}

if(isset($_POST['save'])){
    global $conn;
    $names = $_POST['name'];
    $quantities = $_POST['Quantity'];
    $amount = $_POST['Total_Discount'];
    $cash = $_POST['Cash'];
    $change = $_POST['Change'];

    $query = "INSERT INTO `sales`(`Name`, `Quantity`, `Total_Amount`, `Cash_Rendered`, `Change`) VALUES ('$names','$quantities','$amount','$cash','$change')";
    $result = mysqli_query($conn,$query);

    if ($result) {
        echo 'Data inserted';
    }
    else{
        echo 'Data Not inserted';
    }
}


?>

<html>
  <head>
    <title>Third Website</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>

  <div class="list">
    <h1>Milk Tea</h1>
    <form class="left" method="post" enctype="multipart/form-data"> 
    <div class="list-box">
      <div class="list-items">
        <label>Name of Item:</label> 
      <input name="name" type="letter" class="name" value="<?php echo $name?>" /><br>
      <label>Quantity:</label> 
      <input name="price" type="number" class="quantity" value="<?php echo $quantity?>"/><br>
      <label>Price:</label>
      <input name="PRICE" type="number" class="price" value="<?php echo $price?>"/><br><br>
      </div>
       
       <label>Select Discount:</label><br>  
  <input type="radio" id="html" name="fav_language" class="discount" value="HTML">
  <label for="html">Senior Citizen</label><br>
  <input type="radio" id="css" name="fav_language" class="discounts" value="CSS">
  <label for="css">With Disc. Card</label><br>
  <input type="radio" id="javascript" name="fav_language" class="discounted" value="JavaScript">
  <label for="javascript">Employee Disc.</label><br>
  <input type="radio" id="no" name="fav_language" class="ND" value="JavaScript">
  <label for="no">No Discount</label><br><br>

<div class="g">

      <label>Discount Amount:</label> 
      <input name="DA" class="disc" type="number" step="0.01"><br>
      <label>Discounted Amount:</label> 
      <input name="DA" class="amount" type="number" step="0.01"><br>
      
    
    <br>
    
      <label>Total Quantity:</label> 
      <input name="Quantity" class="quantities" type="number" step="0.01"><br>
      <label>Total Discount Given:</label> 
      <input name="TDG" class="discs" type="number" step="0.01"><br>
      <label>Total Discount Amount:</label> 
      <input name="Total_Discount" class="amounts" type="number" step="0.01">
      </div>
      <br>
      <div class="list-items list-summary">
        <p>Cash Rendered</p>
        <input name="Cash" class="display" type="text" >
        <p> Change</p>
        <input name="Change" class="change" type="number">
      </div><br>

      <div class="container">
   <div class="buttons">
                <table>
                    <tr>
                        <td><button type="button" class="btn btn-operator" id="clear">C</button></td>
                        <td><button type="button" class="btn btn-operator" data-num="/">&divide;</button></td>
                        <td><button type="button" class="btn btn-operator" data-num="*">&times;</button></td>
                        <td><button type="button" class="btn btn-operator" data-num="backspace"><</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-number" data-num="7">7</button></td>
                        <td><button type="button" class="btn btn-number" data-num="8">8</button></td>
                        <td><button type="button" class="btn btn-number" data-num="9">9</button></td>
                        <td><button type="button" class="btn btn-operator" data-num="-">-</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-number" data-num="4">4</button></td>
                        <td><button type="button" class="btn btn-number" data-num="5">5</button></td>
                        <td><button type="button" class="btn btn-number" data-num="6">6</button></td>
                        <td><button type="button" class="btn btn-operator" id="+">+</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-number" data-num="1">1</button></td>
                        <td><button type="button" class="btn btn-number" data-num="2">2</button></td>
                        <td><button type="button" class="btn btn-number" data-num="3">3</button></td>
                        <td rowspan="2"><button type="button" class="btn-equal">=</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-operator" id="(">(</button></td>
                        <td><button type="button" class="btn btn-number" data-num="0">0</button></td>
                        <td><button type="button" class="btn btn-operator" id=")">)</button></td>
                    </tr>
                </table>
                <br>
            </div>
            </div>
 
</div>


    <div class="list-control">
      <table>
        <tr>
      <button type="submit" name="calculate" onclick="welp.disabled = false" class="button btn-success">
         Calculate        
      </button>
      </tr>
      <tr>
        
      <button type="submit" name="new" class="button btn-danger"><a href="http://localhost/Website/">
          Exit</a>
      </button>
      
      <form class="left" method="post" enctype="multipart/form-data">
      <button type="submit" name="save" class="button btn-save">
        Save
      </button>  
        
      <button type="submit" name="exit" class="button btn-exit">
        New
      </button>
      <br>
      <input type="radio" id="well" name="welp" class="eme" value="HTML" required disabled>
  <label for="welp">Click to verify Save</label><br>
    </tr>
  </table>
    </div>
  </div>
  <script src="script.js"></script>

  <div class="product">
    <button type="submit" name="btn1"><div class="product-items">
      <img src="https://sugaryums.co.uk/wp-content/uploads/2022/02/Hokkaido-Milk-Tea-SugarYums-10.jpg" alt="">
      <div class="product-info">
        <h3>Hokkaido</h3>
        <p>₱85.00</p>
      </div>
    </div>
    </button>
    <button type="submit" name="btn2"><div class="product-items">
      <img src="https://cdn.shopify.com/s/files/1/0431/6885/8268/products/BuyOneTakeOnePromoOkinawaBrownSugarBobaMilkTea_530x@2x.jpg?v=1627976136" alt="">
      <div class="product-info">
        <h3>Okinawa</h3>
        <p>₱87.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn3"><div class="product-items">
      <img src="https://images.squarespace-cdn.com/content/v1/5e8840afd65f745da4030ca8/1616718001346-LAZU5RY1FUH1VSF6L6UC/A27A0493.jpg?format=1500w" alt="">
      <div class="product-info">
        <h3>Oreo</h3>
        <p>₱88.00</p>
      </div>
    </div></button>

    <button type="submit" name="btn4"><div class="product-items">
      <img src="https://teasnyou.com/wp-content/uploads/2020/10/taro.jpg" alt="">
      <div class="product-info">
        <h3>Taro</h3>
        <p>₱85.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn5"><div class="product-items">
      <img src="https://t3.ftcdn.net/jpg/02/99/93/56/360_F_299935695_cYYYsSV065NSELXpgSWdY8oVZWg0LUSo.jpg" alt="">
      <div class="product-info">
        <h3>Thai</h3>
        <p>₱87.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn6"><div class="product-items">
      <img src="https://bonteacafe.com/media/matcha_bubble_tea_2.jpg" alt="">
      <div class="product-info">
        <h3>Matcha</h3>
        <p>₱88.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn7"><div class="product-items">
      <img src="https://pbs.twimg.com/media/FfH07T_XkAQOHNC?format=jpg&name=4096x4096" alt="">
      <div class="product-info">
        <h3>Honeydew</h3>
        <p>₱88.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn8"><div class="product-items">
      <img src="https://media.healthyfood.com/wp-content/uploads/2016/11/Berry-boba-tea.jpg" alt="">
      <div class="product-info">
        <h3>Strawberry</h3>
        <p>₱84.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn9"><div class="product-items">
      <img src="https://www.honestfoodtalks.com/wp-content/uploads/2021/02/brown-sugar-milk-tea-500x400.jpg" alt="">
      <div class="product-info">
        <h3>Brown Sugar</h3>
        <p>₱89.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn10"><div class="product-items">
      <img src="https://cdn.vox-cdn.com/thumbor/VQTx2oXZRWTYMGtN-K-c4OHUBPo=/0x0:4223x3167/1200x800/filters:focal(1902x1200:2576x1874)/cdn.vox-cdn.com/uploads/chorus_image/image/61481407/cheesetea_shutterstock.0.jpg" alt="">
      <div class="product-info">
        <h3>Cream Cheese</h3>
        <p>₱90.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn11"><div class="product-items">
      <img src="https://milkteasupplier.ph/wp-content/uploads/2020/03/inJoy-Wintermelon-Milk-Tea-Drinks.png" alt="">
      <div class="product-info">
        <h3>Wintermelon</h3>
        <p>₱86.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn12"><div class="product-items">
      <img src="https://images.ctfassets.net/yn1b2kwt1vbo/2gakMldrLiYPjdq1zd7JYU/806d7787de3521ecb37edb3b224661a8/dezaan-cocoa-tea-pattern.jpg?w=750&h=500&fl=progressive&q=80&fm=jpg" alt="">
      <div class="product-info">
        <h3>Chocolate</h3>
        <p>₱83.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn13"><div class="product-items">
      <img src="https://ph-test-11.slatic.net/p/830974728499bb94d771af823413093d.jpg" alt="">
      <div class="product-info">
        <h3>Dark Chocolate</h3>
        <p>₱85.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn14"><div class="product-items">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxjl96JYPKqYXHbdOC1MbCPnyn_u3iZ-0RDQ&usqp=CAU" alt="">
      <div class="product-info">
        <h3>Dalgona</h3>
        <p>₱90.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn15"><div class="product-items">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtS_OeQ0ojyyEvcp46xUymC9Nu8_qMf4tMmQ&usqp=CAU" alt="">
      <div class="product-info">
        <h3>Cream Puff</h3>
        <p>₱85.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn16"><div class="product-items">
      <img src="https://shottbeverages.com/wp-content/uploads/2020/08/salted_caramel_bubble_tea.jpg" alt="">
      <div class="product-info">
        <h3>Caramel</h3>
        <p>₱87.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn17"><div class="product-items">
      <img src="https://www.kindpng.com/picc/m/53-534756_hazelnut-milk-tea-chocolate-hd-png-download.png" alt="">
      <div class="product-info">
        <h3>Hazelnut</h3>
        <p>₱86.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn18"><div class="product-items">
      <img src="https://delivirac.com/wp-content/uploads/2020/06/HT9.png" alt="">
      <div class="product-info">
        <h3>Red Velvet</h3>
        <p>₱85.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn19"><div class="product-items">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSga4Sa1wfRHHhbRWM6EKgPAVtQ_HXz5Wb17gM4-Q1LFenYli1qDGMbWrdVH-uIBPugBoA&usqp=CAU" alt="">
      <div class="product-info">
        <h3>White Rabbit</h3>
        <p>₱90.00</p>
      </div>
    </div></button>
    <button type="submit" name="btn20">
      <div class="product-items">
      <img src="https://c8.alamy.com/comp/E988F7/lemon-boba-bubble-tea-with-fruits-and-crushed-ice-E988F7.jpg" alt="">
      <div class="product-info">
        <h3>Lemon</h3>
        <p>₱84.00B</p>
      </div>
    </div></button>
  </div>
  </body>
  </html>
  
