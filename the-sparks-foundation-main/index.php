<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    


    <title>BANKING SYSTEM</title>
  </head>

  <body>
<body>


  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
      
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank2.jfif" class="img-fluid pt-3">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/u1.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button><h3><p style="color:red;">Create a User</h3></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/t3.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button><h3><p style="color:red;">Make a Transaction</h3></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/h1.jfif" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php">
                      <button><h3><p style="color:red;">Transaction History</h3></button></a>
                  </div>
            </div>
      </div>
      
      </footer>
      
    <B> CONTACT US ON</B>
     <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
}
.wrapper .button{
  display: inline-block;
  height: 60px;
  width: 60px;
  float: left;
  margin: 0 5px;
  overflow: hidden;
  background: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-out;
}
.wrapper .button:hover{
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #4267B2;
}
.wrapper .button:nth-child(2):hover .icon{
  background: #1DA1F2;
}
.wrapper .button:nth-child(3):hover .icon{
  background: #E1306C;
}



.wrapper .button:nth-child(4):hover .icon{
  background: #ff0000;
}
.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #fff;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #4267B2;
}
.wrapper .button:nth-child(2) span{
  color: #1DA1F2;
}
.wrapper .button:nth-child(3) span{
  color: #E1306C;
}
.wrapper .button:nth-child(4) span{
  color: #ff0000;
}

    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="button">
    



        <div class="icon"><i class="fab fa-facebook-f"></i></div>
        <span>Facebook</span>
      </div>
      <div class="button">
        <div class="icon"><i class="fab fa-twitter"></i></div>
        <span>Twitter</span>
      </div>
      
      

      <div class="button">
        <div class="icon"><i class="fab fa-youtube"></i></div>
        <span>YouTube</span>
      </div>
    </div>


  </body>
</html>