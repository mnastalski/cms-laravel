<?php

namespace App\Helpers;

class AdminMenuItem
{
    private $route;
    private $url;
    private $label;
    private $icon;
    private $blank;

    public function uri($uri)
    {
        $this->url = url($uri);

        return $this;
    }

    public function route($route)
    {
        $this->route = $route;
        $this->url = route($route);

        return $this;
    }

    public function label($label)
    {
        $this->label = $label;

        return $this;
    }

    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function blank($bool)
    {
        $this->target = $bool;

        return $this;
    }

    public function get()
    {
        $link = '<a href="%s"%s%s>%s%s</a>';

        $html = sprintf(
            $link,
            $this->url,
            $this->blank ? ' target="_blank"' : '',
            $this->isActive() ? ' class="active"' : '',
            $this->icon ? '<i class="fa ' . $this->icon . '"></i>' : '',
            $this->label ? $this->label : 'Item'
        );

        return $html;
    }

    private function isActive()
    {
        return request()->routeIs($this->route . '*');
    }
}
