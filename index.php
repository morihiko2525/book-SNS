<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>テストページです</title>
    </head>
    <body>
        <p>IT WORKS!</p>
        <div class = "form-group">
        <label class="col-sm-2 control-label">項目1</label>
          <div class="col-sm-10">
            <input class="form-control" type="text">
          </div>
        </div>
        <?php print"a";?>
        <?php 
        $data = "https://www.googleapis.com/books/v1/volumes?q=死ぬこと以外";
        $json = file_get_contents($data);
        $json_decode = json_decode($json);
        
        // jsonデータ内の『entry』部分を複数取得して、postsに格納
        $posts = $json_decode->items;
        var_dump($posts);
        ?>
    </body>
</html>