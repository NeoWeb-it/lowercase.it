<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style>
.quadrato{width: 10px;height: 10px;cursor: pointer; float: left;margin-left: 2px; margin-bottom:2px; border:dotted 1px #FFFFFF;}
#q1{background-color:#000;}
#q2{background-color:#333;}
#q3{background-color:#666;}
#q4{background-color:#794400;}
#q5{background-color:#900;}
#q6{background-color:#330;}

</style>
<div style="width:100%; height:100%; float:right;">
<div class="quadrato" id="q1"></div>
<div class="quadrato" id="q2"></div>
<div class="quadrato" id="q3"></div>
<div class="quadrato" id="q4"></div>
<div class="quadrato" id="q5"></div>
<div class="quadrato" id="q6"></div>
</div>

<script type="text/javascript">
$('#q1').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#000');
});
$('#q2').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#333');
});
$('#q3').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#666');
});
$('#q4').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#794400');
});
$('#q5').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#900');
});
$('#q6').click(function(){
	$('body.custom-background, .template-pagina-iniziale, .menu-header').css('background-color','#330');
});



</script>