<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><strong>Add Vat and Local Charges</strong></a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><strong>View VAt and Local Charges</strong></a>
   
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="d-flex justify-content-center p-3 bd-highlight align-items-end bg-white">
     <div>
        <div class="col-md-12 ">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Charges Name</label>
              <input type="text" class="form-control" id="charges">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Amount</label>
              <input type="text" class="form-control" id="amount">
            </div>
          </div>
          <div class="form-row justify-content-end">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submit">Submit</button>
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
        <button class="btn btn-success btn-block" data-dismiss="modal" id="vatandlocal_taxes">OK</button>
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
     include '../../../database/config.php';
     $sql = "SELECT * FROM vatlocalcharge WHERE status!='5'";




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
              echo "<th>FCH Community Charges</th>";
              echo "<th>Amount</th>";
              echo "<th>Status</th>";
               echo "<th>Action</th>";
            echo "</tr>";
           echo "</thead>";

          
             while($row = mysqli_fetch_array($result)){
              echo "<tr class='winner__table'>";
                  echo "<td>" . $row['idvatLocalCharge'] . "</td>";
                  echo "<td>" . $row['vatLocalName'] . "</td>";
                  echo "<td>" . $row['amount'] . "</td>";
                  echo "<td onload='fromChange() id='f_Change'>" . $row['status'] . "</td>";
                  echo "<td>
                  <button type='button' class='btn btn-info btn-sm data-toggle='tooltip' title='Activate' id='toChange'data-toggle='modal' data-target='#activation'><i class='fas fa-check-square'></i></button>
                  <button type='button' class='btn btn-warning btn-sm' title='Edit'><i class='far fa-edit' data-toggle='modal' data-target='#edit'></i></button>
                  <button type='button' class='btn btn-danger btn-sm' title='Delete' data-toggle='modal' data-target='#delete'><i class='fas fa-trash'></i></button>
                  </td>";
                 
            echo "</tr>";
          }
        
          echo "</table>";
        echo "</div>";
      }


    }
              
  ?>

   
      
 <!-- Modal HTML -->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
                    <label for="loginAS">Log in As</label>
                      <input class="form-control "id="loginAs" name="loginAs" type="text" placeholder="Enter Login As">
                  </div>
                   <div class="form-group">
                    <label for="userName">User Name</label>
                      <input class="form-control "id="userName" name="userName" type="text" placeholder="Irshad">
                  </div>
                   <div class="form-group">
                    <label for="password">Password</label>
                      <input class="form-control "id="password" name="password" type="text" placeholder="Enter Password">
                  </div>
                   </div>
                    <div class="modal-footer ">
                    <button id="modelformbuttonclick" type="submit" name="editFormButton"class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                  </div>
                 </div>
                </form> 
        
        <!-- /.modal-content --> 
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
                  <select name="actDeact" class="form-control">
                    <option value=1>Activate</option>
                    <option value=0>Deactivate</option>
                  </select>
               </div>
               <button type="submit" name="activateDeactivate" class="btn btn-success btn-lg" ><span class="glyphicon glyphicon-ok-sign"></span>Submit</button>     
             </form>
             </div>
            
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
</div>
<script src="admin.js"></script>