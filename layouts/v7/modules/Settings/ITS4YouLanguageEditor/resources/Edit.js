/*********************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/
var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

Vtiger.Class("Settings_ITS4YouLanguageEditor_Edit_Js", {},
    {
        registerOnSelectChangeEvent: function () {
            var self = this;
            jQuery('#listViewContents').empty();
            self.ajaxSelectChangeFunction();
            jQuery('#SelectLanguage').change(function () {
                jQuery('#listViewContents').empty();
                self.ajaxSelectChangeFunction();
            });
            jQuery('#SelectModule').change(function () {
                jQuery('#listViewContents').empty();
                self.ajaxSelectChangeFunction();
            });
        },
        ajaxSelectChangeFunction: function () {
            var self = this;
            var preview_lang = jQuery('#SelectLanguage').val();
            var php_module = jQuery('#SelectModule').val();
            var langPrefix = jQuery('#langPrefix').val();
            var searchValue = jQuery('#trans_search').val();
            var params = {
                "type": "POST",
                "module": app.getModuleName(),
                "parent": "Settings",
                "view": "Edit",
                "previewLang": preview_lang,
                "phpModule": php_module,
                "langPrefix": langPrefix,
                "searchvalue": searchValue,
                "dataType": 'json'
            };
            var missingTransChecked = jQuery('#missingTrans').is(':checked');
            if (missingTransChecked) {
                params["mode"] = "missingTranslation";
            }
            else if (!missingTransChecked) {
                params["mode"] = "Edit";
            }
            app.helper.showProgress();
            app.request.post({data: params}).then(
                function (err, response) {
                    app.helper.hideProgress();
                    if (err === null) {
                        jQuery('#listViewContents').html(response);
                        self.updateLangTranslation();
                        self.addNewTranslationEvent();
                        $('[data-toggle="tooltip"]').tooltip();
                    }
                }
            );
        },
        updateLangTranslation: function () {
            var self = this;
            var params = {};
            jQuery('input[name*="lang_"],[name*="jslang_"]').each(function () {
                $(this).on("blur", function () {
                    params.newString = $(this).val();
                    params.forModuleName = $('#for_module_name').val();
                    params.langPrefix = $('#finally_prefix').val();
                    params.oldTranslate = $(this).closest('tr').data('langtransl');
                    params.variableType = "PHP";
                    params.langKey = "";
                    if (jQuery(this).hasClass("jsLangInput")) {
                        params.variableType = "JS";
                        params.langKey = $(this).closest('tr').data('jslangkey');
                    } else {
                        params.langKey = $(this).closest('tr').data('langkey');
                    }
                    self.saveTranslation(params);
                });
            });
        },
        saveTranslation: function (params) {
            params.type = "POST";
            params.module = app.getModuleName();
            params.parent = "Settings";
            params.action = "Save";
            params.dataType = 'json';

            if (params.oldTranslate !== params.newString) {
                app.request.post({data: params}).then(
                    function (err, response) {
                        if (err === null) {
                            app.helper.showSuccessNotification({
                                'message': app.vtranslate('JS_SUCCESS_SAVE')
                            });
                        }
                    }
                );
            }
        },
        addNewTranslationEvent: function () {
            var self = this;
            var contents = jQuery('#listViewContents');
            jQuery('.addNewTranslation').click(function () {
                self.getNewTranslationForm().then(
                    function (response) {
                        var callback = function (container) {
                            var form = container.find('.addNewTranslationForm');
                            var params = {
                                submitHandler: function (form) {
                                    var form = jQuery(form);

                                    jQuery("button[name='saveButton']").attr("disabled", "disabled");
                                    if (this.numberOfInvalids() > 0) {
                                        return false;
                                    }

                                    var formData = form.serializeFormData();
                                    self.saveNewTranslation(formData).then(
                                        function (err, response) {
                                            app.helper.hideModal();
                                            self.ajaxSelectChangeFunction();
                                        }
                                    );
                                }
                            };
                            form.vtValidate(params);
                        };
                        var callbackParams = {};
                        callbackParams['cb'] = callback;
                        app.helper.showModal(response, callbackParams);
                    }
                );
            });
        },
        saveNewTranslation: function (formData) {
            var aDeferred = jQuery.Deferred();
            var langPrefix = $('#finally_prefix').val();
            var forModuleName = $('#for_module_name').val();
            var params = {
                "type": "POST",
                "module": app.getModuleName(),
                "parent": "Settings",
                "action": "AddTranslation",
                "formData": formData,
                "langPrefix": langPrefix,
                "forModuleName": forModuleName,
                "dataType": 'json'
            };

            app.request.post({data: params}).then(
                function (err, data) {
                    aDeferred.resolve(data);
                }
            );

            return aDeferred.promise();
        },
        getNewTranslationForm: function () {
            var aDeferred = jQuery.Deferred();
            var params = {
                module: app.getModuleName(),
                parent: app.getParentModuleName(),
                view: "ListAjax",
                mode: "createNewTranslationModalContent",
                langPrefix: jQuery('#finally_prefix').val()
            };
            app.request.post({data: params}).then(function (err, data) {
                aDeferred.resolve(data);
            });
            return aDeferred.promise();
        },
        registerDeleteLanguageVariable: function () {
            var self = this;
            var listViewContentDiv = jQuery('.listViewContentDiv');
            jQuery(listViewContentDiv).on('click', '.deleteRecordButton', function (e) {
                var forModuleName = $('#for_module_name').val();
                var langPrefix = $('#finally_prefix').val();
                var langKey = $(this).closest('tr').data('langkey');
                if (typeof langKey === 'undefined') {
                    langKey = $(this).closest('tr').data('jslangkey');
                }

                var params = {
                    "type": "POST",
                    "module": app.getModuleName(),
                    "parent": "Settings",
                    "action": "DeleteTranslation",
                    "langkey": langKey,
                    "langPrefix": langPrefix,
                    "forModuleName": forModuleName,
                    "dataType": 'json'
                };

                app.request.post({data: params}).then(
                    function (err, response) {
                        if (err === null) {
                            app.helper.showSuccessNotification({
                                'message': app.vtranslate('JS_SUCCESS_DELETE')
                            });
                            jQuery('#listViewContents').empty();
                            self.ajaxSelectChangeFunction();
                        }
                    }
                );
            });
        },
        registerShowMissingTranslationButtonEvent: function () {
            var self = this;
            $('#missingTrans').on('click', function () {
                var preview_lang = jQuery('#SelectLanguage').val();
                var php_module = jQuery('#SelectModule').val();
                var langPrefix = jQuery('#langPrefix').val();
                var searchValue = jQuery('#trans_search').val();

                var params = {
                    "type": "POST",
                    "module": app.getModuleName(),
                    "parent": "Settings",
                    "view": "Edit",
                    "previewLang": preview_lang,
                    "phpModule": php_module,
                    "langPrefix": langPrefix,
                    "searchvalue": searchValue,
                    "dataType": 'json'
                };
                if ($(this).is(':checked')) {
                    params["mode"] = "missingTranslation";
                }
                else if (!$(this).is(':checked')) {
                    params["mode"] = "Edit";
                }
                app.request.post({data: params}).then(
                    function (err, response) {
                        if (err === null) {
                            jQuery('#listViewContents').html(response);
                            self.updateLangTranslation();
                            self.addNewTranslationEvent();
                        }
                    }
                );
            });
        },
        registerSearchTranslationEvent: function() {
            var self = this;
            var params = {
                "type": "POST",
                "module": app.getModuleName(),
                "parent": "Settings",
                "view": "Edit",
                "dataType": 'json'
            };
            $('#trans_search').keyup(function () {
                params.searchvalue = $(this).val();
                params.previewLang = jQuery('#SelectLanguage').val();
                params.phpModule = jQuery('#SelectModule').val();
                params.langPrefix = jQuery('#langPrefix').val();
                if ($('#missingTrans').is(':checked')) {
                    params["mode"] = "missingTranslation";
                }
                else if (!$('#missingTrans').is(':checked')) {
                    params["mode"] = "Edit";
                }
                delay(function () {
                    app.request.post({data:params}).then(
                        function (err, response) {
                            jQuery('#listViewContents').html(response);
                            self.updateLangTranslation();
                            self.addNewTranslationEvent();
                        }
                    );
                }, 400);
            });
        },
        registerClearSearchTransButtonEvent: function () {
            var self = this;
            jQuery('#clear_trans_search').click(function () {
                jQuery('#trans_search').val("");
                self.ajaxSelectChangeFunction();
            });
        },
        registerCopyAndSaveTranslationIconEvent: function () {
            var listViewContentDiv = jQuery('.listViewContentDiv');
            jQuery(listViewContentDiv).on('click', '.copyToTranslationInputAndSave', function (e) {
                var current = e.currentTarget;
                var parent = jQuery(current).closest('td');
                var inputTdParent = jQuery(parent).siblings('.closestTdWithInput').find('input');
                if (jQuery(current).hasClass('jsLang')) {
                    jQuery(inputTdParent).val(parent.data('jslangtranslate'));
                } else {
                    jQuery(inputTdParent).val(parent.data('langtranslate'));
                }
                jQuery(inputTdParent).trigger('blur');
            });
        },
        registerEvents: function () {
            jQuery('[data-toggle="tooltip"]').tooltip();
            this.registerOnSelectChangeEvent();
            this.updateLangTranslation();
            this.registerDeleteLanguageVariable();
            this.registerShowMissingTranslationButtonEvent();
            this.registerSearchTranslationEvent();
            this.registerClearSearchTransButtonEvent();
            this.registerCopyAndSaveTranslationIconEvent();
        }
    }
);
