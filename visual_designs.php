
<!doctype html>

<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->

<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->

<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="">

<!--<![endif]-->

<head>

	<script>

		$(document).ready(function(){
			$("p").click(function(){
				$("#TEST1234").hide();
			});
		});

	</script>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Marvin Haworth Homes | Visual Designs</title>


<link href="visual_designs.css" rel="stylesheet" type="text/css">











</head>

<body>






<div id="TEST1234">
<?php include_once("top_menu_buttons.php");  ?>
</div>


<hr style="visibility:hidden;">



			<section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Interior

					</p>

                

			</section>

            

<br>

<br>



          <?php include_once("vd_interior.php"); ?>

		  

		   



<br>

<br>

            

            <section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Exterior

					</p>

                

			</section>

  

<br>

<br>



          <?php include_once("vd_exterior.php"); ?>



<br>

<br>

            

            <section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Fireplace

					</p>

                

			</section>



<br>

<br>



          <?php include_once("vd_fireplace.php"); ?>



<br>

<br>

            

            <section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Kitchen

					</p>

                

			</section>



<br>

<br>



          <?php include_once("vd_kitchen.php"); ?>



<br>

<br>

            

            <section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Bathroom

					</p>

                

			</section>

            

            <br>

<br>



          <?php include_once("vd_bathroom.php"); ?>

            

<br>

<br>









<?php include_once("page_footer.php"); ?>

</body>

</html>
<?php COUCH::invoke(); ?>
