/**
 * Created by Lukas on 12.9.2016.
 */


$(document).ready(function () {



    $('.image').hover(function(){
        console.log($(this).attr('id'));
        $('.background-img').css('background-image', 'url('+$(this).attr('id')+')');
        $('.background-img').fadeIn();

    },function(){
       // $(this).next().fadeOut();
        $('.background-img').fadeOut();
        //$('body').css('background-image', 'none');
    });



});