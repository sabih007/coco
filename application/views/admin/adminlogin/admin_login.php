<div class="register-area" style="background-color: rgb(249, 249, 249);margin-top: 70px;" >
    

<?php
        $this->load->helper('form');
            $error = $this->session->flashdata('error');
                if($error){
    ?>
    <div class="alert alert-danger alert-dismissable" style="width: 330px;text-align: center;margin-left: 37%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <?php echo $error; ?>
    </div>
    <?php }
                                    $success = $this->session->flashdata('success');
                                    if($success)
                                    {
                                        ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $success; ?>
    </div>
    <?php } ?>



    
    <div class="container" style="margin-top: 40px;">
        
        

        <div class="col-md-6" style="margin:0 auto !important; float:none !important;">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2>
                    <form class="form-auth-small"  action="<?php echo base_url(); ?>adminloginme" method="post">
                        <div class="form-group has-feedback">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" class="form-control" name="email" id="signin-email" placeholder="Email"
                                required />
                        </div>
                        <div class="form-group has-feedback">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="hidden" class="form-control IPDATA" name="IPDATA" id="IPDATA" />
                            <input type="password" class="form-control" id="signin-password"   
                                 name="password" required />
                            <input type="hidden" class="form-control" name="loginredirect" value="3" />
                        </div>

                        <div class="form-group has-feedback">
                         
                           <select name="role" class="form-control">
                            <?php foreach ($role as $key => $value) {?>
                                <option value=" <?php echo $value['roleId'] ?> "> <?php echo $value['role'] ?> </option>
                            <?php } ?>
                               
                           </select>
                      
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>
                    </form>
                    <br>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->

<!-- Footer area-->
<div class="footer-area">
    <div class=" footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Contact us </h4>
                        <div class="footer-title-line"></div>

                        <img src="#" alt="" class="wow pulse" data-wow-delay="1s">
                        <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> 8-D, Block 6, P.E.C.H.S.,
                                Hotel Faran's Street Nursarry
                                Karachi - 75400 Pakistan.</li>
                            <li><i class="pe-7s-mail strong"> </i> info@cocofarmhouse.com</li>
                            <li><i class="pe-7s-call strong"> </i> Sale Person: 0315-7426421/2 / 3
                         
                        </ul>
                    </div>
                </div>
                  
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
         <p>If you are planning and looking for best farm houses for picnic & parties, we are offering an
                            excellent collection of the finest farm houses at very competitive prices.</p>

                                <form>
                                    <div class="input-group">
                                        <!-- <input class="form-control" type="text" placeholder="E-mail ... "> -->
                                        <span class="input-group-btn">
                                            <!-- <button class="btn btn-primary subscribe" type="button"><i class="fa fa-paper-plane pe-2x"></i></button> -->
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-youtube"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <!-- <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li> -->
                                    </ul> 
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <span> (C) <a href="http://www.cocofarmhouse.com">COCO Farmhouse</a> , All rights reserved 2019 |
                        Developed by <a href="http://www.core2plus.com">Core 2 Plus</a>
                    </span>
                <!-- </div>
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
<script src="<?php echo base_url(); ?>public/admin/assets/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/wow.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/price-range.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/admin/assets/js/lightslider.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/assets/js/wizard.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
<!-- <script src="<?php echo base_url(); ?>public/assets/js/gmaps.js"></script>        
<script src="<?php echo base_url(); ?>public/assets/js/gmaps.init.js"></script> -->
<script src="<?php echo base_url(); ?>public/admin/assets/js/maincoco.js"></script>




<?php if ($this->uri->segment(1) == 'Gallery' || $this->uri->segment(1) == 'Gallery#') {
    ?>
    <!-- gallery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/admin/assets/js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/admin/assets/js/lib/jquery.magnific-popup.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/admin/assets/js/lib/scripts.js"></script>
    <!-- gallery -->

<?php } ?>
 
</body>

</html>