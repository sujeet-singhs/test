<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>	
$.ajax({
	type: "POST",
	url: 'session.php',
	data: "pdata=sujeet",
	error:function(){alert("Failure");},
	success: function(date){
		alert(date);
	}
})
</script>