<?php
if (isset($pageJS)){
    foreach ($pageJS as $key => $value){
        echo '<script type="text/javascript" src="js/'.$value.'?'.filemtime('js/'.$value).'"></script>';
    }
}
?>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- <script src="js/bootstrap/bootstrap.bundle.min.js"></script> -->
<script>
    function func(){
        // var prog = this.value;
       
        var prog = document.getElementById("prog").value;
        
        opt  = $.ajax({
            type: "POST",
            url: "api/getdropdown.php",
            data: {'prog':prog},
            async: false,
            dataType: "json",
            });
        console.log(opt) ;
            
        var element = document.getElementById("moreopt");
        element.classList.remove("dn");
        document.getElementById('moreopt').innerHTML = opt.responseText;
        
        }

    // function sub(){
    //     var formData = {
    //     name: $("#first_name").val(),
    //     last: $("#last_name").val(),
    //     email: $("#your_email").val(),
    //     prog: $("#prog").val(),
    //     phone: $("#phone").val(),
    //     };
    //     $.ajax({
    //     type: "POST",
    //     url: "api/register.php",
    //     data: formData,
    //     dataType: "json",
    //     encode: true,
    //     }).done(function (data) {
    //     console.log(data);
    //     $( ".page-content" ).load( "welcome.php" );
    //     });
    // }

</script>

<script>
$(document).ready(function(){
  $("form").submit(function(){
    debugger;
    var course =  $("#courses").val();
    var formData = {
        
        name: $("#first_name").val(),
        last: $("#last_name").val(),
        email: $("#your_email").val(),
        prog: $("#prog").val(),
        courses: $("#courses").val(),
        phone: $("#phone").val()
        };
        $.ajax({
        type: "POST",
        url: "api/register.php",
        data: formData,
        dataType: "json",
        encode: true,
        async: false,
        }).done(function (data) {
        // console.log(data);
        $(".page-content").load("welcome.php" );
        });

  });
});
</script>

</body>
</html>