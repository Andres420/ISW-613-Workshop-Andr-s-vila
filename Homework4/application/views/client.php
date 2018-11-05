<?php
$CI =& get_instance();
if($this->uri->segment(3) == 0){
    $client[0]['id'] = "";
    $client[0]['client_id'] = "";
    $client[0]['name'] = "";
    $client[0]['lastname'] = "";
    $client[0]['cellphone'] = "";

}else{
    $CI->db->where('id', $this->uri->segment(3));
    $client =  $CI->db->get('client')->result_array();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clients</title>
</head>
<body class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Add new client:</h2>
                <form action="<?= base_url('Client/saveClient/')?>" method="POST">
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id" id="Id" value="<?= $client[0]['id'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="ClientId">Identification:</label>
                      <input type="text" class="form-control" name="client_id" id="ClientId" aria-describedby="ClientId" value="<?= $client[0]['client_id'] ?>" required>
                      <small id="ClientId" class="form-text text-muted">Write the client identification</small>
                    </div>
                    <div class="form-group">
                      <label for="ClientName">Client name:</label>
                      <input type="text" class="form-control" name="name" id="ClientName" aria-describedby="ClientName" value="<?= $client[0]['name'] ?>" required>
                      <small id="ClientName" class="form-text text-muted">Write the client name</small>
                    </div>
                    <div class="form-group">
                      <label for="ClientLastname">Client lastname:</label>
                      <input type="text" class="form-control" name="lastname" id="ClientLastname" aria-describedby="ClientLastname" value="<?= $client[0]['lastname'] ?>" required>
                      <small id="ClientLastname" class="form-text text-muted">Write the client lastname</small>
                    </div>
                    <div class="form-group">
                      <label for="ClientCellphone">Client cellphone:</label>
                      <input type="text" class="form-control" name="cellphone" id="ClientCellphone" aria-describedby="ClientCellphone" value="<?= $client[0]['cellphone'] ?>" required>
                      <small id="ClientCellphone" class="form-text text-muted">Write the client cellphone</small>
                    </div>
                    <div class="text-center">
                        <a href="<?= base_url('Client/saveClient/0') ?>" class="btn btn-primary">New client</a>
                        <button type="submit" class="btn btn-success">Save client</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h2>Clients:</h2>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Identification</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Cellphone</th>                            
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $clients = $CI->db->get('client')->result_array();
                            foreach ($clients as $client) {
                                $edit_route = base_url("Client/saveClient/{$client['id']}");
                                $delete_route = base_url("Client/deleteClient?delete={$client['id']}");
                                echo "<tr>
                                        <td>{$client['id']}</td>
                                        <td>{$client['client_id']}</td>
                                        <td>{$client['name']}</td>
                                        <td>{$client['lastname']}</td>
                                        <td>{$client['cellphone']}</td>
                                        <td><a href='{$edit_route}' class='btn btn-info'>edit</a></td>
                                        <td><a href='{$delete_route}' onClick='return confirm(\"Are you sure?\")' class='btn btn-danger'>delete</a></td>
                                     </tr>";
                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>