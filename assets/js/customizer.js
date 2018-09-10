;(function ($) {
    wp.customize('cust_services_heading', function (value) {
        value.bind(function (newvalue) {
            $("#service-heading").html(newvalue);
        });
    });

    wp.customize('cust_services_icon_color',function(value){
        value.bind(function(newvalue){
            $(".service i").css("color",newvalue);
        });
    })
})(jQuery);