
<?php include 'insert.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles.css">
  
  <title>Document</title>
</head>
<body>
<div class="wrapper">
  <form method="post">
  <div>
    <input type="text" placeholder="Search Items" name="search" />
  <button type="submit" name="submit">Search</button></div>
</form>  
<div class="table-component">
  <table class="table">
    <?php 
      if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $sql ="Select * from `mytable` where  ID_bonnes_pratiques  ='$search'";
        $result = mysqli_query($con,$sql);
        if($result){
          $num = mysqli_num_rows($result);
          if($num > 0){
            echo "<thead>
            <tr> 
            <th> People </th>
            <th> Recommandation </th>
            <th> Criteria </th>
            </tr>
            </thead>";
            $row = mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
            <td>'.$row['People'].'</td>
            <td>'.$row['Recommandation'].'</td>
            <td>'.$row['Criteres'].'</td>
            </tr>
            </tbody>';
          }
          else{
            echo '<h2>DATA NOT FOUND</h2>';
          }
           
        }
      }
    ?>
  </table>
</div>
</body>
</html>
