<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

// if(isset($_POST['calculate'])){
//    $update_id = $_POST['update_quantity_id'];
//    $update_quantity_query = mysqli_query($conn, "SELECT `sales` SET quantity = '$update_value' WHERE id = '$update_id'");
//    if($update_quantity_query){
//       header('location:cart.php');
//    };
// };

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};



if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}
// if(isset($_GET['calculate'])){
//    mysqli_query($conn, "DELETE FROM `cart`");
//    header('location:cart.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">Order Recap</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         $cash_tendered;
         $discount;
         $discounted = 0;   
         $change = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>P <?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>P <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;
            
         
            };
         };
         ?>


      <?php  
      if(isset($_POST['calculate'])){

   $cash = $_POST['cash'];
   $discount = $_POST['discount'];
     $discounted = $grand_total -= $discount; 
     $change = $cash -= $discounted;   
   $calculate_query = mysqli_query($conn, "INSERT INTO `sales`(`Sold`, `Date`) VALUES ('$discounted',CURRENT_DATE)") or die('query failed');
    
   if($cash > 1){
      $message[] = 'Bill Calculated, change is ' . $change;
   }else{
      
   }

};
   ?>





      
               <!-- FOR CALCULATIONS -->
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>P <?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
           <!-- <tr class="table-bottom">
            <form action="" method="post">   
               <td colspan="4">Discount Amount: </td>
               <td><input type="number" min="1" placeholder="Enter Discount Amount: " name="discount" required></td>
               <td></td>
            </form>
         </tr> -->
   
          <tr class="table-bottom">
            <form action="" method="post">
               <td colspan="1">Cash tendered: </td>
               <td><input type="number" min="1" placeholder="Enter Amount: " value= "<?php echo $cash_tendered ?>" name="cash" required></td>
               <td colspan="2">Discount Amount: </td>
               <td><input type="number" placeholder="Enter Discount Amount: " name="discount"></td>
               <td><input type="submit" value="Calculate Bills" name="calculate"></td>
            </form>
         </tr>

          <tr class="table-bottom">
            <td colspan="4 ">Change: </td>
            <td colspan="4">
                  <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
            </td>

            
         </tr>

      </tbody>


   </table>


</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<!-- <button id="btn1" onclick="popup()"><img class="info-icon" src="images/info.png" alt="" /></button>
                            <script type="text/javascript">
                                function popup()
                                {
                                    swal({
                                        title: "ENTER YOUR 4 PIN CODE",
                                        text: "becareful in putting these ones",
                                        icon: "warning", -->
                                          }