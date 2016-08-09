<div class="container">
    <div class="row">
      	<div class="col s12">
       		<span class="grey-text darken-4"><h3>New Faculty</h3></span>
	    </div>
	</div>
    <form method="post" action="../Controller/NewFaculty.php">
                  <div class="row">
                        <div class="input-field col l6 m6 s12">
                              <i class="material-icons prefix">person_pin</i>
                              <input type="text" id="name" name="name" 
                                     class="validate" required="true">
                              <label for="name">Full Name</label>
                        </div>
                        <div class="input-field col l6 m6 s12">
                              <i class="material-icons prefix">format_list_numbered</i>
                              <input type="number" id="number" name="srdn" 
                                     title="Must be digit" min=0 
                                     class="validate" required="true">
                              <label for="number">SRDN</label>
                        </div>
                        
                  </div>
                  <div class="row">
                        <div class="input-field col l6 m6 s12">
                              <i class="material-icons prefix">school</i>
                              <input type="number" id="dept" name="dept" 
                                     title="Must be digit" min=0 
                                     class="validate" required="true"
                                     value="<?PHP
                                     if(isset($dept))
                                     {
                                         echo $dept;
                                     }
                                     ?>" disabled="true">
                              <label for="dept">Department</label>
                        </div>
                        <div class="input-field col l6 m6 s12">
                              <i class="material-icons prefix">phone</i>
                              <input type="number" id="mobile"name="mobile" 
                                     title="Must be 10 digit" min=5000000000 
                                     length="10" class="validate" required="true">
                              <label for="mobile">Mobile No.</label>
                        </div>
                  </div>
      		<div class="row">
                        <div class="input-field col l6 m6 s12">
      				<i class="material-icons prefix">email</i>
                                <input type="email" id="email" name="email" 
                                       class="validate" required="true">
      				<label for="email">Email</label>
      			</div>                    
                        <div class="input-field col l6 m6 s12">
      				<i class="material-icons prefix">lock</i>
                                <input type="password" id="pass" name="pass" 
                                       class="validate" required="true">
      				<label for="pass">Password</label>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col s6 center-align">
      				<button class="waves-effect waves-light btn blue-black darken-4" type="submit" name="add">Submit</button>
      			</div>
      			<div class="col s6 center-align">
      				<button class="waves-effect waves-light btn blue-black darken-4" type="reset" name="clear">Clear</button>
      			</div>
      		</div>
            </form>
    <div class="row">
      	<div class="col s12">
       		<span class="grey-text darken-4"><h3>OR</h3></span>
	    </div>
	</div>
    <form method="post" action="../Controller/ImportFaculty.php">
        
        <div class="file-field input-field">
      <div class="btn">
        <span>Import</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
       </div>
        <div class="row">
      			<div class="col s6 center-align">
      				<button class="waves-effect waves-light btn blue-black darken-4" type="submit" name="import">Submit</button>
      			</div>
      			<div class="col s6 center-align">
      				<button class="waves-effect waves-light btn blue-black darken-4" type="reset" name="clear">Clear</button>
      			</div>
      		</div>
    </form>
    
</div>