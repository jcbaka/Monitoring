$(document).ready(function(){
	$(".nav li").click(function(){
		if(!$(this).hasClass('disable')){
			$(".nav li").removeClass('active');
			$(this).addClass('active');
		}
	});
	
	
	/* main menu */
	$("#topnav li").removeClass('active');
	$("#topnav li").eq(1).addClass('active');
	$("#topnav li a").eq(1).attr('href','#');
		
	
	
	/* side menu */
	var cluster = $("#breadcrumb li.current a").html();
	if(cluster == 'Infrastructure'){
		$(".nav li").removeClass('active');
		$(".nav li").eq(1).addClass('active');
	}
	else if(cluster == 'Livelihood'){
		$(".nav li").removeClass('active');
		$(".nav li").eq(2).addClass('active');
	}
	else if(cluster == 'Social Services'){
		$(".nav li").removeClass('active');
		$(".nav li").eq(3).addClass('active');
	}
	else if(cluster == 'Resettlement'){
		$(".nav li").removeClass('active');
		$(".nav li").eq(4).addClass('active');
	}
	else if(cluster == 'Support'){
		$(".nav li").removeClass('active');
		$(".nav li").eq(5).addClass('active');
	}
});