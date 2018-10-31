@extends('layouts.layout')

@section('content')
    <div class="container ">
        {{--<a class="btn btn-info pull-right" href="{{route('questions.index')}}"><span class="glyphicon glyphicon-arrow-left"></span></a>--}}
        <div class="col-md-7   col-md-offset-2 bg-info " >
            <form class=" form-horizontal pull-right  " action="{{url('questions/'.$id.'/store')}}" method="post">
                {{csrf_field()}}

                <div class="form-group col-md-7" >
                    <label for="question" class="col-sm-5">Name of Question</label>
                    <input type="text" id="question" name="question" class="form-control col-sm-10-4" placeholder="Enter quiz name">
                </div>
                <div class="form-group col-md-7" >
                    <label for="description" class="col-sm-5">Description</label>
                    <input type="text" id="description" name="description" class="form-control col-sm-10-4" placeholder="Enter quiz description">
                </div>

                <div class="col-md-10">
                    <table class="table table-bordered table-responsive frames-tab-active" id="table">
                        <thead>
                        <tr>
                            <th> Option Name</th>
                            <th colspan="2">Is_Correct</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr id="clone">
                            <td><input type="text" name="names[]" id="option"></td>
                            <td>
                                <select name="answers[]" class="form-control">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                                {{--<input type="checkbox" name="is_correct[]" id="is_correct" value="0"> --}}
                            </td>
                            <td><button type="button"   class="removebutton btn-danger " title="Remove this row">DELETE</button>
                            </td>

                        </tr>

                        </tbody>
                    </table>
                    <td colspan="3" class="text-center"><button type="button" id="button"  name="add"  class="btn btn-info " >+Add more </button> </td>

                </div>



                {{--<input  type="hidden"  name="quiz_id" value="{{$question->quiz_id}}" />--}}
                <div class="col-md-7 col-md-offset-2 text-center">
                    <input type="submit" class="btn btn-primary">

                </div>


            </form>
        </div>
    </div>
<script>
    $(document).ready(function() {
        $("#button").on("click", function () {
            $("#table").append($("#table").find("#clone").clone().removeAttr("id").find("input").val("").end());
        });

        $(document).on('click', 'button.removebutton', function () {
            alert("If you wish to remove the row.. Click on the ok button.");
            $(this).closest('tr').remove();
            return false;
        });
    });
</script>
@endsection