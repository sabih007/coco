<div class="row">
    <!-- <div class="col-md-12"> -->
    <div class="nest">
        <div class="title-alt">
            <h6>Services List</h6>
            <div class="titleClose">
            </div>
        </div>
        <div class="body-nest">
            <div class="row">
                <!-- <div class="col-md-12">
                    <form action="<?php echo base_url() ?>login-history" method="POST" id="searchList">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input id="fromDate" type="date" name="fromDate" value="<?php echo $fromDate; ?>" class="form-control datepicker" placeholder="From Date" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input id="toDate" type="date" name="toDate" value="<?php echo $toDate; ?>" class="form-control datepicker" placeholder="To Date" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input id="searchText" type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control" placeholder="Search Text" />
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary btn-block searchList pull-right"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button class="btn btn-md btn-default btn-block pull-right resetFilters"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Session Data</th>
                                <th>IP Address</th>
                                <th>User Agent</th>
                                <th>Agent Full String</th>
                                <th>Platform</th>
                                <th>Date-Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($userRecords)) {
                                foreach ($userRecords as $record) {
                                    ?>
                                    <tr>
                                        <td><?php echo $record->sessionData ?></td>
                                        <td><?php echo $record->machineIp ?></td>
                                        <td><?php echo $record->userAgent ?></td>
                                        <td><?php echo $record->agentString ?></td>
                                        <td><?php echo $record->platform ?></td>
                                        <td><?php echo $record->createdDtm ?></td>
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
    </div>
</div>