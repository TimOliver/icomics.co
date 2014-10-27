/*
jquery.live.js

JQuery-powered JS code for iComics Live
*/

(function($) {
	var _password = '';
	var _videoID = '';
	var _passwordSalt = ''

	$.liveUpdateVideo = function(videoID, passwordSalt) {
		_passwordSalt = passwordSalt;
		_password = $.cookie('password');

		var requirePassword = false;
		if (!_password || _password.length <= 0) 
			requirePassword = true;

		showPrompt(videoID, requirePassword);
	};

	var showPrompt = function(videoID, showPasswordField) {
		var htmlFields = '<div id="password-input">';
		if (showPasswordField)
			htmlFields += '<label>Password <input type="password" name="password" value=""></label><br />';

		htmlFields += '<label>Video ID <input type="text" name="videoID" value="'+videoID+'"></label><br /></div>';

		$.prompt(htmlFields, {
			title: 'Update Video ID',
			buttons: {Submit: 1, Cancel: -1},
			submit: function(e,v,m,f) {
				if (v == -1)
					return;

				if (f.password && f.password.length) {
					_password = md5(_passwordSalt+md5(f.password));
					$.cookie('password', _password);
				}

				_videoID = f.videoID;

				submitUpdateRequest(_password, _videoID);
			}
		});
	};

	var submitUpdateRequest = function(_password, _videoID) {
		var data = {update: "true", password: _password, videoID: _videoID};
		$.post("/live/index.php", data, function(results) {
			results = $.parseJSON(results);

			if (results.success == 'fail') {
				$.removeCookie('password', '');
			}

			alert(results.message);
		});
	};
})(jQuery);