<!--Customers item purchasing page-->
<?php 

require('connect.php'); 

if (isset($_POST['save'])) {

  $sql = "insert into purchase(amount, telephone, address) values('" . $_POST['amount'] . "', '" . $_POST['tp'] . "', '" . $_POST['address'] . "');";

  if ($conn->query($sql) == True) {
    echo 'saved';
   // header('Location: customer.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    
    body{
      background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url("image/woman.jpg");
      height:100%;
      background-size: cover;
}
    .title {
      text-align:center;
      color:#fff;
      text-transform:uppercase;
      font-size:40px;
    }
    .row > ul > li {
      width: 15%;
      display: inline-block;
      padding: 10px;
      margin-bottom: : 15%;
      padding-bottom: 15%;
      margin-left: 15px;
    }
    .row > ul > li:hover {
      background-color: rgba(255,255,255,0.1);
    }
    .row > ul > li >img {
      max-width: 180px;
      margin-left: 10px;
    }
    ul {
      list-style: none;
    }
    .item-name {
      color:#fff;
      font-size:20px;
      max-width: 200px;
      margin-bottom: 10px;
    }
    .row > ul > li input {
      width: 160px;
      margin-left: 20px;
      margin-top: 10px;
      background-color: transparent;
      border: none;
      border-bottom: solid 1px lightgreen;
      color: #fff;
    }
    .input-quntity {
      max-width: 45%;
    }
    .row > ul > li input:focus {
      outline: none;
    }
    .descripton {
      color:#fff;
      width: 180px;
      margin-left: 10px;
    }
    .btn {
      width: 160px;
      margin-top: 10px;
      margin-left: 20px;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:nth-child(odd) {
      background-color: lightblue;
    }
    table {
      border-collapse: collapse;
    }
    table, th, td {
      border: none;
      border-left:solid 2px #fff;
      text-align: center;
    }
    .fa-trash {
      color: red;
    }
    .btn {
      margin-top: 20px;
      border: none;
      color: #fff;
      background-color: green;
      padding: 5px 0 5px 0;
      cursor: pointer;
    }
    .img {
      width: 100px;
      height: 100px;
    }
  </style>
</head>
<body>
  <header>
    <h1 class="title">Request your order !!!</h1>
  </header>
  <center>
    <div class="row">

      <ul>
         <li>
          <form method="post">
          <div class="item-name">Samba</div>
          <img src="image/sss1.jpg">
          <div class="descripton">Rs.100 (50% off)</div>
           <input type="number" class="input-quntity" placeholder="Quantity" name="amount">
         <input type="number" name="tp" placeholder="Telephone">
         <input type="text" name="address" placeholder="Enter address">
          <div>
            
            <span style="color: #fff;">(kg)</span>
          </div>

        <!--  <div><input type="date" name="orderdate"></div> -->
         <div>
        <button class="btn" type="submit" name="save">submit</button></div>
        </form>
         
       </li>

        <li>
          <div class="item-name">Niwudu</div>
          <img src="image/sss.jpg">
          <div class="descripton"> Rs.100 (50% off)</div>
           <input type="number" class="input-quntity" placeholder="Quantity" name="amount">
         <input type="number" name="tp" placeholder="Telephone">
         <input type="text" name="address" placeholder="Enter address">
          <div>
            <span style="color: #fff;">(kg)</span>
          </div>

          <div><button class="btn" type="submit" name="submitBtn">submit</button></div>
        </li>

        <li>
            <div class="item-name">Kekulu</div>
            <img src="image/sss3.jpg">
           <div class="descripton">Rs.100 (50% off)</div>
            <input type="number" class="input-quntity" placeholder="Quantity" name="amount">
         <input type="number" name="tp" placeholder="Telephone">
         <input type="text" name="address" placeholder="Enter address">
          <div>
            <span style="color: #fff;">(kg)</span>
          </div>

          <div><button class="btn" type="submit" name="submitBtn">submit</button></div>
        </li>

        <li>
           <div class="item-name">Rathu Kekulu</div>
           <img src="image/sss4.jpg">
          <div class="descripton">Rs.100 (50% off)</div>
           <input type="number" class="input-quntity" placeholder="Quantity" name="amount">
         <input type="number" name="tp" placeholder="Telephone">
         <input type="text" name="address" placeholder="Enter address">
          <div>
            <span style="color: #fff;">(kg)</span>
          </div>

          <div><button class="btn" type="submit" name="submitBtn">submit</button></div>
          </li>
        </from>
  </center>
</body>
</html>