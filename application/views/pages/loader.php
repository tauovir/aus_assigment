<script type="text/javascript">
	document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
      },1000);
  }
}
</script>
<style type="text/css">
	#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
background:url("<?php echo base_url(); ?>assets/preloaders.gif") no-repeat center center #fff
}
</style>
<!------ Include the above in your HEAD tag ---------->
<div id="load"></div>