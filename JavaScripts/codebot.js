/*	
**	This is specific js file for this project
*/
/*
function sendCode()
{
	var code = document.getElementById("codeBox").value;
	//alert(code);
}*/
$('#r').click(function(){
	var src_code = $("#editor").val();
	alert('from js file');

	$.ajax({
		  type : 'POST',
		  url  : 'compile.php',
		  data : { code:src_code },
		  success :  function(response)
	      {
	      	$('#outputBox').html(response);
	      	//$('#outputBox').html("Hello <b>world!</b><br>Bye");
	      }
	});
});