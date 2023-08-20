<?php
require_once UTILS . 'Router.php';

// Require the controllers
require_once CONTROLLERS . 'UserController.php';

// Controllers
$userController = new UserController();

// Routes
Router::get('', function () use ($userController) {
  return $userController->index();
});

Router::get('profile', function () use ($userController) {
  return $userController->profile();
});

Router::get('redirect', function () {
  return Router::redirect('profile');
});

Router::get('users', function () use ($userController) {
  return $userController->all();
});
