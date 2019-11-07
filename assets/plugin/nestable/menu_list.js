$(document).ready(function () {
    var base_url = $("#base_url").val();
    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target), output = list.data('output');

        $.ajax({
            method: "POST",
            url: base_url+"vnadmin/menu/savelist",
            data: {
                list: list.nestable('serialize')
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            alert("Unable to save new list order: " + errorThrown);
        });
    };
    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    }).on('change', updateOutput);
    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output-main')));

    /*begin show_menu*//*end show_menu*/
});

function active_tab(id) {
	$.ajax({
		url: "<?php echo site_url('admin/menu/active_tab'); ?>",
		type: 'POST',
		dataType: 'json',
		data: {id:id},
		success: function (msg) {

		}
	});
}