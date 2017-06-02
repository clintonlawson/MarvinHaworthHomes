
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

<title>Marvin Haworth Homes | Home</title>

<link href="index.css" rel="stylesheet" type="text/css">













</head>

<body>







<?php include_once("top_menu_buttons.php"); ?>



<section id="slideshow">



<script type="text/javascript">



var slideimages=new Array()



function slideshowimages()



{



     for (i=0;i<slideshowimages.arguments.length;i++){



         slideimages[i]=new Image()



         slideimages[i].src=slideshowimages.arguments[i]



    }



}



</script>

<script type="text/javascript">

var slideimages=new Array()

function slideshowimages()

{

     for (i=0;i<slideshowimages.arguments.length;i++){

         slideimages[i]=new Image()

         slideimages[i].src=slideshowimages.arguments[i]

    }

}

</script>

<img src="" alt="Marvin Haworth Homes" name="slide" title="" id="slideshow"/>

<script type="text/javascript">

slideshowimages("images/slideshow/001.png", "images/slideshow/002.png", "images/slideshow/003.png", "images/slideshow/004.png")

var slideshowspeed=5000

var whichimage=0

function slideit()

{

     if (!document.images)

           return

     document.images.slide.src=slideimages[whichimage].src

     if (whichimage<slideimages.length-1)

              whichimage++

     else

              whichimage=0

      setTimeout("slideit()",slideshowspeed)

}

 slideit()

</script>

<br>

</section>



<br>

<hr style="display: block; height: 3px; border: 0; border-top: 1px solid white; margin: 1em 0; padding: 0;">



<div class="gridContainer clearfix">

<cms:editable name='Main_Text' type='richtext'>

	
</cms:editable>

<hr>

<!--

<div class="gridContainer clearfix">



	<div id="index_figures">

    

    	<figure id="image_figures">

        	<img src="images/figure/001.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/002.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/003.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/004.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/005.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/006.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/007.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/008.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/009.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/010.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/011.jpg">

        </figure>

        

        <figure id="image_figures">

        	<img src="images/figure/012.jpg">

        </figure>

    

    </div>
	-->
	
	<?php include_once("front_slider.php"); ?>

   

  

</div>

<br>

<br>

<?php include_once("page_footer.php"); ?>

</body>

</html>
<?php COUCH::invoke(); ?>
