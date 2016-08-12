<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    #editor {
        
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
</head>
<body>
    <div id="input" class="input" style="top: 20%;right: 55%;">
        <div id="editor">function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
    }</div>
    </div>

    
<script src="../JavaScripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
</script>
</body>
</html>