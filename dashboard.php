<?php
session_start();
include "layout-member/header.php";
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
?>


    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;min-height: 500px; background-color: white;">
           
            <!-- start editing-->
            <br>
            <div class="row">

                <div class="col-md-12">
                      <span class="badge badge-secondary">
                        <div id="current_que" style="float:left">0</div>
                        <div style="float:left">/</div>
                        <div id="total_que" style="float:left">0</div>
                     </span>
                     
                       <ul style="list-style-type:none;float:right;" class="breadcome-menu">
                            <li>
                               <div id="countdowntimer" style="display: block;"></div> 
                            </li>
                        </ul>
                </div>
                

                <div  class="col-md-12">
                       <div class="card">
                        <div class="card-body" style="box-shadow: 10px 10px lightblue;">
                   
                        <div id="load_questions"></div>
                        
                        </div>
                        </div>
     

                </div>

                <div  class="col-md-12">

                    
                            <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                            <input type="button" class="btn btn-success" value="Next" onclick="load_next();">



                </div>


            </div>

            <!-- end her editing-->



    </div>


<script type="text/javascript">
    function load_total_que()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_total_que.php",true);
        xmlhttp.send(null);
    }

    var questionno="1";
    load_questions(questionno);

    function load_questions(questionno)
    {
        document.getElementById("current_que").innerHTML=questionno;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="over")
                {
                    window.location="result.php";
                }
                else{
                    document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                    load_total_que();

                }


            }
        };
        xmlhttp.open("GET","forajax/load_questions.php?questionno="+ questionno,true);
        xmlhttp.send(null);

    }

    function radioclick(radiovalue,questionno)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            }
        };
        xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+ questionno +"&value1="+radiovalue,true);
        xmlhttp.send(null);

    }

    function load_previous()
    {
       if(questionno=="1")
       {
           load_questions(questionno);
       }
        else{
           questionno=eval(questionno)-1;
           load_questions(questionno);
       }
    }

    function load_next()
    {
        questionno=eval(questionno)+1;
        load_questions(questionno);
    }
	
	
	//$( document ).ready(function() {
    setInterval(function(){
        timer();
    },1000);
	
//});	
	
    function timer()
    {
		 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;

            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
    }


</script>


<?php
include "layout-member/footer.php";
?>