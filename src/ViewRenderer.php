<?php

namespace Project;

class ViewRenderer
{
    public function render($path, array $vars = array())
    {
        ob_start();
        extract($vars);
        require($path);

        return ob_get_clean();
    }
}