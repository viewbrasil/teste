<?php 
        
        $output = shell_exec("cd /var/www; git pull");

		echo "<pre>$output</pre>";
		
		echo 'teste';
		
        die("done " . time());
        
        ?>