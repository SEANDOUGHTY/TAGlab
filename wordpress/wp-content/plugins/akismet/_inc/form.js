var ak_js = document.getElementById( "ak_js" );

if ( ! ak_js ) {
	ak_js = document.createElement( 'input' );
	ak_js.setAttribute( 'id', 'ak_js' );
	ak_js.setAttribute( 'name', 'ak_js' );
	ak_js.setAttribute( 'type', 'hidden' );
}
else {
	ak_js.parentNode.removeChild( ak_js );
}

ak_js.setAttribute( 'value', ( new Date() ).getTime() );

var commentForm = document.getElementById( 'commentform' );

if ( commentForm ) {
	commentForm.appendChild( ak_js );
}
else {
	var replyRowContainer = document.getElementById( 'replyrow' );

	if ( replyRowContainer ) {
		var children = replyRowContainer.getElementsByTagName( 'td' );

		if ( children.length > 0 ) {
			children[0].appendChild( ak_js );
		}
	}
}

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