<?php 
        
        $output = shell_exec("cd /var/www; git pull");
        
		echo "<pre>$output</pre>";
		
        die("done " . time());
        
        ?>