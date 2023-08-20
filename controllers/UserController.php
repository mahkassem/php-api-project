<?php
require_once UTILS . 'Request.php';
require_once MODELS . 'User.php';
require_once ENTITIES . 'UserEntity.php';

class UserController
{
  public function index()
  {
    $myFriends = readfile(STORAGE . 'my_friends.json', 'r');
    Response::json($myFriends);
  }

  public function profile()
  {
    // read a json file
    $myFriends = file_get_contents(STORAGE . 'my_friends.json');
    $myFriends = json_decode($myFriends, true);

    // user
    $user = new User(
      [
        'name' => 'Mohamed',
        'email' => 'mahmoud@test.com',
        'description_en' => 'I am a web developer',
        'description_ar' => 'أنا مطور ويب',
        'city_en' => 'Alexandria',
        'city_ar' => 'الإسكندرية'
      ]
    );

    Response::view('profile', ['friends' => $myFriends, 'user' => $user]);
  }

  public function all()
  {
    $users = UserEntity::all();
    Response::jsona($users);
  }
}
