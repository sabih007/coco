<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title" style="color:white;">Contact page </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
<div class="contact_background">

<section class="contact_address">

    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 upper_coloumn " >
        <i class="fa fa-map-marker fa-4x text-center" data-toggle="tooltip" data-placement="right" title="Location" style="    position: relative;
    left: 37%;
    color: #860a08;"></i> </h3>
        <hr>
        <p class="farm_address">8-D, Block 6, P.E.C.H.S.,
            <br>Hotel Faran's Street Nursery <br>
            <strong>Karachi - 75400 Pakistan.</strong>
        </p>
    </div>

    <!-- /.col-sm-4 -->
      <div class="col-lg-4 col-md-4 col-sm-4 upper_coloumn " >
      <i class="fa fa-envelope fa-4x text-center " data-toggle="tooltip" data-placement="right" title="Mail Us" style="    position: relative;
    left: 37%; 
    color: #860a08;"></i>
        <hr>
        <p class="text-muted farm_address">Please feel free to write an email to us <strong><a href="mailto:"></br>info@cocofarmhouse.com</a></strong> </li>
        </p>


    </div>
    <!-- /.col-sm-4 -->

    <div class="col-lg-4 col-md-4 col-sm-4 upper_coloumn " >
      <i class="fa fa-phone-square fa-4x text-center" data-toggle="tooltip" data-placement="right" title="Contact Us" style="position: relative;
    left: 37%;
    color: #860a08;"></i>
        <hr>
        <p class="farm_address"><strong><span class="phone_numbers">Sale Person</span> &nbsp; &nbsp; &nbsp; &nbsp;: 0315-7426421/ 2 / 3 <span class="">, 0331-7426421</span></br>
               <span class="phone_numbers"> Incharge COCO</span class="phone_numbers"> &nbsp;: 0315-7426425  </br><span class="phone_numbers">Incharge MAPLE</span> : 0323-7426423 </br><span class="phone_numbers">SUPERVISION</span><span class="supervisor">: 0332-7426424</strong></p>
    </div>
      </div>
    </section>
    <!-- /.col-sm-4 -->

  </div>
</div>
</div>
</div>
</div>
<!-- /.row -->
</div>
</div>


<div class=" recent-property padding-top-40" style="background-color: #FFF;">
    <div class="container">

        <div class="col-md-9">

            <div class="" id="contact1">
                <div class="row">
                <h2 class="dae" style="color:#860a08;text-align:center;">Contact Form</span></h2>
                <form method="post" action="<?php echo base_url();?>contactform">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="0300-*******" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="abc@gmail.com" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select name="subject" class="form-control">
                                    <option value="Booking">Booking</option>
                                    <option value="Inquiry">Inquiry</option>
                                    <option value="Complain">Complain</option>
                                    <option value="Suggestion">Suggestion</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="farm">Farm House</label>
                                <select name="farmhouse" class="form-control">
                                    <?php foreach ($farmhouse_menu as $farm) { ?>
                                        <option value="<?php echo $farm['Name']; ?>"><?php echo $farm['Name']; ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary add_testimonials"><i class="fa fa-envelope-o"></i> Send
                                message</button>
                        </div>
                    </div>
                    <!-- /.row -->
                </form>
</div>
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
                            <?php foreach ($farmhouse_all_data as $key => $value) { ?>
                                <li>
                                    <a href="<?php echo base_url() . 'farmhouse/' . $value['HouseID'];  ?>">
                                        <div class="col-md-3 blg-thumb p0">
                                            <img src="<?php echo base_url() . 'public/assets/img/farmhouses/' . $value['Logo']; ?>">
                                        </div>
                                        <div class="col-md-8 blg-entry">
                                            <h6 class="recomend_farm"><?php echo $value['Name']; ?></h6>
                                            <span class="property-price">Rs:<?php echo $value['Rent']; ?>&nbsp;<i class="pe-7s-home"></i></span>
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
<div style="width: 100%"><iframe width="100%" height="500"
src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;coord=24.972214,67.256374
&amp;q=DAMBA%20Goth%D8%8C%20Super%20Hwy%20Link%2C%20Malir%20Cantonment%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2075400+(Coco%20farmhouse)
&amp;ie=UTF8&amp;t=k&amp;z=13&amp;iwloc=B&amp;output=embed"
frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
<a href="https://www.maps.ie/coordinates.html">find my location</a></iframe></div><br />
            <?php $this->load->view('includes/footer.php');?>
