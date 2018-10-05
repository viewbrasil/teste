<?php 
        
        $output = shell_exec("cd /var/www; git checkout master; git pull");
        
        var_dump($output);
        
		echo "<pre>$output</pre>";
		
        die("done " . time());
        
        ?>