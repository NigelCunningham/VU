<?php

/**
 * Output node info in the form of a 'card'.
 */
?>

<?php foreach($elements['items'] as $index => $card) : ?>
<div class="card">
  <div class="card-body">
    <div class="card-title">
      <h5><?php print $card['title']; ?></h5>
    </div>
    <div class="card-text">
      <?php print $card['summary']; ?>
    </div>
    <footer class="card-footer text-muted"><?php print $card['date']; ?></footer>
  </div>
</div>
<?php endforeach; ?>