@if ($message = Session::get('errors'))
<div class="alert alert-dismissable alert-danger">
	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    <span arial-hidden="true">&times;</span>
  </button>
        <strong>{{ $message }}</strong>
</div>
@endif
