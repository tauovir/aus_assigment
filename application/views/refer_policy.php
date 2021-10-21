<section class="section banner-form">

    <div class="vc_column-inner ">

        <div class="wpb_wrapper">

            <img src="<?php echo base_url();?>assets/wp-content/header-dash.jpg">

        </div>
    </div>
</section>
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
                                        <li><a href="<?= base_url();?>pages/referral" title="Dashboard">Reffral</a></li><i class="fa fa-angle-right"></i>
                                        <li><a href="javascript:void();" title="Dashboard">Reffral Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-5">
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
  <section class="vc_custom_1494269899456      section">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class=" help-desk textAlignCenter  helpdesk_type3">
                            <div id="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                         <?= $about_data->pagecontent;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


	<script type='text/javascript'>
		$(document).ready(function(){

			// Detect pagination click
			$('#pagination').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
				$('html, body').animate({
				        scrollTop: $(".rt1").offset().top
				    }, 1000);
 
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$( ".white-panel" ).remove();
 
				    


				$.ajax({
					url: '<?=base_url()?>index.php/User/loadRecord/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						$('#pagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){


				sno = Number(sno);
				$('#postsList tbody').empty();
				for(index in result){

					var id = result[index].id;
					var title = result[index].author;
					var content = result[index].comment;
					var link = result[index].assid;
					sno+=1;
					var tr = '<article class="white-panel">';
					tr += '<h4>'+ title +'-'+  id;
					tr +='<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"><span class="fa fa-star" aria-hidden="true"></span></button>';
					tr +='<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"><span class="fa fa-star" aria-hidden="true"></span></button>';
					tr +='<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"><span class="fa fa-star" aria-hidden="true"></span></button>';
					tr +='<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"><span class="fa fa-star" aria-hidden="true"></span></button>';
					tr +='<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"><span class="fa fa-star" aria-hidden="true"></span></button>';
					tr +='</h4>';
					tr +='<p class="text-justify">'+ content +'</p>';
					tr +='</article>';

					$('#postsList').append(tr);
					
				}
			}
		});
	</script>
 
