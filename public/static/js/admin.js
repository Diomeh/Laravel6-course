var base = location.protocol + '//' + location.host;

function editor_init(field) {
	// CKEDITOR.plugins.addExternal('codesnippet', base + 'static/libs/ckeditor/plugins/codesnippet/', 'plugins.js')

	CKEDITOR.replace(field, {
		// skin : 'mono',
		// extraPlugins : 'codesnippet,ajax,xml,textmach,autocomplete,textwatcher,emoji,pannelbutton,previw,wordcount',

		// Remove 'cloudservices-no-token-url' error and ' editor-plugin-conflict' warning
		removePlugins : 'cloudservices,easyimage',
		toolbar : [
			{ name : 'clipboard', items : ['Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo']},
			{ name : 'basicstyles', items : ['Bold', 'Italic', 'BulletedList', 'Strike', 'Image', 'Link', 'Unlink', 'Blockquote']},
			{ name : 'document', items : ['CodeSnippet', 'EmojiPanel', 'Previe', 'Source']}
		]
	});
}