@extends('layout.app')

@section('body')
<div id="contents">

<article>
<h2>講師紹介</h2>

@foreach ($tutors as $tutor)
    <!-- 切り替えボタンの設定 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tutorModal{{$tutor->id}}">
     {{$tutor->name}}
    </button>

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
            {{$tutor->body}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-primary">変更を保存</button>
          </div>
        </div>
      </div>
    </div>
@endforeach

</article>


</div>
<!--/#contents-->

<script src="js/tutor_modal.js" type="text/javascript"></script>

@endsection

