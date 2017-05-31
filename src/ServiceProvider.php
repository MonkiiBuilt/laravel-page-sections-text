<?php
/**
 * @author Jonathon Wallen
 * @date 26/5/17
 * @time 5:02 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsText;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use MonkiiBuilt\LaravelPages\Models\PageSection;
use MonkiiBuilt\LaravelPageSectionsText\Models\PageSectionText;

class ServiceProvider  extends BaseServiceProvider {

    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LaravelPages');

        PageSection::addSingleTableSubclass(PageSectionText::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'page-sections-text');

    }
}