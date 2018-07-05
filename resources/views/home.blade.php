@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="heading ">
                          <div class="fusion-title-sc-wrapper" style="">
                            <div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-two" style="margin-top:0px;margin-bottom:0px;"><h2 class="title-heading-center" style="color:#fff;font-size:20px;line-height:24px;">— Selamat Datang Di Web Kami—</h2></div>                          </div>
                        </div>
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    KAMU SUDAH BERHASIL MASUK
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
