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
            
        <div id="editor">function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
    }</div>
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

    
<script src="../JavaScripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
    
    
    function dark()
    {
        editor.setTheme("ace/theme/monokai");
    }
    function light()
    {
        editor.setTheme("ace/theme/eclipse");
    }
    
</script>
</body>
</html>