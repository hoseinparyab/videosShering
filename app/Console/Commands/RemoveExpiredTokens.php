<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Sanctum\PersonalAccessToken;

class RemoveExpiredTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Tokens:remove_all{--dey=7: the number of days to retain expired tokens}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'remove all expired tokens';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    $expiration =config('sanctum.expiration');
    if($expiration){
        $day= $this->option('day');
        $token= PersonalAccessToken::where('created_at', '<',now()->subminutes($expiration+($day*24*60)));
        $$this->info('all expired tokens have been deleted');
        $token->delete();
        return 0;
    }
    $this->warn('expire time is not set');
    }
}
