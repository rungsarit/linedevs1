<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
<title>DATA&REPORT EAS S.1</title>
<!-- css -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="tagsinput.css" rel="stylesheet" type="text/css">
<script src="tagsinput.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<style type="text/css">
@media print{
.print_text {
	font-size:26px;
	font-family:"Angsana New";
}
}
#container-fluid{
margin-bottom: 10px;
}
.table-responsive{
  display: block;
  max-height: 500px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

</style>
</head>
<body>
    <?php
     require('../db/connect-db.php');
     $sql_tdd = "SELECT * FROM tbl_tdd ";
     $query_tdd = mysqli_query($conn,$sql_tdd);
        
    ?>

<div class="w3-container w3-lime ">
    <div class="w3-row">
        <div class="w3-col w3-container m10 l12 w3-center">  
            <h1>DATA&REPORT EAS S.1</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ลำดับที่</th>
                                <th scope="col">เลขที่อนุมัติ</th>
                                <th scope="col">วันที่อนุมัติ</th>
                                <th scope="col">ปีที่เปิดงาน</th>
                                <th scope="col">ผู้รับผิดชอบ</th>
								<th scope="col">พื้นที่</th>
								<th scope="col">WBS</th>
								<th scope="col">สถานะงาน</th>
								<th scope="col">ชื่องาน</th>
								<th scope="col">วงจร-กม.</th>
								<th scope="col">วงจร-กม.(ผล)</th>
								<th scope="col">เปอร์เซนต์</th>
                                                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $a = 1 ;
				                while($objectresult = mysqli_fetch_array($query_tdd))
				                    {
                                        echo "<tr>";
                                        echo "<td>".$a."</td>";
                                        echo "<td>".$objectresult["approve"]."</td>";
                                        echo "<td>".$objectresult["date"]."</td>";
                                        echo "<td>".$objectresult["year"]."</td>";
										echo "<td>".$objectresult["oper"]."</td>";
										echo "<td>".$objectresult["area"]."</td>";
										echo "<td>".$objectresult["wbs"]."</td>";
										echo "<td>".$objectresult["status"]."</td>";
										echo "<td>".$objectresult["name"]."</td>";
										echo "<td>".$objectresult["work_load"]."</td>";
										echo "<td>".$objectresult["finish"]."</td>";
										echo "<td>".$objectresult["percent"]*100 ."</td>";
                                        echo "</tr>";
					                    $a = $a+1;
					                }			
				                    $a = 0;
                            ?>                            
                        </tbody>
                    </table>
                </div>
        </div>
    </div>   
</div>

</body>
</html>