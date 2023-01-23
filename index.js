// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
        var zillowStep = document.getElementById('zillowStep').style.display="none";
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });


    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        
        var zillowStep = document.getElementById('zillowStep').style.display="none";
        if(active.next().is('.zillow')){
           active = active.next();
           active.next().next().removeClass('disabled'); 
          
        }else{
          active.next().removeClass('disabled'); 
        }
        nextTab(active);
        
    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');

        if(active.prev().is('.zillow')){
           active = active.prev();
           active.prev().prev().removeClass('disabled'); 
          
        }else{
          active.prev().removeClass('disabled');
        }

        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});



$("#mySelect").change(function(){
    if( $(this).val() == "Interested"){
      $("#mySelect").css("color", "green");
    }else if($(this).val() == "UnSure"){
      $("#mySelect").css("color", "grey");
    }else if($(this).val() == "NotInterested"){
      $("#mySelect").css("color", "red");
    }else{
      $("#mySelect").css("color", "black");
    }
  });


  function zillowShow(){
    $('.nav-tabs li.active').removeClass('active');
    $('.tab-content div.active').removeClass('active');
    var zillowStep = document.getElementById('zillowStep');
    var dataZillow = document.getElementById('dataZillow');
    zillowStep.style.display="block";
    dataZillow.classList.add('active');
    zillowStep.classList.add('active');

  }