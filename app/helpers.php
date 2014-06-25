<?php

//EBCMS Helpers

function in_array_r ( $item, $haystack, $strict = true ) 
    {
        foreach ($haystack as $item => $value ) 
        {
            if (( $strict ? $item === $needle : $item == $needle ) || ( is_array ( $item ) && in_array_r ( $needle, $item, $strict ))) 
            {
                return true;
            }
        }

        return false;
    }

?>