jQuery(document).ready(function ($) {
    $('.upload-logo').on('click', function (e) {
        e.preventDefault();

        const mediaUploader = wp.media({
            title: 'Select Logo',
            button: { text: 'Use this logo' },
            multiple: false
        });

        mediaUploader.on('select', function () {
            const attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#theme_logo').val(attachment.url);
        });

        mediaUploader.open();
    });
});
