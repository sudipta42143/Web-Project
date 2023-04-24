<!-- <?php
require_once '../Model/db_connect.php';
$conn = db_conn();

$sql = "SELECT *  FROM `feedback` ";

try {
      $stmt = $conn->query($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
?> -->
