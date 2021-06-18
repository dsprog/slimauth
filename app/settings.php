<?php

return function(\Psr\Container\ContainerInterface $container) {
    $container->set('settings', function(){
        return [
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'displayErrors' => true,
        ];
    });
};