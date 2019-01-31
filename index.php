<?php
/*
    We're using require_once here because we want to:
    1. Only include the file once
    2. Show us a FATAL ERROR if missing or we've linked the file incorrectly

    Other ways to include files are available:
    include(); - include files multiple times, only warning if missing
    require(); - include file multiple times, FATAL ERROR if missing
    include_once(); - include file ONLY once, only warning if missing

    Adding the _once multiple times just means any future _once of the
    same file gets ignored.

    So:
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');

    Only the first one is loaded, and the others are ignored.
*/

require_once('assets/inc/header.php');
?>
    <section class="content">
        <div class="row">
            <div class="col-8">
                <div class="content__main">
                    <h1>SavePoint&trade;</h1>

                    <p>Originally created for our students, but <em>free for all</em>.</p>

                    <p>SavePoint&trade; is a very simple front-end starter boilerplate that we created to introduce a few core concepts to our students:</p>

                    <ol>
                        <li>PHP includes and basic PHP syntax.</li>
                        <li>SCSS basic syntax and compiling with a third party app.</li>
                        <li>The power of creating your own boilerplate and not having to start from scratch every time you work on a new project.</li>
                    </ol>
                </div>
                <!-- /.content__main -->
            </div>
            <!-- /.col-8 -->
            <div class="col-4">
                <div class="content__sidebar">
                    <h2>Recommendations</h2>
                    <p>We recommend you spend a bit of time learning how git works. It isn't required to use SavePoint&trade;, but you'll be expected to know it when you get a job. Have a read through GitHub's guide about their workflow, and this excellent resource from @blackfalcon</p>
                </div>
                <!-- /.content__sidebar -->
            </div>
            <!-- /.col-4 -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php require_once('assets/inc/footer.php') ?>
