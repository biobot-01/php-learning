<?php require 'partials/head.view.php'; ?>

<header class="container">
  <?php include 'partials/nav.view.php' ?>

  <div class="row justify-content-center align-items-center">
    <div class="col-md-8">
      <h2>List of All Tasks</h2>

      <ul class="list-unstyled">
        <?php foreach ($tasks as $task): ?>
          <li>
            <?php if ($task->completed): ?>
              <del><?= $task->description; ?></del>
              <span>
                <i class="fas fa-check"></i>
              </span>
            <?php else: ?>
              <?= $task->description; ?>
              <span>
                <i class="fas fa-times"></i>
              </span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</header>

<?php require 'partials/footer.view.php'; ?>
