<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <?php
        include 'materialize.html';
        ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="row container">
    <h3 class="blue-text center-align">Contact Us</h3>
    <form class="col l12" action="Controller/ContactUs.php" method="get">
        <div class="row">
    <div class="input-field col l12">
        <input class="validate" type="text" name="name" required="true">
        <label for="email" data-error="Invalid" data-success="Valid">Name</label>
    </div>
    </div>
      <div class="row">
    <div class="input-field col l12">
        <input class="validate" type="email" name="email" required="true">
        <label for="email" data-error="Invalid" data-success="Valid">Email</label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col l12">
        <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          <label for="textarea1">Message</label>
    </div>
    </div>
    <div class="row center-align">
            <div class="col l6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Send
                <i class="material-icons right">send</i>
                </button>
            </div>
            <div class="col l6">
                <button class="btn waves-effect waves-light" type="reset" name="action">Reset
                <i class="material-icons right">replay</i>
                </button>
            </div>
        </div>
</form>						
        
    <div class="row center-align">
            <div class="col l12">
                
                <?php
                if(isset($_GET['status']))
                {
                    if(filter_var($_GET['status'], FILTER_SANITIZE_NUMBER_INT)==0)
                    {
                        echo '<h6 class="green-text" >'
                        . 'Registeration Successful'
                                . '</h6>';
                    }
                    elseif(filter_var($_GET['status'], FILTER_SANITIZE_NUMBER_INT)==1)
                    {
                        echo '<h6 class="red-text">'
                        . 'Registeration Unsuccessful'
                                . '</h6>';
                    }
                }
                ?>
                 
            </div>
        </div>
  </div>
    </body>
</html>
