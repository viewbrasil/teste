<?php 
        
        $output = shell_exec("cd /var/www; git pull apache master");
        var_dump($output);
		echo "<pre>$output</pre>";
        die("done " . time());
        
        ?>
