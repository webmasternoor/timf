<h1 class="page-header">জামিনদার তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('jamindar/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('jamindar_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('jamindar/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('jamindar/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">ক্রমিক নং</th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarNameTitle&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
                নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarNameTitle'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarRelation&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               গ্রাহকের সাথে সম্পর্ক
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarRelation'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarEducation&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               শিক্ষাগত যোগ্যতা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarEducation'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarPassingYear&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               পেশা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarPassingYear'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarMobile1&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               মোবাইল নং
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarMobile1'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarEmail&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               ইমেইল
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarEmail'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarNid&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               জাতীয় পরিচয় পত্র
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarNid'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=jamindarphoto&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
               ফটো
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='jamindarphoto'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        {{--<th width="140px">অ্যাকশন সমূহ</th>--}}
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($jamindars as $key=>$jamindar)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$jamindar->JamindarNameTitle}} {{$jamindar->JamindarFirstName}} {{$jamindar->JamindarLastName}}</td>
            <td>{{$jamindar->JamindarRelation}}</td>
            <td>{{$jamindar->JamindarEducation}}</td>
            <td>{{$jamindar->JamindarPassingYear}}</td>
            <td>{{$jamindar->JamindarMobile1}}</td>
            <td>{{$jamindar->JamindarEmail}}</td>
            <td>{{$jamindar->JamindarNid}}</td>
            <td>@if(!empty($jamindar->jamindarphoto))
                    <img src="uploads/{{$jamindar->jamindarphoto}}">
                @endif
            </td>
            <td style="text-align: center">
                {{--<a class="btn btn-primary btn-xs" title="Edit"--}}
                   {{--href="javascript:ajaxLoad('jamindar/update/{{$jamindar->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i> আপডেট</a>--}}
                {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                   {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('jamindar/delete/{{$jamindar->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                {{--</a>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$jamindars->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$jamindars->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>