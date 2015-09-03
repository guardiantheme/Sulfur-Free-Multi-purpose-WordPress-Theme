<?php
#!/usr/bin/env php
foreach(glob("*.js") as $js){
    echo "wp_enqueue_script( 'tb_sulfur-{$js}', get_template_directory_uri().'/js/{$js}', array('jquery'),'1.0',true);\n";
}