<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<style>
.post-read-more2{
	width:100%;
	margin-left:0%;
	height:60px;
	overflow:hidden;
	text-align:justify;
}
.colonna{
	width:31%;
	float:left;
	margin-left:1%;
	margin-right:1%;
	text-align:justify;
}
.read-more2{
	width: 6%;
	margin-left: 92%;
	color:#000;
	background-color:#FFF;
	cursor:pointer;
	margin-bottom:30px;
	font-weight:700;
}
.not-read-more2{
width: 2%;
height: 24px;
margin-left: 96%;
color: #000;
background-color: #FFF;
cursor: pointer;
margin-top: 240px;
text-align:right;
}

</style>
</head>

<body>
<div class="post-read-more2">
<div class="colonna">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean velit nisl, lacinia sit amet rhoncus eget, iaculis ac augue. Morbi tellus quam, condimentum sed nulla quis, ultrices posuere metus. Nam semper arcu nec lectus pretium, ac auctor neque facilisis. Morbi cursus egestas lectus, ac bibendum erat posuere ut. Nunc facilisis lobortis ultrices. Cras et mi quis quam commodo feugiat. Aliquam erat volutpat. Fusce id mollis diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean velit nisl, lacinia sit amet rhoncus eget, iaculis ac augue. Morbi tellus quam, condimentum sed nulla quis, ultrices posuere metus. Nam semper arcu nec lectus pretium, ac auctor neque facilisis. 
</div>
<div class="colonna">
Morbi cursus egestas lectus, ac bibendum erat posuere ut. Nunc facilisis lobortis ultrices. Cras et mi quis quam commodo feugiat. Aliquam erat volutpat. Fusce id mollis diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean velit nisl, lacinia sit amet rhoncus eget, iaculis ac augue. Morbi tellus quam, condimentum sed nulla quis, ultrices posuere metus. Nam semper arcu nec lectus pretium, ac auctor neque facilisis. Morbi cursus egestas lectus, ac bibendum erat posuere ut. Nunc facilisis lobortis ultrices. Cras et mi quis quam commodo feugiat. Aliquam erat volutpat.
</div>
<div class="colonna">
Fusce id mollis diam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean velit nisl, lacinia sit amet rhoncus eget, iaculis ac augue. Morbi tellus quam, condimentum sed nulla quis, ultrices posuere metus. Nam semper arcu nec lectus pretium, ac auctor neque facilisis. Morbi cursus egestas lectus, ac bibendum erat posuere ut. Nunc facilisis lobortis ultrices. Cras et mi quis quam commodo feugiat. Aliquam erat volutpat. Fusce id mollis diam.
</div>
<div class="not-read-more2">
&laquo;&laquo;&nbsp;
</div>
</div>
<div class="read-more2">READ MORE
</div>
<script type="text/javascript">
$('.read-more2').click(function(){
	$('.post-read-more2').css('height','100%');
	$('.read-more2').hide();
});
$('.not-read-more2').click(function(){
	$('.post-read-more2').css('height','50px');
	$('.read-more2').show();
});
</script>
