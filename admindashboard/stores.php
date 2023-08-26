<?php
include "conn.php";
session_start();
if(isset($_SESSION['admin_id'])) 
{
    include "header.php";

$query="select * from store";
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
						<li class="breadcrumb-item"><a href="#">Store</a></li>
					</ol>
                </div>


                <div class="row">

                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a href="addstore.php">
                                    <button type="button" class="btn btn-rounded btn-info">
                                        <span class="btn-icon-start text-info">
                                            <i class="fa fa-plus color-info"></i></span>Add
                                    </button>
                                    </a>
                                </h4>
                                <div class="input-group search-area" style="width: 600px;">
                                    <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Store Image</th>
                                                <th>Store Name</th>
                                                <th>Slug</th>
                                                <th>No of Coupons</th>
                                                <th>No of Deals</th>
                                                <th>Tops</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <?php while($row=mysqli_fetch_array($result))
        {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo"<td>".$row['id']."</td>";
                                        ?>
                                        <td><img class="rounded-circle" width="50" src='data:image/gif;base64,<?php echo base64_encode($row[2]);?>' alt="Category Image"></td>
                                        <?php
                                        echo"<td>".$row['name']."</td>";
                                        echo"<td>".$row['slug']."</td>";
                                        $queryc="select count(*) from coupon where coupontype=1";
                                        $resultc=mysqli_query($conn,$queryc);
                                        $rowc=mysqli_fetch_row($resultc);
                                        echo "<td>" . $rowc[0] . "</td>";
                                        $queryc="select count(*) from coupon where coupontype=4";
                                        $resultc=mysqli_query($conn,$queryc);
                                        $deal=mysqli_fetch_row($resultc);
                                        echo "<td>" . $deal[0] . "</td>";
                                        echo"<td>".$row['top']."</td>";
                                    ?>
<?php
													echo "<td><div class='d-flex'>";
                                                        echo "<a class='btn btn-primary shadow btn-xs sharp me-1' href='editstore.php?id=".$row['id']."'><i class='fas fa-pencil-alt'></i></a>";
                                                        echo "<a class='btn btn-danger shadow btn-xs sharp' href='deletestore.php?id=".$row['id']."'><i class='fa fa-trash'></i></a>";
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


<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const table = document.getElementById("example3");
    const tableRows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

    searchInput.addEventListener("input", function() {
        const searchText = searchInput.value.toLowerCase();

        for (let i = 0; i < tableRows.length; i++) {
            const storeNameCell = tableRows[i].getElementsByTagName("td")[2];
            const storeName = storeNameCell.textContent || storeNameCell.innerText;

            if (storeName.toLowerCase().indexOf(searchText) > -1) {
                tableRows[i].style.display = "";
            } else {
                tableRows[i].style.display = "none";
            }
        }
    });
});
</script>
