/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	config.extraPlugins = 'image2';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	
	config.filebrowserBrowseUrl = '/libs/ckfinder/ckfinder.html';
 
	config.filebrowserImageBrowseUrl = '/libs/ckfinder/ckfinder.html?type=Images';
 	
	config.filebrowserFlashBrowseUrl = '/libs/ckfinder/ckfinder.html?type=Flash';
 
	config.filebrowserUploadUrl = '/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
	config.filebrowserImageUploadUrl = '/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
	config.filebrowserFlashUploadUrl = '/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};