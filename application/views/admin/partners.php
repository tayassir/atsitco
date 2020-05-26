<style type="text/css">

.imagePreview {
    width: 100%;
    height: 180px;
    /*background-position:  auto;*/
    <?php if(isset($companydata->company_logo)) { ?>
    background:url(<?php echo base_url().'Assets/upload/'.$companydata->company_logo ?>);      
    <?php  }else {?>
     
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  <?php  }?>
  background-color:#fff;
    background-size: 100% 100%;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.comimg{
  margin-top: 10px;
}


 .form-group
    {
        margin-bottom: 0px;
    }
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style> 
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Partners</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Patners</a></li>
                            <!-- <li><a href="#">Forms</a></li> -->
                            <!-- <li class="active">Advanced</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="row">
               <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-success mt-2 instantmodal" data-toggle="modal" data-target="#myModal">Add Partner</button>
               </div>
            </div>
             <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Partner </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<!--             <?php if($this->session->tempdata('success')):  ?>
                <script >
                    $(document).ready(function(){
                        alert('Add successfully!');
                    });
                </script>
            <?php endif; ?>
            <?php if($this->session->tempdata('error')):  ?>
                <script >
                    $(document).ready(function(){
                        alert('Something went wrong!');
                    });
                </script>
            <?php endif; ?>    --> 
        
        <!-- Modal body -->
        <div class="modal-body">
             <?php echo form_open_multipart('customize/addpartner'); ?>
            <div class="row form-group">
                <label class="col-md-3 col-form-label text-md-right">Partner Name</label>
                <div class="col-md-6">
                    <input type="text" id="partner_name"  class="form-control form-control-sm shadow-none" value="" name="partner_name" autocomplete="off">
                    
                </div>
            </div>

            <div class="row form-group comimg">
                                    <label class="col-md-3 col-form-label text-md-right">Partner Logo</label>
                                    <div class="col-md-6">
                                      <div class="imgUp">
                                          <div class="imagePreview"></div>
                                          <label class="btn btn-primary">
                                                  Upload<input type="file" class="uploadFile img" value="Upload logo" name="logo" style="  width: 0px;height: 0px;overflow: hidden;">
                                          </label>
                                      </div>
                                    </div>

                                    <div class="col-md-6"></div>
                                     <div class="col-md-6 offset-md-3" >
                                        <p id="uploadmsg" style='color:#FF0000'></p>
                                        <p style="margin-top: 0px; margin-bottom: 10px;" >(Supported logo extensions jpeg,jpg,png Only)</p>
                                    </div>
                                </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer ">
            <div class="row">
                <div class="col-md-12 text-center">
           <button type="submit" id="addpartner" onclick="return checkpartner()" class="btn btn-success btn-mrg waves-effect waves-light" autocomplete="off">Add</button>
            <button type="button" data-dismiss="modal" class=" btn btn-danger btn-mrg waves-effect waves-light">Close</button>    
                </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
      function checkpartner(){


    //         $(document).on("change",".uploadFile", function()
    // {
        let partner_name = $('#partner_name').val();
        var file = $('.uploadFile')[0].files[0];
        var inputfile = $('.uploadFile')[0];
        if(partner_name != '' && file != undefined ){
            var file_size = $('.uploadFile')[0].files[0].size;
            var file_name = $('.uploadFile')[0].files[0].name;
            var res = file_name.split(".");
            var file_extension =  res[1].toLowerCase();
            if(file_extension === 'jpg' || file_extension === 'png' || file_extension === 'jpeg')
            {
                if(file_size>3000000) {
                    $("#uploadmsg").text("*File size is greater than 3 MB!");
                    // $(".file_upload1").css("border-color","#FF0000");
                    $('.uploadFile')[0].val('');
                    return false;
                }
                else 
                {
                    var uploadFile = $(this);
                    var files = !!this.files ? this.files : [];
                    if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
         
                        if (/^image/.test( files[0].type)){ // only image file
                            $("#uploadmsg").text('');
                            var reader = new FileReader(); // instance of the FileReader
                            reader.readAsDataURL(files[0]); // read the local file
         
                            reader.onloadend = function(){ // set image data as background of div
                            //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                            uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                        }
                    }else{
                        return false;
                    }
                }
            }
            else
            {
                $("#uploadmsg").text("*Please check your image extension.");
                $('.uploadFile')[0].val('');
                return false;
            }
        }else{
            
            alert("All filed required");
            return false;

        }

        
    // });


      }
  </script>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  foreach ($partnerdata as  $value):  ?>    
                                    <tr>
                                        <td>#</td>
                                        <td><?php echo $value->partner_name ?></td>
                                        <td><img src='<?php echo base_url() ?>assets/upload/<?php echo $value->logo ?>' width="100" height="100" > </td>
                                        <td><a href="<?php echo base_url() ?>index.php/customize/deletepartner?id=<?php echo $value->id  ?>" class="btn btn-danger" >Delete</a></td>
                                    </tr>
                                 <?php  endforeach;  ?>
                                </tbody>
                            </table>             
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
            
$(function() {
    $(document).on("change",".uploadFile", function()
    {
        var inputfile = $('.uploadFile')[0];
        var file_size = $('.uploadFile')[0].files[0].size;
        var file_name = $('.uploadFile')[0].files[0].name;
        var res = file_name.split(".");
        var file_extension =  res[1].toLowerCase();

        if(file_extension === 'jpg' || file_extension === 'png' || file_extension === 'jpeg')
        {
            if(file_size>3000000) {
                $("#uploadmsg").text("*File size is greater than 3 MB!");
                // $(".file_upload1").css("border-color","#FF0000");
                $('.uploadFile')[0].val('');
                return false;
            }
            else 
            {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
     
                    if (/^image/.test( files[0].type)){ // only image file
                        $("#uploadmsg").text('');
                        var reader = new FileReader(); // instance of the FileReader
                        reader.readAsDataURL(files[0]); // read the local file
     
                        reader.onloadend = function(){ // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }
            }
        }
        else
        {
            $("#uploadmsg").text("*Please check your image extension.");
            $('.uploadFile')[0].val('');
        }
    });




});


</script>
