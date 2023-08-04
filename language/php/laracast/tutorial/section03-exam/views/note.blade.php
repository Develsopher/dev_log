<div>
    <h3 class="text-purple-500">
        노트번호: <?= $note['id']?>
    </h3>
    <p style="border-bottom: 1px dashed purple">
        작성자: <?= $note['user_id']?>
    </p>
    <p class="mt-6">
        <?= htmlspecialchars($note['body'])?>
    </p>
    <div class="mt-6" style="border-top: 1px dashed purple">
        <a href="/notes" class="text-blue-500 hover:underline">Go back to Note Lists</a>
    </div>
</div>