<style>
  <?php 
   include 'css/pagination.css';
   ?>
</style>
<?php  

 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "", "redstoneshop");  
 $record_per_page = 12;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM products ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);   
while($row = mysqli_fetch_array($result))  
{  
  $output .= '  
  <div class="col-md-3">
  <h4> '.$row['title'].'</h4> 
  <img src="'.$row['image'].'" id="images" data-toggle="modal" data-target="#details-1"/>
  <p class="list-price text-danger">List Price: <s>'.$row['list_price'].' </s></p>
  <p class="price">Our price$'.$row['price'].' </p>
  <a href="item.php" class="btn btn-danger" role="button" aria-pressed="true">Details</a>
  </div>
  
      ';
  /*
  $output .= '  
  <div class="col-md-3">
  <h4> '.$row['title'].'</h4> 
  <img src="'.$row['image'].'" id="images" data-toggle="modal" data-target="#details-1"/>
  <p class="list-price text-danger">List Price: <s>'.$row['list_price'].' </s></p>
  <p class="price">Our price$'.$row['price'].' </p>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button> 
  </div>
  
      ';*/
     /* $output .= '  
           <tr>  
                <td>'.$row["firstname"].'</td>  
                <td>'.$row["lastname"].'</td>  
           </tr>  
      ';  */

 }  
 $output .= '<br /><div class="pagination_container" align="center" >';  
 $page_query = "SELECT * FROM products ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  
