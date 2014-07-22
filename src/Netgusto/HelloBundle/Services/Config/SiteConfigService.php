<?php

namespace Netgusto\HelloBundle\Services\Config;

use Netgusto\BootCampBundle\Services\Config\AbstractConfigService;

class SiteConfigService extends AbstractConfigService {
    
    public function getHelloTitle() {
        return $this->config['hello']['title'];
    }
}