$(document).ready( function () {
    $('#table1').DataTable();
} );
//delete article
$(".delete-but").click(function () {
    var id = $(this).attr('data-delete');
    var element_id = '#card'+ id;
    var element = $(this).parent().parent().find(element_id);
    element.remove();
    $.ajax({
        url: "article/delete",
        type: "DELETE",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id
        },
        success: function (response) {
            if (response){
                element.remove();
            }
        },
        error: function (msg) {
            alert("ajax error");
        }
    });
});
//fill article update modal
$(".update-but").click(function () {
    var id = $(this).attr('data-update');
    $("#hidden_id").val(id);
    $("#article_title_update").val($(this).parent().find('.card-title').text());
    $("#article_alt_text_update").val($(this).parent().find('.alt-text').val())

});


//add article
// $("#article_save").click(function (){
//      formdata = new FormData();
//
//     var title = $("#article_title").val();
//     var files = $('#article_image')[0].files;
//     var text = $('#article_alt_text').val();
//     formdata.append("file", files);
//    // fd.append('file',files[0]);
//
//
//
//     $.ajax({
//         url: "/article/add",
//         type: "POST",
//         headers: {
//             'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//         },
//         data: formdata,
//         success: function (data) {
//            alert(data);
//         },
//         error: function (msg) {
//             alert("sdad");
//         }
//     });
// });
