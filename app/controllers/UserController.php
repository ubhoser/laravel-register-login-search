<?php

class UserController extends BaseController {

  public function getLogin()
  {
    $title = 'Login';
    return View::make('users.login')
      ->with('title', $title);    
  }

  public function postLogin()
  {
    $inputs = Input::all();

    $rules = array(
      'email' => 'required|email',
      'password' => 'required'
    );

    $validator = Validator::make($inputs, $rules);    

    if ($validator->fails()) 
    {
      return Redirect::to('login')->withErrors($validator)->withInput();
    }
    else
    {
      $credentials = array(
        'email' => $inputs['email'], 
        'password' => $inputs['password']
      );

      if (Auth::attempt($credentials))
      {
        return Redirect::to('profile');
      }
      else
      {
        $message = array('not_logged_in' => 'Error logging you in');
        return Redirect::to('login')->withErrors($message);
      }
    }
  }

  public function getRegister()
  {
    $title = 'Register';
    return View::make('users.register')
      ->with('title', $title);
  }


  public function postRegister()
  {
    $inputs = Input::all();
    $rules = array(
      'name' => 'required',
      'email' => 'required|unique:users|email',
      'password' => 'required|min:8'
    );
    $validator = Validator::make($inputs, $rules);

    if ($validator->fails()) 
    {
      return Redirect::to('register')->withErrors($validator)->withInput();
    }
    else
    {
      $password = $inputs['password'];
      $password = Hash::make($password);

      $user = new User();
      $user->name = $inputs['name'];
      $user->email = $inputs['email'];
      $user->password = $password;
      $user->save();

      return Redirect::to('login');
    }
  }

  public function getLogout()
  {
    Auth::logout();
    return Redirect::to('register');
  }

  public function getProfile()
  {
    $title = 'Profile';
    return View::make('users.profile')
      ->with('title', $title);
  }

}
