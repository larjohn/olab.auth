$(function() {
    $('.add-quote-btn').click(function() {
        var template  = '<blockquote>' +
                            $('#message-text-' + $(this).attr('msgId')).html() +
                            '<small>posted by <b>' + $(this).attr('msgAuthor') + '</b>, ' + $(this).attr('msgDate') + '</small>'+
                        '</blockquote>';

        tinyMCE.activeEditor.selection.setContent(template);
        tinyMCE.activeEditor.focus();
    });

    // TODO THIS
    $('#mainForum').find('.showMoreTopics').click(function(){
        var id = $(this).attr('attr');
        var icon = $('#icon-'+id);

        $('.showTopic-id-' + id).slideToggle('slow', function() {
        });

        if (icon.hasClass('icon-chevron-right') ) {
            icon.removeClass('icon-chevron-right');
            icon.addClass('icon-chevron-down');
        }
        else {
            icon.removeClass('icon-chevron-down');
            icon.addClass('icon-chevron-right');
        }
    });

});