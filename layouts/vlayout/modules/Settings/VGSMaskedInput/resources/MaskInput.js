jQuery(document).ready(function(){
    var moduleName = app.getModuleName();
    var viewName = app.getViewName();
    
    if(viewName === 'Edit' || viewName === 'Detail') {
        //do a ajax and get list of fields to mask for this module
        var url = 'index.php?module=VGSMaskedInput&action=GetMaskedFieldsList';
        $.post(url, {'sourceModule': moduleName}, function(data) {
            //for all the fields add the proper mask
            for (var fieldName in data.result) {
                var maskInfo = data.result[fieldName];
                $('[name="'+fieldName+'"]').mask(maskInfo);
            }
        });
    }
});
