module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      js: {
        src: [
              'src/js/*.js',
              ],
        dest: 'prod/js/prod.js',
      },
    },

    uglify: {
      build: {
        src: 'prod/js/prod.js',
        dest: 'prod/js/prod.min.js'
      }
    },

    compass: {
      dev: {
        options: {
          sassDir: 'src/sass',
          cssDir: 'prod/css',
          outputStyle: 'compressed'
        }
      }
    },
    

    watch: {
      files: ['src/js/*.js', 'src/sass/**/*.scss'],
      tasks: ['concat', 'uglify', 'compass' ],
    },

  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['concat', 'uglify', 'compass', 'watch']);

};