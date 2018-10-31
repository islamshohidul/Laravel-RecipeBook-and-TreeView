<!DOCTYPE html>
<html>
<head>
    <title>Laravel Category Treeview Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <link href="{{asset('css/themes/treeview.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/themes/style.min.css')}}" rel="stylesheet">--}}

</head>
 <body>

<di class="container">


<ul >
    @foreach($allCategories as $item)


        <li style="list-style: none">
            <a href="{{ $item->id }}"><i class="fa fa-link"></i> <span>{{ $item->name }}</span> <i class="fa fa-angle-left pull-right"></i></a>

                @if(count( $item->children)  )


                        @include('categories.manageChild',['children' => $item->children])

                {{--@foreach($item->children as $child)--}}
                    {{--<li><a href="{{ $child->id }}">{{ $child->name }}</a></li>--}}
                {{--@endforeach--}}
                    @endif

        </li>
    @endforeach
</ul>

</di>

</div>
    {{--<script src="{{asset('js/jstree/jstree.min.js')}}"></script>--}}
</body>

</html>

{{--<div class="container">--}}
    {{--@foreach($allCategories as $subCate)--}}

            {{--<li>--}}
                {{--{{ $subCate->name }}--}}
                {{--<br>--}}
                {{--<ul>--}}

                    {{--@foreach($subCate->children as $firstNestedSub)--}}

                      {{--<li> {{ $firstNestedSub->name }}</li>--}}

              {{--@foreach($firstNestedSub->children as $secondNestedSub)--}}
                         {{--<li>    {{ $secondNestedSub->name }}</li>--}}

                            {{--@foreach($secondNestedSub->children as $thirdNestedSub)--}}
                            {{--<li>  {{ $thirdNestedSub->name }}</li>--}}
            {{--@endforeach()--}}

            {{--@endforeach()--}}

                {{--</ul>--}}


        {{--</li>--}}




            {{--@endforeach()--}}




    {{--@endforeach()--}}

{{--</div>--}}

