    <div class="nest">
    <style type="text/css">
        table.dataTable thead>tr>th.sorting {
            padding-right: 0px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
    <div class="title-alt">
        <h6>Booked List</h6>
        <div class="titleClose">
            <button type="button" class="  btn btn-success" data-toggle="modal" data-target="#addtarget">Assign
                Target</button>
        </div>
    </div>   
 
    <div class="body-nest">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered ">
                <thead class="thead">
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Employee Email</th>
                        <th>Target Month</th>
             <!--            <th>Start Data</th>
                        <th>End Date</th> -->
                      <!--   <th>Target Booking</th> -->
                        <th>Target Amount</th>
                        <th>Target Booking  Achieved</th>
                        <th>Target Amount Achieved</th>

                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($EmployeesTarget_data)) {
                        foreach ($EmployeesTarget_data as $record) {
                            ?>
                            <tr>
                                <td><?php echo $record['EmployeeID'] ?></td>
                                <td><?php echo $record['name'] ?></td>
                                <td><?php echo $record['email'] ?></td>
                                <td><?php echo $record['TargetMonth'] ?></td>
<!--                                 <td><?php //echo $record['StartData'] ?></td>
                                <td><?php    //echo $record['EndDate'] ?></td> -->
                               <!--  <td><?php //echo $record['TargetAssign'] ?></td> -->
                                <td><?php echo $record['TargetAmount'] ?></td>
                                <td><?php echo $record['NoOfBooking'] ?></td>
                                <td><?php echo $record['BookedAmount'] ?></td>

                                <td>
                         <!--            <a data-toggle="modal" data-target="#employetarget"
                                     data-id="<?php //echo $record['EmployeeID'] ?>"
                                     data-targetmonth="<?php //echo $record['TargetMonth'] ?>"
                                     data-employeeid="<?php //echo $record['EmployeeID'] ?>"
                                     data-startdate="<?php //echo $record['StartData'] ?>"
                                     data-enddate="<?php //echo $record['EndDate'] ?>"
                                     data-targetassign="<?php //echo $record['TargetAssign'] ?>"
                                     ><i class="btn btn-sm round btn-outline-success fa fa-check"></i></a> -->
                                    <a href="<?php echo base_url() . 'user/EmpTarget_delete/' . $record['id'];  ?>"> <i class="btn btn-sm round btn-danger fa fa-trash-o"></i></a>  
                                     
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="addtarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Add Target Assign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="user/AddEmpTarget" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Employee</label>
                                <select class="form-control" name="EmployeeID" id="EmployeeID">
                                    <option selected disabled>Select Employee</option>
                                    <?php
                                    foreach (array_filter($EmployeeLogins) as $EmployeeLogin) {
                                        if ($EmployeeLogin['roleId'] != '6' && $EmployeeLogin['roleId'] != '1') {
                                            echo  ' <option value="' . $EmployeeLogin['userId'] . '">' . $EmployeeLogin['email'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                             
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Select Month</label>
                                <select class="form-control" name="TargetMonth" id="TargetMonth">
                                    <option value="1">January</option>
                                    <option value="2">Febuary</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                                     
                            
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Target Booking</label>
                                <input type="text" class="form-control" name="TargetAssign" id="TargetAssign" placeholder="Target Assign">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Target Amount</label>
                                <input type="text" class="form-control" name="TargetAmount" id="TargetAmount" placeholder="Target Amount">
                            </div>
                 <!--            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Start Date</label>
                                <input type="text" class="form-control" name="StartData" id="StartData" placeholder="StartData">
                            </div> -->
                     <!--        <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">End Date</label>
                                <input type="text" class="form-control" name="EndDate" id="EndDate" placeholder="EndDate">
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary" id="updatest">Assign Target</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="employetarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Functionarea</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="updatepending" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Employee</label>
                                <select class="form-control" name="EmployeeID" id="EmployeeID">
                                    <option selected disabled>Select Employee</option>
                                    <?php
                                    foreach (array_filter($EmployeeLogins) as $EmployeeLogin) {
                                        if ($EmployeeLogin['roleId'] != '6' && $EmployeeLogin['roleId'] != '1') {
                                            echo  ' <option  value="' . $EmployeeLogin['userId'] . '">' . $EmployeeLogin['email'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Select Month</label>
                                <select class="form-control" name="TargetMonth" id="TargetMonth">
                                    <option value="1">January</option>
                                    <option value="2">Febuary</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="Level_id" class="col-form-label">Target Asssign</label>
                                <input type="text" class="form-control" name="TargetAssign" id="TargetAssign" placeholder="Target Assign">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Level_id" class="col-form-label">Start Date</label>
                                <input type="text" class="form-control" name="StartData" id="StartData" placeholder="StartData">
                            </div>
                            <div class="col-md-6">
                                <label for="Level_id" class="col-form-label">End Date</label>
                                <input type="text" class="form-control" name="EndDate" id="EndDate" placeholder="EndDate">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary" id="updatest">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>