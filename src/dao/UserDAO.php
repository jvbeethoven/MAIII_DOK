<?php
require_once __DIR__ . '/DAO.php';
class UserDAO extends DAO {

  public function selectById($id) {
    $sql = "SELECT * FROM `ma3_dok_events` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
