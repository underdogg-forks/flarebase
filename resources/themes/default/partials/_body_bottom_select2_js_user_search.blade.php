<!-- Select2 4.0.0 -->
<script src="{{ asset ("/bower_components/admin-lte/select2/js/select2.min.js") }}" type="text/javascript"></script>

<script type="text/javascript">
    $('#user_search').select2({
        theme: "bootstrap",
        placeholder: 'Search staff...',
        minimumInputLength: 3,
        ajax: {
            delay: 250,
            url: '/admin/staff/search',
            dataType: 'json',
            data: function (params) {
                var queryParameters = {
                    query: params.term
                };

                return queryParameters;
            },
            processResults: function (data) {
                return {
                    results: data
                };
            }
        },
        tags: true
    });

    $("#btn-add-staff").on("click", function () {
        var userName, userFullname, userEnabled, userStatus, idCell, fullnameCel, nameCel, enabledCel, actionCel;
        // Get ID.
        var userID = $('#user_search').val();
        // Build URL based on route and replace "{staff}" with ID.
        var urlShowUser = '{!! route("admin.staff.show") !!}'.replace('%7Bstaff%7D', userID);
        // Capture CSRF token from meta header.
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        // Parse table values based on selected text.
        $.ajax({
            url: '{!! route("admin.staff.get-info") !!}',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                id: userID
            },
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                userName = data['username'];
                userFullname = data['full_name'];
                userEnabled = data['enabled'];

                if(1 == userEnabled) {
                    userStatus = '<i class="fa fa-check text-green"></i>';
                }
                else {
                    userStatus = '<i class="fa fa-close text-red"></i>';
                }

                // Build table cells.
                idCell     = '<td class="hidden" rowname="id">' + userID + '</td>';
                fullnameCel    = '<td>' + '<a href="' + urlShowUser + '">' + userFullname + '</a>' + '</td>';
                nameCel    = '<td>' + '<a href="' + urlShowUser + '">' + userName + '</a>' + '</td>';
                enabledCel = '<td>' + userStatus + '</td>';
                actionCel  = '<td style="text-align: right"><a class="btn-remove-staff" href="#" title="{{ trans('staff') }}"><i class="fa fa-trash-o deletable"></i></a></td>';

                // Add selected item only if not already in list.
                if ( $('#tbl-staff tr > td[rowname="id"]:contains(' + userID + ')').length == 0 ) {
                    $('#tbl-staff > tbody:last-child').append('<tr>' + idCell + fullnameCel + nameCel + enabledCel + actionCel + '</tr>');
                }

            }
        });

    });

    $('body').on('click', 'a.btn-remove-user', function() {
 staff   $(this).parent().parent().remove();
    });
</script>
