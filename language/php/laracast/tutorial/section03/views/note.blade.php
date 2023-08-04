<div>
    <h1 class="text-2xl">
        <?= $note['id']?>
    </h1>
    <p class="mb-6">
        <?= htmlspecialchars($note['body']) ?>
    </p>
    <a href="/notes" class="text-blue-500 hover:underline">Go Back to Notes</a>
</div>