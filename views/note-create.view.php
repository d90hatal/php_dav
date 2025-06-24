<?php require('partials/head.php') ?>

       <?php require('partials/nav.php') ?>

       <?php require('partials/banner.php') ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
             <form action="POST">
                <label for="description">your note</label>
                <br>
                <textarea name="body" id="description" placeholder="Enter your note here"">  </textarea>
                <p>
                        <button type="submit">Create Note</button>
                    </p>
             </form>
            </div>
        </main>
<?php require('partials/footer.php') ?>