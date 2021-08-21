<div class="clear"></div>
<div class="main">
	<?php
		if(isset($_GET['action']) && $_GET["query"]) {
			$tam= $_GET['action'];
			$query= $_GET['query'];

		}else {
			$tam='';
			$query='';
		}
		//quanlibaihat
		if ($tam=='quanlybaihat'&& $query=='them') {
			include("quanlybaihat/them.php");
			include("quanlybaihat/list.php");

		}elseif ($tam=='quanlybaihat' && $query =='sua')  {
			
			include("quanlybaihat/sua.php");	
		}
		else{
			include("drashboad.php");
		}
      
	  ?>
	  	
	  </div>