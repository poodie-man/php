<?php
include('headerfooter/header.php');
include('sidebar.php');

include('../class/category.class.php');


//  $categoryObject = new Category();
 $category = new Category();
 if (isset($_POST['submit'])){
    $category->set('name', $_POST['name']);
    $category->set('rank', $_POST['rank']);
    $category->set('status', $_POST['status']);
    $category->set('created_by', $_SESSION['id']);
    $category->set('created_date', date('Y-m-d H:i:s'));

    
    $result=$category->save();
    if(is_integer($result)){
        $msg="Category inserted successfulllt with id ".$result;

    }else{
        $msg="";
    }
    
    

 }



$error = [];

/*----- Class End ------*/

    // VAlidation Part

    if(isset($_POST['submit'])){
        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $categoryObject->name = $_POST['name'];
          } else {
              $error['name'] = "This field is required!";
          }
          if(isset($_POST['rank']) && !empty($_POST['rank'])) {
            $categoryObject->rank=$_POST['rank'];
          } else {
              $error['rank'] = "This field is required!";
          }
  
    }

?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <div class="col-lg-6">
                <?php  if(isset($msg)){ ?>
                    <div class ="alert alert-success"><?php echo $msg; ?></div>

                <?php } ?>
                                    <form role="form" method="post" noValidate>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                            <small style="font-size: 1.5rem;
                                                 font-weight: 500;
                                                 color: red;"><?php if(isset($error['name'])){echo $error['name'];}?></small>
                                        <div class="form-group">
                                            <label>Rank</label>
                                            <input class="form-control" placeholder="Enter rank" type="text" name="rank">
                                            <small style="font-size: 1.5rem;
                                                font-weight: 500;
                                                color: red;"><?php if(isset($error['rank'])){echo $error['rank'];}?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="optionsRadios1" value="1" checked>Active
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="optionsRadios2" value="0">Inactive
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success" value="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   <?php
    include('headerfooter/footer.php');
   ?>