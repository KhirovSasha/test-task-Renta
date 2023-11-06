import $ from 'jquery';

$(document).ready(function () {
    $('#builder_id').on('change', function () {
        var selectedBuilderId = $(this).val();

        $.ajax({
            url: '/get-builder-details',
            type: 'GET',
            data: {
                builder_id: selectedBuilderId,
            },
            success: function (data) {

                $('#city').val(data.city);
                $('#street').val(data.street);
                $('#building_number').val(data.building_number);
                $('#wallType option').each(function () {
                    if ($(this).val() === data.wallType) {
                        $(this).prop('selected', true);
                    } else {
                        $(this).prop('selected', false);
                    }
                });
                $('#heating option').each(function () {
                    if ($(this).val() === data.heating) {
                        $(this).prop('selected', true);
                    } else {
                        $(this).prop('selected', false);
                    }
                });
            },
        });
    });
});

