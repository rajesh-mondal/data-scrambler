<?php
function displayKey( $key ) {
    printf( "value = '%s' ", $key );
}

function scrambleData( $originalData, $key ) {
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen( $originalData );
    for ( $i = 0; $i < $length; $i++ ) {
        $currentChar = $originalData[$i];
        $position = strpos( $originalKey, $currentChar );
        if ( $position !== false ) {
            $data .= $key[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}