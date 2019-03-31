$("#createRace").on('click', function() {
    $.post('create/race', {})
        .done(function(msg){
            location.reload();
        })
        .fail(function(xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            alert(response.errorMessage);
        });
});

$("#advanceRace").on('click', function() {
    $.post('/advance/races/tensec', {})
        .done(function(msg){
            location.reload();
        })
        .fail(function(xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            alert(response.errorMessage);
        })

});


