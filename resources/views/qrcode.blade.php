@extends('layouts.index')

@section('content')

    <section class="counters2 counters mbr-fullscreen cid-roUkerX0B9" id="counters2-d">
        <div class="container ">
            <div class="media-container-row">
                <div class="media-block" style="width: 50%;margin-top: 100px" >

                    <div class="mbr-figure align-center">

                        {!! QrCode::size(250)->generate( Auth::user()->verification_code ); !!}
                        <p>{{ Auth::user()->verification_code }}</p>

                    </div>

                    <h3 class="mbr-section-title mbr-bold pt-5 align-center mbr-fonts-style display-5">
                        <font face="微軟正黑體">餐廳讀取行動條碼後，即可確認您的會員身分</font>
                    </h3>
                </div>
            </div>
        </div>
    </section>



@endsection