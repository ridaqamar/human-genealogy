<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Products</title>
	
	<style type="text/css">
	
	body {
		background-image: url("imgs/abstract-painting-art-artistic-1573434.png");
		background-size: cover;
		background-attachment: fixed;
	}
	footer{
		position: absolute;
		bottom: 0;
	}
    @media only screen 
and (min-device-width : 375px) 
and (max-device-width : 812px) 
and (-webkit-device-pixel-ratio : 3)
and (orientation : portrait) {
 .f{
position: static;
bottom: 0;
text-align: center;
  }
  footer{
    position: static;
    bottom: 0;
    text-align: center;
  }
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (-webkit-device-pixel-ratio : 3)
and (orientation : portrait) {
 .f{
position: static;
bottom: -2%;
text-align: center;
  }
  footer{
    position: static;
    bottom: -2%;
    text-align: center;
  }
}
	</style>
</head>
<body>
<?php include ("navigation.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="imgs/Product-banner.png" width="100%">
		</div>
	</div>
	
        <div class="row product-cards" id="card-row" style="margin-bottom: 10%;">

             <div class="col-md-4">
                 <div class="card" id="card-1">
                     <img src="imgs/cover.png" style="width:100%;height:200px">
                     <div class="detail">
                     <h1>Human Genealogy</h1>
                     <p class="price">Book</p>
                     <h3>$35</h3> 
                     <p>(exclusive of taxes)</p>
                     <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="73CBRCPL9Q472">
<p><button type="submit" name="submit">Add to Cart</button></p> -->
<!-- </form> -->
<p><button>Add to Cart</button></p>


                 </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card" id="card-2">
                     <img src="imgs/p2.png" style="max-width:100%;height:200px">
                     <div class="detail">
                     <h1>Human Genealogy</h1>
                     <p class="price">E-book</p>
                     <h3>$35</h3> 
                     <p>(exclusive of taxes)</p>
                     <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="BMNTRMUNWRT42">
<p><button type="submit" name="submit">Add to Cart</button></p> -->
<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
<!-- </form> -->
<p><button>Add to Cart</button></p>
                     
                 </div>
                 </div>
                 </div>
             

             <div class="col-md-4">
                 <div class="card" id="card-3">
                     <img src="imgs/poster.png" style="width:100%;height:200px">
                     <div class="detail">
                     <h1>Human Flagship</h1>
                     <p class="price">Poster Chart</p>
                     <h3>$25</h3> 
                     <p>(exclusive of taxes)</p>
                     <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SAQJCHPAY3EMJ">
<p><button name="submit" type="submit">Add to Cart</button></p> -->
<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
<!-- </form> -->
<p><button>Add to Cart</button></p>
                 </div>
                 </div>
                 </div>
             </div>
         </div>
         <footer>

        <!-- Copyright -->
        <!-- <div class="footer-copyright f">
            <a href="#" id="humangenealogy">www.humangenealogy.com</a>
            <br>
            © 2018 - <a href="www.reonnet.com"><span id="reonnet" style="color: red;">Reonnet.</span></a>All Rights Reserved.
        </div> -->
        <!-- Copyright -->

    </footer>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="custom.js"></script>