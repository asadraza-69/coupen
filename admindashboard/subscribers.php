<?php
include "conn.php";
session_start();
if(isset($_SESSION['admin_id'])) 
{
    include "header.php";

$query="select * from subscribe";
$result=mysqli_query($conn,$query);

?>
		<!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
						<!-- <li class="breadcrumb-item"><a href="categories.php">Categories</a></li> -->
						<li class="breadcrumb-item"><a href="#">Subscribers</a></li>
					</ol>
                </div>


                <div class="row">

                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Subscribers
<!--                                    <a href="addcoupontype.php">
                                    <button type="button" class="btn btn-rounded btn-info">
                                        <span class="btn-icon-start text-info">
                                            <i class="fa fa-plus color-info"></i></span>Add
                                    </button>
                                    </a>
-->
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subscribers</th>
  <!--                                              <th>Action</th> -->
                                            </tr>
                                        </thead>
                                    <?php while($row=mysqli_fetch_array($result))
        {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo"<td>".$row['id']."</td>";
                                        echo"<td>".$row['email']."</td>";
										echo "<td><div class='d-flex'>";
//                                        echo "<a class='btn btn-primary shadow btn-xs sharp me-1' href='editcoupontype.php?id=".$row['id']."'><i class='fas fa-pencil-alt'></i></a>";
//                                        echo "<a class='btn btn-danger shadow btn-xs sharp' href='deletecoupontype.php?id=".$row['id']."'><i class='fa fa-trash'></i></a>";
									    echo "</div>";
                                        echo "</td>";												
    
?>
                                            </tr>
                                        </tbody>
                                        <?php
        }
        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
</div>
</div>
<?php
include "footer.php";
}else{
    ?>
    <a href="index.php"><button>Login First</button></a>
    <?php
  }
?>