<?php

namespace RolandNii\Lapin\Commands;

use Illuminate\Console\Command;

class LapinCommand extends Command
{
    public $signature = 'lapin';

    public $description = 'My command';

    public function handle(): int
    {
        $dh = opendir(app_path());

        if($dh) {

            while(($file = readdir($dh)) !== false) {
                $this->comment($file);
            }
        }

        return self::SUCCESS;
    }
}
