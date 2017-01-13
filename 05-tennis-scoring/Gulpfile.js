var gulp = require('gulp');
var phpspec = require('gulp-phpspec');

gulp.task('test', function(){
	var phpspecOptions = {
		clear: true,
		formatter: 'pretty'
	};
	gulp.src('spec/**/*.php')
		.pipe(phpspec('', phpspecOptions));
});

gulp.task('watch', function() {
	gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);

