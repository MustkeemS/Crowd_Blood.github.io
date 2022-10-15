<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <title>HOME PAGE</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: 'Rubik', sans-serif;
    }
    .img1{
      border: 1.5px ridge red;
      border-radius: 30px;
    }
    .img2{
      border: 1.5px ridge blue;
      border-radius: 30px;
    }
    .pup{
      margin-top: 40px;
      margin-left: 50px;
    }
    .p{
      font-size: 24px;
      text-shadow: ;
      text-transform: uppercase;
      text-align: center;
      font-weight: 800;
      color: #ff5e8e;
      letter-spacing: 1px;
      word-spacing: 2px;
      text-decoration: none;
    }
    .header{
      margin-top: 20px;
      margin-left: 15px;
      border-radius: 5px;
      background-image: linear-gradient(to left, #fff 60%, #c3f5ff 90%);
    }
    p{
      padding-bottom: 10px;
      padding-top: 10px;
      font-size: 24px;
      margin-top: 20px;
      color: #0169b2;
    }

    
    .img1:hover{
      /*background: #ff5e8e;*/
      position: relative;
      border: 1.5px solid white;
      transition: 0.3s ease-in-out;
      transform: translateY(-20px);
      
    }
    .img2:hover{
      /*background: #ff5e8e;*/
      position: relative;
      border: 1.5px solid white;
      transition: 0.3s ease-in-out;
      transform: translateX(20px);
      
    }




  </style>
</head>
<body>
  <div class="header"><p class="p">Welcome to <b> "ONLINE HELP" </b>! How can we help you?</p></div>
  <div class="pup">
    <a target="_blank" href="Blood_main.php">
      <img title="Click to visit Blood Donation Wesite" class="img1" src="image/b1.jpg" height="35%" width="35%" alt="blood bank image"></a>
    
    <a href="Crowdfunding_main.html" target="_blank">
      <img title="Click to visit Crowdfunding Website Wesite" class="img2" src="image/c2.jpg" height=" 408px" width="400px" alt="Crowdfunding image"></a>
      <p><b>NOTE :-</b>  IF YOU WANT TO DONATE OR NEED OF BLOOD THEN VISIT <b> BLOOD BANK WEBSITE </b> THANKS! <br><br>
      <b>NOTE :-</b> IF YOU WANT TO DONATE OR NEEED OF MONEY THEN VISIT <b>CROWDFUNDING WEBSITE</b> THANKS!</p>
  </div>
</body>
  
    
