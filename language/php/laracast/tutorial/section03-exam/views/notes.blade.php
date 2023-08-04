<div>
    <ul>
        <?php foreach($notes as $note):?>
        <li>
            <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body'])?>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
    <p class="mt-6">
        <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
</div>
