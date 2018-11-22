@if(session()->has('status'))
    <div class="col col-md-12">
        <div class="alert alert-{{session()->get('status')}}" role="alert">{{session()->get('message')}}</div>
    </div>
@endif