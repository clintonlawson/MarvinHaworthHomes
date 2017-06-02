<?php require_once( 'ZtV67$&&!UjP/cms.php' ); ?>
<!doctype html>

<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->

<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->

<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="">

<!--<![endif]-->

<head>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Marvin Haworth Homes | Neighborhoods</title>


<link href="neighborhoods.css" rel="stylesheet" type="text/css">









</head>

<body>



<?php include_once("top_menu_buttons.php"); ?> 



<hr style="visibility:hidden;">

<section id="tabcontainer">



	<div class="tabs">



          

          <a href="seiterfarms" data-tab="1" class="tab active" style="color:white; font-family: 'Tw Cen MT'; font-size:20px; font-weight:normal;">Seiter Farms</a>

          <a href="shadycreek" data-tab="2" class="tab" style="color:white; font-family: 'Tw Cen MT'; font-size:20px; font-weight:normal;">Shady Creek</a>

          <a href="thewillows" data-tab="3" class="tab" style="color:white; font-family: 'Tw Cen MT'; font-size:20px; font-weight:normal;">The Willows</a>

          <a href="meadowcreek" data-tab="4" class="tab" style="color:white; font-family: 'Tw Cen MT'; font-size:20px; font-weight:normal;">Meadow Creek</a>

          <a href="thehomesteadatseiterfarms" data-tab="5" class="tab" style="color:white; font-family: 'Tw Cen MT'; font-size:20px; font-weight:normal;">The Homestead at Seiter Farms</a>

          

          <div data-content="1" class="content active">

<hr style="visibility:hidden;">          

          	<div id="topimages">

    

    			<div class="gridContainer clearfix"><img src="images/neighborhoods/seiter_farms.jpg" id="shadow_image"></div>

                    </div>

<hr style="visibility:hidden;"> 



<iframe style="height:200px; width:50%;"  src="https://www.youtube.com/embed/z7Wu3gmA-RE" frameborder="0" allowfullscreen></iframe>



<hr style="visibility:hidden;"> 




				

                

     	                          

			<section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Directions

					</p> 

                 

			</section>       

<br>

<br>



			<div class="gridContainer clearfix">



					

				<?php include_once("maps/seiter_farms.php"); ?> 

				



 </div>



<br>

<br>

			

										

                

			<section id="red_section">

				  

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Avilable Homes

					</p>

				 

			</section>   

<br>

<br>

					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';">	

						<cms:repeatable name='Seiter_Farms' >
							<cms:editable type='image' name='Seiter_Farms_Image' label='Photo' show_preview='1' />
							<cms:editable type='nicedit' label='Description' name='Seiter_Farms_Description' />
						</cms:repeatable>
					</div>
					
					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';">					
						<cms:show_repeatable 'Seiter_Farms'>
						
							<img id="shadow_image" style="height:250px; width:300px;" src="<cms:show Seiter_Farms_Image />" />
<br>
<br>
							<cms:show Seiter_Farms_Description />

						<hr style="display: block; height: 3px; border: 0; border-top: 1px solid white; margin: 1em 0; padding: 0;">

						</cms:show_repeatable>
						

						
						

    				</div>

<br>

<br>

        

</div>



          

          <div data-content="2" class="content">

 <hr style="visibility:hidden;">        

          	<div id="topimages">

    

    			<div class="gridContainer clearfix"><img src="images/neighborhoods/shady_creek.jpg" id="shadow_image"></div>

                    </div>

<hr style="visibility:hidden;"> 

    

    			<section id="red_section">

				

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					General Information

    				</p>

                

			</section>        

<br>

<br>

					<div class="gridContainer clearfix"><p>

						Shady Creek is a neighborhood of comfort, convenience and secure living.  All homes are custom designed and built by Marvin Haworth Homes.  Shady Creek Lane is a single entry/exit street with 	eleven one acre lots.  Nine of these lots back up to a large stocked pond.  There is currently one lot available selling for $125,000.00.  If you are looking for a custom built home built in a beautiful and serene neighborhood Shady Creek is the place for you. 

    				</p></div>



		

<br>

<br>

          

          

          

          <section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Directions

					</p> 

                 

			</section>       

<br>

<br>



			<div class="gridContainer clearfix">



					

				<?php include_once("maps/shady_creek.php"); ?> 

				



 </div>

 <br>
 
 <br>

			<section id="red_section">

				  

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Avilable Homes

					</p>

				 

			</section>   

<br>

<br>

					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';;">	

						<cms:repeatable name='Shady_Creek' >
							<cms:editable type='image' name='Shady_Creek_Image' label='Photo' show_preview='1' />
							<cms:editable type='nicedit' label='Description' name='Shady_Creek_Description' />
						</cms:repeatable>
					</div>
					
					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';;">					
						<cms:show_repeatable 'Shady_Creek'>
						
							<img id="shadow_image" style="height:250px; width:300px;" src="<cms:show Shady_Creek_Image />" />
<br>
<br>
							<cms:show Shady_Creek_Description />
						<hr style="display: block; height: 3px; border: 0; border-top: 1px solid white; margin: 1em 0; padding: 0;">
						</cms:show_repeatable>
						

						
						

    				</div>

<br>

<br>


							

                




<br>

<br>

          

          </div>

          

          <div data-content="3" class="content">

 <hr style="visibility:hidden;">        

          	<div id="topimages">

    

    			<div class="gridContainer clearfix"><img src="images/neighborhoods/the_willows.jpg" id="shadow_image"></div>

                    </div>

<hr style="visibility:hidden;"> 



<iframe style="height:200px; width:50%;" src="https://www.youtube.com/embed/TVmibmUcSUM" frameborder="0" allowfullscreen></iframe>



<hr style="visibility:hidden;"> 

    			<section id="red_section">

				

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					General Information

    				</p>

                

			</section>        

<br>

<br>

					<div class="gridContainer clearfix"><p id="mini_columns">

						A unique gated subdivision located in the heart of Moore's Riverwalk area.  The gated entrance provides controlled access and secure living.  The Willows offers luxury living at a price you can afford.  Beautifully landscaped and just minutes from all of your desired comforts. A city arboretum park (nature park no playground) with wooded walking trails and footbridges located on the west side of the Willows.

    				</p></div>

<br>

<br>

				

                

     	                          

			<section id="red_section">

				 

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Directions

					</p> 

                 

			</section>       

<br>

<br>



			<div class="gridContainer clearfix">



					

				<?php include_once("maps/the_willows.php"); ?> 

				



 </div>



<br>

<br>

			

										

                

			<section id="red_section">

				  

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Avilable Homes

					</p>

				 

			</section>   

<br>

<br>

					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';;">	

						<cms:repeatable name='The_Willows' >
							<cms:editable type='image' name='The_Willows_Image' label='Photo' show_preview='1' />
							<cms:editable type='nicedit' label='Description' name='The_Willows_Description' />
						</cms:repeatable>
					</div>
					
					<div style="font-size:22px; font-weight:inherit; font-family: 'Tw Cen MT';;">					
						<cms:show_repeatable 'The_Willows'>
						
							<img id="shadow_image" style="height:250px; width:300px;" src="<cms:show The_Willows_Image />" />
<br>
<br>
							<cms:show The_Willows_Description />
						<hr style="display: block; height: 3px; border: 0; border-top: 1px solid white; margin: 1em 0; padding: 0;">
						</cms:show_repeatable>
						

						
						

    				</div>

<br>

<br>

			

										

                

			<section id="red_section">

				  

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Residential Development

					</p>

				 

			</section>   

<br>

<br>

					<p>

						<a href="files/the_willows_lots.pdf">The Willows Preliminary Plat</a>

    				</p>

<br>

<br>



					<p>

						<a href="files/section_2.pdf">Section 2</a>

    				</p>

<br>

<br>



					<p>

						<a href="files/section_4.pdf">Section 4</a>

    				</p>

<br>

<br>



					<p>

						<a href="files/section_5.pdf">Section 5</a>

    				</p>

<br>

<br>



					<p>

						<a href="files/section_7.pdf">Section 7</a>

    				</p>

<br>

<br>



					



<br>

<br>

			

										

                

			<section id="red_section">

				  

					<p style="margin:0 auto; text-align:center; color:white; font-size:22px; padding-top:15px;">

    					Commercial Development

					</p>

				 

			</section>   

<br>

<br>

					<p>

						None Currently Avilable.

    				</p>

		

                

<br>

<br>



							

                


          

          </div>

          <div data-content="4" class="content">

               <hr style="visibility:hidden;">

                     <p>Coming Soon</p>

<br>

<br>

			  <div class="gridContainer clearfix">



                     <?php include_once("maps/meadow_creek.php"); ?>

				</div>


                    </div>

           <div data-content="5" class="content">

               <hr style="visibility:hidden;">

                     <p>Coming Soon</p>

<br>

<br>

			   <div class="gridContainer clearfix">

                     <?php include_once("maps/the_homestead_at_seiter_farms.php"); ?>

				</div>

                    </div>

	</div>

</section>  

<hr style="visibility:hidden;">



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>');</script>

    <script>

    $(function () {

    

      $('[data-tab]').on('click', function (e) {

        $(this)

          .addClass('active')

          .siblings('[data-tab]')

          .removeClass('active')

          .siblings('[data-content=' + $(this).data('tab') + ']')

          .addClass('active')

          .siblings('[data-content]')

          .removeClass('active');

        e.preventDefault();

      });

      

    });

</script>





<div class="gridContainer clearfix">

</div>

<?php include_once("page_footer.php"); ?>

</body>

</html>
<?php COUCH::invoke(); ?>
