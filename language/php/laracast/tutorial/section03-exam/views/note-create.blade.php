<form method="POST">
    <label for="dsecription">Description</label>
    <div>
        <textarea id="description" name="body" placeholder="내용을 입력하세요." cols="100"><?= $_POST['body'] ?? ''?></textarea>
        <?php if(isset($errors['body'])) :?>
        <p class="text-xs text-red-500"><?= $errors['body'] ?></p>
        <?php endif;?>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
