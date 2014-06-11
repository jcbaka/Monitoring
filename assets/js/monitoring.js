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
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(0).addClass('active');
	}
	else if(cluster == 'Social Services'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(1).addClass('active');
	}
	else if(cluster == 'Resettlement'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(2).addClass('active');
	}
	else if(cluster == 'Livelihood'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(3).addClass('active');
	}
	else if(cluster == 'Agriculture &amp; Fishery'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(4).addClass('active');
	}
	else if(cluster == 'Environment'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(5).addClass('active');
	}
	else if(cluster == 'Program Support'){
		$(".nav li.main").removeClass('active');
		$(".nav li.main").eq(6).addClass('active');
	}
});