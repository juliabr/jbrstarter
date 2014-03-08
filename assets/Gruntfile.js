'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    uglify: {
      dist: {
        files: {
          'js/scripts.min.js': [
            'js/theme-custom.js'
          ]
        }
      }
    },
    autoprefixer: {
      dist: {
        files: {
          'css/style.css': 'css/style.css',
          'css/editor-style.css' : 'css/editor-style.css'
        }
      }
    },
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/style.css' : 'sass/style.scss',
          'css/editor-style.css' : 'sass/editor-style.scss'
        }
      }
    },
    watch: {
	    options: {
        livereload: true,
      },
      css: {
        files: '**/*.scss',
        tasks: ['sass','autoprefixer']
      },
      js: {
        files: [
          'js/theme-custom.js'
        ],
        tasks: ['uglify']
      }
    },
    clean: {
      dist: [
        'css/style.min.css',
        'js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'autoprefixer',
    'uglify',
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};