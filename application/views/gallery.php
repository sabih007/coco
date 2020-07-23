<!-- property area -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/gallerystyle.css"> -->

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title" style="color:white;">Gallery</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area single-property content_area_3" style="background-color: #FCFCFC;">&nbsp;
    <div class=" pagewi">
        <div class="clearfix">
            <!-- GALLERY -->
            <section class="section_page-gallery">
                <div class="container">
                    <div class="gallery gallery-3">

                    <div class="gallery-cat text-center wrap" id="wrap">

                            <ul class="list-inline">
                                <li class="filter active"><a href="#" data-filter="*">All</a></li>
                                <?php   foreach($farmhouse_menu as $farms){
                                  echo '<li class="filter"><a href="#" data-filter=".'.str_replace(' ', '', $farms['Name']).'">'.$farms['Name'].'</a></li>';
                              }?>

                            </ul>
                        </div>

                        <div class="gallery-content">
                            <div class="row">
                                <div class="gallery-isotope col-4">
                                    <div class="item-size"></div>
                                    <?php
                                    foreach($farmhouse_menu as $farms){
                                        $dirname = "public/assets/img/farmhouses/".$farms['Name']."/";
                                        $images = glob($dirname."*");
                                        foreach($images as $image){
                                            $checkk = explode('.',$image);
                                            if($checkk[1] =='mp4'){ ?>

                                    <div
                                        class="item-isotope  <?php echo str_replace(' ', '', $farms['Name']); ?>">
                                        <div class="gallery_item mfp-image">
                                            <a href="<?php echo base_url().$image; ?>" class="mfp-image">
                                                <img src="<?php echo base_url().$image; ?>" alt="">
                                                <video width="100%" controls>
                                                    <source src="<?php echo base_url().$image; ?>" type="video/mp4">
                                                    </video>
                                            </a>
                                            <h6 class="text"><?php echo $farms['Description']; ?></h6>
                                        </div>
                                    </div>
                                    <?php     }
                                            else{
                                                ?>
                                    <div
                                        class="item-isotope  <?php echo str_replace(' ', '', $farms['Name']); ?>">
                                        <div class="gallery_item">
                                            <a href="<?php echo base_url().$image; ?>" class="mfp-image">
                                                <img src="<?php echo base_url().$image; ?>" alt="">
                                            </a>
                                            <h6 class="text"><?php echo $farms['Description']; ?></h6>
                                        </div>
                                    </div>
                                    <?php     }

                                        }
                                        }?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
</div>

<?php $this->load->view('includes/footer.php');?>
<script>
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show('');
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
</script>
