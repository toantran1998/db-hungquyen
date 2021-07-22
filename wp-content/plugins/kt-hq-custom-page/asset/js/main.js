jQuery(document).ready(function($) {
    $(".kt-category > .kt-category__btn").on("click", function () {
        let return_html = '';
        let categoryId = jQuery(this).parent().attr('id');
        jQuery.ajax({
            type: 'post',
            url : ajaxInfo.url,
            data : {
                'action': 'load_more',
                'categoryId': categoryId
            },
            success :  (success) => {
                console.log('Success');
                return_html = success.data.html;
                jQuery(this)
                    .parent()
                    .children('.kt-category__products')
                    .children('.row')
                    .empty()
                    .append(return_html)
                    .css({'flex-wrap': 'wrap'});
                jQuery(this).css({display : 'none'});
            },
            error: function (error) {
                console.log('error');
                console.log(error);
            }
        })
    })
})