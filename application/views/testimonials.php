        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title" style="color:white;">Feedback</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class=" recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  

                <div class="col-md-9">

                    <div class="" id="contact1">                        
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>13/25 New Avenue
                                    <br>New Heaven
                                    <br>45Y 73J
                                    <br>England
                                    <br>
                                    <strong>Great Britain</strong>
                                </p> -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <!-- <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+33 555 444 333</strong></p> -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <!-- <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@fakeemail.com</a></strong>   </li>
                                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li> -->
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                    
                       
                        
                        <h2 class="testimonials" style="color:#860a08">Feedback</h2>
                        <hr>
                        <form method="post" action="<?php echo base_url();?>addTestimonials">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="firstname">Full name</label>
                                        <input type="text" class="form-control" id="firstname"  name="fullname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        
                                        <label for="email">Rating</label>
                                <select name="rating" class="form-control"> 
                                    <option value="0" style="display:none;">Ratings</option>
                                    <option value="1">&#9733</option>
                                    <option value="2">&#9733 &#9733</option>
                                    <option value="3">&#9733 &#9733 &#9733</option>
                                    <option value="4">&#9733 &#9733 &#9733 &#9733</option>
                                    <option value="5">&#9733 &#9733 &#9733 &#9733 &#9733</option>
                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Company</label>
                                        <input type="text" class="form-control" id="email" name="company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                
                              <!--   <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div> -->
                                <div class="col-sm-6">
                                    <div class="form-group contact_form_col">
                                        <label for="email">Contact</label>
                                        <input type="text" class="form-control" id="email" name="contact">
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group message_form_col">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control" name="messege"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary add_testimonials"><i class="fa fa-paper-plane"></i> Add Feedback</button>
                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
                <!-- /.col-md-9 -->   

              <div class="col-md-3 ">
            <div class="blog-asside-right">
                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                        <ul>
                            <?php  foreach ($farmhouse_menu as $key => $value) {?>
                            <li>
                                <a href="<?php echo base_url().'farmhouse/'.$value['HouseID'];  ?>">
                                    <div class="col-md-3 blg-thumb p0">
                                        <img
                                            src="<?php echo base_url().'public/assets/img/farmhouses/'.$value['Logo']; ?>">
                                    </div>
                                    <div class="col-md-8 blg-entry">
                                        <h6 class="recomend_farm"><?php echo $value['Name']; ?></h6>
                                        <span class="property-price">Rs:<?php echo $value['Rent']; ?>&nbsp;<i
                                                class="pe-7s-home"></i></span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

         <!-- Footer area-->
         <?php $this->load->view('includes/footer.php');?>