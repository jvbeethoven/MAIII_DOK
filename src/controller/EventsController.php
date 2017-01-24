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
    $events = $this->eventDAO->selectAllAfterToday();

    if($this->isAjax) {
      header('Content-Type: application/json');
      $this->_searchAjax();
      exit();
    }

    if( !isset( $_POST ) ){
      $this->set('events', $events);
    } else {
      $this->_searchEventsIfNeeded();
    }


  }

  public function _searchEventsIfNeeded() {
    $conditions = array();

    // example: search on title
    if( isset( $_POST["query"]) ){
      $conditions[0] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_POST["query"]
      );
    }

    if( isset( $_POST["tag"]) ){
      // example: search on tag name
      $conditions[0] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_POST["tag"]
      );
    }

    // if( isset( $_POST["month"]) ){
    //   var_dump($_POST("month"));
    // }

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
    $this->set('events', $events);
  }

  public function _searchAjax() {
      // var_dump($_POST);
      $conditions = array();
      if( isset( $_POST["query"]) ){
        $conditions[0] = array(
          'field' => 'title',
          'comparator' => 'like',
          'value' => $_POST["query"]
        );
      }

      if( isset( $_POST["tag"]) ){
        // example: search on tag name
        $conditions[0] = array(
          'field' => 'tag',
          'comparator' => '=',
          'value' => $_POST["tag"]
        );
      }
      $events = $this->eventDAO->search($conditions);
      echo json_encode( $events );
    }
  }
