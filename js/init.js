$(function() {
    $('.textBlock')
        .attr('draggable', 'true')
        .bind('dragstart', function(event) {
            event.originalEvent.dataTransfer.setData('text/plain', $(this).html());
            return true;
        });
    
    $('#block2')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 1;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block3')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 2;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block4')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 3;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block5')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 4;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block6')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 5;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block7')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 6;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block8')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 7;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
		
		$('#block9')
        .bind('dragenter', function(event) {
            $(this).addClass('dropHere');
            return false;
        })
        .bind('dragleave', function(event) {
            $(this).removeClass('dropHere');
            return false;
        })
        .bind('dragover', function(event) {
            return false;
        })
        .bind('drop', function(event) {
            $(this).removeClass('dropHere');
            var data = event.originalEvent.dataTransfer.getData('text/plain');
            $(this).append($('<div class="textBlock">' + data + '</div>'));
			
		 	alt_attr = $(this).find('div').attr('value');

        var id =  $(this).text(alt_attr);
		var numb = 8;	
        $.post('#', {'id':id, 'numb':numb}, function(json){  
            });
		
		   return true;
        });
});