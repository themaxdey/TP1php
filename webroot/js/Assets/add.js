$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter 
    $('#pays-id').on('change', function () {
        var paysId = $(this).val();
        if (paysId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'pays_id=' + paysId,
                success: function (villes) {
                    $select = $('#villes-id');
                    $select.find('option').remove();
                    $.each(villes, function (key, value)
                    {
                        $.each(value, function (childKey, childValue) {
                            $select.append('<option value=' + childValue.id + '>' + childValue.name + '</option>');
                        });
                    });
                }
            });
        } else {
            $('#ville-id').html('<option value="">Select Pays first</option>');
        }
    });
});


