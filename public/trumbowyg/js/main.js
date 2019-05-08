$( document ).ready(function() {
        $('#post-content').trumbowyg({
            lang: 'vi',
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage'],//, 'upload','base64'],
                    ico: 'insertImage'
                },
                align: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                }
            },
            // Redefine the button pane
            btns: [
                ['viewHTML'],
                ['formatting'],
                ['historyUndo','historyRedo'],
                ['strong', 'em', 'del'],
                ['align'],
                ['foreColor', 'backColor'],
                ['superscript', 'subscript'],
                ['link'],
                ['image'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen'],
            ],
            plugins: {
                upload: {
                    serverPath: 'https://api.imgur.com/3/image',
                    fileFieldName: 'image',
                    headers: {
                        'Authorization': 'Client-ID bcbc0f0360d32f5',
                    },
                    urlPropertyName: 'data.link'
                }
            }
        });
    });