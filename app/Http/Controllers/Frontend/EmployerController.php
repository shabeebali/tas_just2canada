<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;

class EmployerController extends Controller
{
    public function dashboard()
    {
        return view('frontend.employer.dashboard');
    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Employer::where('email',$request->input('email'))->first();

        if($user) {
            $authenticated = Hash::check($request->input('password'),$user->password);
            if($authenticated) {
                Auth::guard('employer')->login($user, $request->has('remember'));
                return Response::redirectToIntended(route('employer.dashboard'));
            } else {
                throw ValidationException::withMessages([
                    'Credential Mismatch'
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'Account does not exist'
            ]);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:employers',
            'password' => 'required|confirmed',
        ]);

        $employer = new Employer();
        $employer->email = $request->input('email');
        $employer->password = Hash::make($request->input('password'));
        $employer->save();

        Auth::loginUsingId($employer->id);

        event(new Registered($employer));

        return redirect(route('employer.dashboard'))->with('success','A validation email has been sent to your email id. Please validate by clicking the link in your email.');
    }
}
