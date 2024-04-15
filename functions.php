<?php

function countDirectories($path) {

    if (!is_dir($path)) {
        return "The path is incorrect.";
    }
    
    // List of files and directories within the track
    $contents = scandir($path);
    
    // number of directories
    $directoryCount = 0;

    foreach ($contents as $item) {
        // Examine whether the element is a dir rather than two points'. " or '...'

        if (is_dir($path . DIRECTORY_SEPARATOR . $item) && $item != '.' && $item != '..') {
            $directoryCount++;
        }
    }
    
    return $directoryCount;
}

?>