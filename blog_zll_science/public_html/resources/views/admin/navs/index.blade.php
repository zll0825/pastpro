@extends('layouts/admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 自定义导航列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
         <div class="result_wrap">
        <div class="result_title">
            <h3>自定义导航管理</h3>
        </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('/admin/navs/create')}}"><i class="fa fa-plus"></i>新增自定义导航</a>
                    <a href="{{url('/admin/navs')}}"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%">排序</th>
                        <th class="tc" width="5%">ID</th>
                        <th>导航名称</th>
                        <th>导航别名</th>
                        <th>链接</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $n)
                    <tr>
                        <td class="tc">
                            <input type="text" name="ord[]" onchange="changeOrd(this,{{$n->nav_id}})" value="{{$n->nav_order}}">
                        </td>
                        <td class="tc">{{$n->nav_id}}</td>
                        <td>
                            <a href="{{$n->nav_url}}">{{$n->nav_name}}</a>
                        </td>
                        <td>{{$n->nav_alias}}</td>
                        <td>{{$n->nav_url}}</td>
                        <td>
                            <a href='{{url("admin/navs/$n->nav_id/edit")}}'>修改</a>
                            <a href="javascript:;" onclick="delCate(this,{{$n->nav_id}})">删除</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </table>
    
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>
    function changeOrd(obj,nav_id){
        var nav_order = $(obj).val();
        $.post("{{url('admin/navs/changeord')}}", {'nav_id':nav_id,'nav_order':nav_order,'_token':'{{csrf_token()}}'}, function(data){
            // console.log(data);
            if(data.status == 0){
                layer.msg(data.msg, {icon: 5});
            } else {
                layer.msg(data.msg, {icon: 6});
            }
        });
    }

    //删除
    function delCate(obj,nav_id){
        //询问框
        // alert(1);
        layer.confirm('您确定要删除该分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //点完确定发异步请求，完成删除动作
            $.post("{{url('admin/navs/')}}/"+nav_id, {'_method':'delete', '_token':"{{csrf_token()}}"}, function(data){
                if(data.status==0){
                    $(obj).parents('tr').empty();
                    //把obj对象传进来，找到tr对象，用empty清空，remove是移除节点
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
            // layer.msg('删除成功！', {icon: 1});
        });
    }
</script>

@endsection('content')