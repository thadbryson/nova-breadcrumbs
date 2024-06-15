<?php

namespace ChrisWare\NovaBreadcrumbs;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaBreadcrumbs extends Tool
{
    protected $loadStyles = true;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-breadcrumbs', __DIR__ . '/../dist/js/tool.js');
        if ($this->loadStyles) {
            Nova::style('nova-breadcrumbs', __DIR__ . '/../dist/css/tool.css');
        }
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return false;
    }


    public function withoutStyles()
    {
        $this->loadStyles = false;

        return $this;
    }
}
