<?
session_start();

$pdo = include_once "utils/db.php";

if (!empty ($_SESSION['favoirite_posts'])) {
  $favoirite_posts = $_SESSION['favoirite_posts'];
} else if ($pdo) {
  $stmt = $pdo->prepare("SELECT url FROM favourites");
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $favoirite_posts[] = $row['url'];
  }
  // $favoirite_posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!empty ($favoirite_posts)) {
    $_SESSION['favoirite_posts'] = $favoirite_posts;
  }
}


