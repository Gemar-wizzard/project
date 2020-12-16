<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><strong>Add Costumer</strong></a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><strong>View Costumer</strong></a>  
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="d-flex justify-content-center p-3 bd-highlight align-items-end bg-white">
     <div>
        <div class="col-md-12 ">
        <form class="login-form" action="#" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstNameCostumer">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastNameCostumer">
            </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
            <label for="meterNumber">Meter Number</label>
            <input type="text" class="form-control" id="meterNumber" placeholder="#1234">
          </div>
          <div class="form-group col-md-6">
            <label for="accountNumber">Account Number</label>
            <input type="number" class="form-control" id="accountNumber" placeholder="#1234">
          </div>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Permanent Address" >
          </div>
          <div class="form-row justify-content-end">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submit" id="registerCostumer" name="submitClient">Submit</button>
          </div>          
        </form>
      </div>
     </div>
    </div>
    <!-- Modal -->
   <div id="submit" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>        
        <h4 class="modal-title w-100">Awesome!</h4> 
      </div>
      <div class="modal-body">
        <p class="text-center">Client Registration has been Confirmed. You can view it to the table.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal" id="registerModal">OK</button>
      </div>
    </div>
  </div>
</div>     
<!-- Modal End-->
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<div class="table-responsive">
  		
  <div>

         
      <?php
     include '../../database/config.php';
     $sql = "SELECT * FROM client WHERE status!='5'";




     if ($result = mysqli_query($connection, $sql)){
       
      echo"<div style='margin-left: 700px;margin-top:20px;''>
              <form class='form-inline'>
                <input class='form-control mr-sm-2' id='registerId' onkeyup='myFunction()'' type='search' placeholder='Search First Name...'' aria-label='Search'>
                <button class='btn btn-outline-secondary my-2 my-sm-0' type='submit'><i class='fas fa-search'></i></button>
             </form>
            </div>";
              
      if(mysqli_num_rows($result) > 0){
        echo "<div class='scroll'>";
          echo "<table class='table table-bordered   table-striped'>";
          echo "<thead class='table__head'>";
            echo "<tr>";
              echo "<th>ID</th>";
              echo "<th>first Name</th>";
              echo "<th>last Nname</th>";
              echo "<th>Account Number</th>";
              echo "<th>Metere Number</th>";
              echo "<th>Address</th>";
              echo "<th>Status</th>";
                echo "<th>Actions</th>";
              echo "</tr>";
              echo "</thead>";
           $num=0;
             while($row = mysqli_fetch_array($result)){
              $num++;
              echo "<tr class='winner__table'>";
                  echo "<td>" . $row['idClient'] . "</td>";
                  echo "<td>" . $row['firstName'] . "</td>";
                  echo "<td>" . $row['lastName'] . "</td>";
                  echo "<td>" . $row['accountNumber'] . "</td>";
                  echo "<td>" . $row['meterNumber'] . "</td>";
                  echo "<td>" . $row['address'] . "</td>";
                  echo "<td>" . $row['status'] . "</td>";
                  echo "<td>

                  <input value='".$row["firstName"]."' id='firstName".$num."' type='hidden'>
                  <input value='".$row["lastName"]."' id='lastName".$num."' type='hidden'>
                  <input value='".$row["accountNumber"]."' id='accountNumber".$num."' type='hidden'>
                  <input value='".$row["meterNumber"]."' id='meterNumber".$num."' type='hidden'>
                  <input value='".$row["address"]."' id='address".$num."' type='hidden'>

                  <button type='button' class='btn btn-info btn-sm data-toggle='tooltip' title='Activate' id='toChange'data-toggle='modal' data-target='#activation' onclick='actDeact(".$row['idClient'].",".$row['status'].")'><i class='fas fa-check-square'></i></button>
                  <button type='submit' class='btn btn-warning btn-sm' title='Edit' data-toggle='modal'data-target='#editModal' onclick='edit(".$row['idClient'].", ".$num.")'><i class='far fa-edit'></i></button>
                  <button type='button' class='btn btn-danger btn-sm' title='Delete' data-toggle='modal' data-target='#delete'><i class='fas fa-trash'></i></button>
                  </td>";
                 
            echo "</tr>";
          }
        
          echo "</table>";
        echo "</div>";
      }


    }
              
  ?>   

  <script src="admin.js"></script>
      
 <!-- Modal HTML -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
              <div class="modal-body">
                <form method="post">
                     <div class="form-group">
                      <input class="form-control "id="id" name="id" type="hidden">
                  </div>
                    <div class="form-group">
                      <label for="fName">First Name</label>
                    <input class="form-control " id="fName" name="fName" type="text" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="lName">Last Name</label>
                      <input class="form-control "id="lName" name="lName" type="text" placeholder="Enter Last Name">
                  </div>
                   <div class="form-group">
                    <label for="loginAS">Meter Number</label>
                      <input class="form-control "id="meterNumberModal" name="meterNumber" type="text" placeholder="Enter Meter Number">
                  </div>
                   <div class="form-group">
                    <label for="userName">Account Number</label>
                      <input class="form-control "id="accountNumberModal" name="account" type="text" placeholder="Enter Account Number">
                  </div>
                   <div class="form-group">
                    <label for="password">Address</label>
                      <input class="form-control "id="addressModal" name="address" type="text" placeholder="Enter Password">
                  </div>
                   </div>
                    <div class="modal-footer ">
                    <button id="updateButtonModal" type="submit" name="editFormButton"class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                  </div>
                 </div>
                </form> 
        
        <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
</div> 

      <!-- /.modal-dialog --> 
</div> 
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">
             
              <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
             
            </div>
            <div class="modal-footer ">

                <form method="post">
                  <input class="form-control "id="idDel" name="idDel" type="hidden">
                  <button type="submit" name="yesDelete" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                </form>
                <button type="submit" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>

     <div class="modal fade" id="activation" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Activate / Deactivate</h4>
            </div>
            
             <div class="modal-body">
              <form method="post">
               <div class="form-group">
                  <input class="form-control "id="idStat" name="id" type="hidden">
            </div>
               <div class="form-group col-md-12">
                  <div id="actDeactValue"></div>
               </div>
               <button type="submit" name="activateDeactivate" class="btn btn-success btn-lg" id="activateDeactivate"><span class="glyphicon glyphicon-ok-sign"></span>OK</button>     
             </form>
             </div>
            
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
</div>
