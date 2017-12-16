$(function() {
        $('#rating').barrating({
            theme: 'fontawesome-stars',
            showSelectedRating: false,
            onSelect: function(value, text) {
                if (!value) {
                    $('#rating')
                        .barrating('clear');
                } else {
                    element=document.getElementById("grade");
					element.value=value;
                }
            },
        });
});

