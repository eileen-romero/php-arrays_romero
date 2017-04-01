<?php
  $company = 'Disney';
  $title = 'Eileen\'s Diseny Pixar array - Exercise 8';
  $topic = 'Movies';
  $franchise = 'Pixar';

  // Let's create a simple array
  $movies = array(
    'Toy Story',
    'A bug\'s Life',
    'Toy Story 2',
    'Monsters, Inc.',
    'Finding Nemo',
    'The Incredibles',
    'Cars',
    'Ratatouille',
    'Wall-E',
    'UP',
    'Toy Story 3',
    'Cars 2',
    'Brave',
    'Monsters University',
    'The Good Dinosaur',
    'Inside Out',
    'Finding Dory'

  );

  // Let's create an associative array
  $movieYears = array(
    'Toy Story' => 1995,
    'A bug\'s Life' => 1998,
    'Toy Story 2' => 1999,
    'Monsters, Inc.' => 2001,
    'Finding Nemo' => 2003,
    'The Incredibles' => 2004,
    'Cars' => 2006,
    'Ratatouille' => 2007,
    'Wall-E' => 2008,
    'UP' => 2009,
    'Toy Story 3' => 2010,
    'Cars 2' => 2011,
    'Brave' => 2012,
    'Monsters University' => 2013,
    'The Good Dinosaur' => 2015,
    'Inside Out' => 2015,
    'Finding Dory' => 2016
  );

  // Count how many items are stored in the array $movies
  $moviesLength = count($movies);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $moviesLength; ?> movies in the <em><?php echo $franchise; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movies as $movie) {
              echo '<li class="list-group-item">'.$movie.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> movie is <em><?php echo $movies[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> movies were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movieYears as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>