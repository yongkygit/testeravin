<?php $data = 'http://localhost/erp/'; ?>
var idleTime = 0;
$(document).ready(function () {
	
	
	$("#p1").mouseenter(function(){
        alert("<?php echo $data?>");
    });
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
         window.location.assign("run");
    }
}