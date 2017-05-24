var idleTime = 0;

<?php 
function base_url()
{
   $basepath= "http://localhost/erp/";
   return $basepath;
}
?>

$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 1) { // 15 minutes
         window.location.assign("<?php echo base_url()."index.php/Login/"; ?>");
    }
}