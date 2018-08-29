module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
    	dist: {
    		files: {
    			'style/style.css' : 'style/style.scss'
    		}
    	}
    },

    'ftp-deploy': {
        build: {
            auth: {
                host: 'ftp.bluthner.co.uk',
                port: 21,
                authKey: 'key1'
            },
            src: 'build',
            dest: 'dev.bluthner.co.uk/wp-content/themes/Bluthner'
        }
    },

    postcss: {
      options: {
        map: true,
        processors: [
          require('pixrem')(),
          require('autoprefixer')({browsers: 'last 2 versions'}),
          require('cssnano')()
        ]
      },
      dist: {
        src: 'build/*.css'
      }
    },

    copy: {
       main: {
             expand: true,
             cwd: 'style',
             src: 'style.css',
             dest: 'build',
       },
       deploy: {
             expand: true,
             cwd: 'build',
             src: 'style.css',
             dest: '',
        }
    },

    uglify: {
        options: {
          mangle: false
        },
        my_target: {
          files: {
            'build/js/main.js': ['js/main.js']
          }
        }
    },

    watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'copy', 'postcss']
			}
	    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default', ['sass', 'watch']);
  grunt.registerTask('compile', ['uglify', 'copy', 'postcss']);
  grunt.registerTask('deploy', ['compile', 'ftp-deploy']);
};
