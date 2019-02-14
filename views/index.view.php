<?php require 'partials/head.view.php'; ?>

<header class="container">
  <?php include 'partials/nav.view.php'; ?>

  <div class="row justify-content-center align-items-center">
    <div class="col-md-8">
      <h1><?= $title; ?></h1>
    </div>
  </div>
</header>

<main class="py-4">
  <section class="container">
    <div class="row mb-4">
      <div class="col-md-8">
        <h2>Add new Task</h2>

        <form method="post" action="/tasks">
          <fieldset class="form-group">
            <label for="description">Task Description</label>

            <input type="text" class="form-control" name="description" placeholder="Enter Task Description">
          </fieldset>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require 'partials/footer.view.php'; ?>
