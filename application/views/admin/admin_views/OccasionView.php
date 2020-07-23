  <style type="text/css">
      table.dataTable thead>tr>th.sorting {
          padding-right: 0px;
      }

      a {
          text-decoration: none;
          color: white;
      }
  </style>

  <button style="margin-left: 90%;margin-bottom:7px; width:120px;" type="button" class="btn btn-success">
      <a href="<?php echo base_url(); ?>Add_New_Services">Add New</a></button>
  <div class="body">
      <div class="table-responsive">
          <table class="table table-hover js-basic-example dataTable table-custom mb-0">
              <thead class="thead btn-success  ">
                  <tr>
                      <th>Occasion ID</th>
                      <th>Occasion Name</th>

                      <th class="text-center">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    if (!empty($OccasionnRecords)) {
                        foreach ($OccasionnRecords as $record) {
                            ?>
                          <tr>
                              <td><?php echo $record->ID; ?></td>
                              <td><?php echo $record->Occasion; ?></td>
                              <td class="text-center">



                                  <a class="btn btn-sm btn-info" href="#" data-userid="<?php echo $record['ID']; ?>" title="Edit_deals"><i class="fa fa-pencil"></i></a>

                                  <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record['ID']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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