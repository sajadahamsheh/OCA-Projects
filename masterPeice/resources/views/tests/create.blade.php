@extends('../mainSite/index2')

@section('content')

        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">{{$topic['title']}} test</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>{{$topic['title']}} test</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    
    
  
        
        {!! Form::open(['method' => 'POST', 'route' => ['tests.store']],['class'=>" m-5"] ) !!}
    <div class="panel panel-default m-5" >
        <div class="panel-heading p-4">
            {{$topic['title']}} test
        </div>
       
    @if(count($questions) > 0)
    <div class="panel-body m-5" >
        <?php $i = 1; ?>
        @foreach($questions as $question)
        @if ($topic['id'] ==$question['topic_id'])
        
            @if ($i > 1) <hr /> @endif
            <div class="row" style="padding-left: 20px !important;">
                <div class="col-xm-8 mr-5 form-group">
                    <div class="form-group" >
                        <div class="badge rounded-pill bg-danger mb-2 p-2" >Question {{ $i }}.</div>
                            <br />
                          <div>
                              {{$question['question_text']}}
                          </div>
                        <input
                            type="hidden"
                            name="questions[{{ $i }}]"
                            value="{{ $question->id }}">

                    @foreach($question->options as $option)
                        <br>
                        <label class="radio-inline">
                            <input
                                type="radio"
                                name="answers[{{ $question['id'] }}]"
                                value="{{ $option['id'] }}">
                            {{ $option->option }}
                        </label>
                    @endforeach
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endif
            @endforeach
        </div>
    @endif
</div>
<div class="d-grid gap-2 col-1 mx-auto">

    {!! Form::submit(trans('Submit The Test'), ['class' => 'btn btn-danger ']) !!}
</div>

    {!! Form::close() !!}
    
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "hh:mm:ss"
        });
    </script>


@stop
