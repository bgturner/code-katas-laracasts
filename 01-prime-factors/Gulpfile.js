var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var notify = require('gulp-notify');

gulp.task('test', function(){
	var phpspecOptions = {
		notify: true,
		verbose: 'vv',
		clear: true,
		formatter: ' pretty',
		debug: true
	};
	gulp.src('spec/**/*.php')
		.pipe(phpspec('', phpspecOptions))
		.on('error', notify.onError({
			title: 'Crap',
			message: 'Your tests failed'
		}))
		.pipe(notify({
			title: 'Success',
			message: 'All tests completed successfuly.'
		}));
});

gulp.task('watch', function() {
	gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);

