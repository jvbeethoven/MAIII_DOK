<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {

    // $this->_searchEventsIfNeeded();
    $events = $this->eventDAO->selectAllAfterToday();
    $this->set('events', $events);

  }

  public function _searchEventsIfNeeded() {
    $conditions = array();

    // example: search on title
    $conditions[0] = array(
      'field' => 'search',
      'comparator' => 'like',
      'value' => '$_GET["query"]'
    );

    // example: search on tag name
    // $conditions[0] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'gastvrijheid'
    // );
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

}
