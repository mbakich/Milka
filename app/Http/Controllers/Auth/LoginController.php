<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Authy;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Vanguard\Events\User\LoggedIn;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

//    public function login(LoginRequest $request)
//    {
//        // In case that request throttling is enabled, we have to check if user can perform this request.
//        // We'll key this by the username and the IP address of the client making these requests into this application.
//        $throttles = setting('throttle_enabled');
//
//        //Redirect URL that can be passed as hidden field.
//     //   $to = $request->has('to') ? "?to=" . $request->get('to') : '';
//        $to = '';
//
////        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
////            return $this->sendLockoutResponse($request);
////        }
//
//        $credentials = $request->getCredentials();
//
////        if (! Auth::validate($credentials)) {
////            // If the login attempt was unsuccessful we will increment the number of attempts
////            // to login and redirect the user back to the login form. Of course, when this
////            // user surpasses their maximum number of attempts they will get locked out.
////            if ($throttles) {
////                $this->incrementLoginAttempts($request);
////            }
////
////            return redirect()->to('login' . $to)
////                ->withErrors(trans('auth.failed'));
////        }
//
//        $user = Auth::getProvider()->retrieveByCredentials($credentials);
//
////        if ($user->isBanned()) {
////            return redirect()->to('login' . $to)
////                ->withErrors(__('Your account is banned by administrator.'));
////        }
//
//      //  Auth::login($user, setting('remember_me') && $request->get('remember'));
//      //  dd('hgjkfldshgjkslgh');
//        return $this->authenticated($request, $throttles, $user);
//    }
//
//
//
//    /**
//     * Send the response after the user was authenticated.
//     *
//     * @param  Request $request
//     * @param  bool $throttles
//     * @param $user
//     * @return RedirectResponse|Response
//     */
//    protected function authenticated(Request $request, $throttles, $user)
//    {
//        if ($throttles) {
//            $this->clearLoginAttempts($request);
//        }
//
////        if (setting('2fa.enabled') && Authy::isEnabled($user)) {
////            return $this->logoutAndRedirectToTokenPage($request, $user);
////        }
//
//    //    event(new LoggedIn);
//
//        if ($request->has('to')) {
//            return redirect()->to($request->get('to'));
//        }
//
//    //    return redirect()->intended();
//        return redirect()->intended(route('dashboard', absolute: false));
//    }
}
