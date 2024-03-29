<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'UserDAO.php';

class UsersController extends Controller {

  private $userDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
  }

  public function index() {
    $upcomingEvents = $this->userDAO->selectUpcoming();
    $this->set('upcomingEvents', $upcomingEvents);

  }

  public function error() {

  }

}
