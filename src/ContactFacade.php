<?php

namespace Soroux\Contact;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soroux/contact\Contact\Skeleton\SkeletonClass
 */
class ContactFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contact';
    }
}
