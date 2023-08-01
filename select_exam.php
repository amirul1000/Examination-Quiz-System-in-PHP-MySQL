<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
?>
<?php
include "connection.php";
include "layout-member/header.php";
?>

    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;min-height: 500px; background-color: white;">

    
            <div class="row">

                <div class="col-md-12">
                <h3>Select Exam Category</h3>
                </div>
            </div>    
             <div class="row">

                <div class="col-md-12">
               <ul class="list-group">
                <?php
                $res=mysqli_query($link,"select * from exam_category");
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <li class="list-group-item">
                       <input type="button" class="btn btn-success form-control" value="<?php echo $row["category"]; ?>" style=" background-color: blue; color: white" onclick="set_exam_type_session(this.value);">

                    </li>
                    <?php
    
                }
                ?>
               </ul>
               </div>
            </div>
     </div>
    
<?php
include "layout-member/footer.php";
?>

<script type="text/javascript">
    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ exam_category,true);
        xmlhttp.send(null);
    }
</script>
