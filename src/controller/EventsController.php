<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {

    $tags = $this->eventDAO->selectAllTags();
    $this->set('tags', $tags);

    $events = $this->_searchEventsIfNeeded();

    if($this->isAjax) {
      header('Content-Type: application/json');
      echo json_encode( $events );
      exit();
    }

    $this->set('events', $events);


  }

  public function eventdetail() {
    if( !isset( $_GET["id"]) ){
      $_SESSION["error"] = ['Dit event bestaat niet'];
      $this->redirect('index.php?page=event');
    }

    $id = $_GET["id"];
    $event = $this->eventDAO->selectById( $id );

    if( !$event ){
      $_SESSION["error"] = ['Dit event bestaat niet'];
      $this->redirect('index.php?page=event');
    }

    $this->set('event', $event);
  }

  public function _searchEventsIfNeeded() {
    $conditions = array();

    // example: search on title
    if( isset( $_GET["query"]) ){
      $conditions[0] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_GET["query"]
      );
    }

    if( isset( $_GET["tag"]) ){
      // example: search on tag name
      $conditions[0] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_GET["tag"]
      );
    }
    //
    // if( isset( $_POST["month"]) ){
    //   var_dump($_POST("month"));
    // }

    if( isset( $_GET["month"]) ){
      // example: events happening on march first
      $conditions[0] = array(
        'field' => 'start',
        'comparator' => '>',
        'value' => '2017-'.$_GET["month"].'-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'end',
        'comparator' => '<',
        'value' => '2017-'.$_GET["month"].'-31 00:00:00'
      );
    }

    //
    // // example: events happening on march first
    // $conditions[0] = array(
    //   'field' => 'start',
    //   'comparator' => '<=',
    //   'value' => '2017-03-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-03-01 00:00:00'
    // );

    $events = $this->eventDAO->search($conditions);
    return $events;
  }
}
