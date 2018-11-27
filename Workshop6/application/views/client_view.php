<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Client
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Id Card</th>
                        <th>Client Name</th>
                        <th>Client Lastname</th>
                        <th>Cellphone</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>
 
        <!-- MODAL ADD -->
            <form>
                <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Client</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Client Id</label>
                                        <div class="col-md-10">
                                        <input type="text" name="id_card" id="id_card" class="form-control" placeholder="Client Id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Client Name</label>
                                        <div class="col-md-10">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Client Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Lastname</label>
                                        <div class="col-md-10">
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Client Lastname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Cellphone</label>
                                        <div class="col-md-10">
                                        <input type="text" name="cellphone" id="cellphone" class="form-control" placeholder="Cellphone">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Id</label>
                            <div class="col-md-10">
                              <input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="Id" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Client Id</label>
                            <div class="col-md-10">
                              <input type="text" name="client_id_edit" id="client_id_edit" class="form-control" placeholder="Client Id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Client Name</label>
                            <div class="col-md-10">
                              <input type="text" name="client_name_edit" id="client_name_edit" class="form-control" placeholder="Client Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Client Lastname</label>
                            <div class="col-md-10">
                              <input type="text" name="client_lastname_edit" id="client_lastname_edit" class="form-control" placeholder="Client Lastname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Cellphone</label>
                            <div class="col-md-10">
                              <input type="text" name="cellphone_edit" id="cellphone_edit" class="form-control" placeholder="Cellphone">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
 
        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="client_id_delete" id="client_id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        show_client(); //call function show all client
          
        //function show all client
        function show_client(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('client/client_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].id_card+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].lastname+'</td>'+
                                '<td>'+data[i].cellphone+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-id_card="'+data[i].id_card+'" data-name="'+data[i].name+'" data-lastname="'+data[i].lastname+'" data-cellphone="'+data[i].cellphone+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save client
        $('#btn_save').on('click',function(){
            var id_card = $('#id_card').val();
            var name = $('#name').val();
            var lastname = $('#lastname').val();
            var cellphone = $('#cellphone').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('client/save')?>",
                dataType : "JSON",
                data : {id_card:id_card, name:name, lastname:lastname, cellphone:cellphone},
                success: function(data){
                    $('[name="id_card"]').val("");
                    $('[name="name"]').val("");
                    $('[name="lastname"]').val("");
                    $('[name="cellphone"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_client();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var id_card = $(this).data('id_card');
            var name = $(this).data('name');
            var lastname = $(this).data('lastname');
            var cellphone = $(this).data('cellphone');
             
            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="client_id_edit"]').val(id_card);
            $('[name="client_name_edit"]').val(name);
            $('[name="client_lastname_edit"]').val(lastname);
            $('[name="cellphone_edit"]').val(cellphone);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var id_card = $('#id_edit').val();
            var name = $('#client_name_edit').val();
            var lastname = $('#client_lastname_edit').val();
            var cellphone = $('#cellphone_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('client/update')?>",
                dataType : "JSON",
                data : {id:id, id_card:id_card, name:name, lastname:lastname, cellphone:cellphone},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="client_id_edit"]').val("");
                    $('[name="client_name_edit"]').val("");
                    $('[name="client_lastname_edit"]').val("");
                    $('[name="cellphone_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_client();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_Delete').modal('show');
            $('[name="client_id_delete"]').val(id);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var id = $('#client_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('client/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="client_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_client();
                }
            });
            return false;
        });
 
    });
 
</script>
</body>
</html>