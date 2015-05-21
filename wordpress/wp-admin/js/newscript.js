var main = function(){
	$("#tab1").click(function()
	{
		$("#content1").show();
		$("#content2").hide();
		$("#content3").hide();
		$("#content4").hide();
		$("#tab1").css("background-color", "green");
		$("#tab2").css("background-color", "blue");
		$("#tab3").css("background-color", "blue");
		$("#tab4").css("background-color", "blue");
	}
	);

	$("#tab2").click(function()
	{
		$("#content1").hide();
		$("#content2").show();
		$("#content3").hide();
		$("#content4").hide();
		$("#tab1").css("background-color", "blue");
		$("#tab2").css("background-color", "green");
		$("#tab3").css("background-color", "blue");
		$("#tab4").css("background-color", "blue");

	}
	);

	$("#tab3").click(function()
	{
		$("#content1").hide();
		$("#content2").hide();
		$("#content3").show();
		$("#content4").hide();
		$("#tab1").css("background-color", "blue");
		$("#tab2").css("background-color", "blue");
		$("#tab3").css("background-color", "green");
		$("#tab4").css("background-color", "blue");

	}
	);	

	$("#tab4").click(function()
	{
		$("#content1").hide();
		$("#content2").hide();
		$("#content3").hide();
		$("#content4").show();
		$("#tab1").css("background-color", "blue");
		$("#tab2").css("background-color", "blue");
		$("#tab3").css("background-color", "blue");
		$("#tab4").css("background-color", "green");

	}
	);	

};


$(document).ready(main); 