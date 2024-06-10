
<title> Books</title> 
<?php 
		session_start();
        if (!isset($_SESSION["username"])) {
            ?>
                <script type="text/javascript">
                    window.location="../../admin-login.php";
                </script>
            <?php
        }
        include '../../inc/header.php';
        include '../../inc/connect.php';
?>

<style>
    #bo{
        padding:20px;
        text-align: center;
    }
    </style>

<div class="home">
    <h1 id=bo> BOOKS </h1>
    <!-- TODO: DESIGN BUTTON ADD & SEARCH BAR WITH SUGGESTION  -->

    <ul class="nav-search-add">
        <li><a id="add-book-modal">ADD Book</a></li>
        <li><a id="add-category-modal">ADD Category</a></li>
        <li class="li2"><form action=""><input type="text" name="search-books" id="search-books" placeholder="SEARCH" style="border-right:thin solid black;"><i class="fas fa-search"></i></form></li>
    </ul>

    <!-- THIS IS MODAL FOR ADD BOOKS -->

    <div id="modal_container_book" class="modal-container-book">
            <div class="modal-content-book">
                    <h3 class="book_table_add">ADD BOOK</h3><br>
                    <hr style="height:3px;background-color:black;border:none;">
                        <form action="add-book.php" method="post" class="form-books" enctype="multipart/form-data">
                            <div class="flex-container">
                                   <div class="container1">
                                    <label for="f1">BOOK NAME</label><br>
                                        <input type="text" class="form-control" name="booksname" placeholder="Book name" required=""><br>
                                        <label for="f1">BOOK COVER</label><br>
                                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="f1" required=""><br>
                                        
                                        
                                    </div>
                                    <div class="container2">
                                    <label for="f1">BOOK CATEGORY</label><br>
                                    <select name="bcategory" id="">
                                            <option value="">SELECT CATEGORY</option> <br>
                                            <?php
                                            $sql = "SELECT * FROM category ORDER BY id asc";
                                            $categories = mysqli_query($conn, $sql);
                                                while ($category = mysqli_fetch_array($categories)) {
                                                ?>
                                                    <option value="<?php echo $category['category']?>"><?php echo $category['category']?></option>';
                                            <?php
                                                }
                                            ?>
                                        </select><br>
                                    
                                        <label for="f1">BOOK PRICE</label><br>
                                        <input type="text" class="form-control" name="bprice" placeholder="Book price" required=""><br>
                                        <label for="f1">AVAILABILITY</label><br>
                                        <input type="text" class="form-control" name="bavailability" placeholder="Book availability" required=""><br><br>
                                    
                                        <button type="button" id="c-add-book">Close</button>
                                        <input type="submit" name="add-submit" id="btn-add" value="Add Book">

                                </div>
                            </div>

                        </form>
                    <br><br>
                    <script src="../../assets/JS/f-add-book.js"></script>
            </div>
    </div>

     <!-- THIS IS MODAL FOR ADD CATEGORY -->


    <div class="modal_container_category" id="modal_container_category">
        <div class="modal-content-category">
        <h3 class="book_table_add">ADD BOOK NAME</h3><br>
                    <hr style="height:3px;background-color:black;border:none;">
                    <form action="add-category.php" method="post" class="form-category" enctype="multipart/form-data">
                        <label for="category">CATEGORY NAME</label><br>
                        <input type="text" name="category_name" id="id"><br><br>
                        <button type="button" id="c-cat-book">Close</button>
                        <input type="submit" name="category" id="btn-cat" value="Add Category">
                    </form>
                    <script src="../../assets/JS/f-add-category.js"></script>
        </div>
    </div>
 

	<!--Read Book Table area-->
    <!-- FIXME: need ug edit sa table , kuhaan -->
    <br><br>
    <div id="result"></div>
    <script>
            $(document).ready(function(){

                load_data();

                    function load_data(query)
                        {
                            $.ajax({
                                    url:"auto-search.php",
                                    method:"POST",
                                    data:{query:query},
                                    success:function(data)
                                    {
                                        $('#result').html(data);
                                    }
                                });
                        }
                    $('#search-books').keyup(function(){
                        var search = $(this).val();
                            if(search != '')
                                {
                                    load_data(search);
                                }
                                else
                                {
                                    load_data();
                                }
                            });
                        });
        </script>



</div>