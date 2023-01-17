<?php
    $name = 'lily2';//name u get from database
    $some = $name.'.html';//concatenating it with .html
    echo copy('create.html',$some);  //boom done
?>