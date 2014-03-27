<?php
// Exit if accessed directly

//if ( !defined('ABSPATH')) exit;

/**
 * Pages Template
 *
 * @file           blog.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

 //get_header();?>
 
 
<style type="text/css">
#container {
max-width: 80%; font-size: 13px; line-height: 19px; margin-left: 9%; padding:0;
}
.grid, .grid-right {
float: left;
}
#wrapper {
	padding:0;
}
.template-pagina-iniziale{
	width:100%;	height:auto; margin-top:1%; background-color:#000; font-family:Helvetica, sans-serif;
}
.menu-header{
	width: 80%; height: 145px; margin-top: 0; margin-left: 0; border-bottom: dotted 1px #fff; position: fixed;	display:block; 	background-color: #000; 	z-index: 10; top:0;
}
.logo-site{
	height:100%; width:7%; margin-top:1.6%; margin-left: 1%; margin-bottom:1%; color:#FFF; font-size:18px; float:left; text-align:center; 
}
.logo-site a{
	text-decoration:none; color:#FFF; margin-left: -24px;
}
.menu-interno{
	margin-top:2%;	color:#FFF;	margin-bottom:1%;	width:90%; 	margin-right:0;	margin-left: 7.5%;	text-align:right;	height:98%;
}
.menu-interno a{
	color:#FFF; 	text-decoration:none; font-size:16px; letter-spacing: 3px;
}
#log-link{
	background-color:#FFF; color:#000;
}
.social{
	margin-bottom:0.5%;	font-size:12px;
}
.contenuto-interno{
	margin-top:1%;	color:#FFF;
}
.contenuto-interno a{
	text-decoration:none;
}
.sezioni-site{
	height:auto; COLOR:#FFF; padding-top:60px;
}
#sezione-blog{
	padding-top:145px; 
	background-image:url(http://lowercase.it/wp/img/back-blog.png); 
	background-repeat:repeat-y; 
	background-size:100%;
}
#sezione-news{
	padding-top:145px; 
}
.su{
	width:99.3%;	text-align:right;	border-bottom: dotted 1px #fff;
}
.post type-post {
	widht:30%;
}
/*articoli*/
.breadcrumb-list, .title-archive, .post-data{
	display:none;
}
.dimensione{
	width:30%;	min-height:830px;	text-align:justify;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;
}
.dimensione2{
	width: 30%;	height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;float: left;	margin-top:35px;	min-height: 560px;
}
.dimensione3{
	width: 30%;	height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;	min-height: 250px;
}
.dimensione4{
	width: 30%;	height: auto;	margin-left:1.5%;	margin-right:1.5%;	position: relative;	float: left;	margin-top:35px;	min-height: 230px;
}
.dimensione img{
	position:absolute;	width:40%;	left:30%;	bottom:0px;
}
#small-img{
	width:125px;	top:14px;	left:0;
}
.img-video{
width: 15%; position: absolute; bottom: 0;left: 83%;
}
.post-entry {
	height: 00;
}
.wp_cart_button_wrapper{
	position:absolute;	bottom:15px;
}
.ancora{
	position: absolute;	font-size: 22px;	margin-left: 18px;	color: #fff;	padding: 5px;left:0;
}
#content {
	margin-top: 0px;width:100%;
}

input[type='text'], input[type='email']  {
	width: 100%;
}
#Newsletter ul{
	list-style:none;
}
.newsletter {
	text-align:justify;
}
#carrello{
	position:absolute;	left:0;	bottom:0;	width:13%;
}
#video{
	bottom:0;	left: 85%;	width:15%;	position:absolute;
}
#fancybox-outer {
background-color:#000;
 }
.previous{
	display:none;
}
.post-title{
display:none;
}
a{
color:#fff;
}
a:hover{
	color:#CCC;
}
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
</style>


<?php  
//inserire blocco categorie autore
//$query15= 'cat=xx&orderby=date&order=DESC';
//	$query15= 'cat=x&orderby=date&order=DESC';
?>          

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
 <!--
        	<div class="lingue">
            	<a href="" style="font-size:12px; letter-spacing:0">it</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" style="font-size:12px; letter-spacing:0">en</a>
            </div>
-->
            <div class="social">
            	<a href="https://www.facebook.com/pages/Lowercase/621073931268574" target="_blank" style="font-size:12px; letter-spacing:0">facebook</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="http://www.youtube.com/channel/UC7KsLXhg0qKQzrucOJMJf3Q" target="_blank" style="font-size:12px; letter-spacing:0">youtube</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;flickr&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="http://instagram.com/lowercase_it" target="_blank" style="font-size:12px; letter-spacing:0">instagram</a>
            </div>
            &nbsp;
            <a href="index.php#">news</a>
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="index.php#edizioni">
				<?php if($vl=='it' || $vl==''){echo 'progetti';} else if($vl=='en'){echo'projects';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <a><!--href="#etc"-->
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
            <a href="index.php#dove"><!--href="#dove"-->
				<?php if($vl=='it' || $vl==''){echo 'dove';} else if($vl=='en'){echo'where';} ?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mailto:shop@lowercase.it">shop on-line</a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#contatti">
				<?php if($vl=='it' || $vl==''){echo 'contatti';} else if($vl=='en'){echo'contacts';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a><!--href="#newsletter"-->
				<?php if($vl=='it' || $vl==''){echo 'eventi';} else if($vl=='en'){echo'events';}?>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php#link">links</a>
            <a href="#" id="blog-link">wunderkammer</a>
        </div>
	</div>
    
<div class="contenuto-interno">
    <!--Blog-->
    <div class="sezioni-site" id="sezione-blog">
        <div id="content" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>" >
			<?php if (have_posts()) : ?>
            <?php 
	            query_posts($query15);
            ?>              
            <?php while (have_posts()) : the_post(); ?>
            <div class="post-blog-template">                   
				<?php get_template_part( 'loop-header' ); ?>
                <?php responsive_entry_before(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
					<?php responsive_entry_top(); ?>
                    <?php get_template_part( 'post-meta-page' ); ?>
		            <div class="post-entry">
    			        <?php the_content(__('Read more &#8250;', 'responsive')); ?>
        			    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
            		</div><!-- end of .post-entry -->
           		 	<?php get_template_part( 'post-data' ); ?>
            		<?php responsive_entry_bottom(); ?>      
            	</div>
            	<!-- end of #post-<?php the_ID(); ?> -->    
          </div>           
          <?php responsive_entry_after(); ?>
          <?php responsive_comments_before(); ?>
          <?php comments_template( '', true ); ?>
          <?php responsive_comments_after(); ?>
          <?php 
            endwhile; 
            get_template_part( 'loop-nav' ); 
            else : 
            get_template_part( 'loop-no-posts' ); 
            endif; 
          ?> 
          </div> 
        </div>
    </div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>