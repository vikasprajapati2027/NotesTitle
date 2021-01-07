<?php
#INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'but t shirt', 'for market good quality t shirt ', current_timestamp());
#echo"Welcome to the stage";
#INSERT INTO `notestitle` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'how to buy book', 'go to market and which book is best for yout study u can buy', current_timestamp());

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database ="notes";
//Connection 
$conn = mysqli_connect($servername, $username, $password,$database);

#$sql="CREATE TABLE `phptrip` ( `sno` INT(30) NOT NULL , `name` VARCHAR(30) NOT NULL , `dest` VARCHAR(30) NOT NULL , PRIMARY KEY (`sno`))";
#$result=mysqli_query($conn,$sql);

  if(!$conn)
  {
      die("Soory we failed to connect:".mysqli_connect_error());
    }

    
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notestitle` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
    #echo $_server['REQUEST_METHOD'];
      if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    #echo"$_server";
    if(isset( $_POST['snoEdit'])) 
    {
      //update record
      $sno=$_POST["snoEdit"];
      $title=$_POST["titleEdit"];
      $description=$_POST["descriptionEdit"];
      $sql="UPDATE `notestitle` SET `title` = '$title', `description` = '$description' WHERE `notestitle`.`sno` = '$sno'";
      $result=mysqli_query($conn, $sql);
      }
      else
      {
    


    
    $title=$_POST["title"];
$description=$_POST["description"];
$sql="INSERT INTO `notestitle` ( `title`, `description`) VALUES ( '$title', '$description')";
#INSERT INTO `notestitle` ( `title`, `description`,) VALUES (mestamp());

$result=mysqli_query($conn,$sql);
echo"successfully";
  if($result)
  {
       echo" the record has been inserted succsfully <br>";
  }
  else{
      echo"The record was not inserted beacause of this error";
  }
      }
  }

  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
    <title>INotes - Notes taking made easy</title>
   
  </head>
  <body>
 <!-- Button trigger modal -->
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...

        <!-- form -->
        <form action="/crudphp/index.php" method="POST">
            <input type="hidden" name="snoEdit" id= "snoEdit">
            <div class="mb-3">
              <label for="title" class="form-label">Notes title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
          
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Password</label>
              <input type="text" class="form-control" id="descriptionEdit" name="descriptionEdit">
            </div>
           
            <button type="submit" class="btn btn-primary">Update Note</button>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PHP CRUD</a>
          <img src="ss.jpg" width="30" height="30">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

        <div class="container my-4">
            <h3>Add a Notes</h3>
           
           
            <form action="/crudphp/index.php" method="POST">
            
  <div class="mb-3">
    <label for="title" class="form-label">Notes title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Password</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
 
  <button type="submit" class="btn btn-primary">Add Notes</button>
</form>
        </div>

        <div class="container">
     

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php
         
         $sql="SELECT * FROM `notestitle`";
         $result=mysqli_query($conn,$sql);
         $num= mysqli_num_rows($result);
      
          if($num> 0)
          {
            $sno=0;
          while($row = mysqli_fetch_assoc($result)){
            $sno=$sno+1;
           echo" <tr>
          
            <th scope='row'>".$sno ."</th>
            <td>".$row['title']."</</td>
            <td>".$row['description']."</</td>
            <td> <button class='edit btn btn-sn btn-primary' id=".$row['sno'].">Edit</button>
            <button class='delete btn btn-sn btn-primary' id=d".$row['sno'].">Delete</button></td>
          </tr>";
            # echo $row['sno']."Title".$row['title']."Description".$row['description'];
            # echo "<br>"; 
          }
         
         }
                 
                 ?>
    
    
  </tbody>
</table>
        </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

<script>
    edit = document.getElementsByClassName('edit');
    Array.from(edit).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("Edit ",);
        tr=e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value=title;
        descriptionEdit.value=description;
        snoEdit.value=e.target.id;
       console.log(e.target.id);
        $('#editModal').modal('toggle');
      })
    })


    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crudphp/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
    
    </script>
   
  </body>
</html>