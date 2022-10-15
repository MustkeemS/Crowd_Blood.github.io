<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	<style>

		*{
			font-family: 'Rubik', sans-serif;
		}

/* for Notification */

::selection{
	color: chocolate;
	background: black;
}
p{
	font-size: 25px;
	font-weight: 350;

}

@import url("https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap");
.custom-social-proof {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 9999999999999 !important;
  font-family: 'Open Sans', sans-serif;
  //display: none; 	         	}				/* Uncoment This Line to Hide Initially*/
    .custom-notification {
        width: 320px;
        border: 0;
        text-align: left;
        z-index: 99999;
        box-sizing: border-box;
        font-weight: 400;
        border-radius: 6px;
        box-shadow: 2px 2px 10px 2px hsla(0, 4%, 4%, 0.2);
        background-color: #fff;
        position: relative;
        cursor: pointer;		}	
        .custom-notification-container {
            display: flex !important;
            align-items: center;
            height: 80px;		}	
            .custom-notification-image-wrapper {	
                



            }
            .custom-notification-content-wrapper {
                margin: 0;
                height: 100%;
                color: gray;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 0 6px 6px 0;
                flex: 1;
                display: flex !important;
                flex-direction: column;
                justify-content: center;		}
                .custom-notification-content {
                    font-family: inherit !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    font-size: 14px;
                    line-height: 16px;	}
                    small {
                        margin-top: 3px !important;
                        display: block !important;
                        font-size: 12px !important;
                        opacity: .8;
                    }
                }
            }
        }
        .custom-close {
            position: absolute;
            top: 8px;
            right: 8px;
            height: 12px;
            width: 12px;
            cursor: pointer;
            transition: .2s ease-in-out;
            transform: rotate(45deg);
            opacity: 0;			}
           
        }	
        
}

.custom-social-proof:hover {
            opacity: 1;
     
    }



 .custom-social-proof::before {
                content: "";
                display: block;
                width: 100%;
                height: 2px;
                background-color: gray;
                position: absolute;
                left: 0;
                top: 5px;	
            }
            .custom-social-proof::after {
                content: "";
                display: block;
                height: 100%;
                width: 2px;
                background-color: gray;
                position: absolute;
                left: 5px;
                top: 0;
            }
.img1 {
                    max-height: 75px;
                    width: 90px;
                    overflow: hidden;
                    border-radius: 6px 0 0 6px;
                    object-fit: cover;
                }



    /*END OF NOTIFICATION*/




		@keyframes animi{
			from{ padding-left: 40px; }
			to{padding-right: 40px;}
						}
		#animi{
			text-transform: uppercase;
			font-size: 18px;
			animation: animi 2s linear infinite;
			animation-direction: alternate;
			}
		.blue{
			margin-top: 15px;
			margin-left: 210px;
		}
		
		#btn{
			text-decoration: none;
				  font-weight: 550;
				  font-size: 14px;
				  
				  
				  text-align: center;
			  	  padding: 8px 15px;
			  	  
				  cursor: pointer;
				  text-transform: uppercase;
				  border-radius: 5px;
				  
				  color: #fff;
				  background-image: linear-gradient(#8d98e3 40%, #854fee 60%);
				  border: solid 2px transparent;
		}
	</style>
</head>
<body style="font-family: 'Rubik', sans-serif; margin:0; padding: 0;">
  <header style="width: 100%; height: 100vh;
				background-image: linear-gradient(to left, #fff 85%, #c3f5ff 20%);">
	<section style="width: 100%;
		height: 15vh;
		display: inline-block;
		align-items: center;
		background-image: linear-gradient(to top, #fff 80%, #c3f5ff 20%);">
			<div id="animi" style="height: auto; 
						margin-top: 33px;
						margin-left: 10px;
						width: 350px;
						padding: 8px 15px;
						color: white;
						text-transform: uppercase; 
						text-align: center; 
						display: inline-block; 
						background-image: linear-gradient(#8d98e3 40%, #854fee 60%);
						box-sizing: border-box; font-weight: 800">Welcome <?php echo $_SESSION['user'] ?>
			</div>
			<a style="text-decoration: none;
				  font-weight: 900;
				  font-size: 14px;
				  margin-top: 33px;
			      margin-right: 10px;
				  text-align: center;
			  	  padding: 8px 15px;
			  	  float: right;
				  cursor: pointer;
				  text-transform: uppercase;
				  border-radius: 5px;
				  display: inline-block;
				  color: #fff;
				  background-image: linear-gradient(#8d98e3 40%, #854fee 60%);
				  border: double 2px transparent;" href="logout.php">Logout</a>
	</section>
	<div class="blue"><a id="btn" href="display.php">click to check UPLOADS</a></div>
  </header>

  	<!-- FOR NOTIFICATION -->

	<section class="custom-social-proof">
    <div class="custom-notification">
      <div class="custom-notification-container">
        <div class="custom-notification-image-wrapper">
          <img class="img1" src="image/note.png">
        </div>
        <div class="custom-notification-content-wrapper">
          <p class="custom-notification-content">
            Mr.Umar, Payal, Kriti and 49 others <br>Contributed total <b>21,983 INR.</b>    
            <small>1 hour ago</small>
          </p>
        </div>
      </div>
      <div class="custom-close"></div>
    </div>
  </section>

	<!--javascript part-->


 <script type="text/javascript">
 	setInterval(function(){ $(".custom-social-proof").stop().slideToggle('slow'); }, 8000);
      $(".custom-close").click(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
      });
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
 	
 </script>



</body>
</html>