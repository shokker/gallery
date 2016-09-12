/**
 * Created by Lukas on 12.9.2016.
 */


$(document).ready(function () {
    $('.background-img').hide();



    $('.image').hover(function(){
        console.log($(this).attr('id'));
        $('.background-img').css('background-image', 'url('+$(this).attr('id')+')');
        $('.background-img').fadeIn();
        $(this).next().css('background-color','#fff');

    },function(){
       // $(this).next().fadeOut();
        $('.background-img').fadeOut();
        $(this).next().css('background-color','transparent');
        //$('body').css('background-image', 'none');
    });



});