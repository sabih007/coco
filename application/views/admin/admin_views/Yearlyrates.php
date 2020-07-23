<div class="nest">
    <div class="title-alt">
        <h6>Booked List</h6>
        <div class="titleClose">
        </div>
    </div>
    <div class="body-nest">
        <div class="">
            <div class="panel-body">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="select-filter">Rate Slots</th>
                            <th class="select-filter">Curr Month</th>
                            <th class="select-filter">Package Name</th>
                            <th class="select-filter">Day Slot</th>
                            <th class="select-filter">Discount</th>
                            <th class="select-filter">WeekDays</th>
                            <th>Rates</th>
                            <th>TimeSlot</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Rate Slots</th>
                            <th>Curr Month</th>
                            <th>Package Name</th>
                            <th>Day Slot</th>
                            <th>Discount</th>
                            <th>WeekDays</th>
                            <th>Rates</th>
                            <th>TimeSlot</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (!empty($yearlyrates)) {
                            foreach ($yearlyrates as $record) {
                                ?>
                                <tr>
                                    <td><?php echo $record['SlotName'] ?></td>
                                    <td><?php echo $record['SlotPeriod'] ?></td>
                                    <td><?php echo $record['shortname'] ?></td>
                                    <td><?php echo $record['Slot'] ?></td>
                                    <td><?php echo $record['Discount'] ?></td>
                                    <td><?php echo $record['WeekDays'] ?></td>
                                    <td><?php echo $record['Rates'] ?></td>
                                    <td><?php echo $record['TimeSlot'] ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#exampleModal1" data-id="<?php echo $record['YID'] ?>" data-slotname="<?php echo $record['SlotName'] ?>" data-cmonth="<?php echo $record['SlotPeriod'] ?>" data-shortname="<?php echo $record['shortname'] ?>" data-slot="<?php echo $record['Slot'] ?>" data-discount="<?php echo $record['Discount'] ?>" data-weekdays="<?php echo $record['WeekDays'] ?>" data-rates="<?php echo $record['Rates'] ?>" data-timeslot="<?php echo $record['TimeSlot'] ?>"><i class="btn btn-sm round btn-success fa fa-edit"></i></a>
                                        <a href="<?php echo base_url('YearlyRates_delete/') . $record['YID']; ?>"><i class="btn btn-sm round btn-danger  icon icon-trash"></i></a>
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title col-sm-8" id="exampleModalLabel">Update Yearly Rates</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="YearlyRates_update" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="select-filter">Rate Slots</th>
                                        <th class="select-filter">Curr Month</th>
                                        <th class="select-filter">Package Name</th>
                                        <th class="select-filter">Day Slot</th>
                                        <th class="select-filter">Discount</th>
                                        <th class="select-filter">WeekDays</th>
                                        <th>Rates</th>
                                        <th>TimeSlot</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Rate Slots</th>
                                        <th>Curr Month</th>
                                        <th>Package Name</th>
                                        <th>Day Slot</th>
                                        <th>Discount</th>
                                        <th>WeekDays</th>
                                        <th>Rates</th>
                                        <th>TimeSlot</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td id="SlotName"></td>
                                        <td id="CurrMonth"></td>
                                        <td id="shortname"></td>
                                        <td id="Slot"></td>
                                        <td id="Discount"></td>
                                        <td id="WeekDays"></td>
                                        <td>
                                            <input type="text" class="form-control" name="ID" id="ID" style="display:none;">
                                            <input type="text" class="form-control" name="Rates" id="Rates" placeholder="Rates">
                                        </td>
                                        <td id="TimeSlot"></td>
                                    </tr>
                                </tbody>
                            </table>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            initComplete: function() {
                this.api().columns('.select-filter').every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var vals = $('option:selected', this).map(function(index, element) {
                                return $.fn.dataTable.util.escapeRegex($(element).val());
                            }).toArray().join('|');
                            column
                                .search(vals.length > 0 ? '^(' + vals + ')$' : '', true, false)
                                .draw();
                        });
                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });
        // modal pending
        $('#exampleModal1').on('show.bs.modal', function(event) {
            // alert('ib');
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id')
            var slotname = button.data('slotname')
            var cmonth = button.data('cmonth')
            var shortname = button.data('shortname')
            var slot = button.data('slot')
            var discount = button.data('discount')
            var weekdays = button.data('weekdays')
            var rates = button.data('rates')
            var timeslot = button.data('timeslot')
            // alert(timeslot);
            var modal = $(this)
            // modal.find('.modal-title').text('Update Pending invoice # ' + bookingperson)
            modal.find('.modal-body #ID').val(id)
            modal.find('.modal-body #SlotName').text(slotname)
            modal.find('.modal-body #CurrMonth').text(cmonth)
            modal.find('.modal-body #shortname').text(shortname)
            modal.find('.modal-body #Slot').text(slot)
            modal.find('.modal-body #Discount').text(discount)
            modal.find('.modal-body #WeekDays').text(weekdays)
            modal.find('.modal-body #Rates').val(rates)
            modal.find('.modal-body #TimeSlot').text(timeslot)
        })
        // ----end----///
    });
</script>