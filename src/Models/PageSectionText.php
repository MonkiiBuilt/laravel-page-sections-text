<?php
/**
 * @author Jonathon Wallen
 * @date 26/5/17
 * @time 5:46 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsText\Models;

use MonkiiBuilt\LaravelPages\Models\PageSection;

class PageSectionText extends PageSection
{
    protected static $singleTableType = 'plain_text';

    public function getDecorator()
    {
        $decoratorName = \MonkiiBuilt\LaravelPageSectionsText\PageSectionTextDecorator::class;
        return new $decoratorName($this);
    }
}