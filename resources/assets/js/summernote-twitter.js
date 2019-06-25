/* https://github.com/DiemenDesign/summernote-templates */
(function (factory) {
    if (typeof define === 'function'&&define.amd) {
        define(['jquery'], factory)
    } else if (typeof module === 'object' && module.exports) {
        module.exports = factory(require('jquery'));
    } else {
        factory(window.jQuery)
    }
}
(function ($) {
    $.extend(true,$.summernote.lang, {
        'en-US': {
            pageTemplates: {
                tooltip:     'Twitter',
                dialogTitle: 'Import a Tweet',
                editBtn:     'Import'
            },
        }
    });
    $.extend($.summernote.options, {
        pageTemplates: {
            icon: '<i class="note-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14"><path d="m 10,10.696915 -6,0 0,-1.071288 6,0 z m -0.00114,-1.9788834 -2.3368368,0 0,-1.0712886 2.3368368,0 z m 0,-1.9759562 -2.3368368,0 0,-1.071288 2.3368368,0 z m -3.3029604,1.9759562 -2.6958966,0 0,-3.0472086 2.6958966,0 z M 7.640148,1.26517 C 7.49432,1.11934 7.20625,1 7,1 L 2.5,1 C 2.29375,1 2.125,1.16875 2.125,1.375 l 0,11.25 C 2.125,12.83125 2.29375,13 2.5,13 l 9,0 c 0.20625,0 0.375,-0.16875 0.375,-0.375 l 0,-6.75 c 0,-0.20625 -0.11932,-0.49432 -0.265148,-0.64015 L 7.640148,1.26517 Z M 11.125,12.25 l -8.25,0 0,-10.5 4.115133,0 c 0.03417,0.006 0.09853,0.0323 0.12668,0.0525 l 3.955734,3.95571 c 0.02018,0.0281 0.04683,0.0925 0.05245,0.12668 l 0,6.36513 z M 11.5,1 9.25,1 C 9.04375,1 8.99432,1.11932 9.140148,1.26515 l 2.46968,2.46968 C 11.75568,3.88068 11.875,3.83125 11.875,3.625 l 0,-2.25 C 11.875,1.16875 11.70625,1 11.5,1 Z"/></svg></i>',
            insertDetails: false,
            templates:     ['haha.html']
        },
    });
    $.extend($.summernote.plugins, {
        'pageTemplates': function (context) {
            var self      = this;
            var ui        = $.summernote.ui;
            var $note     = context.layoutInfo.note;
            var $editor   = context.layoutInfo.editor;
            var $editable = context.layoutInfo.editable;
            var options   = context.options;
            var lang      = options.langInfo;
            context.memo('button.pageTemplates', function () {
                var button = ui.button({
                    contents: options.pageTemplates.icon,
                    tooltip:  lang.pageTemplates.tooltip,
                    click:    function (e) {
                        context.invoke('pageTemplates.show');
                    }
                });
                return button.render();
            });
            this.initialize = function () {
                console.log('init');
                var $container = options.dialogsInBody ? $(document.body) : $editor;
                var body       = `
                   <div class="note-form-group form-group note-group-imageAttributes-role">
                   <label class="control-label note-form-label col-sm-3"></label>
                   <div class="input-group note-input-group col-xs-12 col-sm-9">
                   <input class="form-control twitter-input" type="text">
                   </div>
                   </div>
                    </div>`;
                this.$dialog   = ui.dialog({
                    title:  lang.pageTemplates.dialogTitle,
                    body:   body,
                    footer: '<button href="#" class="btn btn-primary note-pageTemplates-btn">' + lang.pageTemplates.editBtn + '</button>'
                }).render().appendTo($container);
            };
            this.destroy = function () {
                console.log('destroy');
                ui.hideDialog(this.$dialog);
                this.$dialog.remove();
            };
            this.bindEnterKey = function ($input,$btn) {
                console.log('enter');
                $input.on('keypress',function (event) {
                    if (event.keyCode === 13) $btn.trigger('click');
                });
            };
            this.bindLabels = function () {
                self.$dialog.find('.form-control:first').focus().select();
                self.$dialog.find('label').on('click',function () {
                    $(this).parent().find('.form-control:first').focus();
                });
            };
            this.show = function () {
                this.showpageTemplatesDialog();
            };
            this.showpageTemplatesDialog = function () {
                return $.Deferred(function (deferred) {
                    var $pTBtn = self.$dialog.find('.note-pageTemplates-btn');
                    ui.onDialogShown(self.$dialog, function () {
                        context.triggerEvent('dialog.shown');
                        $pTBtn.click(function (e) {
                            e.preventDefault();
                            $html = $('.twitter-input').val();
                            context.invoke('editor.pasteHTML', '&nbsp;&nbsp;' + $html);
                            $note.summernote('code', $note.summernote('code'));
                            $note.val(context.invoke('code'));
                            $note.change();

                            ui.hideDialog(self.$dialog);
                        });
                        self.bindEnterKey($pTBtn);
                        self.bindLabels();

                    });
                    this.destroy = function () {
                        ui.hideDialog(this.$dialog);
                        this.$dialog.remove();
                    };
                    ui.onDialogHidden(self.$dialog, function () {
                        $pTBtn.off('click');
                        if (deferred.state() === 'pending') deferred.reject();
                    });
                    ui.showDialog(self.$dialog);
                });
            };
        }
    });
}));
