<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title" style="color:white;">About Us</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
        <!-- property area -->
        <div class="content-area recent-property content_area_3 " style="background-color: #FFF;">
            <div class="container">  

                <div class="col-md-6">

                    <!-- <div class="" id="contact1">                        
                        <div class="row">
                            <div class="col-sm-4"> -->
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
                                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                </ul> -->
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row --> 
                       
                        <hr>
                        <!-- <h2>Contact form</h2> -->
                      
                        <div class="content-area blog-page content_area_2">
    <div class="container">
        <div class="row">
            <div class="blog-lst col-md-9 p0">
                <section id="id-100" class="post single">
                    <div class="post-header single">
                        <div class="image wow fadeInLeft animated">
                            <img src="<?php echo base_url()?>public/assets/img/about.jpg" class="img-responsive"
                                alt="Example blog post alt">
                        </div>
                    </div>
                    <div id="post-content" class="post-body single wow fadeInLeft animated">
                        <p class="text-justify">
                            <strong style="color:black;">“Maple Resorts and Coco Farmhouse“ a project of Sipka, existing entertaining around
                                3500+ events and parties since 2009.</strong> <br>
                            <span style="color:black;">This accumulated land of 14 acres is owned and controlled by<span>
                            <code><b>Zahid Shah Mir Khan</b>,</code><span style="color:black">an entrepreneur graduated from Philippine Christian
                            University, Philippines. with master in business administration degree who also owns<span>
                            <code>Sipka Manufacturing private ltd, </code> <span style="color:black">A company who deals in bulletproof jackets,
                            walkie talkies and other major security products since last 50 years. Along with it, Mr.
                            Zahid is also politically active being Joint Secretary Sindh From PMLN.Donec non enim in
                            turpis pulvinar facilisis. Ut felis.<span></p>
                    </div>
                </section>
                <p onclick="printDiv('print')"><!-- print --></p>
                <div id="print" class="pbox">
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 text-left title">
                            <img src="<?php base_url('');?>public/assets/img/invoice.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-asside-right col-md-3">
            <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                        <ul>
                            <?php  foreach ($farmhouse_menu as $key => $value) {?>
                            <li>
                                <a href="<?php echo base_url().'Farm/'.$value['HouseID'];  ?>">
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
       
<?php $this->load->view('includes/footer.php');?>