<?php
include "conn.php";
session_start();
if(isset($_SESSION['admin_id'])) 
{
    include "header.php";

$query="select * from coupon";
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
						<li class="breadcrumb-item"><a href="#">Coupons</a></li>
					</ol>
                </div>


                <div class="row">

                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a href="addcoupon.php">
                                    <button type="button" class="btn btn-rounded btn-info">
                                        <span class="btn-icon-start text-info">
                                            <i class="fa fa-plus color-info"></i></span>Add
                                    </button>
                                    </a>

                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Percantage</th>
                                                <th>Details</th>
                                                <th>Code</th>
                                                <th>Link</th>
                                                <th>Category</th>
                                                <th>Coupon Type</th>
                                                <th>Store</th>
                                                <th>Top</th>
                                                <th>Special Offers</th>
                                                <th>Special Offers Banner Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <?php while($row=mysqli_fetch_array($result))
        {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo"<td>".$row['id']."</td>";
                                        echo"<td>".$row['percent']."</td>";
                                        echo"<td>".$row['details']."</td>";
                                        echo"<td>".$row['code']."</td>";
                                        echo"<td>".$row['link']."</td>";
                                        $queryc="select * from category where id=".$row['category'];
                                        $resultc=mysqli_query($conn,$queryc);
                                        $rowc=mysqli_fetch_row($resultc);
                                        echo"<td>".$rowc[1]."</td>";
                                        $queryct="select * from coupontype where id=".$row['coupontype'];
                                        $resultct=mysqli_query($conn,$queryct);
                                        $rowct=mysqli_fetch_row($resultct);
                                        echo"<td>".$rowct[1]."</td>";
                                        $querys="select * from store where id=".$row['store'];
                                        $results=mysqli_query($conn,$querys);
                                        $rows=mysqli_fetch_row($results);
                                        echo"<td>".$rows[1]."</td>";
                                        echo"<td>".$row['top']."</td>";
                                        echo"<td>".$row['offer']."</td>";
?>
                                        <td><img class="rounded-circle" width="50" src='data:image/gif;base64,<?php echo base64_encode($row[10]);?>' alt="Special Offer Banner Image"></td>
<?php
                                                    echo "<td><div class='d-flex'>";
                                                        echo "<a class='btn btn-primary shadow btn-xs sharp me-1' href='editcoupon.php?id=".$row['id']."'><i class='fas fa-pencil-alt'></i></a>";
                                                        echo "<a class='btn btn-danger shadow btn-xs sharp' href='deletecoupon.php?id=".$row['id']."'><i class='fa fa-trash'></i></a>";
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