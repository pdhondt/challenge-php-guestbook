<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Peter's Guestbook</title>
</head>
<body>

<div class="container">

    <h1>Peter's Guestbook</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="" value="" autofocus>
            </div>
            <div class="form-group col-md-4">
                <label for="date">Date:</label>
                <input type="text" id="date" name="date" class="form-control" placeholder="" value="">
            </div>
            <div class="form-group col-md-4">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" class="form-control" placeholder="" value="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="2" class="form-control" placeholder="">
                </textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Post</button>

        <fieldset>
            <legend>Guestbook entries</legend>
                <ol>
                    <?php
                    foreach (array_reverse($currentGuestbookArray) AS $i => $post): ?>
                        <li><?php echo $post['title'] ?>, <?php echo $post['date'] ?>, <?php echo $post['content'] ?>,
                            <?php echo $post['author_name'] ?></li>
                    <?php endforeach;
                    ?>
                </ol>
        </fieldset>

    </form>
</div>
</body>
</html>