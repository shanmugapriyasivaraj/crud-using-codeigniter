<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
        <div class="form-group">
    <label for="firstName" class="form-label">First name</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputfirstName" value="<?php echo $row->firstName;?>">
  </div>
  <div class="form-group">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputlastName" value="<?php echo $row->lastName;?>">
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">BirthDate</label>
    <input type="date" name="birthdate" class="form-control" id="exampleInputbirthdate" value="<?php echo $row->birthdate;?>">
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">Contact Number</label>
    <input type="text" name="contactNo" class="form-control" id="exampleInputContactNumber" value="<?php echo $row->contactNo;?>">
  </div>
  <div class="form-group">
    <label for="firstName" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputAddress" value="<?php echo $row->address;?>">
  </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>