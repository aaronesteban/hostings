
<div class="jumbotron">
  <div class="container">
    <h1>¡Gracias!</h1>
    <p>Te estamos redirigiendo a tu factura.</p>

	<div class="progress">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	</div>

  </div>
</div>



<script type="text/javascript">
/*
	$(function(){
		
		<? if($hash): ?>
	
			var $progressbar = $('.progress-bar');
			var width = 0;
			var intervalo = setInterval(function(){
				if (width < 100) {
					width+;
					$progressbar.width(width+'%');
					//$progressbar.text(width+'%');
				} else {
					//window.location = "<?=Router::url(array('controller'=>'facturas', 'action'=>'ver_cliente', 'hash'=>$hash));?>";
					clearInterval(intervalo);
				}
			}, 80);
		<? endif; ?>

	});
*/

	$(function(){
		
		<? if($hash): ?>
	
			var $progressbar = $('.progress-bar');
			var width = 0;
			var intervalo = setInterval(function(){
				if (width < 100) {
					width+= 1 + 15*Math.random();
					$progressbar.width(width+'%');
					//$progressbar.text(width+'%');
				} else {
					window.location = "<?=Router::url(array('controller'=>'facturas', 'action'=>'ver_cliente', $hash));?>";
					clearInterval(intervalo);
				}
			}, 500);
		<? endif; ?>

	});

</script>


<style type="text/css">
	.progress-bar.active {
		transition: width .3 ease;
	}
</style>
