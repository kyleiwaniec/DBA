

// TINYMCE


//var ed = new tinyMCE.EditorCommands({

//$('textarea.tinymce').tinymce({

tinyMCE.init({
        mode : "none",
	// Location of TinyMCE script
	//script_url : '/admin/tinymce/jscripts/tiny_mce/tiny_mce.js',
        // General options
        //mode : "textareas",
        editor_selector : "details",
        
        theme : "advanced",
	plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist,images",
        
        //file_browser_callback : 'myFileBrowser',

        // Theme options
        theme_advanced_buttons1 : "images,|,bold,italic,underline,|,bullist,numlist,outdent,indent,|,undo,redo,|,link,unlink,|,fontsizeselect, styleselect,|,removeformat,|,code",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : false,

        // Example content CSS (should be your site CSS)
        content_css : "/css/styles.css",
        relative_urls : false,
        remove_script_host: true,
        extended_valid_elements : "img[class|src|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|rel|id|data]",
        // Drop lists for link/image/media/template dialogs
	//external_link_list_url : "/admin/tinymce/examples/lists/link_list.js",
	//external_image_list_url : "/admin/tinymce/examples/lists/image_list.js",
        //external_image_list_url : "/admin/makeImageList.php",
	//media_external_list_url : "/admin/tinymce/examples/lists/media_list.js",
        //init_instance_callback : "myCallback",
        // Style formats
        style_formats : [
                
                {title : 'Title', inline : 'span', classes : 'serif larger'},
                {title : 'Decorative', inline : 'span', classes : 'decorative largest'},
                
                {title : 'Colors'},
                {title : 'Burgundy', inline : 'span', classes : 'burgundy'},
                {title : 'Pink', inline : 'span', classes : 'pink'},
                {title : 'Off-White', inline : 'span', classes : 'off-white'},
                
                {title : 'Text Sizes'},
                
                {title : 'small', inline : 'span', classes : 'small'},
                {title : 'large', inline : 'span', classes : 'large'},
                {title : 'larger', inline : 'span', classes : 'larger'},
                {title : 'largest', inline : 'span', classes : 'largest'}
        ],

        formats : {
                alignleft : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
                aligncenter : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
                alignright : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
                alignfull : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
                bold : {inline : 'strong'},
                italic : {inline : 'em'},
                underline : {inline : 'span', styles : {borderBottom : '1px solid #444444'}},
                strikethrough : {inline : 'del'},
                customformat : {inline : 'span', styles : {color : '#00ff00', fontSize : '20px'}, attributes : {title : 'My custom format'}}
        }
});

//ed.init();
// ajax load/save// 
// function ajaxLoad() {
//        var ed = tinyMCE.get('details'); // name of tinymce textarea
//
//        // Do you ajax call here, window.setTimeout fakes ajax call
//        ed.setProgressState(1); // Show progress
//        window.setTimeout(function() {
//                ed.setProgressState(0); // Hide progress
//                ed.setContent('HTML content that got passed from server.');
//        }, 3000);
//}
//
//function ajaxSave() {
//        var ed = tinyMCE.get('details');
//
//        // Do you ajax call here, window.setTimeout fakes ajax call
//        ed.setProgressState(1); // Show progress
//        window.setTimeout(function() {
//                ed.setProgressState(0); // Hide progress
//                alert(ed.getContent());
//        }, 3000);
//}
// 
// 
// end TINYMCE
tinyMCE.execCommand('mceAddControl', false, 'details');




