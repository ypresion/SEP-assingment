
        //get rid of jquery wrappers
        $(document).on("pageshow", function(){
          $('div.ui-radio').each(function() {
              $(this).contents().unwrap();
          });
          $('div.ui-input-text').each(function() {
              $(this).contents().unwrap();
          });
          $('div.ui-checkbox').each(function() {
              $(this).contents().unwrap();
          });
        }); 
