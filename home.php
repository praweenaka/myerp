<?php
include './CheckCookie.php';
require_once ('connection_sql.php');
$cookie_name = "user";
if (isset($_COOKIE[$cookie_name])) {
    $mo = chk_cookie($_COOKIE[$cookie_name]);
    if ($mo != "ok") {
        header('Location: ' . "index.php");
        exit();
    }
} else {
    header('Location: ' . "index.php");
    exit();
}
$mtype = "";
include "header.php";

if (isset($_GET['url'])) {



    if ($_GET['url'] == "new_user") {
        include_once './new_user.php';
    }
    if ($_GET['url'] == "user_permission") {
        include_once './user_permission.php';
    }
    if ($_GET['url'] == "change_pass") {
        include_once './change_pass.php';
    }
    if ($_GET['url'] == "addfiles") {
        include_once './addfiles.php';
    }
    if ($_GET['url'] == "fileview") {
        include_once './fileview.php';
    }
    if ($_GET['url'] == "accountants") {
        include_once './accountants.php';
    }


//////////////////////////////////


} else {
    include_once './fpage.php';
}
include_once './footer.php';
?>

</body>
</html>


<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script  type="text/javascript">

</script>
<script type="text/javascript">
    $(function () {
        $('.dt').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
<?php
include './autocomple_gl.php';
?>


<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- <script src="js/comman.js"></script> -->


<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>   
<script>

// $(function() {
// 	FastClick.attach(document.body);
// });
$(function () {
    $(document).ready(function () {
        $('#approveCombo').multiselect();
    });
});

</script>
<!-- AdminLTE App -->
<script src="bootstrap/dist/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="bootstrap/dist/js/demo.js"></script>
<script src="js/user.js"></script>




<script>
    $("body").addClass("sidebar-collapse");
</script>    

<script>
    var myVar = setInterval(myTimer, 1000);

    function myTimer() {

        var d = new Date();
//   var dd = d.toLocaleDateString();
var tt = d.toLocaleTimeString();
document.getElementById("time").innerHTML = tt;
}

</script>