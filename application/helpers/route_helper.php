<?php

if ( ! function_exists('route'))
{

    /**
     * Helper function to quickly access the Route::named() method
     *
     * @param string $name The name of the route specified
     * @return URL
     */
    function route($name, $param = array (), $extract = FALSE)
    {
        $route = '';

        if (count($param) > 0)
        {
            $route = Route::named($name, $param);
        }
        else
        {
            $route = Route::named($name);
        }

        if ($extract === TRUE)
        {
            return $route;
        }
        else
        {
            return site_url($route);
        }
    }

}

/* End of file route_helper.php */
/* Location: ./application/helpers/route_helper.php */