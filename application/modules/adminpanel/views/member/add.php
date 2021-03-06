<style type="text/css">
  .required {color: red;}
  .hide {
   display: none;
   }

</style>

<section class="content-header">
   <h1> <?=$meta_title;?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('index.php/adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
      <li class="active"><?=$meta_title;?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <h3 class="box-title"><?=$meta_title;?></h3>
               <a href="<?=base_url('index.php/adminpanel/member')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> সদস্য তালিকা</a>          
            </div>        
            <?php 
            $attributes = array('id' => 'jsvalidation');
            echo form_open_multipart("index.php/adminpanel/member/add", $attributes);
            ?>
            <div class="box-body">
               <div><?php echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-7">

                     <fieldset class="col-md-12">      
                        <legend>মৌলিক তথ্য</legend>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>পুরো নাম (বাংলা)<span class='required'>*</span></label>
                                 <div><?php echo form_error('name_bn'); ?></div>
                                 <input type="text" name="name_bn" value="<?=set_value('name_bn')?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>পুরো নাম (ইংরেজি)<span class='required'>*</span></label>
                                 <div><?php echo form_error('first_name'); ?></div>
                                 <input type="text" name="first_name" value="<?=set_value('first_name')?>" class="form-control"  style="text-transform: uppercase;">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>পিতার নাম (বাংলা)<span class='required'>*</span></label>
                                 <div><?php echo form_error('father_name_bn'); ?></div>
                                 <input type="text" name="father_name_bn" value="<?=set_value('father_name_bn')?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>পিতার নাম (ইংরেজি)</label>
                                 <div><?php echo form_error('father_name_en'); ?></div>
                                 <input type="text" name="father_name_en" value="<?=set_value('father_name_en')?>" class="form-control"  style="text-transform: uppercase;">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>মাতার নাম (বাংলা)</label>
                                 <div><?php echo form_error('mother_name_bn'); ?></div>
                                 <input type="text" name="mother_name_bn" value="<?=set_value('mother_name_bn')?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>মাতার নাম (ইংরেজি)</label>
                                 <div><?php echo form_error('mother_name_en'); ?></div>
                                 <input type="text" name="mother_name_en" value="<?=set_value('mother_name_en')?>" class="form-control"  style="text-transform: uppercase;">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>জন্ম তারিখ</label>
                                 <div><?php echo form_error('dob'); ?></div>
                                 <input type="text" name="dob" value="<?=set_value('dob')?>" class="form-control datepicker" autocomplete="off">
                              </div>   
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>ধর্ম</label>
                                 <?php echo form_error('religion_id');
                                 $more_attr = 'class="form-control input-sm" ';
                                 echo form_dropdown('religion_id', $religions, set_value('religion_id'), $more_attr);
                                 ?>
                              </div>   
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                               <label class="form-label">লিঙ্গ</label> <br>
                               <div><?php echo form_error('gender'); ?></div>
                               <input type="radio" name="gender" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> ছেলে 
                               <input type="radio" name="gender" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মেয়ে
                            </div>
                         </div>
                      </div>
                      <div class="row row-form">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>রক্তের গ্রুপ</label>
                              <?php echo form_error('bg_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('bg_id', $blood_group, set_value('bg_id'), $more_attr);
                              ?>               
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>বৈবাহিক অবস্থা</label>
                              <?php echo form_error('ms_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('ms_id', $marital_status, set_value('ms_id'), $more_attr);
                              ?>                           
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">স্বামী বা স্ত্রী নাম</label>                              
                              <div><?php echo form_error('spouse_name'); ?></div>
                              <input type="text" name="spouse_name" value="<?=set_value('spouse_name')?>" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মোবাইল নাম্বার<span class="required"> *</span></label>
                              <div><?php echo form_error('phone'); ?></div>
                              <input type="number" name="phone" value="<?=set_value('phone')?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">ইমেইল</label>
                              <div><?php echo form_error('email'); ?></div>
                              <input type="text" name="email" value="<?=set_value('email')?>" class="form-control">
                           </div>
                        </div>


                        <div class="col-md-6">
                           <div class="form-group">
                              <label>বাসস্থান ফোন</label>                              
                              <input type="number" name="phone_house" value="<?=set_value('phone_house')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">অফিসের ফোন </label>
                              <div><?php echo form_error('phone_office'); ?></div>
                              <input type="number" name="phone_office" value="<?=set_value('phone_office')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <!-- <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Tin No:</label>
                              <div><?php echo form_error('tin_no'); ?></div>
                              <input type="text" name="tin_no" value="<?=set_value('tin_no')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>National ID No:</label>
                              <div><?php echo form_error('national_id'); ?></div>
                              <input type="text" name="national_id" value="<?=set_value('national_id')?>" class="form-control">
                           </div>   
                        </div>
                     </div> -->

                     <div class="row row-form">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">বর্তমান ঠিকানা</label>
                              <div><?php echo form_error('present_address'); ?></div>
                              <textarea name="present_address" class="form-control"><?=set_value('present_address')?></textarea>
                           </div>
                        </div>

                        <h4 style="margin-left: 15px; font-weight: bold;">স্থায়ী ঠিকানা</h4>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>ঠিকানা লাইন ১</label>
                              <input type="text" name="per_village_house" value="<?=set_value('per_village_house')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>ঠিকানা লাইন ২</label>
                              <input type="text" name="per_road_block" value="<?=set_value('per_road_block')?>" class="form-control">
                           </div>   
                        </div>                        
                     </div>

                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">বিভাগ</label>
                              <?php echo form_error('per_division_id');
                              $more_attr = 'class="form-control" id="division"';
                              echo form_dropdown('per_division_id', $divisions, set_value('per_division_id'), $more_attr);
                              ?>    
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">জেলা</label>
                              <div><?php echo form_error('per_district_id'); ?></div>
                              <select name="per_district_id" id="district" class="distirict_val form-control">
                                 <option>--Select One--</option>                                 
                              </select>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="form-label">উপজেলা/থানা</label>
                              <div><?php echo form_error('per_upa_tha_id'); ?></div>
                              <select name="per_upa_tha_id" id="upazila" class="upazila_thana_val form-control">
                                 <option>--Select One--</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">                           
                              <label>পোস্ট কোড</label>
                              <input type="number" name="per_post_code" value="<?=set_value('per_post_code')?>" class="form-control">
                           </div>   
                        </div>
                     </div>

                     <div class="row row-form">
                        <h4 style="margin-left: 15px; font-weight: bold;">সংযুক্তি নথির তথ্য</h4>

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Birth Certificate No:</label>
                              <div><?php echo form_error('birth_certificate_no'); ?></div>
                              <input type="text" name="birth_certificate_no" value="<?=set_value('birth_certificate_no')?>" class="form-control">
                           </div>   
                        </div> -->

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>জাতীয় আইডি নং:</label>
                              <div><?php echo form_error('national_id'); ?></div>
                              <input type="text" name="national_id" value="<?=set_value('national_id')?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পাসপোর্ট নম্বর: (যদি থাকে)</label>
                              <div><?php echo form_error('passport_no'); ?></div>
                              <input type="text" name="passport_no" value="<?=set_value('passport_no')?>" class="form-control">
                           </div>   
                        </div>

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Tin No:</label>
                              <div><?php echo form_error('tin_no'); ?></div>
                              <input type="text" name="tin_no" value="<?=set_value('tin_no')?>" class="form-control">
                           </div>   
                        </div> -->

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Driving License No:</label>
                              <div><?php echo form_error('driving_license_no'); ?></div>
                              <input type="text" name="driving_license_no" value="<?=set_value('driving_license_no')?>" class="form-control">
                           </div>   
                        </div> -->

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Other Information </label>
                              <div><?php echo form_error('attach_other_info'); ?></div>
                              <textarea name="attach_other_info" class="form-control" rows="1"><?=set_value('attach_other_info')?></textarea>
                           </div>
                        </div> -->

                     </div>                     
                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>ছবি আপলোড</label>
                              <div><?php echo form_error('userfile'); ?></div>
                              <input type="file" name="userfile">
                              <p class="help-block">File type jpg, png, jpeg are allowed.</p>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>স্বাক্ষর আপলোড</label>
                              <div><?php echo form_error('userfile1'); ?></div>
                              <input type="file" name="userfile1">
                              <p class="help-block">File type jpg, png, jpeg are allowed.</p>
                           </div>
                        </div>
                     </div>
                     
                     

                  </fieldset>                               
                  <div class="clearfix"></div>

                 <!--  <div class="form-group">
                     <label>Overview</label>
                     <div><?php echo form_error('overview'); ?></div>
                     <textarea class="textarea" name="overview" rows="10" cols="80"><?=set_value('overview')?></textarea>
                  </div> -->
               </div> 
               <!-- /col-md-7 -->

               <div class="col-md-5">
                  <fieldset class="col-md-12">      
                     <legend>লগইন তথ্য</legend>
                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পরিষেবা আইডি / ইমেল<span class='required'>*</span></label>
                              <div><?php echo form_error('identity'); ?></div>
                              <input type="text" class="form-control" name="identity" id="identity" value="<?=set_value('identity')?>" placeholder="" style="text-transform: lowercase;">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পাসওয়ার্ড <span class='required'>*</span></label>
                              <div><?php echo form_error('password'); ?></div>
                              <input type="text" name="password" value="<?=set_value('password')?>" class="form-control">
                           </div>   
                        </div>
                     </div>
                  </fieldset>                               
                  <div class="clearfix"></div>

                  <br><br>
                  <fieldset class="col-md-12">      
                     <legend>অফিসিয়াল তথ্য</legend>

                     <div class="row row-form">

                     
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>সদস্য আইডি<span class='required'>*</span></label>
                              <input type="text" name="member_id" id="member_id" value="<?=set_value('member_id')?>" class="form-control">
                           </div>  
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>সদস্য পরিষেবা আইডি <span class='required'>*</span></label>
                              <input type="text" name="member_no" id="member_no" value="<?=set_value('member_no')?>" class="form-control">
                           </div>  
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Select Batch <span class='required'>*</span></label>
                              <?php echo form_error('batch_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('batch_id', $batch, set_value('batch_id'), $more_attr);
                              ?>
                           </div>  
                        </div>                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Joining Date</label>
                              <input type="text" name="join_date" value="<?=set_value('join_date')?>" class="form-control datepicker" autocomplete="off">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Current Designation</label>
                              <?php echo form_error('curr_designation_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('curr_designation_id', $designations, set_value('curr_designation_id'), $more_attr);
                              ?>
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Current Working Place</label>
                              <input type="text" name="curr_working_place" value="<?=set_value('curr_working_place')?>" class="form-control">
                           </div>  
                        </div>
                     </div>

                     <div class="row row-form">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Spouse Service Info </label> <br>
                              <input type="radio" name="govt_emp" value="0" onclick="show1();" <?=set_value('govt_emp')=='0'?'checked':'checked';?>> No
                              <input type="radio" name="govt_emp" value="1" onclick="show2();" <?=set_value('govt_emp')=='1'?'checked':'';?>> Yes 
                           </div>  
                        </div>
                     </div>

                     <div id="div1" class="row row-form">

                        <div class="col-md-12">
                           <div class="form-group">
                              <!-- <label class="form-label">Present Address</label> -->
                              <div><?php echo form_error('spouse_service_info'); ?></div>
                              <textarea name="spouse_service_info" class="form-control"><?=set_value('spouse_service_info')?></textarea>
                           </div>
                        </div>
                     </div>


                     <div class="row row-form">
                        <h4 style="margin-left: 15px; font-weight: bold;">Financial Information</h4>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member Fee</label>
                              <input type="text" name="pay_member_fee" value="<?=set_value('pay_member_fee')?>" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Payment Date</label>
                              <input type="text" name="pay_date" value="<?=set_value('pay_date')?>" class="form-control datepicker" autocomplete="off">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Payment Method</label>
                              <?php echo form_error('pay_method_id');
                              $more_attr = 'class="form-control input-sm"';
                              echo form_dropdown('pay_method_id', $payment_methods, set_value('pay_method_id'), $more_attr);
                              ?>              
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Pay Order/ Bank DD Name</label>
                              <input type="text" name="pay_receipt_no" value="<?=set_value('pay_receipt_no')?>" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Bank Name / Other Info </label>
                              <div><?php echo form_error('pay_other_info'); ?></div>
                              <textarea name="pay_other_info" class="form-control"><?=set_value('pay_other_info')?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row row-form">
                        <h4 style="margin-left: 15px; font-weight: bold;">Emergency Contact Information</h4>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Contact Name</label>
                              <input type="text" name="emg_contact_name" value="<?=set_value('emg_contact_name')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Contact Number</label>
                              <input type="text" name="emg_contact_no" value="<?=set_value('emg_contact_no')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Contact Email</label>
                              <div><?php echo form_error('emg_contact_email'); ?></div>
                              <input type="text" name="emg_contact_email" value="<?=set_value('emg_contact_email')?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Contact Address</label>
                              <div><?php echo form_error('emg_contact_address'); ?></div>
                              <textarea name="emg_contact_address" class="form-control"></textarea>
                           </div>
                        </div>
                     </div>

                     

                  </fieldset>                               
                  <div class="clearfix"></div>

               </div>
               <!-- /col-md-5 -->

            </div>
         </div>
         <!-- /.box-body -->

         <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
         </div>
         <?php echo form_close();?>
      </div>
      <!-- /.box -->

   </div>
</div>
<!-- /.row -->

</section>
<!-- /.content -->

<script type="text/javascript">
   // $.validator.setDefaults({
   //    submitHandler: function() {
   //       //alert("submitted!");
            // form.submit(); 
   //    }
   // });
   document.getElementById('div1').style.display ='none';
   function show1(){
      document.getElementById('div1').style.display ='none';
   }
   function show2(){
      document.getElementById('div1').style.display ='block';
   }

   $().ready(function() {
      // validate the comment form when it is submitted
      //$("#commentForm").validate();

      // Jquery custome validate
      $.validator.addMethod("noSpace", function(value, element) { 
         return value.indexOf(" ") < 0 && value != ""; 
      }, "No space allowed use underscore symbol like ' _ '");

      // validate signup form on keyup and submit
      $("#jsvalidation").validate({
         rules: {
            name_bn: "required",
            first_name: "required",
            father_name_bn: "required",
            // father_name_en: "required",
            member_no: "required",

            // mother_name_bn: "required",
            // mother_name_en: "required",
            // dob: "required",
            // religion_id: "required",
            // bg_id: "required",
            // ms_id: "required",
            // phone: "required",
            // phone_office: "required",
            // present_address: "required",
            batch_id: "required",
            // join_date: "required",
            // curr_designation_id: "required",
            // curr_working_place: "required",
            // govt_designation: "required",
            // govt_organization: "required",
            // emg_contact_name: "required",
            // emg_contact_no: "required",
            // emg_contact_email: "required",
            // emg_contact_address: "required",
            // userfile: "required",
            
            identity: {
               required: true, 
               noSpace: true,
               minlength: 3,
               remote: {
                  url: hostname +"/index.php/adminpanel/ajax_exists_identity/",
                  type: "post",
                  data: {
                     inputData: function() {
                        return $( "#identity" ).val();
                     }
                  }
               }         
            }, 
            member_id: {
               required: true, 
               number: true,
               noSpace: true,
               minlength: 4,
               remote: {
                  url: hostname +"index.php/adminpanel/ajax_exists_member_id/",
                  type: "post",
                  data: {
                     inputData: function() {
                        return $( "#member_id" ).val();
                     }
                  }
               }         
            },

            member_no: {
               required: true, 
               number: true,
               noSpace: true,
               minlength: 4,
               remote: {
                  url: hostname +"index.php/adminpanel/ajax_exists_member_no/",
                  type: "post",
                  data: {
                     inputData: function() {
                        return $( "#member_no" ).val();
                     }
                  }
               }         
            }, 

            password: {
               required: true,
               minlength: 8
            },
            confirm_password: {
               required: true,
               minlength: 5,
               equalTo: "#password"
            },
            email: {
               required: false,
               email: true
            },

            phone: {
               required: true,
               minlength: 11,
               maxlength: 11
            },

            // phone: {   
            //    number: "Please enter number only",               
            // },

            topic: {
               required: "#newsletter:checked",
               minlength: 2
            },
            agree: "required"
         },
         messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            identity: {
               required: "Enter member ID / email required.",               
               remote: "Already in use! Please try another"
            },
            member_id: {
               required: "Enter member ID required.",               
               number: "Please enter number only",               
               remote: "Already existes member ID"
            },

            member_no: {
               required: "Enter member NO required.",               
               number: "Please enter number only",               
               remote: "Already existes member NO"
            },

            username: {
               required: "Please enter a username",
               minlength: "Your username must consist of at least 2 characters"
            },
            password: {
               required: "Please provide a password",
               minlength: "Your password must be at least 8 characters long"
            },
            confirm_password: {
               required: "Please provide a password",
               minlength: "Your password must be at least 5 characters long",
               equalTo: "Please enter the same password as above"
            },

            phone: {
               required: "Please provide phone number",
               minlength: "Your phone number must be at least 11 characters long"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
         }
      });      

      // propose username by combining first- and lastname
      $("#username").focus(function() {
         var firstname = $("#firstname").val();
         var lastname = $("#lastname").val();
         if (firstname && lastname && !this.value) {
            this.value = firstname + "." + lastname;
         }
      });

      //code to hide topic selection, disable for demo
      var newsletter = $("#newsletter");
      // newsletter topics are optional, hide at first
      var inital = newsletter.is(":checked");
      var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
      var topicInputs = topics.find("input").attr("disabled", !inital);
      // show when newsletter is checked
      newsletter.click(function() {
         topics[this.checked ? "removeClass" : "addClass"]("gray");
         topicInputs.attr("disabled", !this.checked);
      });


      // onChange Method
      // $('#identity').keyup(function(){
      //    // $('#mask_username').html($('#identity').val());
      //    $('#mask_username').html($(this).val().toLowerCase());
      // });


   });


</script>
