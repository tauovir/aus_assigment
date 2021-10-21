  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url();?>assets/setting/<?= $about_img->image;?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Features</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Our Features</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Faq With Left Sidebar 
    ============================================= -->
    <div class="faq-area left-sidebar course-details-area default-padding">
         <div class="about-area default-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="our-features pb-60">

<?php foreach($highlighted_d as $homehigdata){ ?>

                                            <div class="col-md-6 col-sm-4">
                                                <div class="item mariner">
                                                    <div class="icon">
                                                   <a href="<?= $homehigdata->image_category;?>"> <img src="<?php echo base_url();?>assets/setting/<?php echo $homehigdata->image; ?>" class="icons" title="<?= $homehigdata->title;?>" alt="<?= $homehigdata->title;?>">
                                                   </a>
                                                    </div>
                                                    <div class="info">
                                                        <a href="<?= $homehigdata->image_category;?>"><h4 title="<?= $homehigdata->title;?>"><?= $homehigdata->title;?></h4></a>
                                                        <?= $homehigdata->content;?>
                                                    </div>
                                                </div>
                                            </div>
<?php } ?>
                                            
                                     
                                            
                                    
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
    </div>
    <!-- End Faq -->