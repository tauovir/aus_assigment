<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/wp-content/header-dash.jpg">

        </div>
    </div>
</section>

<style type="text/css">
    .error {
        float: right;
    }

    #bbpress-forums #bbp-your-profile fieldset label[for] {
    float: left;
    width: 100% !important;
    padding: 5px 20px 5px 0;
    text-align: right;
    cursor: pointer;
}


</style>

<section>
    <div class="search2 knowledge">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="breadcrumbalign">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url();?>" title="Home">Home</a></li><i class="fa fa-angle-right"></i>
                                    <li><a href="javascript:void();" title="Offers">Offers</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <form class="header-search-form" role="search" method="get" action="<?= base_url();?>pages/search">
                                <input class="form-control" name="s" placeholder="Search Knowledge Base..." type="text">
                                <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="labels" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            


<?php 
$count=0;
foreach ($allcuponcode->result() as $allcodslist) {
 
?>




            <div class="col-sm-6 col-md-3">
                <div class="dl">
                    <div class="brand">
                        <h2>
                    <?= $allcodslist->offer_title;?>
                </h2>
                    </div>
                    <div class="discount alizarin<?= $count;?>">
                        <?= $allcodslist->offinpercent;?>%
                        <div class="type">
                            off
                        </div>
                    </div>
                    <div class="descr">
                        <?= word_limiter($allcodslist->content,10);?>
                    </div>
                    <div class="ends">
                        <small>
                    * Conditions and restrictions apply.
                </small>
                    </div>
                    <div class="coupon midnight-blue">
                        <a data-toggle="collapse" href="#code-<?= $count;?>" onclick="getthismodal('<?= $allcodslist->id;?>');" class="open-code">Get a code</a>
                        <div id="code-<?= $count;?>" class="collapse code">
                            <?= $allcodslist->coupon_code;?>
                        </div>
                    </div>
                </div>
            </div>
<style type="text/css">
    .alizarin<?= $count;?> {
    background: <?= $allcodslist->color;?>;
}

.dl .discount.alizarin<?= $count;?>:after {
    border-top: 20px solid <?= $allcodslist->color;?>;
}
</style>
<?php $count++; } ?>

            
          




    
        </div>
    </div>
</section>

<script type="text/javascript">
    function getthismodal(arg) {
        window.open("<?= base_url();?>pages/offe_details/"+arg, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=800,height=800");
    }
</script>
<style type="text/css">
     
    .amethyst {
        background: #9b59b6;
    }
    
    .emerald {
        background: #2ecc71;
    }
    
    .midnight-blue {
        background: #2c3e50;
    }
    
    .peter-river {
        background: #3498db;
    }
    
    .dl {
        background: #f0f0f0;
        padding: 30px 0;
        border-radius: 20px;
        position: relative;
    }
    
    .dl:before {
        content: " ";
        height: 20px;
        width: 20px;
        background: #ddd;
        border-radius: 20px;
        position: absolute;
        left: 50%;
        top: 20px;
        margin-left: -10px;
    }
    
    .dl .brand {
        text-transform: uppercase;
        letter-spacing: 3px;
        padding: 10px 15px;
        margin-top: 10px;
        text-align: center;
        min-height: 100px;
    }
    
    .dl .discount {
        min-height: 50px;
        position: relative;
        font-size: 51px;
        line-height: 76px;
        text-align: center;
        font-weight: bold;
        padding: 20px 15px 0;
        color: #f1c40f;
    }
    
    .dl .discount:after {
        content: " ";
        border-right: 20px solid transparent;
        border-left: 20px solid transparent;
        position: absolute;
        bottom: -20px;
        left: 20%;
    }
    
    
    .dl .discount.peter-river:after {
        border-top: 20px solid #3498db;
    }
    
    .dl .discount.emerald:after {
        border-top: 20px solid #2ecc71;
    }
    
    .dl .discount.amethyst:after {
        border-top: 20px solid #9b59b6;
    }
    
    .dl .discount .type {
        font-size: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-top: -30px;
    }
    
    .dl .descr {
        color: #999;
        margin-top: 10px;
        padding: 20px 15px;
    }
    
    .dl .ends {
        padding: 0 15px;
        color: #f1c40f;
        margin-bottom: 10px;
    }
    
    .dl .coupon {
        min-height: 50px;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 18px;
        padding: 20px 15px;
    }
    
    .dl .coupon a.open-code {
        color: #16a085;
    }
    
    .dl .coupon .code {
        letter-spacing: 1px;
        border-radius: 4px;
        margin-top: 10px;
        padding: 10px 15px;
        color: #f1c40f;
        background: #f0f0f0;
    }
</style>