
<?php 
  $count_active = count($active_users);
  $count_inactive = count($inactive_users);
  $count_deactivated = count($deactivated_users);
?>
<style type="text/css">
  .panel-body,span:hover,.status_item:hover
  { 
    cursor: pointer !important; 
  }
  .panel {
    border-radius: 0;
  }
  .panel-body {
    padding: 8px;
  }
  #addModal .modal-dialog {
    width: 54%;
    margin-top: 4%;
    
  }
  .borderless{
    border-radius: 0px; 
  }
  .form-group{
    margin-bottom: 10px;
  }
</style>


<div class="container-fluid">
      
 

<div class="container-fluid">  
 
  <div class="row"> 
  <div>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#active" aria-controls="active" role="tab" data-toggle="tab"><h5>Active Users (<?php echo $count_active;?>)</h5></a></li>
      <li role="presentation"><a href="#deactivated" aria-controls="deactivated" role="tab" data-toggle="tab"><h5>Deactivated Users (<?php echo $count_deactivated;?>)</h5></a></li>
      <li role="presentation"><a href="#inactive" aria-controls="inactive" role="tab" data-toggle="tab"><h5>Users who have never Activated (<?php echo $count_inactive;?>)</h5></a></li>
      <li role="presentation"  style="float:right;margin-left:1%">        
        <button class="btn btn-primary add form-control" data-toggle="modal" data-target="" id="">
          Add Multiple Users
        </button>        
      </li>     
      <li role="presentation"  style="float:right;">
        <button class="btn btn-primary add form-control" data-toggle="modal" data-target="#addModal" id="add_new" >
          <span class="glyphicon glyphicon-plus"></span>Add User
        </button>
      </li>
      &nbsp;
       
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="active">
        <div class="col-md-12 dt" style="border: 1px solid #ddd;padding-top: 1%;">
          <table  class="table table-hover table-bordered table-update" id="activeusers" style="font-size: 12px">
            <thead style="background-color: white">
              <tr>
                <th>Full Name</th>
                <th>Email </th>
                <th>Phone No</th>
                <th>County</th>
                <th>Sub-County</th>
                <th>Facility</th>
                <th>User Type</th>                                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($active_users as $active) {?>
                  <tr>                  
                    <td>
                      <input type="hidden" class="user_id" value="<?php echo $active['user_id'];?>"/>
                      <input type="hidden" class="user_name" value="<?php echo $active['fname'].' '.$active['lname'];?>"/>
                      <?php echo $active['fname'].' '.$active['lname'];?></td>
                    <td><?php echo $active['email'];?></td>
                    <td><?php echo $active['telephone'];?></td>
                    <td><?php $county = ($active['county']=='') ? 'N/A' : $active['county'] ; echo $county;?></td>
                    <td><?php $district = ($active['district']=='') ? 'N/A' : $active['district'] ; echo $district;?></td>
                    <td><?php $facility_name = ($active['facility_name']=='') ? 'N/A' : $active['facility_name'] ; echo $facility_name;?></td>                   
                    <td><?php echo $active['level'];?></td>
                    <td>
                      <button class="reset_password form-control btn-primary">Reset Password</button>
                      <button class="deactivate_user form-control btn-danger">Deactivate</button>                      
                    </td>                                        
                  </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="deactivated">
          <div class="col-md-12 dt" style="border: 1px solid #ddd;padding-top: 1%;">
          <table  class="table table-hover table-bordered table-update" id="deactivatedusers" style="font-size: 12px">
            <thead style="background-color: white">
              <tr>
                <th>Full Name</th>
                <th>Email </th>
                <th>Phone No</th>
                <th>County</th>
                <th>Sub-County</th>
                <th>Facility</th>
                <th>User Type</th>                                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($deactivated_users as $active) {?>
                  <tr>                  
                    <td>
                      <input type="hidden" class="user_id" value="<?php echo $active['user_id'];?>"/>
                      <input type="hidden" class="user_name" value="<?php echo $active['fname'].' '.$active['lname'];?>"/>
                      <?php echo $active['fname'].' '.$active['lname'];?></td>
                    <td><?php echo $active['email'];?></td>
                    <td><?php echo $active['telephone'];?></td>
                    <td><?php $county = ($active['county']=='') ? 'N/A' : $active['county'] ; echo $county;?></td>
                    <td><?php $district = ($active['district']=='') ? 'N/A' : $active['district'] ; echo $district;?></td>
                    <td><?php $facility_name = ($active['facility_name']=='') ? 'N/A' : $active['facility_name'] ; echo $facility_name;?></td>                   
                    <td><?php echo $active['level'];?></td>
                    <td>
                      <button class="activate_user form-control btn-success">Activate</button>                      
                    </td>                                        
                  </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="inactive">
          <div class="col-md-12 dt" style="border: 1px solid #ddd;padding-top: 1%;">
          <table  class="table table-hover table-bordered table-update" id="inactiveusers" style="font-size: 12px">
            <thead style="background-color: white">
              <tr>
                <th>Full Name</th>
                <th>Email </th>
                <th>Phone No</th>
                <th>County</th>
                <th>Sub-County</th>
                <th>Facility</th>
                <th>User Type</th>                                
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($inactive_users as $active) {?>
                  <tr>                  
                    <td>
                      <input type="hidden" class="user_id" value="<?php echo $active['user_id'];?>"/>
                      <input type="hidden" class="user_name" value="<?php echo $active['fname'].' '.$active['lname'];?>"/>
                      <?php echo $active['fname'].' '.$active['lname'];?></td>
                    <td><?php echo $active['email'];?></td>
                    <td><?php echo $active['telephone'];?></td>
                    <td><?php $county = ($active['county']=='') ? 'N/A' : $active['county'] ; echo $county;?></td>
                    <td><?php $district = ($active['district']=='') ? 'N/A' : $active['district'] ; echo $district;?></td>
                    <td><?php $facility_name = ($active['facility_name']=='') ? 'N/A' : $active['facility_name'] ; echo $facility_name;?></td>                  
                    <td><?php echo $active['level'];?></td>
                    <!--td><button class="reset_password form-control btn-primary">Reset Password</button></td-->                                        
                  </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>      
    </div>

  </div>

  </div>
</div>

<!--Add User Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align: center;line-height: 1">New User</h4>
      </div>
      <div class="row" style="margin:auto" id="error_msg">

        <div class=" col-md-12">
          <div class="form-group">


          </div>
        </div>

      </div>
      <div class="modal-body">
        <div class=" col-md-12">
          <div class="form-group">
            <center>
            <form role="form">

              <fieldset class = "col-md-12">
              <center>            

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">First Name</span>
                  <input type="text" required="required" name="first_name" id="first_name" class="form-control " placeholder="Enter First Name" >
                </div>

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">Last Name</span>
                  <input type="text" name="last_name" required="required" id="last_name" class="form-control " placeholder="Last Name" >
                </div>

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">Phone Number</span>
                  <input type="telephone" name="telephone" required="required" id="telephone" class="form-control " placeholder="Enter Phone Number eg, 254" tabindex="5">
                </div>

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">Email</span>
                  <input type="email" name="email" id="email" required="required" class="form-control " placeholder="email@domain.com" tabindex="6">
                </div>

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">User Name</span>
                  <input type="email" name="username" id="username" required="required" class="form-control " placeholder="email@domain.com" tabindex="5" readonly>
                </div>

                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">User Type</span>
                  <select class="form-control " id="user_type" name="user_type" required="required">
                        <option value='NULL'>Select User type</option>
                        <?php
                        foreach ($user_types as $user_types) :
                          $id = $user_types ['id'];
                          $type_name = $user_types ['level'];
                          echo "<option value='$id'>$type_name</option>";
                        endforeach;
                        ?>
                  </select>
                </div>
                <div class="input-group form-group u_mgt">
                  <span class="input-group-addon sponsor">County</span>
                  <select class="form-control " id="county" name="county" required="required">
                        <option value='NULL'>Select County Name</option>
                        <?php
                        foreach ($counties as $counties) :
                          $id = $counties ['id'];
                          $counties = $counties ['county'];
                          echo "<option value='$id'>$counties</option>";
                        endforeach;
                        ?>
                  </select>
                </div>


                <div class="input-group form-group u_mgt sub_county">
                  <span class="input-group-addon sponsor">Sub County</span>
                  <select class="form-control " id="sub_county" name="sub_county" required="required">
                        <option value='NULL'>Select Sub-County Name</option>                       
                  </select>
                </div>
                <div class="input-group form-group u_mgt facility_name">
                  <span class="input-group-addon sponsor">Facility</span>
                  <select class="form-control " id="facility_name" name="facility_name" required="required">
                        <option value='NULL'>Select Facility Name</option>                        
                  </select>
                </div>
                 
                
                
                <div class="row" style="margin:auto" id="processing">
                  <div class=" col-md-12">
                    <div class="form-group">
                    </div>
                  </div>
                </div>
                </center>

              </fieldset>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="create_new">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">     
  $(document).ready(function() {
    $(".sub_county").hide(); 
    $(".facility_name").hide();
    $('.reset_password').button().click(function() {
      var user_id = $(this).closest("tr").find(".user_id").val();
      var user_name = $(this).closest("tr").find(".user_name").val();      
      swal({   
        title: "Confirm",
        text: "Are you sure you want to Reset the Password for " + user_name.bold()+ "?",
        type: "warning",   showCancelButton: true,   confirmButtonColor: "#4cae4c",
        confirmButtonText: "Yes, Reset!", closeOnConfirm: false },
      function(){
        swal({   title: "Success!",   text: "Password Reset",   timer: 2000 , type: "success" });
        setTimeout(function () {
        var url = "<?php echo base_url('user/reset_user_password/') ?>";
            url += "/" + user_id;
            $.ajax({
              type:"POST",
              url: url,
              success: function(msg) {                
              },
              error: function(msg) {
                var notOk = alert("Password Reset Failed");                
              }
            });
        }, 3000);
     
      });
    });

    $('.deactivate_user').button().click(function() {
      var user_id = $(this).closest("tr").find(".user_id").val();
      var user_name = $(this).closest("tr").find(".user_name").val();      
      swal({   
        title: "Confirm",
        text: "Are you sure you want to Deactivate " + user_name.bold()+ "? The user will be unable to use the System",
        type: "warning",   showCancelButton: true,   confirmButtonColor: "#4cae4c",
        confirmButtonText: "Yes, Continue!", closeOnConfirm: false },
      function(){
        swal({   title: "Success!",   text: "User Deactivated",   timer: 2000 , type: "success" });
        setTimeout(function () {
        var url = "<?php echo base_url('user/deactivate_user/') ?>";
            url += "/" + user_id+'/2';
            $.ajax({
              type:"POST",
              url: url,
              success: function(msg) {   
                location.reload();             
              },
              error: function(msg) {
                var notOk = alert("User Deactivation Failed");                
              }
            });
        }, 3000);
     
       });
      });

    $('.activate_user').button().click(function() {
      var user_id = $(this).closest("tr").find(".user_id").val();
      var user_name = $(this).closest("tr").find(".user_name").val();      
      swal({   
        title: "Confirm",
        text: "Are you sure you want to Activate " + user_name.bold()+ "? The user will be now be able to log in and use the System",
        type: "warning",   showCancelButton: true,   confirmButtonColor: "#4cae4c",
        confirmButtonText: "Yes, Continue!", closeOnConfirm: false },
      function(){
        swal({   title: "Success!",   text: "User Activated",   timer: 1000 , type: "success" });
        setTimeout(function () {
        var url = "<?php echo base_url('user/deactivate_user/') ?>";
            url += "/" + user_id+'/1';
            $.ajax({
              type:"POST",
              url: url,
              success: function(msg) {   
                location.reload();             
              },
              error: function(msg) {
                var notOk = alert("User Activation Failed");                
              }
            });
        }, 3000);
     
      });
    });

    //Modal Stuff
    $(".sub_county").hide(); 
    $(".facility_name").hide();
    $(".county").hide(); 

    $('#add_new').click(function () {  
      $('#addModal').appendTo("body").modal('show');
    });

    $("#user_type").change(function(){
      var type_id = $(this).val();
      console.log(type_id);
      if(type_id == 9) {
        // Case Super Admin - County Required
        $("#county").attr("required", true);
        $("#sub_county").attr("required", false);
        $("#facility_name").attr("required", false);
        $(".county").show('slow');
        $(".sub_county").hide(); 
        $(".facility_name").hide();
      } 
      else if(type_id == 10) {  
        // Case County Pharmacist - County Required
         $("#county").attr("required", true);
         $("#sub_county").attr("required", false);
         $("#facility_name").attr("required", false);
         $(".county").show('slow'); 
         $(".sub_county").hide(); 
         $(".facility_name").hide();
      } 
      else if(type_id == 3) {
          // Case Sub-County Pharmacist - County, Sub-County Required
          $("#county").attr("required", true);
          $("#sub_county").attr("required", true);
          $("#facility_name").attr("required", false);
          $(".county").show('slow');
          $(".sub_county").show('slow'); 
          $(".facility_name").hide();
      } 
      else if(type_id == 2) {
        // Case Facility Admin - County, Sub-County, Facility Required
          $("#county").attr("required", true);
          $("#sub_county").attr("required", true);
          $("#facility_name").attr("required", true);
          $(".county").show('slow');
          $(".sub_county").show('slow'); 
          $(".facility_name").show('slow'); 
      } 
      else if(type_id == 5) {
        // Case Facility User - County, Sub-County, Facility Required
        $("#county").attr("required", true);
        $("#sub_county").attr("required", true);
        $("#facility_name").attr("required", true);
        $(".county").show('slow');
        $(".sub_county").show('slow'); 
        $(".facility_name").show('slow'); 
      }
      
    });

     $("#county").change(function() {      

      var option_value=$(this).val();    
      if(option_value=='NULL'){
        $(".sub_county").hide('slow');
        $(".facility_name").hide('slow');
      }else{
        var drop_down='';
        var hcmp_county_api = "<?php echo base_url(); ?>reports/get_sub_county_json_data/"+$("#county").val();
        $.getJSON( hcmp_county_api ,function( json ) {          
          $("#sub_county").html('<option value="NULL" selected="selected">Select Sub County</option>');
          $.each(json, function( key, val ) {
            drop_down +="<option value='"+json[key]["id"]+"'>"+json[key]["district"]+"</option>";
          });
          $("#sub_county").append(drop_down);
        });

        $(".sub_county").show('slow');

        // $(".sub_county").show('slow');

      }    
    }); 
    $("#sub_county").change(function() {
      var option_value=$(this).val();
        if(option_value=='NULL'){
          $(".facility_name").hide('slow'); 
        }else{
        var drop_down='';
        var hcmp_facility_api = "<?php echo base_url(); ?>reports/get_facility_json/"+$("#sub_county").val();
        $.getJSON( hcmp_facility_api ,function( json ) {
          $("#facility_name").html('<option value="NULL" selected="selected">Select Facility</option>');
              $.each(json, function( key, val ) {
                drop_down +="<option value='"+json[key]["facility_code"]+"'>"+json[key]["facility_name"]+"</option>"; 
              });
              $("#facility_name").append(drop_down);
          });

          $(".facility_name").show('slow');   

          // $(".facility_name").show('slow');   

        }
      }); //end of district name change funtion

    $('#email').bind('input change paste keyup mouseup',function() {
      var email = $('#email').val();         
      $("#username").val(email);
      $.ajax({
          type: "POST",
          dataType: "json",
          url: "<?php echo base_url()."user/check_user_json";?>", //Relative or absolute path to response.php file
          data:{ 'email': $('#email').val()},
          beforeSend: function(){
              $('#processing').html('Checking Email...');
          },
          success: function(data) {
            console.log(data);
            if(data.response=='false'){
                  $('#processing').html(data.msg);
              $( '#processing' ).addClass( "alert-danger alert-dismissable" );
              $("#create_new").attr("disabled", "disabled");
            }else if(data.response=='true'){
              $("#processingr").val('');
              $("#processing").removeClass("alert-danger alert-dismissable");
              $('#processing' ).addClass( "alert-success alert-dismissable" );
              $("#create_new").attr("disabled", false);
              $('#processing').html(data.msg);
            }
          }
        });
      });

    $("#create_new").click(function() {

      var first_name = $('#first_name').val()
      var last_name = $('#last_name').val()
      var telephone = $('#telephone').val()
      var email = $('#email').val()
      var username = $('#username').val()
      var facility_id = $('#facility_id').val()
      var district_name = $('#district_name').val()
      var user_type = $('#user_type').val()
       if(first_name==""||last_name==""||telephone==""||email==""||user_type=="NULL"||district_name=="NULL"){
            alert('Please make sure you have selected all relevant fields.');
              return;
              }
      
      var div="#processing";
      var url = "<?php echo base_url()."user/addnew_user";?>";
      ajax_post_process (url,div);
           
    });

    function ajax_post_process (url,div){
    var url =url;
     var loading_icon="<?php echo base_url().'assets/img/Preloader_4.gif' ?>";
     $.ajax({ 
      type: "POST",
          data:{ 'first_name': $('#first_name').val(),'last_name': $('#last_name').val(),
          'telephone': $('#telephone').val(),'email': $('#email').val(),
          'username': $('#username').val(),'facility_id': $('#facility_id').val(),
          'district_name': $('#district_name').val(),'user_type': $('#user_type').val()},
          url: url,
          beforeSend: function() {
            var message = confirm("Are you sure you want to proceed?");
            if (message){
              $('.modal-body').html("<img style='margin:30% 0 20% 42%;' src="+loading_icon+">");
            } else {
              var message = confirm("Are you sure you want to proceed?");
              if (message){
                $('.modal-body').html("<img style='margin:30% 0 20% 42%;' src="+loading_icon+">");
              } else {
                return false;
              }
            }
          },
            success: function(msg) {
            //$('.modal-body').html(msg);return;            
            setTimeout(function () {
                $('.modal-body').html("<div class='bg-warning' style='height:30px'>"+
                  "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+
                  "<h3>Success!!! A new user was added to the system. Please Close to continue</h3></div>")
                  
               $('.modal-footer').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>")            
            }, 4000);
          }
     }); 


    }



  });
</script>
