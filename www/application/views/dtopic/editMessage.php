<?php
/**
 * Open Labyrinth [ http://www.openlabyrinth.ca ]
 *
 * Open Labyrinth is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Open Labyrinth is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Open Labyrinth.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright 2012 Open Labyrinth. All Rights Reserved.
 *
 */
?>
<script language="javascript" type="text/javascript"
        src="<?php echo URL::base(); ?>scripts/tinymce/js/tinymce/tinymce.min.js"></script>

<script language="javascript" type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        content_css: "<?php echo URL::base(); ?>scripts/tinymce/js/tinymce/plugins/rdface/css/rdface.css,<?php echo URL::base(); ?>scripts/tinymce/js/tinymce/plugins/rdface/schema_creator/schema_colors.css",
        entity_encoding: "raw",
        contextmenu: "link image inserttable | cell row column rdfaceMain",
        closed: /^(br|hr|input|meta|img|link|param|area|source)$/,
        valid_elements : "+*[*]",
        plugins: ["compat3x",
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor layer advtextcolor rdface imgmap"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | fontselect fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: " link image imgmap|print preview media | forecolor backcolor emoticons ltr rtl layer restoredraft | rdfaceMain",
        image_advtab: true,
        templates: [

        ]
    });
</script>

<div class="page-header">

    <h1><?php echo __('Edit Message'); ?></h1></div>

<form class="form-horizontal" id="form1" name="form1" method="post"
      action="<?php echo URL::base() . 'dtopicManager/updateMessage/' . $templateData['topic_id']; ?>">

<fieldset class="fieldset">

    <div class="control-group">
        <label for="message" class="control-label"><?php echo __('Edit Message: '); ?></label>

        <div class="controls">
            <textarea name="message" id="message" class="mceEditor"><?php echo $templateData['message']; ?></textarea>
        </div>
    </div>
</fieldset>

    <div class="form-actions">
        <div class="pull-right">
            <input class="btn btn-large btn-primary" type="submit" name="Submit"
                   value="<?php echo __('Edit'); ?>" onclick="return CheckForm();"></div>
    </div>
    <input type="hidden" name="topic" id="topic" value="<?php echo $templateData['topic_id']; ?>">
    <input type="hidden" name="message_id" id="message_id" value="<?php echo $templateData['message_id']; ?>">

</form>

<script>

    function CheckForm()
    {
        if(tinyMCE.get("message").getContent() =='')
        {
            alert('Please enter you message!');
            return false;
        }
    }

</script>