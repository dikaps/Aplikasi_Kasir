<?php
include ("header.php");
include ("menu.php");
include ("footer.php");

$wadah="
	<div class='container-scroller'>
	   $header

		<div class='container-fluid page-body-wrapper'>
	    	$menu

			<div class='main-panel'>
				<div class='content-wrapper'>
					$konten	
				</div>
			    
			  $footer
			</div>
	    </div>
	    <!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
";

?>