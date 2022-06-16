<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter crud</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">Codiginiter</a>

    </nav>
  
    <div class="container">
        <br />
        <br />
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo site_url('CrudController/create')?>">
       <div class="form-group">
    <label for="firstName" class="form-label">First name</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputfirstName" >
  </div>
  <div class="form-group">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputlastName">
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">BirthDate</label>
    <input type="date" name="birthdate" class="form-control" id="exampleInputbirthdate">
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">Contact Number</label>
    <input type="text" name="contactNo" class="form-control" id="exampleInputContactNo" >
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputAddress" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
      </div>
    
    </div>
  </div>
</div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birthdate</th>
      <th scope="col">ContactNo</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->firstName; ?></td>
                <td><?php echo $row->lastName; ?></td>
                <td><?php echo $row->birthdate; ?></td>
                <td><?php echo $row->contactNo; ?></td>
                <td><?php echo $row->address; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
</table>
    </div>
    
  </body>
</html>
