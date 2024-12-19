<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way ($array, $order) {
          // TRUE：昇順／FALSE：降順;
          // 「昇順ソート」「降順ソート」の順番に2回呼び出し

          if ($order == TRUE) {
            echo '昇順にソートします。<br>';
            sort($array);
            foreach ($array as $value) {
              echo $value . '<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            rsort($array);
            foreach ($array as $value) {
              echo $value . '<br>';
            }
          }
        }

        sort_2way($nums, TRUE);

        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
