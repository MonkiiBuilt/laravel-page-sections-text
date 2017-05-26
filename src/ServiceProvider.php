<?php
/**
 * @author Jonathon Wallen
 * @date 26/5/17
 * @time 5:02 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsText;

use MonkiiBuilt\LaravelPages\Models\PageSection;

class ServiceProvider {

    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LaravelPages');

        $parent = PageSection::getInstance();

        $parent::addDynamicSubclass();

    }
}