@extends('main')
@section('extra_style')
<style type="text/css">
</style>
@endsection

@section('content')
<button class="b1" id="button1">
    Tekan ini
</button>
<div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-3">
            <h2>Ping Project</h2>
            <small>You have 42 messages and 6 notifications.</small>
            <ul class="list-group clear-list m-t">
                <li class="list-group-item fist-item">
                    <span class="pull-right">
                        09:00 pm
                    </span>
                    <span class="label label-success">1</span> Please contact me
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        10:16 am
                    </span>
                    <span class="label label-info">2</span> Sign a contract
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        08:22 pm
                    </span>
                    <span class="label label-primary">3</span> Open new shop
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        11:06 pm
                    </span>
                    <span class="label label-default">4</span> Call back to Sylvia
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        12:00 am
                    </span>
                    <span class="label label-primary">5</span> Write a letter to Sandra
                </li>
            </ul>
        </div>
</div>

@endsection

@section('extra_script')
<script type="text/javascript">
    var i = 0;
    $('#button1').on('click',function(){
        $(this).html('Anda Telah menekan ini');
    })

    if ($('#button1').html() == 'Anda Telah menekan ini') {
        ++i;
        $('#button1').html('menekan Tombol ini'+ i);
    }

	function Pinger_ping(ip, callback) {

  if(!this.inUse) {

    this.inUse = true;
    this.callback = callback;
    this.ip = ip;

    var _that = this;

    this.img = new Image();

    this.img.onload = function() {_that.good();};
    this.img.onerror = function() {_that.good();};

    this.start = new Date().getTime();
    this.img.src = "http://" + ip;
    this.timer = setTimeout(function() { _that.bad();}, 1500);
  }
}
</script>
@endsection