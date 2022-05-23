$(document).ready(function(){
    $("#quotedPrice").click(function(){
      $("#filter-section-1").toggle(
        function() {
          $( this ).addClass( "selected-show" );
        }, function() {
          $( this ).removeClass( "selected-show" );
        }
      );
    });

    $("#make").click(function(){
      $("#filter-section-2").toggle(
        function() {
          $( this ).addClass( "selected-show" );
        }, function() {
          $( this ).removeClass( "selected-show" );
        }
      );
    });
    
    $("#year").click(function(){
      $("#filter-section-3").toggle(
        function() {
          $( this ).addClass( "selected-show" );
        }, function() {
          $( this ).removeClass( "selected-show" );
        }
      );
    });

    $("#odometerReading").click(function(){
      $("#filter-section-4").toggle(
        function() {
          $( this ).addClass( "selected-show" );
        }, function() {
          $( this ).removeClass( "selected-show" );
        }
      );
    });
    
    $("#moreInlineFilter").click(function(){
      $("#filter-section-5").toggle(
        function() {
          $( this ).addClass( "selected-show" );
          
        }, function() {
          $( this ).removeClass( "selected-show" );
        }
      );
    });
    
  });
