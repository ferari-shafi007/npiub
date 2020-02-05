@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger messegeShow">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success messegeShow">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger messegeShow">
        {{session('error')}}
    </div>
@endif

<style>
.messegeShow{
    margin-top: 100px;
    z-index: 100;
}
</style>
