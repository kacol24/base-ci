<?php

/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('debug'))
{

    function debug($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        print_r($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE)
        {
            echo $output;
        }
        else
        {
            return $output;
        }
    }

}


if (!function_exists('dd'))
{

    function dd($var, $label = 'Dump', $echo = TRUE)
    {
        debug($var, $label, $echo);
        exit;
    }

}

/* End of file debug_helper.php */
/* Location: ./application/helpers/debug_helper.php */