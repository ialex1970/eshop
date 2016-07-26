@if(\Session::has('success'))
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><i class="fa fa-check-circle fa-lg fa-fw"></i></strong>
    <div class="alert alert-success">{{ \Session::get('success') }}</div>
@endif
@if(\Session::has('error'))
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
@endif
