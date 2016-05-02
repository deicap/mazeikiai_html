<div class="layout-default">
	
	<div class="row">
	
		<div class="col-xs-12">
	
			<section class="content-block">
				
				<div class="content-block-header">
					<h1>Galerijos pavadinimas</h1>
				</div>
				
				<div class="content-block-body">
					
					<h2>Komentarai:</h2>
					
					
					
					<div class="comment-list">
						
						<?php for ($i = 1; $i < 5; $i++) { ?>
							
							<div class="comment-list-item">
								
								<div class="comment-head">
									<span><i class="fa fa-user"></i> komentatoriaus vardas</span>
									&nbsp; <span class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016-01-13 11:45</span>
								</div>
								
								<div class="comment-body">
									<p>nuo kada mokykla imone? :D</p>
								</div>
								
							</div>
							
						<?php } ?>
					
					</div>
					
					<?php include('templates/components/comment-form.php') ?>

				</div>
				
				<div class="content-block-footer">
				
				</div>
				
			</section>

		</div>

			
	</div>
	
</div>