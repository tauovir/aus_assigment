
<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/header-para.jpg">

        </div>
    </div>
</section>




    <section class="vc_custom_1488823217485      section">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="video-tutorials textAlignCenter vc_custom_1490004238851 ">
                                <div class="container">
                                    <h3>VIDEO TUTORIALS</h3>
                                    <img src="<?php echo base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                                    <span class="title">Lorem ipsum dolor sit amet consectetur.</span>

                                   
                                    <!-- /.tabbable -->

                                    <!-- Show sm xs -->

                                    <div class="panel-group" id="accordion711973273" role="tablist" aria-multiselectable="true">
                                      

<?php 
$count3=0;
    foreach ($videos_tutorials as $videos_val3) {
    
?>


                                        <div class="panel panel-default">
                                            <div class="panel-heading heading_video" role="tab" id="heading<?= $videos_val3->id;?>">
                                                <div class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion711973273" href="#collapse<?= $videos_val3->id;?>">
                                                        <div class="text-a">
                                                            <div class="link">
                                                                <?= $videos_val3->title;?></div>
                                                            <div class="breadcrumbs">
                                                               <?= $videos_val3->type;?></div>
                                                            <div class="helpful">
                                                                <i class="fa fa-play-circle"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse<?= $videos_val3->id;?>" class="panel-collapse collapse<?php if($count3==0){ ?>  in <?php } ?>" role="tabpanel">
                                                <div class="panel-body">
                                                    <div class="embed-responsive embed-responsive-16by9" id="col-f-<?= $videos_val3->id;?>">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $videos_val3->content;?>?rel=0&controls=0&showinfo=0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <?php $count3++; } ?>                




                                                                             
                                    </div>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Auth -->


