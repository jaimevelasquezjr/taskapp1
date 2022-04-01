<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>

<?= $this->section('content') ?>

  <h1>All Tasks</h1>

  <ul class="task-list">
     <?php foreach($tasks as $task): ?>
         <li><a href="<?= site_url('tasks/show/' . $task['id']); ?>"><?php echo $task['description']; ?></a></li>
     <?php endforeach; ?>
  </ul>

<?= $this->endSection() ?>