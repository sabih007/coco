<?php $role =  ucwords($this->session->userdata('role')); 
if( $role == '3') { 
redirect('User/personal_info_update');   
}?>
<link rel="stylesheet" href="<?=base_url()?>public/plugins/datatables/dataTables.bootstrap.css">
<script>
$(function() {
    $(window).on("load", function() {
        $('#example2').DataTable()
        $('#example1').DataTable({
            "processing": true,
            // "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url("user/datagridfx") ?>",
                "dataSrc": function(data) {
                    for (var i = data.length - 1; i >= 0; i--) {
                        data[i][0] = '<td>' + data[i]['ID'] + '</td>';
                        data[i][1] = '<td>' + data[i]['FirstName'] + '</td>';
                        data[i][2] = '<td>' + data[i]['HFCNIC'] + '</td>';
                        data[i][3] = '<td>' + data[i]['FatherFirstName'] + '</td>';
                        data[i][4] = '<td>' + data[i]['Address1'] + '</td>';
                        data[i][5] = '<td>' + data[i]['MainArea'] + '</td>';
                        data[i][6] = '<td>' + data[i]['URL'] + '</td>';
                        data[i][7] = '<td> <a class="btn btn-sm btn-primary button2" href="<?php echo base_url('profiledashboard?id=')?>'+data[i]['ID']+'"><i class="fa fa-eye"></i></a></td>';
                    }
                    return data;
                }
            },
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });

});
</script>


<div class="content-wrapper">
    <section class="row-body">
        <h1>

            Data Tables
            <small>advanced tables <?php echo  $sessionId = $this->session->userdata('role'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="container">
        <div class="col-xs-12">
            <div class="row">
                <!-- /.box-header -->
                <div class="col-xs-11">
                    <div class="box">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Head Of Family</a></li>
                            <li><a data-toggle="tab" href="#menu1">Add Head Of Family</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="home" class="box-body main tab-pane fade in active table-responsive">
                                <div class="box-header">
                                    <h3 class="box-title">All Family Heads</h3>
                                    <a class="btn btn-primary pull-right"
                                        href="<?php echo base_url()?>personal_info_create"><i class="fa fa-plus"></i>Add
                                        New</a>
                                </div>
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Head Of Family</th>
                                            <th>CNIC</th>
                                            <th>Father Name</th>
                                            <th>Address</th>
                                            <th>Main Area</th>
                                            <th>Status</th>
                                            <th class="text-center" style="color:#000">Actions</th>
                                        </tr>
                                    </thead>
                                    <!--   <tbody>
                                 </tfoot> -->
                                </table>
                            </div>
                            <div id="menu1" class="box-body main tab-pane fade table-responsive">
                                <div class="box-header">
                                    <h3 class="box-title">New Family Heads</h3>
                                </div>
                                <table class="table table-bordered table-striped table-hover" id="example2">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th>Family ID</th>
                                            <th>Head Name</th>
                                            <th>CNIC</th>
                                            <th>Age</th>
                                            <th>Family Head CNIC</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(($childData)) { foreach($childData as $records) { ?>
                                        <tr>
                                            <!-- <td><?php echo $records->HeadID?></td> -->
                                            <td><?php echo $records->FamilyID?></td>
                                            <td><?php echo $records->MemberName ?></td>
                                            <td><?php echo $records->MemberCNIC ?></td>
                                            <td><?php echo $records->MemberDOB?></td>
                                            <td><?php echo $records->HFCNIC?></td>
                                            <td align="center"><a class="btn btn-sm btn-success button1"
                                                    href="<?php echo base_url('User/Family_to_head')?>?id=<?php echo $records->FamilyID ?>"><i
                                                        class="fa fa-plus">Add New Head </i></a>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<script src="<?=base_url()?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>