	<!--dashboard area-->
<table id="dtBasicExample" class="table table-striped table-dark text-center">
    <thead>
        <tr>
           <th>Book image</th>
           <th>Books</th>
           
           <th>Price</th>
           <th>Books availability</th>
           
           <th>Category</th>
           <th>Action</th>
        </tr>
      </thead>
       
       <tbody>
            <?php
            include '../connect.php';
            $res = mysqli_query($conn, "select * from `add-books`");
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>";
                echo $row["books_name"];
                echo "</td>";
                echo "<td>";
               
                echo $row["books_price"];
                echo "</td>";
                echo "<td>";
                echo $row["books_availability"];
                echo "</td>";
                echo "<td>";
                
                echo $row["category"];
                echo "</td>";
                echo "</tr>";
                    }
                ?>
        </tbody>
</table>