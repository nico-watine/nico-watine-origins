module.exports = function(grunt) {
    grunt.initConfig({
        uncss: {
        dist: {
            files: {
                'css/style.css': ['_site/index.php'],
            }
        }
        }
    });
    grunt.loadNpmTasks('grunt-uncss');
    grunt.registerTask('default', 'uncss');
}