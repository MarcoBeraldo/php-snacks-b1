<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$posts_date = array_keys($posts);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack3</title>
</head>
<body>
  

  <?php for($i = 0; $i < count($posts); $i++) : ?>
  <?php for($j = 0; $j < count($posts[$posts_date[$i]]); $j++) : ?>
  
  <div>
    <h2><?php echo $posts[$posts_date[$i]][$j]["title"] ?></h2>
    <span><?php echo $posts[$posts_date[$i]][$j]['author'] . " " . $posts_date[$i] ?></span>
    <br />
    <p><?php echo $posts[$posts_date[$i]][$j]['text'] ?></p>
  </div>
  

  <?php endfor; ?>
  <?php endfor; ?>
</body>
</html>