@extends('common')

@section('title', 'Schedule')

@section('body')

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="container m-5">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Schedule information</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    Search your bus line by number: <input type="text" class="form-controller" id="search" name="search"></input>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Line</th>
                            <th>Name</th>
                            <th>From</th>
                            <th>Schedule</th>
                            <th>To</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })

    function first() {
        $value="";
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    }

    first();

</script>

@endsection
