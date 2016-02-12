$(document).ready(function() {
    $(".btn").click(function() {
       var id = $(this).attr("id");
             $.get(
                  "../php/getzapis.php",
                  {
                    date:  $(this).attr("id"),
                  },
                  onAjaxSuccess
                  );
          });
});
 
 function onAjaxSuccess(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.

  document.getElementById('window').innerHTML  += data;
}

 $(document).ready( function() {
    var max = document.getElementById('max').innerHTML;
     for(var a=0; a < max; a++) {
      var datadd = document.getElementById(a).innerHTML;
      var elem = document.getElementById(datadd);
      elem.className=elem.className.replace( 'btn noevents','btn');
}

 	$('input[name=submit]').click( 
        function () 
        {
          if (document.getElementById('text').value=="") {
          document.getElementById('err_text').innerHTML='Введите текст';
          return false;
              };
          if (document.getElementById('date').value=="") {
          document.getElementById('err_date').innerHTML='Введите дату';
          return false;
              };

           var textarea = $('textarea[name=text]').val();
           var datetoadd = $('input[name=date]').val();
           // отправляем AJAX запрос
           $.ajax(
              {
                 type: "POST",
                 data: {text: $('textarea[name=text]').val(),
                 		date: $('input[name=date]').val()
                 		},
                 url: "../php/addzapis.php"
              }
              );
        }
     );
   });


function show(state){
 	
 			
            
            document.getElementById('window').style.display = state;            
            document.getElementById('wrap').style.display = state;
            

    };


function closed(state){
 
            document.getElementById('window').style.display = state;            
            document.getElementById('wrap').style.display = state;  
            $("div.textzapis").remove();
};