<?php 
        
        try {
            $output = shell_exec("cd /var/www; git pull");
            
            var_dump($output);
        } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
        
        
        
        
		/*echo "<pre>$output</pre>";
		
        die("done " . time());*/
        
        ?>