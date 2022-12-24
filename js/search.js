$(document).ready(function(){

    $btn= $('.button');
    $form = $('.ajax_form');
    $departure = $('.departure');
    $arrival = $('.arrival');
    $.each($btn, function(){
        $(this).bind('click', function(){
            sendAjaxForm( 'search.php',$($departure).val(), $($arrival).val() );
            console.log($($departure).val());
            console.log($($arrival).val());
             return false;
        })
    })
});
function sendAjaxForm(url,$departure, $arrival, ){
    $.post(url, {"departure": $departure, "arrival": $arrival}).done(
        function(data){
            $('.ajax_form').html(data);
        }
    );
}