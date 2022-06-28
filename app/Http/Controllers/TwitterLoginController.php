<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TwitterLoginController extends Controller
{
    /**
     * Twitterの認証ページヘユーザーをリダイレクト
     *
     * @return \Illuminate\Http\RedirectResponse|RedirectResponse
     */
    public function redirectToProvider(): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得(Callback先)
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        echo 'Twitterから取得しました。' . var_dump($user);
    }
}
