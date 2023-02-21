<!-- sign up modal -->
 <div class="modal fade" id="smyModal" tabindex="-1">
 
 <div class="modal-dialog" >
  <div class="modal-content">
    <div class="modal-header">
     
      <div class="modal-body">
         
              <!-- Nav tabs -->

              <ul class="nav nav-pills">
                  <li class="active"><a class="btn btn-default check_out" href="#home" data-toggle="tab">Login</a>
                  </li>
                  <li><a class="btn btn-default check_out" href="#profile" data-toggle="tab">Sign Up</a>
                  </li>
                  
              </ul>

              <!-- Tab panes  login panel-->
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                      <!-- <h4>Login Tab</h4>  -->
                       <div class="panel panel-pup">
                        <div class="panel-heading">
                            Login Details
                        </div>
                        <div class="panel-body">

                           <form class="form-horizontal span6" name=""  action="login.php" method="POST">
                              <input class="proid" type="hidden" name="proid" id="proid" value="">
                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_USERNAME">Username:</label>
                                    
                                    <div class="col-md-8">
                                       <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input-sm" > 
                             
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS">Password:</label>
                                    
                                    <div class="col-md-8">
                                     <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input-sm">
                            
                                    </div>
                                  </div>
                                </div>

                                  <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "FIRSTNAME"> </label>
                                    
                                    <div class="col-md-8">
                                    <button type="submit" id="modalLogin" name="modalLogin" class="btn btn-pup"><span class="glyphicon glyphicon-log-in "></span>   Login</button> 
                                     <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
                                    </div>
                                  </div>
                                </div>

 
                            </form>

                       </div>
                       <div class="">
                             <p><a href="passwordrecover.php">Forgot Password?</a></p>
                        </div>
                        <div class="panel-footer">
                             <p align="left">&copy; <a href=""></a>Sparks Stores</p>
                        </div>
                    </div> 
                  </div>
                  <!-- end login panel -->

                  <!-- sign in panel -->
                  <div class="tab-pane fade" id="profile">
                      <!-- <h4>Customer Details</h4>  --> 

                           <form  class="form-horizontal span6" action="customer/controller.php?action=add" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-pup">
                                    <div class="panel-heading">
                                       Customer Details
                                       <div class="form-container">

<form action="" method="post" enctype="multipart/form-data">
   <h3>Register now</h3>
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message">'.$message.'</div>';
      }
   }
   ?>
   <input type="text" name="name" placeholder="enter username" class="box" required>
   <input type="email" name="email" placeholder="enter email" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
   <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
   
                                <p>  I <input type="checkbox" id="conditionterms" name="conditionterms" value="checkbox" />
                                           <small>Agree with the <a class="toggle-modal"  onclick=" OpenPopupCenter('terms.php','Terms And Codition','600','600')"  ><b>TERMS AND CONDITION</b></a> of PASSION WEB DESIGN.</small>
                                           
                                          </div>
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                            <input type="submit"  name="submit"  value="Sign Up"  class="submit btn btn-pup"  />
                                             <button class="btn btn-default" data-dismiss="modal" type=
                                                "button">Close</button> 
                                          </div>
                                        </div>
                                      </div> 

                                        

                                     
                            </div> 
                            <!-- end panel sign up -->
                        </form>  
                   </div> 
              </div>
         
              
          </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
  </div>
<!-- end sign up modal -->





<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>