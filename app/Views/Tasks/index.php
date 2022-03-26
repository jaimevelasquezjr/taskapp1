<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>

<?= $this->section('content') ?>

  <h1>All Tasks</h1>

  <ul class="task-list">
     <?php foreach($tasks as $task): ?>
         <li><?php echo 'ID: ' . $task['id'] . ' ' . $task['description']; ?></li>
     <?php endforeach; ?>
  </ul>

<?= $this->endSection() ?>