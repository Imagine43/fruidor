<div >  
           

           <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="login">Login</a></li>
                    <li><a href="#">Signup</a></li>
               </ul>
               
          </div>
     

<hr/>

<div class="container">
     <div class="row">
          <div class="span5">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
                    <form role="form" style=" margin-left: 200px;">
                       <legend>Login</legend>
                         <div class="form-group">
                                   <div class="row colbox" >
                                        <label for="txt_username" class="control-label">Username</label>
                                        <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                                          <span class="text-danger"> <?php echo form_error('txt_username'); ?></span>
                                   </div>
                         </div>
          
               
                         <div class="form-group">
                                   <div class="row colbox">
                                             <div >
                                                  <label for="txt_password" class="control-label">Password</label>
                                                  <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                                                  <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                                             </div>
                                   </div>
                         </div>
                              
                         <div class="form-group">
                                   <div class="text-center">
                                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                                        <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                                   </div>
                         </div>
                    </form>
                    <?php echo form_close(); ?>
                    <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>
</div>