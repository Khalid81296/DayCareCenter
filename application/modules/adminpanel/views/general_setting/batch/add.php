<section class="content-header">
   <h1> <?=$meta_title;?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
      <li class="active"><?=$meta_title; ?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title"><?=$meta_title;?> Form</h3>
               <a href="<?=base_url('adminpanel/general_setting/designation')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Batch List</a>          
            </div>        
            <?php echo form_open_multipart("adminpanel/general_setting/batch_add");?>
            <div class="box-body">
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-7">
                     <!-- <div class="form-group">
                        <label>Designation Name(English)</label>
                        <div><?php echo form_error('desig_name_en'); ?></div>
                        <textarea  class="form-control" name="desig_name_en" >#</textarea>
                     </div> -->

                     <div class="form-group">
                        <label>Batch Name(English)</label>
                        <div><?php echo form_error('batch_name_en'); ?></div>
                        <input type="text" name="batch_name_en" value="<?=set_value('batch_name_en')?>"  class="form-control">
                     </div> 

                     <div class="form-group">
                        <label>Batch Name(Bangla)</label>
                        <div><?php echo form_error('batch_name_bn'); ?></div>
                        <input type="text" name="batch_name_bn" value="<?=set_value('batch_name_bn')?>" class="bangla form-control">
                     </div> 



                     <!-- <div class="form-group">
                        <label>Designation Name(Bangla)</label>
                        <div><?php echo form_error('desig_name_bn'); ?></div>
                        <textarea  class="form-control" name="desig_name_bn" >#</textarea>
                     </div> -->

                     <div class="box-footer">    
                        <?php //echo form_input($user_id);?>        
                        <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
                     </div>
                  </div>

               </div>
            </div>
            <!-- /.box-body -->

            <?php echo form_close();?>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
