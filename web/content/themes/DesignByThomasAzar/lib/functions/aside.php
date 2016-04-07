<?php

function get_scta_aside(){
    $aside_uploads = rwmb_meta( 'scta_aside-uploads', 'type=file' );
    $aside_content = rwmb_meta( 'scta_aside-content');
    $aside_align   = rwmb_meta( 'scta_aside-align' );
    if ( $aside_uploads or $aside_content ){
        $scta_aside = "<aside class='aside aside{$aside_align}'>";
        foreach ( $aside_uploads as $file ) {
            $scta_aside .= "<a class='download-item' href='{$file['url']}' title='{$file['title']}'>{$file['title']}</a>";
        }
        $aside_content = apply_filters( 'the_content', $aside_content );
        $scta_aside .= $aside_content . '</aside>';
    }
    return $scta_aside;
}
?>
