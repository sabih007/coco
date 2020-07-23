<?php
                                        foreach ($farmhouse_data as $farm) {
                                            foreach ($get_all_flashdeals as $fd) :
                                                if ($fd['HouseID'] == $farm['HouseID']) :
                                        ?>
                                                       <option value="0"style="display: none"> Booking </option>
                                                    <option value="<?php echo $farm['Name']; ?>"><?php echo $farm['Name']; ?></option>
                                               
                                        <?php
                                                endif;
                                            endforeach;
                                        }
                                        ?>