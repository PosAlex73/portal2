<?php

namespace App\Console\Commands;

use App\Achievements\AchieveInfo;
use App\Achievements\AchieveRepository;
use App\Enums\Achivements\AchievementTypes;
use App\Models\Achievement;
use App\Models\User;
use Illuminate\Console\Command;

class AddAchieves extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ach:add {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds all achieves to user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_id = $this->argument('user');

        /** @var User $user */
        $user = User::find($user_id);
        $achieves = AchieveRepository::getAllAchievements();
        $result = [];
        /** @var \App\Achievements\Achievement $achieve */
        foreach ($achieves as $achieve)
        {
            /** @var AchieveInfo $info */
            $info = $achieve->getInfo();
            $newAchieve = Achievement::create([
                'title' => $info->getTitle(),
                'description' => $info->getDescription(),
                'achievement' => $info->getDescription(),
                'type' => AchievementTypes::COMMON,
                'user_id' => $user_id
            ]);

            $result[] = $newAchieve;
        }

        $user->achievements()->saveMany($result);

        return 0;
    }
}
