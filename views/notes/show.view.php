<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p><?= $note['body'] ?></p>
                <a href="/php-sandbox/php_dav/notes" class="text-blue-500 hover:underline">go back</a>
                <br><br>
                <form  method="POST">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <button class="text-red-500 hover:underline">Delete</button>
                </form>
            </div>
        </main>
<?php require base_path('views/partials/footer.php') ?>