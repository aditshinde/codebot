<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<?php require_once 'materialize.html';?>
<style type="text/css" media="screen">
    #editorContainer{
        margin: 0;
    }
    #editor {
        width: 100%;
        min-height: 550px;
    }
    #outputContainer {
       width: 100%;
       height: 550px;
       overflow-y: scroll;
    }
    #output {
        width: 100%;
        min-height: 520px;
    }
</style>
</head>
<body>
    <?php require_once 'header.php';?> 
    <div class="card-panel row" >
        <?php require_once './editor_controls.php';?>
        <div class="col l6 m12 s12">
            <h4>Code</h4>
        <div id="editor">import java.util.*;
import java.io.*;
class Solution
{
    public static void main(String[] args)
    {
        //Scanner sc = new Scanner("System.in");
        System.out.println("Hello World");
    }
}</div>
        </div>
        <div class="col l6 m12 s12">
            <h4>Output</h4>
            <div class="row">
                <div id="outputContainer">
                    <div id="output" class="grey lighten-4">
                        <p>
                            Hit Run to execute your code.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
<script src="../JavaScripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="../JavaScripts/ace/ext-language_tools.js"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/java");
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: false
    });
    
    function dark()
    {
        editor.setTheme("ace/theme/monokai");
    }
    function light()
    {
        editor.setTheme("ace/theme/eclipse");
    }
    
    $('#run').click(function(){
        $("#output").html("<p>Running your code please wait...</p>");
	var src_code = editor.getValue();
	//alert(src_code);

	$.ajax({
		  type : 'POST',
		  url  : '../Controller/CompileJava.php',
		  data : { code:src_code },
		  success :  function(response)
	      {
	      	$('#output').html(response);
	      	//$('#outputBox').html("Hello <b>world!</b><br>Bye");
	      }
	});
});
</script>
</body>
</html>