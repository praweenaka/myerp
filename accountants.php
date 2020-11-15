 
<!-- Main content -->

<script src="https://unpkg.com/vue"></script>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Accountants Master</h3>
            <h4 style="float: right;height: 3px;"><b id="time"></b></h4>
        </div>
        <form method='post' action='' enctype='multipart/form-data'>
            <div class="box-body">
                <div class="form-group">
                    <a onclick="new_inv();" class="btn btn-default">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>
                    <a onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Save
                    </a>
                    <a onclick="NewWindow('search_gin_multi.php', 'mywin', '800', '700', 'yes', 'center');
                    return false" class="btn btn-default">
                    <span class="fa fa-search"></span> &nbsp; Find
                </a>

                </div>
                <input type="hidden" id="uniq" class="form-control">

                <div id="msg_box"  class="span12 text-center"  >  </div>

                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">Accountants No</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Accountants No" disabled="" id="accno" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Name</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Name"   id="name" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Salutation</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Salutation"  id="salutation" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">First Name</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="First Name"   id="fname" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Last Name</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Last Name"   id="lname" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Address</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Address"  id="address" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">Out No</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Out No"   id="outno" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Nic No</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Nic No"   id="nic" class="form-control">
                    </div>
                    <label class="col-md-2" for="txt_usernm">Contract signed</label>
                    <div class="col-sm-2">
                        <input type="file"   id="contract" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">Position</label>
                    <div class="col-sm-2">
                       <select id="possition" class="form-control input-sm">
                        <option value="Suppervisor">Suppervisor</option>
                        <option value="Suppervisor 1">Suppervisor 1</option>
                    </select> 
                </div> 


                <div id="beTable" >
                    <div id="getTable" class="row">
                        <div class="col-md-8">
                            <table id="myTable" class="table table-bordered" >
                                <thead>
                                    <tr>
                                        <th style="width: 20%;" contenteditable="false">Company Name</th>
                                        <th style="width: 20%;" contenteditable="false">Allowcation</th>
                                        <th style="width: 25%;" contenteditable="false">Access </th>
                                        <th style="width: 10%;" onclick="addRow();" >+</th>
                                    </tr>
                                </thead>


                            </table>
                        </div>

                    </div>





                </div>

                <br><br><br><br><br>    




            </div>

        </div>

    </form>
</div>


</section>



<script src="js/accountanst.js" ></script> 
<script>new_inv();</script>




