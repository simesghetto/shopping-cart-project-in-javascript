<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Shopping Cart Project Example</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS -->
<!--     <link rel="stylesheet" href="css/style.css">
	Demo CSS (No need to include it into your project)
	<link rel="stylesheet" href="css/demo.css"> -->
  
      <style>
          .navbar{
              height: 56px;
              line-height: 56px;
              padding: 0 26px;
          }
      
      </style>
  </head>
  <body>



      
 <main>



 <br/><br/><br/>

<div class="container">
   <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cart">Cart (<span class="total-count"></span>)</button>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</div>

    <br/><br/><br/>



<?php

$users = [
    ['p_id' => '1', 'p_name' => 'bananas','p_price' => '120', "p_img" => 'bananas.jpg'],
    ['p_id' => '2', 'p_name' => 'durian','p_price' => '200', "p_img" => 'durian.jpg'],
    ['p_id' => '3',  'p_name' => 'grapes','p_price' => '500', "p_img" => 'grapes.jpg'],
    ['p_id' => '4','p_name' => 'lemon','p_price' => '500', "p_img" => 'lemon.jpg'],
    ['p_id' => '5',  'p_name' => 'orange','p_price' => '50', "p_img" => 'orange.jpg'],
    ['p_id' => '6','p_name' => 'watermelon','p_price' => '60', "p_img" => 'watermelon.jpg']
];
?>


<!-- Main -->
<div class="container">
    <div class="row">


            <?php
                foreach($users as $key => $value) {

                   //echo $users[$key]["p_id"];  ?>


                    <div class="col col-md-3">
                      <div class="card p-3" >
                        <img class="card-img-top img-fluid" src="./img/<?php echo $users[$key]["p_img"];?>" alt="Card image cap" width="50px; ">
                        <div class="card-block">
                          <h4 class="card-title"><?php echo $users[$key]["p_name"];  ?></h4>
                          <p class="card-text">Price: <?php echo $users[$key]["p_price"];  ?> บาท</p>
                          <a href="#" data-name="<?php echo $users[$key]["p_name"];  ?>" data-price="<?php echo $users[$key]["p_price"];  ?>" data-img="<?php echo $users[$key]["p_img"];?>" class="add-to-cart btn btn-primary">
                          Add to cart</a>
                        </div>
                      </div>
                    </div>



           <?php } ?>


        </div>
    </div>












    <!-- Main -->
    <div class="container">
        <div class="row">




<!--           <div class="col col-md-3">
            <div class="card p-3" >
              <img class="card-img-top img-fluid" src="./img/orange.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Orange</h4>
                <p class="card-text">Price: 120 บาท</p>
                <a href="#" data-name="Orange" data-price="120" data-img="orange.jpg" class="add-to-cart btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>



          <div class="col col-md-3">
            <div class="card p-3" >
              <img class="card-img-top" src="./img/bananas.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Banana</h4>
                <p class="card-text">Price: 80 บาท</p>
                <a href="#" data-name="Banana" data-price="80" data-img="bananas.jpg" class="add-to-cart btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>



          <div class="col col-md-3">
            <div class="card p-3" >
              <img class="card-img-top" src="./img/lemon.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Lemon</h4>
                <p class="card-text">Price: 30 บาท</p>
                <a href="#" data-name="Lemon" data-price="30" data-img="lemon.jpg"  class="add-to-cart btn btn-primary text-white">Add to cart</a>
              </div>
            </div>
          </div> -->






        </div>
    </div>





















  
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">



        <table class="show-cart table table-bordered"> 

        </table>


        <div>Total price: $<span class="total-cart"></span></div>





      </div>




      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="clear-cart btn btn-danger">Clear Cart</button>
        <button type="button" class="sumbit-cart btn btn-primary">Save changes</button>
      </div>



<!--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
 -->





    </div>
  </div>
</div>
     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
 
      


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script  src="./js/script.js"></script>
     
  </body>
</html>