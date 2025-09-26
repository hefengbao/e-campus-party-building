<?php

namespace App\Filament;

//use Filament\Auth\Http\Responses\Contracts\LoginResponse;
//use Filament\Facades\Filament;
//use Filament\Models\Contracts\FilamentUser;
use Illuminate\Validation\ValidationException;
use phpCAS;

class SSOLogin
{
    public function __invoke()
    {
        //TODO SSOLogin 逻辑

        /*$uid = '10000';
        if (! Filament::auth()->loginUsingId($uid)) {
            abort(404,'用户不存在');
        }

        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (! $user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();

            abort(403, '没有访问权限');
        }

        session()->regenerate();

        return app(LoginResponse::class);*/
    }
}
