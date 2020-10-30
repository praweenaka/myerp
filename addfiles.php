 
<!-- Main content -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add Files</h3>
            <h4 style="float: right;height: 3px;"><b id="time"></b></h4>
        </div>
        <form method='post' action='' enctype='multipart/form-data'>
            <div class="box-body">
                <div class="form-group">
                    <a onclick="location.reload();" class="btn btn-default">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>

                </div>
                <div id="msg_box"  class="span12 text-center"  >

                </div>

                <div class="form-group col-sm-8">

                    <!-- <div id="errorBlock" class="help-block"></div> -->
                    <input type="file" name="file[]" id="file" class="file"  data-preview-file-type="text" multiple>
                    <input type='submit' name='submit' value='Upload'>

                </div>  


            </div>


        </form>
    </div>

    <?php 
    if(isset($_POST['submit'])){
 // Count total files
        $countfiles = count($_FILES['file']['name']);
 // Looping all files
        for($i=0;$i<$countfiles;$i++){
         $filename = $_FILES['file']['name'][$i];
   // Upload file
         move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);

     }
 } 
 ?>
</section>

<script src="js/create_user.js"></script>

<script>newent();</script>




