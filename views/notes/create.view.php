<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/php-sandbox/php_dav/notes/create" method="POST">
            <!-- <div class="space-y-12"> -->
            <!-- <div class="border-b border-gray-900/10 pb-12"> -->


            <!-- <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"> -->


            <div class="col-span-full">
                <label for="about" class="block text-sm/6 font-medium text-gray-900">Note Content</label>
                <div class="mt-2">
                    <textarea name="body" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Write your note here..."><?= htmlspecialchars($_POST['body'] ?? '') ?></textarea>
                </div>
                                 <?php if (isset($errors['body'])): ?>
                     <p class="mt-3 text-sm/6 text-red-600"><?= htmlspecialchars($errors['body']) ?></p>
                 <?php else: ?>
                     <p class="mt-3 text-sm/6 text-gray-600">Write your note content here (1-15 characters).</p>
                 <?php endif; ?>
            </div>




            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->






            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>