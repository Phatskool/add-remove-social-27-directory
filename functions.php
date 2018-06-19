<?php

add_filter( 'mylisting\links-list', function( $links ) {
    $links['NewSocial'] = [
        'name' => 'NewSocial',
        'key' => 'NewSocial',
        'icon' => 'fa fa-NewSocial',
        'color' => '#333333',
    ];
    
    
    unset( $links['Facebook'] );
    return $links;
} );
