@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center" style='margin-top:100px;'>
<h1>Notice</h1>
</div>

    <table class="notice-table">
        <tr>
            <td>Date</td>
            <td>Bach</td>
            <td>Notice</td>
            <td>File</td>
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
                    {{-- @if(count($notice > 0) --}}

                        <a href=""><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                    {{-- @endif --}}
                   <div></div>
                    <%if (notice.noticeFile2 != "") { %>
                        <a href="<%= notice.noticeFile2 %>"><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <% } %>
                    <%if (notice.noticeFile3 != "") { %>
                        <a href="<%= notice.noticeFile3 %>"><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <% } %>
                    <%if (notice.noticeFile4 != "") { %>
                        <a href="<%= notice.noticeFile4 %>"><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <% } %>


                </td>
            </tr>
            @endforeach

    </table>




@endsection
