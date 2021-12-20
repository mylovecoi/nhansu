// Class definition
var KTSelect2 = function() {
    // Private functions
    var sele = function() {
        // Add class
        $('.select2basic').select2({
            placeholder: 'Chọn giá trị'
        });
        $('.select2group').select2({
            placeholder: 'Chọn giá trị'
        });
        $('.select2multi').select2({
            placeholder: 'Chọn giá trị',
        });
        //End Add Class
        $('.modal').on('shown.bs.modal', function () {
            $('.select2modal').select2({
                placeholder: 'Chọn giá trị'
            });
        });
    }

    // Public functions
    return {
        init: function() {
            sele();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTSelect2.init();
});
