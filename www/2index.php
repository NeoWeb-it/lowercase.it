<?php
// Exit if accessed directly
//if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying archive pages.
 
 Template Name: Archivio
 
 */
	get_header();
?>

<style type="text/css">
#container {max-width: 80%; font-size: 13px; line-height: 19px; margin-left: 9%; padding:0;}
.grid, .grid-right {float: left;}
#wrapper {	padding:0;}
.template-pagina-iniziale{	 margin-top:1%; background-color:#000; font-family:Helvetica, sans-serif;}
.menu-header{width: 80%; height: 145px; margin-top: 19px; margin-left: 10%; border-bottom: dotted 1px #fff; position: fixed;	display:block; 	background-color: #000; 	z-index: 10; top:0;}
.logo-site{	height:100%; width:7%; margin-top:1.6%; margin-left: 1%; margin-bottom:1%; color:#FFF; font-size:18px; float:left; text-align:center; }
.logo-site a{	text-decoration:none; color:#FFF; margin-left: -24px;}
.menu-interno{	margin-top:2%;	color:#FFF;	margin-bottom:1%;	width:90%; 	margin-right:0;	margin-left: 7.5%;	text-align:right;	height:98%;}
.menu-interno a{	color:#FFF; 	text-decoration:none; font-size:16px; letter-spacing: 3px;}
#blog-link{background-color:#fff; color:#000;padding:2px; }
#log-link{	background-color:#FFF; color:#000;}
.social{	margin-bottom:0.5%;	font-size:12px;}
.contenuto-interno{	margin-top:1%;	color:#FFF; position: absolute;top: 155px;width: 79.9%;height: 100%;left: 10.5%;}
.contenuto-interno a{	text-decoration:none;}
#contenuto-sfondo{	background-image:url('img/back.png'); background-repeat:repeat-y;background-size:100%;height: 100%;width:100%; margin-top:-10px; }
#white{ background-color:#FFF;	width:74%;margin-left:10%;	height:100%; color: #000;}
.space{	height: 40px; width:100%;}
.sezioni-site{	height:auto; COLOR:#FFF; padding-top:60px;}
#sezione-blog{	padding-top:145px; 	background-image:url(http://lowercase.it/wp/img/back-blog.png); 	background-repeat:repeat-y; background-size:100%;}
#sezione-news{	padding-top:145px; }
.su{	width:99.3%;	text-align:right;	border-bottom: dotted 1px #fff;}
.post type-post {	widht:30%;}
/*articoli*/
.breadcrumb-list, .title-archive, .post-data{display:none;}
.dimensione{width:30%;	min-height:830px;	text-align:justify;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;}
.dimensione2{width: 30%;	height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;float: left;	margin-top:35px;	min-height: 560px;}
.dimensione3{width: 30%;height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;	min-height: 250px;}
.dimensione4{width: 30%;height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;	min-height: 230px;}
.dimensione img{	position:absolute;	width:40%;	left:30%;	bottom:0px;}
#small-img{	width:125px;	top:14px;	left:0;}
.img-video{width: 15%; position: absolute; bottom: 0;left: 83%;}
.post-entry {	height: 00;}
.wp_cart_button_wrapper{	position:absolute;	bottom:15px;}
.ancora{	position: absolute;	font-size: 22px;	margin-left: 18px;	color: #fff;	padding: 5px;left:0;}
#content {margin-top: 0px;width:100%;}
input[type='text'], input[type='email']  {	width: 100%;}
#Newsletter ul{	list-style:none;}
.newsletter {text-align:justify;}
#carrello{	position:absolute;	left:0;	bottom:0;	width:13%;}
#video{	bottom:0;	left: 85%;	width:15%;	position:absolute;}
#fancybox-outer {background-color:#000; }
.previous{	display:none;}
.post-title{/*display:none;*/}
a{color:#fff;}
a:hover{	color:#CCC;}
@media only screen and (max-width:1680px){
    #container {    font-size: 12px;    }
}
@media only screen and (max-width:1600px){
    #container {    font-size: 13px;    }
    .menu-interno a {    letter-spacing: 4px;    }
}

@media only screen and (max-width:1440px){
.ancora{margin-left:10px;}
.dimensione2{min-height:600px;}
.dimensione3{min-height:280px;}
}
@media only screen and (max-width:1400px){
.dimensione2{min-height:600px;}
.dimensione3{min-height:280px;}
}
@media only screen and (max-width:1280px){
    #container {    font-size: 12px;    }
    .menu-interno a {font-size: 14px;letter-spacing: 3px;line-height: 34px;    }
    .dimensione {    min-height: 860px;   }
	.dimensione2{min-height:670px;}
.dimensione3{min-height:320px;}
}
@media only screen and (max-width:1024px){
#container {font-size: 11px;}
.lingua{	font-size:10px;}
.menu-interno a {font-size: 12px;line-height: 28px;letter-spacing:2px;}
.dimensione2{	font-size:0.9em;  line-height: 17px;    min-height: 670px;}
.dimensione3{min-height:320px;  line-height: 17px;font-size:0.9em;}
}
@media only screen and (max-width:980px){
.menu-header{height:124px;}
.grid, .grid-right {float: left;}
.menu-interno a {font-size: 12px;line-height: 20px;letter-spacing:1px;}
.logo-site {height: 80%;}
.logo-site a {font-size:14px;}
.ancora{margin-left:3px;}
}
@media only screen and (max-width:800px){
.container{font-size: 10px;line-height: 14px;}
.logo-site a {margin-left: -11px;}
.menu-header {height: 110px;}
.lingue{font-size: 7px;}
.logo-site {font-size:15px;}
.menu-interno a {font-size: 7px;letter-spacing: 1px;}
.su {width: 99%;}
.ancora{	margin-left:5px;}
.dimensione {width: 96%;min-height: 780px;border-bottom: 1px #666 solid;}
.dimensione2{width: 96%;min-height:410px;border-bottom: 1px #666 solid;}
.dimensione3{width: 96%;min-height:170px;border-bottom: 1px #666 solid;}
}
@media only screen and (max-width:640px){
.lingue, .social a, menu-interno a{font-size: 6px;}
.colonna {min-height: 240px;}
.dimensione2{min-height:450px;}
.dimensione3{min-height:210px;}
}
@media only screen and (max-width:320px){
#container {font-size: 8px;line-height:11px;}
.logo-site a {font-size: 8px;}
.menu-interno{width: 73%;margin-left: 29.5%;}
.menu-header {height: 140px;}
.colonna{min-height: 220px;}
.dimensione {min-height: 530px;}
.dimensione2{min-height:320px;}
.dimensione3{min-height:143px;}
}
@media only screen and (max-width:240px){
.colonna{min-height:300px;}
.dimensione2{min-height:420px;}
.dimensione3{min-height:195px;}
}
/*-------------*/
#white{
	padding: 50px;
}
.entry-pre-title{
	font-size: 1.6em;margin-bottom: 50px;
}
.entry-title post-title{
	font-weight: normal;
font-size: 1.4em;
}
</style>

<?php
$query1= 'cat=4&orderby=date&order=DESC&showposts=3';
?>
</head>
<?php include('file-config.php'); ?>
<body style="background-color:#000">

<div class="template-pagina-iniziale">
    <div class="menu-header">

    	<div style="position: absolute;margin-top: 1.6%;right: 1.6%;width: 95px;">
			<?php 
				include ('wp/wp-includes/sfondo.php');
			?>
        </div>  
	      
    	<div class="logo-site">
            <a href="index.php#">
            	<img src="http://lowercase.it/wp/img/logo.png" border="0" align="absbottom" />
            	<br>
            	lowercase
            </a>
        </div>
        
        <div class="menu-interno">
        	<br />

        	<div class="lingue">
            	<a href="" style="font-size:12px; letter-spacing:0">it</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" style="font-size:12px; letter-spacing:0">en</a>
            </div>

            <div class="social">
            	<a href="https://www.facebook.com/pages/Lowercase/621073931268574" target="_blank" style="font-size:12px; letter-spacing:0">facebook</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="http://www.youtube.com/channel/UC7KsLXhg0qKQzrucOJMJf3Q" target="_blank" style="font-size:12px; letter-spacing:0">youtube</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;flickr&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="http://instagram.com/lowercase_it" target="_blank" style="font-size:12px; letter-spacing:0">instagram</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.pinterest.com/info3402/" target="_blank" style="font-size:12px; letter-spacing:0">pinterest</a>
            </div>
            &nbsp;
            <a href="index.php#">news</a>
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="index.php#edizioni">
				<?php if($vl=='it' || $vl==''){echo 'progetti';} else if($vl=='en'){echo'projects';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <a>
				<?php if($vl=='it' || $vl==''){echo 'ecc.';} else if($vl=='en'){echo'etc.';} ?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#chi">
				<?php if($vl=='it' || $vl==''){echo 'chi';} else if($vl=='en'){echo'who';}?>
            </a>
            &nbsp&nbsp;&nbsp;&nbsp;
            <a href="index.php#ces">
				<?php if($vl=='it' || $vl==''){echo 'c&amp;s';} else if($vl=='en'){echo'p&amp;p';} ?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#dove">
				<?php if($vl=='it' || $vl==''){echo 'dove';} else if($vl=='en'){echo'where';} ?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mailto:shop@lowercase.it">shop on-line</a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#contatti">
				<?php if($vl=='it' || $vl==''){echo 'contatti';} else if($vl=='en'){echo'contacts';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a>
				<?php if($vl=='it' || $vl==''){echo 'eventi';} else if($vl=='en'){echo'events';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#link">links</a>
            <a href="#" id="blog-link">wunderkammer</a>
        </div>
	</div>
  
	<div class="contenuto-interno">
  	<div id="contenuto-sfondo">
 	<div class="space"></div>

    			<div id="white">



<div id="post-383" class="post-383 post type-post status-publish format-standard hentry category-news">       
<h1 class="entry-pre-title">lowercase<br>wunderkammer</h1>
<h1 class="entry-title post-title" >costituzione</h1>

<div class="post-entry">
<p><a class="fancybox-youtube" href="http://www.youtube.com/embed/r5hmtQ1liWU?autoplay=1"><img class="alignnone size-medium wp-image-416" id="video" alt="video" id="video" src="http://www.lowercase.it/wp/wp-content/uploads/2013/08/video.png" width="300" height="202" /></a><a class="fancybox iframe" href="http://www.lowercase.it/wp/wp-includes/gallery.php"><img class="alignnone size-full wp-image-412" alt="costituzione" src="http://www.lowercase.it/wp/wp-content/uploads/2013/08/costituzione.png" width="250" height="180" /></a></p>
<p>Enrico Delitala e Lorenzo Gaetani<br />
<i> I dodici principi fondamentali.<br />
</i><i>La Costituzione italiana a colori</i>.</p>
<p>È possibile oggi leggere e fare propria la Costituzione della Repubblica italiana? Ce lo siamo chiesto, siamo partiti dai <i>Principi fondamentali</i>, i dodici articoli che introducono la Carta costituzionale e fondano la Repubblica stessa, che ne delineano la natura e lo spirito. Essi stanno al vertice nella gerarchia delle fonti di diritto e sono il più alto riferimento per la convivenza civile tra i cittadini italiani. A 65 anni esatti dalla sua entrata in vigore, la Costituzione della Repubblica italiana merita di essere letta, capita e fatta propria. Questo ci siamo prefissati come obiettivo e la sua trasfigurazione in illustrazioni ci è sembrato il modo più adatto. ED   LG</p>
<p>Concept: Lorenzo Gaetani<br />
Illustrazioni: Enrico Delitala, Lorenzo Gaetani<br />
Progetto grafico e layout: Enrico Delitala, Lorenzo Gaetani</p>
<p>Ottobre 2013<br />
500 esemplari di cui 100 numerati<br />
Stampato presso Fontegrafica</p>
<p>Numero pagine: 40<br />
Interno: 4 colori<br />
Copertina: 1 colore<br />
Stampa: offset<br />
Formato: 12&#215;12 cm<br />
Copertina: Favini Burano Grey 250g/m²<br />
Interno: Favini Dolce Vita 120 g/m²<br />
Composizione tipografica in Helvetica (M. Miedinger, 1957)</p>
        </div><!-- end of .post-entry -->


<div class="post-data">

Pubblicato in <a href="http://www.lowercase.it/archives/category/news" title="Visualizza tutti gli articoli in NEWS">NEWS</a> 
</div>
</div>



                </div>
              </div>
              </div>
              </div>
            			


<?php //get_footer(); ?>

