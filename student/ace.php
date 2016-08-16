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
    #output {
        width: 100%;
        min-height: 550px;
    }
</style>
</head>
<body>

    <?php require_once 'header.php';?> 
    <div class="card-panel row" >
        <?php require_once './editor_controls.php';?>
        <div class="col l6 m12 s12">
            
        <div id="editor"> /*
    Your code here..
*/
        </div>
        </div>
        <div class="col l6 m12 s12">
            <div class="row">
                <div id="output" class="grey lighten-4">
                    md.madlknadlfknbadlfknbadkfnbkn
                    ghghghmgdmhdh
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
var editor;
$(document).ready(function(){
    editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/java");
    //alert(editor.getValue());
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
    var src_code = editor.getValue();
    //alert(src_code);

    $.ajax({
          type : 'POST',
          url  : '../Controller/Compile.php',
          data : { code:src_code },
          success :  function(response)
          {
            $('#output').html(response);
            //$('#outputBox').html("Hello <b>world!</b><br>Bye");
          }
    });
});
//     $('#run').click(function(){
//         alert('aya mai..');
//     var src_code = editor.getValue();
//     alert(src_code);

//     $.ajax({
//           type : 'POST',
//           url  : '../Controller/Compile.php',
//           data : { code:src_code },
//           success :  function(response)
//           {
//             $('#output').html(response);
//             //$('#outputBox').html("Hello <b>world!</b><br>Bye");
//           }
//     });
// });
</script>   
<script src="../JavaScripts/codebot.js" type="text/javascript"></script>
<script src="../JavaScripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>