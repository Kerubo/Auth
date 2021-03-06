<?php
 
class UserController extends BaseController
{
   public function login()
  {
    if ($this->isPostRequest()) {
      $validator = $this->getLoginValidator();
  
      if ($validator->passes()) {
        $credentials = $this->getLoginCredentials();
  
        if (Auth::attempt($credentials)) {
          return Redirect::route("user/profile");
        }
  
        return Redirect::back()->withErrors([
          "password" => ["Credentials invalid."]
        ]);
      } else {
        return Redirect::back()
          ->withInput()
          ->withErrors($validator);
      }
    }
  
    return View::make("user/login");
  }
  
  protected function isPostRequest()
  {
    return Input::server("REQUEST_METHOD") == "POST";
  }
  
  protected function getLoginValidator()
  {
    return Validator::make(Input::all(), [
      "username" => "required",
      "password" => "required"
    ]);
  }
  
  protected function getLoginCredentials()
  {
    return [
      "username" => Input::get("username"),
      "password" => Input::get("password")
    ];
  }
  public function profile()
{
  return View::make("user/profile");
}
//password reset
public function reset($token)
{
  if ($this->isPostRequest()) {
    $credentials = Input::only(
      "email",
      "password",
      "password_confirmation"
    ) + compact("token");
 
    $response = $this->resetPassword($credentials);
 
    if ($response === Password::PASSWORD_RESET) {
      return Redirect::route("user/profile");
    }
 
    return Redirect::back()
      ->withInput()
      ->with("error", Lang::get($response));
  }
 
  return View::make("user/reset", compact("token"));
}
 
protected function resetPassword($credentials)
{
  return Password::reset($credentials, function($user, $pass) {
    $user->password = Hash::make($pass);
    $user->save();
  });
}
public function logout()
{
  Auth::logout();
  
  return Redirect::route("user/login");
}


}