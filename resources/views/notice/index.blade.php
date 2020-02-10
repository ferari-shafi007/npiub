@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center" style='margin-top:100px;'>
<h1>Notice</h1>
</div>

    <table class="notice-table m-5">
        <tr>
            <td>Date</td>
            <td>Bach</td>
            <td>Notice</td>
            <td>File</td>
        @if(!Auth::guest())
            <td>Action</td>
        @endif
        </tr>

@foreach ($notice as $notice)

        <tr>
                <td>
                    {{$notice->created_at}}
                </td>
                <td>
                    {{$notice->bach}}
                </td>
                <td>
                    <span class="font-weight-bold">
                        {{$notice->noticeHead}}
                    </span>
                    <p>
                        {{$notice->noticeBody}}
                    </p>
                </td>
                <td>

                   <div></div>
                    @if($notice->url1 == true)
                <a href="{{$notice->url1}}"><img class="notice-icon" src="/images/pdf.png" alt=""></a>
                    @endif
                     @if($notice->url2 == true)
                <a href="{{$notice->url2}}"><img class="notice-icon" src="/images/pdf.png" alt=""></a>
                    @endif
                     @if($notice->url3 == true)
                <a href="{{$notice->url3}}"><img class="notice-icon" src="/images/pdf.png" alt=""></a>
                    @endif
                     @if($notice->url4 == true)
                <a href="{{$notice->url4}}"><img class="notice-icon" src="/images/pdf.png" alt=""></a>
                    @endif

                </td>
        @if(!Auth::guest())
            <td>
                <div class="d-flex">
                    <a href="/notice/{{$notice->id}}/edit" class="m-1"><i class="fa fa-edit fa-2x bg-warning rounded p-2"></i></a>

            {!!Form::open(['action' => ['noticeController@destroy', $notice->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                <button type="submit" class="bg-danger rounded "><i class="fa fa-trash fa-2x p-2"></i></button>
            {!!Form::close()!!}
                </div>
            </td>
        @endif
            </tr>
            @endforeach

    </table>




@endsection
