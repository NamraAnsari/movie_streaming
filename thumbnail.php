<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>NNS Movies</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="movieName" placeholder="Movie Name">
            <input type="text" name="movieGenre" placeholder="Genre">
            <textarea name="movieSummary" rows="8" cols="80" placeholder="Add Summary"></textarea>
            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </body>
</html>
