<?php

namespace Puikepixels\LivewireCalendar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Puikepixels\LivewireCalendar\Skeleton\SkeletonClass
 */
class LivewireCalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-calendar';
    }
}
