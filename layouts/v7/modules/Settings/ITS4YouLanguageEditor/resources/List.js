/*********************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

Settings_Vtiger_List_Js("Settings_ITS4YouLanguageEditor_List_Js", {},
    {
        registerPicklistModulesChangeEvent: function () {
            var thisElement = this;
            jQuery('#pickListModules').on('change', function () {
                var module = $(this).val();
                if (module.length <= 0) {
                    Settings_Vtiger_Index_Js.showMessage({
                        'type': 'error',
                        'text': app.vtranslate('JS_PLEASE_SELECT_MODULE')
                    });
                    return;
                }
                var params = {
                    module: app.getModuleName(),
                    parent: app.getParentModuleName(),
                    source_module: module,
                    view: 'ListAjax',
                    mode: 'getPickListDetailsForModule'
                };

                app.helper.showProgress();

                app.request.post({"data": params}).then(
                    function (err, response) {
                        app.helper.hideProgress();
                        if (err === null) {
                            var selectBox = jQuery('#modulePickListContainer');
                            selectBox.html(response);
                            app.changeSelectElementView(selectBox);
                            thisElement.registerModulePickListChangeEvent();
                            jQuery('#modulePickList').trigger('change');
                        }
                    }
                );
            });
        },
        registerModulePickListChangeEvent: function () {
            var thisElement = this;
            jQuery('#modulePickList').on('change', function (e) {
                var params = {
                    module: app.getModuleName(),
                    parent: app.getParentModuleName(),
                    source_module: jQuery('#pickListModules').val(),
                    view: 'ListAjax',
                    mode: 'getPickListValueForField',
                    pickListFieldId: jQuery(e.currentTarget).val()
                };

                app.helper.showProgress();
                app.request.post({"data": params}).then(
                    function (err, response) {
                        app.helper.hideProgress();
                        if (err === null) {
                            jQuery('#modulePickListValuesContainer').html(response);
                            thisElement.registerSaveNewPicklistTranslationInputEvent();
                        }
                    }
                );
            });
        },
        registerSaveNewPicklistTranslationInputEvent: function () {
            var contents = jQuery('#modulePickListValuesContainer');
            contents.find('.pickListTranslation').each(function () {
                jQuery(this).on("blur", function () {
                    var newValue = $(this).val();
                    var langPrefix = $(this).closest('tr').data('lang');
                    var key = $(this).closest('tr').data('key');
                    var module = $('#pickListModules').val();
                    var oldTranslate = $(this).closest('tr').data('langtranslate');
                    var params = {
                        module: app.getModuleName(),
                        parent: app.getParentModuleName(),
                        source_module: jQuery('#pickListModules').val(),
                        action: 'SavePicklist',
                        forModule: module,
                        key: key,
                        transString: newValue,
                        langPrefix: langPrefix
                    };
                    var thisEl = this;
                    if (oldTranslate !== newValue) {
                        app.request.post({"data": params}).then(
                            function (err, data) {
                                if (err === null) {
                                    $(thisEl).closest('tr').data('langtranslate', newValue);
                                    var params = {
                                        title: data.message,
                                        type: 'info'
                                    };
                                    Vtiger_Helper_Js.showPnotify(params);
                                }
                            }
                        );
                    }
                });
            });
        },
        registerCopyLanguageEvent: function () {
            var self = this;
            var contents = jQuery('#allLanguages');
            jQuery('.copyLanguage').each(function () {
                jQuery(this).click(function (e) {
                    var lang_prefix = jQuery(this).closest('tr').data('prefix');
                    var lang_label = jQuery(this).closest('tr').data('label');
                    app.helper.showProgress();
                    self.getCreateLanguageForm().then(
                        function (response) {
                            var callback = function (container) {
                                var select = jQuery('#selectCopyLang');
                                app.changeSelectElementView(select);

                                self.newLangSave(container);
                            };
                            var callbackParams = {};
                            callbackParams['cb'] = callback;
                            app.helper.hideProgress();
                            app.helper.showModal(response, callbackParams);
                        }
                    );
                    // var addLanguageContainer = contents.find('.createLanguageModal').clone(true, true);
                    // addLanguageContainer.removeClass('hide');
                    // app.helper.showModal(addLanguageContainer);
                    e.stopPropagation();
                });
            });
        },
        addNewLanguage: function (formData) {
            var aDeferred = jQuery.Deferred();
            var params = {
                "type": "POST",
                "module": app.getModuleName(),
                "parent": "Settings",
                "action": "LanguageAjax",
                "formData": formData,
                "mode": "createNewLanguage",
                "dataType": 'json'
            };

            app.request.post({data: params}).then(
                function (err, data) {
                    aDeferred.resolve(data);
                }
            );
            return aDeferred.promise();
        },
        newLangSave: function (data) {
            var self = this;
            var thisInstance = this;
            var form = data.find(".newLanguageForm");
            var params = {
                submitHandler: function (form) {
                    var form = jQuery(form);

                    // to Prevent submit if already submitted
                    jQuery("button[name='saveButton']").attr("disabled", "disabled");
                    if (this.numberOfInvalids() > 0) {
                        return false;
                    }
                    var formData = form.serializeFormData();

                    thisInstance.addNewLanguage(formData).then(
                        function (response, err) {
                            var created = response.created;
                            if (created) {
                                app.helper.showSuccessNotification({
                                    'message': app.vtranslate('JS_LANGUAGE_CREATED')
                                });
                            } else {
                                app.helper.showAlertNotification({
                                        'message': app.vtranslate('JS_LANGUAGE_EXISTS')
                                    }
                                );
                            }
                            app.helper.hideModal();
                            self.updateLangTableContent();
                        }
                    );
                }
            };
            form.vtValidate(params);
        },
        registerAddNewLanguageEvent: function () {
            var self = this;
            var contents = jQuery('#allLanguages');
            $('#createLangButton').click(function (event) {
                app.helper.showProgress();
                self.getCreateLanguageForm().then(
                    function (response) {
                        var callback = function (container) {
                            var select = jQuery('#selectCopyLang');
                            app.changeSelectElementView(select);

                            self.newLangSave(container);
                        };
                        var callbackParams = {};
                        callbackParams['cb'] = callback;
                        app.helper.hideProgress();
                        app.helper.showModal(response, callbackParams);
                    }
                );
            });
        },
        getCreateLanguageForm: function () {
            var aDeferred = jQuery.Deferred();
            var params = {
                module: app.getModuleName(),
                parent: app.getParentModuleName(),
                view: "ListAjax",
                mode: "createLanguageModalContent"
            };
            app.request.post({data: params}).then(function (err, data) {
                aDeferred.resolve(data);
            });
            return aDeferred.promise();
        },
        registerLangButtonEvent: function () {
            var self = this;
            $('.langButton').click(function (e) {
                var langPrefix = $(this).closest('tr').data('prefix');
                var langName = $(this).closest('tr').data('name');
                var langLabel = $(this).closest('tr').data('label');
                var params = {
                    "type": "POST",
                    "module": app.getModuleName(),
                    "parent": "Settings",
                    "action": "LanguageAjax",
                    "name": langName,
                    "label": langLabel,
                    "prefix": langPrefix,
                    "mode": "changeActiveStatusOfLanguage",
                    "dataType": 'json'
                };

                app.helper.showProgress();
                app.request.post({data: params}).then(
                    function (err, response) {
                        var created = response.active;
                        app.helper.hideProgress();
                        if (created) {
                            app.helper.showSuccessNotification({
                                'message': app.vtranslate('JS_LANGUAGE_ACTIVATED')
                            });
                        } else {
                            app.helper.showSuccessNotification({
                                    'message': app.vtranslate('JS_LANGUAGE_DEACTIVATED')
                                }
                            );
                        }

                        self.updateLangTableContent();
                    }
                );
            });
        },
        updateLangTableContent: function () {
            var self = this;
            var params = {
                "type": "POST",
                "module": app.getModuleName(),
                "parent": "Settings",
                "view": "ListAjax",
                "mode": "updateAllLanguagesTableContent",
                "dataType": 'json'
            };
            app.helper.showProgress();
            app.request.post({data: params}).then(
                function (err, response) {
                    app.helper.hideProgress();
                    if (err === null) {
                        jQuery("#allLanguagesTableContent").empty().html(response);
                        self.registerLangButtonEvent();
                        self.registerCopyLanguageEvent();
                        self.registerRowClickEvent();
                        self.removeLanguageEvent();
                    }
                }
            );
        },
        /**
         *
         */
        registerRowClickEvent: function () {
            jQuery('.tdListViewEntry').on('click', function (e) {
                var elem = jQuery(e.currentTarget);
                var tr = jQuery(elem).closest('tr');
                window.location.href = tr.data('recordurl');
            });
        },
        // TODO nefunguje export, treba to asi skusit na localhoste
        // exportLanguageEvent: function () {
        //     jQuery(".exportLang").on('click', function (e) {
        //         var langPrefix = jQuery(e.currentTarget).closest('tr').data('prefix');
        //
        //         var params = {
        //             "type": "POST",
        //             "module": app.getModuleName(),
        //             "parent": "Settings",
        //             "action": "LanguageAjax",
        //             "mode": 'exportLanguage',
        //             "langPrefix": langPrefix,
        //             "dataType": 'json'
        //         };
        //         // app.request.post({data: params}).then(
        //         //     function (error, response) {
        //         //         console.log("uz");
        //         //     }
        //         // );
        //         console.log(langPrefix);
        //     });
        // },
        removeLanguageEvent: function () {
            var self = this;
            jQuery('.deleteLang').on('click', function (e) {
                var tr = jQuery(e.currentTarget).closest('tr');

                var params = {
                    "type": "POST",
                    "module": app.getModuleName(),
                    "parent": "Settings",
                    "action": "LanguageAjax",
                    "mode": 'removeLanguage',
                    "langPrefix": tr.data('prefix'),
                    "langName": tr.data('name'),
                    "langLabel": tr.data('label'),
                    "dataType": 'json'
                };
                app.helper.showProgress();
                app.request.post({data: params}).then(
                    function (error, response) {
                        app.helper.hideProgress();
                        if (error === null) {
                            if (response['removed']){
                                app.helper.showSuccessNotification({
                                    'message': app.vtranslate('JS_LANG_REMOVED')
                                });
                            } else {
                                app.helper.showAlertNotification({
                                    'message': app.vtranslate('JS_LANG_NOT_REMOVED')
                                });
                            }

                            self.updateLangTableContent();
                        }
                    }
                );
            });
        },
        registerEvents: function () {
            this.updateLangTableContent();
            this.registerPicklistModulesChangeEvent();
            this.registerModulePickListChangeEvent();
            this.registerSaveNewPicklistTranslationInputEvent();
            this.registerAddNewLanguageEvent();
        }
    });

