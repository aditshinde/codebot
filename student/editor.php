<html>
	<head>
		<title>Editor</title>
<!--                <link href="../StyleSheets/codebot.css" rel="stylesheet" type="text/css"/>-->
		<?php include 'materialize.html';	?>
                <style type="text/css" media="screen">
                    #editor {

                        position: absolute;
                        top: 20%;
                        right: 55%;
                        bottom: 1%;
                        left: 1%;
                    }
                </style>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div class="editor-pg-cntnr">
			<div class="row" style="margin-bottom: 0px;padding-top: 10px;">
				<div class="col l12 center-align">
					<button class="waves-effect waves-light btn blue-black darken-4 sbmt-btn-edit" id="show-op" type="submit" name="editor_submit" onclick="sendCode();">Show Output</button>
				</div>
			</div>

			<div class="row">
				<div class="l6 m6 s12">
                                    <div id="editor">function foo(items) {
var x = "All this is syntax highlighted";
return x;
}</div>
<!--		            	<textarea name="codeBox" id="codeBox" class="materialize-textarea editing-area" rows="10" cols="50"></textarea>-->
		          		
                                </div>

		        <div class="l6 m6 s12">
		            <div class="row">
		            	<div class="input-field l6 edit-area-L">
		            	<!-- <textarea disabled name="outputBox" id="outputBox" class="materialize-textarea editing-area" rows="10" cols="50"></textarea> -->
		            	<div name="outputBox" id="outputBox" class="materialize-textarea editing-area" rows="10" cols="50"></div>
		          		</div>
		          	</div>
		        </div>

		    </div>
		</div>    
		
		
	</body>
        <script src="../JavaScripts/codebot.js" type="text/javascript"></script>
        <script src="../JavaScripts/ace/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/javascript");
        </script>
        
</html>