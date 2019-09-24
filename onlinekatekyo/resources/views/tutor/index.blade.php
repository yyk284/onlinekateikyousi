@extends('layout.app')

@section('body')
<div id="contents">

<article>
<h2>講師紹介</h2>

<div class="tutors container">
<div class="row">
@foreach ($tutors as $tutor)
    <!-- 切り替えボタンの設定 -->

    <div class="col-lg-3">
        <a data-toggle="modal" data-target="#tutorModal{{$tutor->id}}">
            <div class="card">
                <img class="card-img-top" src="http://drive.google.com/uc?export=view&id=1jlgWj3jC4g3klItWHKVTDlpbeOcSzyEr">
                <div class="card-body">
                    <h4 class="card-title">{{$tutor->name}}</h4>
                    <div class="card-text">
                        <p>{{$tutor->ac}}</p>
                        <p>{{$tutor->time}}</p>
                        <p>{{$tutor->fee}}円/コマ</p>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <!-- モーダルの設定 -->
    <div class="modal fade" id="tutorModal{{$tutor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">
                {{$tutor->name}}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{$tutor->other}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          </div>
        </div>
      </div>
    </div>
@endforeach
</div>
</div>

</article>


</div>
<!--/#contents-->

@endsection

