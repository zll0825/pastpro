@extends('muban')

@section('body')

        <!--右侧内容-->
        <div class="right" style="width: 750px;">
            <div class="atitle">
                订单记录</div>
            <div class="abox">
                <ol class="line03">
                    <li class="lin02bg">
						<u>订单号</u>
						<em>学员姓名</em>
                        <u>年级</u>
						<i>科目</i>
						<i>授课老师</i>
						<b>授课区域</b>
						<i>联系方式</i>
						<em>订单状态</em>
					</li>
					@if(empty($data2))
					<li style="text-align: center;color:red;">暂无记录</li>
@else
@foreach($data2 as $data)
					<li class="">
						<u>{{$data->oid}}</u>
						<em>{{$data->customername}}</em>
						<u>
          @if($data->style == 1)小学
          @elseif($data->style == 2)初中
          @elseif($data->style == 3)高中
          @endif                   
                        </u>
                        <i>{{$data->subject}}</i>
						<i>{{$data->realname}}</i>
						<b>{{$data->address}}</b>
						<i>{{$data->mobile}}</i>
						<em>
          @if($data->status == 0)未预约
          @elseif($data->status == 1)已预约
          @elseif($data->status == 2)授课中
          @elseif($data->status == 3)已结束
          @endif                  
                        </em>
					</li>
@endforeach
     @endif
				</ol>
            </div>
            <div class="abox">
                
<!-- AspNetPager V7.0 for VS2008  Copyright:2003-2007 Webdiyer (www.webdiyer.com) -->
<div id="AspNetPager1" class="overview" firstlastbuttonclass="overview" style="border-style:None;font-weight:normal;font-style:normal;width:100%;white-space:nowrap;">
<div class="overview" style="float:left;width:;">
	共1&nbsp;页1/1页
</div><div class="overview" style="float:left;">
	<a disabled="disabled" style="margin-right:5px;">首页</a><a disabled="disabled" style="margin-right:5px;">上一页</a><span class="cpb" style="margin-right:5px;">1</span><a disabled="disabled" style="margin-right:5px;">下一页</a><a disabled="disabled" style="margin-right:5px;">尾页</a>
</div>
</div>
<!-- AspNetPager V7.0 for VS2008 End -->


            </div>
        </div>
    </div>
    

@endsection('body')