$(document).ready(function() {
    $('#addClass').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            course_code: {
                message: 'The Course Code is not valid',
                validators: {
                    notEmpty: {
                        message: 'The Course Code is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 9 characters long'
                    },
                }
            },
            course_title: {
                validators: {
                    notEmpty: {
                        message: 'The Course Title is required and cannot be empty'
                    },
	                stringLength: {
                        max: 50,
                        message: 'The Course Title is too long'
                    },
                }
            },
            course_descr: {
                validators: {
                    notEmpty: {
                        message: 'The Course Descripion is required and cannot be empty'
                    },
                }
            },
            semester_taken: {
                validators: {
                    notEmpty: {
                        message: 'The Semester Taken is required and cannot be empty'
                    },
                }
            },
            year_taken: {
                validators: {
                    notEmpty: {
                        message: 'The Years Taken is required and cannot be empty'
                    },
                }
            },
            instructor_name: {
                validators: {
                    notEmpty: {
                        message: 'The Instructor Name is required and cannot be empty'
                    },
	                stringLength: {
                        max: 50,
                        message: 'The Instructor Name is too long'
                    },
                }
            },
            course_grade: {
                validators: {
	                stringLength: {
                        max: 2,
                        message: 'The Grade can only be 2 characters long.'
                    },
                }
            }
        }
    });
});