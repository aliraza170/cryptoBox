@if(session()->has('success_message'))
    <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert" style="width: max-content; max-width: 640px;">
        <strong>Success!</strong> {!! session()->get('success_message', 'Action was completed successfully.') !!}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session()->has('warning_message'))
    <div class="alert alert-warning alert-dismissible fade show mx-auto" role="alert" style="width: max-content; max-width: 640px;">
        <strong>Warning!</strong> {!! session()->get('warning_message', 'Action was not completed successfully.') !!}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session()->has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert" style="width: max-content; max-width: 640px;">
        <strong>Error!</strong> {!! session()->get('error_message', 'The server encountered an error while trying to complete your request.') !!}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session()->has('info_message'))
    <div class="alert alert-info alert-dismissible fade show mx-auto" role="alert" style="width: max-content; max-width: 640px;">
        <strong>Info!</strong> {!! session()->get('info_message', '') !!}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
