<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h2>Create New Task</h2>

<?= form_open('tasks'); ?>

<label for="title">Title:</label>
<?= form_input('title', set_value('title')); ?>
<?= isset($validation['title']) ? '<p class="text-danger">' . esc($validation['title']) . '</p>' : ''; ?>
<br>

<label for="description">Description:</label>
<?= form_textarea('description', set_value('description')); ?>
<?= isset($validation['description']) ? '<p class="text-danger">' . esc($validation['description']) . '</p>' : ''; ?>
<br>

<?= form_submit('submit', 'Create Task'); ?>

<?= form_close(); ?>

<br>

<?= anchor('tasks', 'Back to Task List'); ?>
<?= $this->endSection(); ?>