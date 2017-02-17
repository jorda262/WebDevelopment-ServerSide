<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Chapter 4</title>
   <link rel="stylesheet" href="paintings.css" />
</head>
<body>
<div id="artistBox">
   <table>
      <caption>Paintings</caption>
      <thead>
         <tr>
            <th colspan="2"></th>
            <th scope="col">Title</th>
            <th scope="col">Artist</th>
            <th scope="col">Year</th>
            <th scope="col">Genre</th>
            <th>Painting Summary</th>
         </tr>
      </thead>
      <tbody>
         <?php
          include 'paint.class.php';
          $paint1 = new Paint("images/05030.jpg", "Death of Marat", "David, Jacques-Louis", "1793", "Romanticism");
          $paint2 = new Paint("images/120010.jpg", "Portrait of Eleanor of Toledo", "Bronzino, Agnolo", "1545", "Mannerism");
          $paint3 = new Paint("images/07020.jpg", "Liberty Leading the People", "Delacroix, Eugene", "1830", "Romanticism");
          $paint4 = new Paint("images/13030.jpg", "Arrangement in Grey and Black", "Whistler, James Abbott", "1871", "Realism");
          $paint5 = new Paint("images/06010.jpg", "Mademoiselle Caroline Riviere", "Ingres, Jean-Auguste ", "1806", "Neo-Classicism");
          $paintingsArray = array($paint1, $paint2, $paint3, $paint4, $paint5);
          foreach ($paintingsArray as $painting)
          {
            $image = $painting->getImgName();
            $title = $painting->getTitle();
            $artist = $painting->getArtist();
            $year= $painting->getYear();
            $genre = $painting->getGenre();
            $description = $painting->__toString();
            $uid = $painting->getPaintID();
            echo "<tr><td><input type='checkbox' name='index[]' value='$uid' /></td>
                      <td scope='col'><img src=$image></td><td id='italics' scope='col'>$title</td>
                      <td scope='col'>$artist</td><td scope='col'>$year</td><td scope='col'>$genre</td>
                      <td scope='col'>$description</td></tr>";
          }
         ?>
      </tbody>
   </table>
</div>
</body>
</html>
