<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h2>Edit Task</h2>

<?= form_open('tasks/update/' . $task['id']); ?>

<label for="title">Title:</label>
<?= form_input('title', set_value('title', $task['title'])); ?>
<?= isset($validation['title']) ? '<p class="text-danger">' . esc($validation['title']) . '</p>' : ''; ?>
<br>

<label for="description">Description:</label>
<?= form_textarea('description', set_value('description', $task['description'])); ?>
<?= isset($validation['description']) ? '<p class="text-danger">' . esc($validation['description']) . '</p>' : ''; ?>
<br>

<label for="status">Status:</label>
<?= form_dropdown('status', ['incomplete' => 'Incomplete', 'completed' => 'Completed'], set_value('status', $task['status'])); ?>
<?= isset($validation['status']) ? '<p class="text-danger">' . esc($validation['status']) . '</p>' : ''; ?>
<br>

<?= form_submit('submit', 'Update Task'); ?>

<?= form_close(); ?>


<br>

<a href="<?= site_url('tasks'); ?>">Back to Task List</a>

<?= $this->endSection(); ?>
