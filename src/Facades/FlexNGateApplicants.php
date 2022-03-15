<?php

namespace Thagenbeek\FlexNGateApplicants\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thagenbeek\FlexNGateApplicants\FlexNGateApplicants
 */
class FlexNGateApplicants extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flex-n-gate-applicants';
    }
}
