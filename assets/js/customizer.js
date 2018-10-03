;(function ($) {
    wp.customize('cust_services_heading', function (value) {
        value.bind(function (newvalue) {
            $("#service-heading").html(newvalue);
        });
    });

    wp.customize('cust_services_icon_color', function (value) {
        value.bind(function (newvalue) {
            $(".service i").css("color", newvalue);
        });
    });
    wp.customize('_cs_customize_options[about_heading]',function(value){
        value.bind(function(newvalue){
            $("#service-heading").html(newvalue);
        });
    });
})(jQuery);



