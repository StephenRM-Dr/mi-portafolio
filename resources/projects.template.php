<?php require __DIR__ . '/partials/header.php'; ?>

<h1 class="text-4xl font-bold mb-8">Mis Proyectos</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($projects as $project): ?>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-2"><?= htmlspecialchars($project['title']) ?></h2>
            <p class="text-gray-700 mb-4"><?= htmlspecialchars($project['description']) ?></p>
            <div class="mb-3 space-x-2">
                <?php foreach ($project['tags'] as $tag): ?>
                    <span class="bg-indigo-100 text-indigo-800 px-2 py-1 text-xs rounded"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>
            <a href="<?= htmlspecialchars($project['link']) ?>" 
               class="text-indigo-600 hover:underline" target="_blank">Ver Proyecto</a>
        </div>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
