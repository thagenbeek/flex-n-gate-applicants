<?php

namespace Thagenbeek\FlexNGateApplicants\Commands;

use Illuminate\Console\Command;

class FlexNGateApplicantsCommand extends Command
{
    public $signature = 'flex-n-gate-applicants';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
