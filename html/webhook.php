<?php 
        
        $output = shell_exec("cd /var/www; git pull apache master");
        
		echo "<pre>$output</pre>";
		
		echo 'teste 123 ';
		
        die("done " . time());
        
        ?>