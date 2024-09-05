<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
<p>
  <?php
 
  function sort_2way($array, $order) {
    if ($order){
      sort($array);
    } else {
      rsort($array);
    }
    return $array;
  }

$nums = [15, 4, 18, 23, 10];

$sortAsc = sort_2way($nums, true);
 echo '昇順にソートします。<br>';
 foreach ($sortAsc as $num) {
   echo $num. '<br>';
 }
    
$sortDesc = sort_2way($nums, false);
 echo '降順にソートします。<br>';
 foreach ($sortDesc as $num){
   echo $num. '<br>';
 }


  ?>
  </p>
  </body>
</html>