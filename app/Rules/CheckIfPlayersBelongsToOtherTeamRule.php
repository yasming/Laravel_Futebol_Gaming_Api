<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckIfPlayersBelongsToOtherTeamRule implements Rule
{
    private $teamId;
    public function __construct($teamId)
    {
        $this->teamId = $teamId;
    }


    public function passes($attribute, $value)
    {
        dd(Player::getPlayersThatBelongsToOthersTeam($value,$this->teamId));
        return Player::getPlayersThatBelongsToOthersTeam($value,$this->teamId)->isEmpty();
    }

    public function message()
    {
        return 'Players that belong to another teams are not allowed to be choosen .';
    }
}
