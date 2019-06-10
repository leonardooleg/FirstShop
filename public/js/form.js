    $(document).ready(function() {
        $(".btn-success").click(function(){
            var lsthmtl = $(".clone").html();
            $(".increment").after(lsthmtl);
        });
        $("body").on("click",".btn-danger",function(event){
            event.preventDefault();
            $(this).parents('.hdtuto').remove();
        });
    });
