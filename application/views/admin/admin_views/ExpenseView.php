  <style type="text/css">
      table.dataTable thead>tr>th.sorting {
          padding-right: 0px;
      }

      a {
          text-decoration: none;
          color: white;
      }
  </style>
  <div class="row">
      <div class="nest">
          <div class="title-alt">
              <h6>Expense List</h6>
              <div class="titleClose">
                  <button type="button" class="  btn btn-success">
                      <a href="<?php echo base_url(); ?>Add_New_Expenses">Add Expense</a></button>
              </div>
          </div>
          <div class="body-nest">
              <table  id="example" class="table table-striped table-bordered">
                  <thead class="thead ">
                      <tr>
                          <th>Expense Type</th>
                          <th>Expense Name</th>
                          <th>Expense Amount</th>
                          <th class="text-center">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        if (!empty($expensesRecords)) {
                            foreach ($expensesRecords as $record) {
                                ?>
                              <tr>
                                  <td><?php echo $record->ExpenseType ?></td>
                                  <td><?php echo $record->ExpenseName ?></td>
                                  <td>Rs: <?php echo $record->ExpenseAmount ?> </td>

                                  <td class="text-center">
                                      <a class="btn btn-sm btn-info" href="#" data-userid="<?php echo $record->ID; ?>" title="Edit_deals"><i class="fa fa-pencil""></i></a>
                            <a class=" btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->ID; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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
  </div>