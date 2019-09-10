@extends('layout.app')

@section('body')
<div id="contents">

<article>
    <h2>講師紹介</h2>

    <!-- 切り替えボタンの設定 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
     ココを押すと表示
    </button>

    <!-- モーダルの設定 -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Aさん</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h2>aaa</h2>
            <p>fugafuga</p>
            <p>fugafuga</p>
            <p>fugafuga</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-primary">変更を保存</button>
          </div>
        </div>
      </div>
    </div>

</article>


</div>
<!--/#contents-->

<script src="js/tutor_modal.js" type="text/javascript"></script>

@endsection

