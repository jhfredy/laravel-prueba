<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Redirect;
use Session;
use Reminder;
use Mail;
use Password_resets;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request, $token = null)
    {
        
        return view('password.password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function postForgotPassword(Request $request)
    {
        
        $messages = [
            'email.required' => 'El campo es requerido',
            'email.email' => 'El formato de email es incorrecto',
        ];
        $this->validate($request, ['email' => 'required|email'], $messages);

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('status', 'Hemos enviando un link a tu cuenta de correo electrónico para que puedas resetear el password');

            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      protected function getEmailSubject()
    {
        return property_exists($this, 'subject') ? $this->subject : 'Tu link para resetear el password';
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return ['error el envio fallo'];
    }

    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function getReset($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        return view('password.reset')->with('token', $token);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    public function postReset(Request $request)
    {
        
        $messages = [
            'email.required' => 'El campo es requerido',
            'email.email' => 'El formato de email es incorrecto',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo de caracteres permitidos son 6',
            'password.max' => 'El máximo de caracteres permitidos son 18',
        ];
        
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6|max:18',
        ], $messages);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath())->with('status', 'Enhorabuena tu password ha sido reseteado con éxito');

            default:
                return redirect()->back()
                            ->withInput($request->only('email'))
                            ->withErrors(['email' => trans($response)]);
        }
    }
    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);

        $user->save();

        Auth::login($user);
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
    

