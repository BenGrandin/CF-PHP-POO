<?php
// Autoloader des classes
require '../class/autoloader.class.php';
Autoloader::register();
?>
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Switchery css -->
<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- Font Awesome CSS -->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- Modernizr -->
<script src="assets/js/modernizr.min.js"></script>

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Moment -->
<script src="assets/js/moment.min.js"></script>

<!-- BEGIN CSS for this page -->
<link href="assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
<!-- END CSS for this page -->

<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">						
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fa fa-file"></i> Media</h3>
                Files upload with drag & drop
            </div>
                
            <div class="card-body">
                                                
                        <input type="file" name="files[]" id="filer_example1" multiple="multiple">
                        
            </div>														
        </div><!-- end card-->					
    </div>
</div>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>
<script>
$(document).ready(function(){

'use-strict';


//Example 1
$("#filer_example1").filer({
limit: null,
maxSize: null,
extensions: null,
changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn btn-custom">Browse Files</a></div></div>',
showThumbs: true,
theme: "dragdropbox",
templates: {
    box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
    item: '<li class="jFiler-item">\
                <div class="jFiler-item-container">\
                    <div class="jFiler-item-inner">\
                        <div class="jFiler-item-thumb">\
                            <div class="jFiler-item-status"></div>\
                            <div class="jFiler-item-info">\
                                <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                <span class="jFiler-item-others">{{fi-size2}}</span>\
                            </div>\
                            {{fi-image}}\
                        </div>\
                        <div class="jFiler-item-assets jFiler-row">\
                            <ul class="list-inline pull-left">\
                                <li>{{fi-progressBar}}</li>\
                            </ul>\
                            <ul class="list-inline pull-right">\
                                <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                            </ul>\
                        </div>\
                    </div>\
                </div>\
            </li>',
    itemAppend: '<li class="jFiler-item">\
                    <div class="jFiler-item-container">\
                        <div class="jFiler-item-inner">\
                            <div class="jFiler-item-thumb">\
                                <div class="jFiler-item-status"></div>\
                                <div class="jFiler-item-info">\
                                    <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                    <span class="jFiler-item-others">{{fi-size2}}</span>\
                                </div>\
                                {{fi-image}}\
                            </div>\
                            <div class="jFiler-item-assets jFiler-row">\
                                <ul class="list-inline pull-left">\
                                    <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                </ul>\
                                <ul class="list-inline pull-right">\
                                    <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                </ul>\
                            </div>\
                        </div>\
                    </div>\
                </li>',
    progressBar: '<div class="bar"></div>',
    itemAppendToEnd: false,
    removeConfirmation: true,
    _selectors: {
        list: '.jFiler-items-list',
        item: '.jFiler-item',
        progressBar: '.bar',
        remove: '.jFiler-item-trash-action'
    }
},
dragDrop: {
    dragEnter: null,
    dragLeave: null,
    drop: null,
},
uploadFile: {
    url: "assets/plugins/jquery.filer/php/upload.php",
    data: null,
    type: 'POST',
    enctype: 'multipart/form-data',
    beforeSend: function(){},
    success: function(data, el){
        var parent = el.find(".jFiler-jProgressBar").parent();
        el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-success\"><i class=\"fa fa-plus\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
        });
    },
    error: function(el){
        var parent = el.find(".jFiler-jProgressBar").parent();
        el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
            $("<div class=\"jFiler-item-others text-error\"><i class=\"fa fa-minus\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
        });
    },
    statusCode: null,
    onProgress: null,
    onComplete: null
},
files: [
    {
        name: "1.jpg",
        size: 145,
        type: "image/jpg",
        file: "assets/images/sample-image-1.jpg"
    },
    {
        name: "2.jpg",
        size: 145,
        type: "image/jpg",
        file: "assets/images/sample-image-2.jpg"
    }
],
addMore: false,
clipBoardPaste: true,
excludeName: null,
beforeRender: null,
afterRender: null,
beforeShow: null,
beforeSelect: null,
onSelect: null,
afterShow: null,
onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
    var file = file.name;
    $.post('assets/plugins/jquery.filer/php/remove_file.php', {file: file});
},
onEmpty: null,
options: null,
captions: {
    button: "Choose Files",
    feedback: "Choose files To Upload",
    feedback2: "files were chosen",
    drop: "Drop file here to Upload",
    removeConfirmation: "Are you sure you want to remove this file?",
    errors: {
        filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
        filesType: "Only Images are allowed to be uploaded.",
        filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
        filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
    }
}
});
});
</script>