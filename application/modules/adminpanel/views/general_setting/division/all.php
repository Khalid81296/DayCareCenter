<section class="content-header">
   <h1> <?=$meta_title; ?> </h1>
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
               <h3 class="box-title"><?=$meta_title; ?></h3>
               <!-- <a href="<?=base_url('adminpanel/general_setting/social_icon_add')?>" class="btn btn-info btn-xs pull-right"> Add Social Icon</a>           -->
            </div>        

            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <?php if($this->session->flashdata('warning')):?>
                  <div class="alert alert-warning">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('warning');?>
                  </div>
               <?php endif; ?>

               <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                     <tr>
                        <th>SL</th>
                        <th>Name (Bangla)</th>
                        <th>Name (English)</th>                                                
                        <th>অ্যাকশন</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     if($results){
                        foreach ($results as $row) { 
                           $sl++;
                           ?>
                           <tr>
                              <td><?=$sl;?></td>
                              <td><?=$row->div_name_bn;?></td>
                              <td><?=$row->div_name_en;?></td>
                              <td> 
                                 <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="caret"></span>
                                       <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">                                       
                                       <li><a href="<?=base_url('#')?>">Edit</a></li>
                                       <!-- <li><a href="<?=base_url('#')?>" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a></li> -->
                                    </ul>
                                 </div>
                              </td>
                           </tr>
                           <?php 
                        } 
                     }
                     ?>
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->

            <div class="box-footer"> </div>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
