<?php
/**
 * @author Jonathon Wallen
 * @date 30/5/17
 * @time 4:56 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsText;


use MonkiiBuilt\LaravelPages\PageSectionDecoratorAbstract as PageSectionDecoratorAbstract;

class PageSectionTextDecorator extends PageSectionDecoratorAbstract
{
    public function renderForm() {
        return view('page-sections-text::plain-text', ['section' => $this->wrapped]);
    }
}