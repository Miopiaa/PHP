<?php
    require ('vendor/autoload.php');
    use Carbon\Carbon;
    $amanha = Carbon::now()->addDay();
    echo date('d/m/Y', strtotime($amanha));
    
?>