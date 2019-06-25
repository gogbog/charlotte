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
            icon: '<i class="note-icon fa fa-twitter"></i>',
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
                   <div class="note-form-group form-group note-group-imageAttributes-role m-b-0">
                   <div class="input-group note-input-group col-xs-12 m-b-0">
                    <textarea class="form-control twitter-input" style="resize: vertical;min-height: 250px;"></textarea>
                   </div>
                   </div>
                    `;
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
