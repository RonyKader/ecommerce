<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	<div class="admin-nav">
	<h2><a href="admin.php">Admin Menu</a></h2>
		<nav class="admin-nav">
			<div class="bs-example">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <?php
                	$sql_query = show_nav();               	 
                	 while ( $row = $row = mysqli_fetch_assoc( $sql_query ) ) {
                	 	?>
	                    <a style="display:inline-block; width:100%;" class="chef-panel panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row[ 'id' ];?>">
	                    	<i class="fa fa-hand-o-right"></i> <?php echo $row[ 'menu_name' ];?>
	                    </a>    
	                    <div id="<?php echo $row[ 'id' ];?>" class="panel-collapse collapse">
		                    <?php 
		                       $qu = show_category( $row['id'] );
		                       while ( $sub = mysqli_fetch_assoc( $qu ) ) {
		                    ?>
	                        <div class="panel-body">
	                            <ul class="list-unstyled">
	                            	<li><a href="#"><?php echo $sub['cat_name']; ?></a></li>
	                            	
	                            </ul>
	                        </div>
	                    	<?php }  ?>                 
	                    </div>
                	 	<?php } ?>                              
           
                </div>
             <!-- End of Question section one -->
                
            </div>
        </div>
		</nav>
		<h2><a href="#">Create a Menu</a></h2>
	</div>
</div>