<?php

class Authentication extends BaseController {

    public function getLogin() {
        return View::make('authentication.login');
    }

    public function postLogin() {
        $user = Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));

        if ($user) {
            $userRole = User::find(Auth::user()->id);

            if ($userRole->hasRole('admin')) {

                return Redirect::to('admin/dashboard');
            }
            if ($userRole->hasRole('user')) {

                return Redirect::to('user/dashboard');
            }
        } else {
            return Redirect::to('login')
                            ->with('message', 'Your username/password combination was incorrect')
                            ->withInput();
        }
    }

   public function getLogout(){
      Auth::logout(); //logout the user
      Session::flush(); //delete the session
      return Redirect::to('/');
   }

}
