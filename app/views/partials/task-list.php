<div class="container wrapper">
    <ul class="list-group mt-4">
        <?php foreach($tasks as $task) : ?>
        <?php if ($task->status) : ?>
            <li class="list-group-item mb-4 d-flex justify-content-between align-items-center <?= 'task-done' ?>">
        <?php else : ?>
            <li class="list-group-item mb-4 d-flex justify-content-between align-items-center">
        <?php endif; ?> 
                <div class="d-flex flex-column">
                    <h5 class="m-0">
                        <?= $task->task; ?>
                    </h5>
                    <p class="task-paragraph">
                        Created: <?= $task->created_at; ?>
                    </p>
                </div> 
                <div class="d-flex justify-content-between align-items-center">
                    <?php if (! $task->status) : ?>
                    <form method="POST" action="/tasks/update">
                        <input type="hidden" name="id" value="<?= $task->id ?>">
                        <button type="submit" name="done" class="btn btn-success ml-2">Done</button>
                    </form>    
                    <?php endif; ?>
                    <form method="POST" action="/tasks/delete">
                        <input type="hidden" name="id" value="<?= $task->id ?>">
                        <button type="submit" name="remove" class="btn btn-danger ml-2">Remove</button>
                    </form>
                </div> 
            </li>
        <?php endforeach; ?>
    </ul>
</div>