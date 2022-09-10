<?php
/**
 * @category Scandiweb
 * @package Scandiweb/test
 * @author Krists Miculis <info@scandiweb.com>
 */
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Scandiweb_Test',
    __DIR__
);
