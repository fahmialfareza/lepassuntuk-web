<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\SocialProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class AuthController extends Controller
{

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
       try {
           $socialUser = Socialite::with($provider)->user();
       } catch (Exception $e) {
           return redirect('/');
       }

       $socialProvider = SocialProvider::where('provider_id', $socialUser->getId())->first();
       if (!$socialProvider) {
           $user = User::firstOrCreate(
             ['email' => $socialUser->getEmail()],
             ['name' => $socialUser->getName()],
             ['email_verified_at' => Carbon::now()]
           );

           $user->socialProviders()->create(
             ['provider_id' => $socialUser->getId(), 'provider' => $provider]
           );
           
           $user->email_verified_at = Carbon::now();
           $user->save();
           
       } else {
           $user = $socialProvider->user;
       }

       auth()->login($user, true);

       if (!Auth::user()->hasVerifiedEmail()) {
           if (Auth::user()->admin == 0) {
              Auth::user()->sendEmailVerificationNotification();
           }
       }

       if (Auth::user()->admin == 0) {
            return redirect(route('user.bookings.index'));
       } else {
            return redirect(route('admin.carrentals.index'));
       }
    }
}
