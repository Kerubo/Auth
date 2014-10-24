<?php
 
class UserTableSeeder extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "lucy",
        "password" => Hash::make("7h3¡MOST!53cu23"),
        "email"    => "lucy@example.com"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}