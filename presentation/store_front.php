<?php

class StoreFront
{
    public $m_site_url;
    
    public function __construct()
    {
        $this->m_site_url = Link::Build('');
    }
}
