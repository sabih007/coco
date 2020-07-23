<form action="<?php echo ($msg != 'Yes Avilable' ? '' : 'Booking'); ?>" class=" form-inline" method="post">
        <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>
        <div class="form-group ">
            <input type="date" name="ArrivalDate" class="form-control" placeholder="Key word"
                value="<?php echo empty($postdata['ArrivalDate']) ? "" : $postdata['ArrivalDate'];?>" required>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" placeholder="Key word" name="DepartureDate"
                value="<?php echo empty($postdata['DepartureDate']) ? "" : $postdata['DepartureDate'];?>" required>
        </div>
        <div class="form-group">
            <select id="lunchBegins" name="HouseName" class="selectpicker" title="Select your city" required>
                <?php foreach ($farmhouse as  $value) {?>
                <option <?php if ($postdata['HouseName'] == $value['Name']) echo 'selected' ; ?> value="<?php echo $value['Name']; ?>"><?php echo $value['Name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <select id="lunchBegins" name="timeslot" class="selectpicker" title="Select your city" required>
                <option <?php if ($postdata['timeslot'] == "8AM to 5PM" ) echo 'selected' ; ?>
                    value="8AM to 5PM">8AM to 5PM</option>
                <option <?php if ($postdata['timeslot'] == "8PM to 7AM" ) echo 'selected' ; ?>
                    value="8PM to 7AM">8PM to 7AM</option>
                <option <?php if ($postdata['timeslot'] == "21 Hours" ) echo 'selected' ; ?>
                    value="21 Hours">21 Hours</option>
            </select>
        </div>
        <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
        <div style="display: none;" class="search-toggle">
            <div class="search-row">
                <div class="form-group mar-r-20">
                    <label for="price-range">Price range ($):</label>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                        data-slider-step="5" data-slider-value="[0,450]" id="price-range"><br />
                    <b class="pull-left color">2000$</b>
                    <b class="pull-right color">100000$</b>
                </div>
                <!-- End of  -->
                <div class="form-group mar-l-20">
                    <label for="property-geo">Property geo (m2) :</label>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                        data-slider-step="5" data-slider-value="[50,450]" id="property-geo"><br />
                    <b class="pull-left color">40m</b>
                    <b class="pull-right color">12000m</b>
                </div>
                <!-- End of  -->
            </div>
            <div class="search-row">
                <div class="form-group mar-r-20">
                    <label for="price-range">Min baths :</label>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                        data-slider-step="5" data-slider-value="[250,450]" id="min-baths"><br />
                    <b class="pull-left color">1</b>
                    <b class="pull-right color">120</b>
                </div>
                <!-- End of  -->
                <div class="form-group mar-l-20">
                    <label for="property-geo">Min bed :</label>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                        data-slider-step="5" data-slider-value="[250,450]" id="min-bed"><br />
                    <b class="pull-left color">1</b>
                    <b class="pull-right color">120</b>
                </div>
                <!-- End of  -->
            </div>
            <br>
            <div class="search-row">
                <div class="form-group check_farm">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Fire Place(3100)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
                <div class="form-group check_farm">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Dual Sinks(500)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
                <div class="form-group check_farm">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Hurricane Shutters(99)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
            </div>

            <div class="search-row">

                <div class="form-group check_farm">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Swimming Pool(1190)
                        </label>
                    </div>
                </div>
                <!-- End of  -->

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 2 Stories(4600)
                        </label>
                    </div>
                </div>
                <!-- End of  -->

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Emergency Exit(200)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
            </div>

            <div class="search-row">

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Laundry Room(10073)
                        </label>
                    </div>
                </div>
                <!-- End of  -->

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Jog Path(1503)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 26' Ceilings(1200)
                        </label>
                    </div>
                </div>
                <!-- End of  -->
            </div>
        </div>
    </form>