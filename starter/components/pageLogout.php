<?php include 'components/header.php'; 
include 'components/logo.php';
?>
      <h1 class="welcome text-weight" style="width:100%">MyWebPage </h1>
    </div>
  </div>
</div>


    <div class="container">
      <!-- Trigger the modal with a button -->  
      <div class="contact">
        <div class="col-sm-7">
          <div class="col-sm-4">
            <h2 class="text-white "> Contact List : </h2>
          </div>
          <div class="col-sm-5 mt-5">
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
          </div>
        </div>
        <div class="float-right col-sm-4 mt-4">
          <form action="">
            <button type="button" class="btn btn-dark float-righ text-grey" data-toggle="modal" data-target="#myModal">
            <a href="#login"> Add person </a></button>
            <a href="index.php" class=" btn link-dark float-righ text-grey " id="lgt" data-toggle="modal" data-target="#" name="log">Logout</a>
          </form>
        </div>
      </div>  
        
    </div>
    <div class="row cont" style="width:100%">
      <div class=" col-sm-1">
      </div>
      <div class=" col-sm-10 ">
        <div class=" table-responsive">          
          <table class="table myTable table table-primary table-light" style="width:100%" id="myTable">
            <thead style="width:100%">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Adress</th>
                <th scope="col">Phone</th>
                <th scope="col">Groupe</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody style="width:100%">
              <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <th scope="row">'. $row["id"].'</th>
                  <td>'.$row["first_name"].'</td>
                  <td>'.$row["last_name"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["address1"].'</td>
                  <td>'.$row["phone"].'</td>
                  <td>'.$row["group"].'</td>
                  <td><input type="button" class="btn btn-light btnAdd" value="Add" onclick="add()"/>
                  <input type="button" class="btn btn-light btnDelete" value="Delete" onclick="deleteRow(this)"/></td>
                </tr>';
                }
              }
              ?>
  
          </table>

        </div>
      </div>
    </div>
  </div>
<?php include 'add_person.php';



?>

                