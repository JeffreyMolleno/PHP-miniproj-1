$(document).ready(function(){

    $('.delete-btn').on('click', function(e){

        console.log(e.target.getAttribute('data-id'));

        $('#index-remove').val(e.target.getAttribute('data-id'));
    })

    $('#delete-form-req').on('submit', function(e){


        let value = $('#index-remove').val()

        console.log(value);

    })

})