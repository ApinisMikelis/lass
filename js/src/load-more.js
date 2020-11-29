jQuery(function($){
    $('.load-more').on("click", function(){

        var button = $(this),
            data = {
            'action': 'loadmore',
            'query': load_more_params.posts, 
            'page' : load_more_params.current_page
        };

        $.ajax({
            url : load_more_params.ajaxurl,
            data : data,
            type : 'POST',
            beforeSend : function () {
                button.find('i').addClass('fa-circle-notch fa-spin');
            },
            success : function(data){
                if( data ) { 
                    button.find('i').removeClass('fa-circle-notch fa-spin');
                    jQuery('#main').append(data);
                    load_more_params.current_page++;

                    if ( load_more_params.current_page == load_more_params.max_page ) 
                        button.remove();

                } else {
                    button.remove();
                }
            }
        });
    });
});
