<?php

class Category
{

    protected $name;
    protected $icon;

    function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getCategoryName()
    {
        return $this->name;
    }

    public function getCategoryIcon()
    {
        return $this->icon;
    }
}
