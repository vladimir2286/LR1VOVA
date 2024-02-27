<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=subjects", "root", "");

?>

<?php foreach ($data as $row): ?>
      <div class="container">
            <p class=""id_teacher><?= $row['name']; ?></p>
            <p><?= $row['id_teacher']; ?></p>
            <p><?= $row['description']; ?></p>
      </div>
      <?php endforeach; ?>   