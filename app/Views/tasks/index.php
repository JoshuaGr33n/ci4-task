<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h2>Task List</h2>

<?php if (!empty($tasks)) : ?>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?= $task['title']; ?> - <?= $task['description']; ?> (Status: <?= $task['status']; ?>)
                <?= anchor('tasks/edit/' . $task['id'], 'Edit'); ?>
                <?= anchor('tasks/delete/' . $task['id'], 'Delete'); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>No tasks available.</p>
<?php endif; ?>

<?= anchor('tasks/create', 'Create New Task'); ?>

<?= $this->endSection(); ?>