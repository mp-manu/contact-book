$(".btn-save").click(function(e) {
    e.preventDefault();
    var fio = $("#fio").val();
    var phone = $("#phone").val();
    var dataString = 'fio='+fio+'&phone='+phone;
    $.ajax({
        type:'POST',
        data:dataString,
        url:'contact_save_ajax.php',
        success:function(data) {
            console.log(data);
            $('.contact-card-body').append(data);
        }
    });
});

function remove(elem){
    var id = $(elem).data('id');
    $.ajax({
        type:'POST',
        data:{id: id},
        url:'contact_delete_ajax.php',
        success:function(data) {
            console.log(data);
            if(data==1){
                $("#contact"+id).remove();
            }
        }
    });
}
