<div class="row">
    <div class="col-sm-12">
        <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-4 text-center">

                    <ul class="list-group">
                        <li class="list-group-item text-left">
                            <span class="entypo-user"></span>&nbsp;&nbsp;Profile</li>
                        <li class="list-group-item text-center">
                            <img src="<?php echo base_url(); ?>public/admin/assets/img/default.jpg" alt=""
                                class="img-circle img-responsive img-profile">
                        </li>
                        <li class="list-group-item text-center">
                            <span class="pull-left">
                                <strong>Ratings</strong>
                            </span>
                            <div class="ratings">

                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-star-o"></span>
                                </a>
                            </div>
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Joined</strong>
                            </span><?php echo $guestprofile[0]['createdDtm']; ?></li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Last Login</strong>
                            </span><?php echo $loginhistory['logindatatime']; ?></li>
                    </ul>

                </div>
                <div class="col-xs-12 col-sm-8 profile-name">
                    <h2><?php echo $guestprofile[0]['name']; ?>
                        <span class="pull-right social-profile">
                            <i class="entypo-facebook-circled"></i> <i class="entypo-twitter-circled"></i> <i
                                class="entypo-linkedin-circled"></i> <i class="entypo-github-circled"></i> <i
                                class="entypo-gplus-circled"></i>
                        </span>
                    </h2>
                    <hr>

                    <dl class="dl-horizontal-profile">
          
                        <dt>Name</dt>
                        <dd><?php echo $guestprofile[0]['name']; ?></dd>
                        <dt>Email</dt>
                        <dd><?php echo($guestprofile[0]['email']); ?></dd>
                        <dt>Mobile No</dt>
                        <dd><?php echo($guestprofile[0]['mobile']); ?></dd>
                        <dt>Authorization</dt>
                        <dd><?php echo($guestprofile[0]['role']); ?></dd>
                         
                    </dl>
                    <hr>
                     
                     
                </div>
            </div>
             
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div style="margin:-20px 15px;" class="nest" id="Blank_PageClose">
                <div class="title-alt">
                    <h6>
                        Edit Profile</h6>
                    <div class="titleClose">
                        <a class="gone" href="#Blank_PageClose">
                            <span class="entypo-cancel"></span>
                        </a>
                    </div>
                    <div class="titleToggle">
                        <a class="nav-toggle-alt" href="#Blank_Page_Content">
                            <span class="entypo-up-open"></span>
                        </a>
                    </div>
                </div>
                <div class="body-nest" id="Blank_Page_Content">
                    <div class="row">
<!--                         <div class="col-md-3">
                            <div class="text-center">
                                <img src="http://placehold.it/150" class="avatar img-circle" alt="avatar">
                                <h6>Upload a different photo...</h6>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse
                                            <input type="file" multiple="">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-9 personal-info">
                            <h3>Personal info</h3>
                            <form class="form-horizontal" action="<?php echo base_url() ?>User/profile_eidt" method="post" role="form">

                                <div class="form-group" hidden>
                                    <label class="col-lg-3 control-label">Full Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="userId" value="<?php echo $guestprofile[0]['userId']; ?>" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Full Name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="name" value="<?php echo $guestprofile[0]['name']; ?>" type="text">
                                    </div>
                                </div>
<!--                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="<?php //echo $guestprofile[0]['LastName']; ?>" type="text">
                                    </div>
                                </div> -->
<!--                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Divination:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="<?php echo $guestprofile[0]['role']; ?>" type="text">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="email" value="<?php echo $guestprofile[0]['email']; ?>" type="text">
                                    </div>
                                </div> 
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="password" type="password">
                                    </div>
                                </div>
<!--                                 <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="" type="password">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="submit">
                                        <span></span>
                                        <input class="btn btn-default" value="Cancel" type="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>