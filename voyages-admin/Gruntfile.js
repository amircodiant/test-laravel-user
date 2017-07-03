!(function () {
    'use strict';
    module.exports = function (grunt) {
        grunt.initConfig({
            pkg: grunt.file.readJSON('package.json'),
            sass: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none',
                    noCache: true
                },
                dist: {
                    files: {
                        'css/custom.min.css': 'sass/main.scss'
                    }
                }

            },
            watch: {
                sass: {
                    files: [
                        'sass/*/*.scss', 'sass/**/*.scss','sass/***/*.scss',
                        ['Gruntfile.js']],
                    tasks: ['sass']

                }
            }
        });
        grunt.loadNpmTasks('grunt-contrib-sass');
        grunt.loadNpmTasks('grunt-contrib-watch');
        // Default task(s).
        grunt.registerTask('default', ['sass', 'watch']);
    };
})();