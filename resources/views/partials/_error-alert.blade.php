@if(session()->has('error'))
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="alert alert-danger alert-fixed">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                <strong>{{ session()->get('title') }}</strong>
                <hr class="message-inner-separator">
                <p>
                    {{ session()->get('error') }} </p>
            </div>
        </div>
    </div>
</div>
@endif