@extends('layouts/admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 网站配置列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="{{url('/admin/confs/changecontent')}}" method="post">
         <div class="result_wrap">
        <div class="result_title">
            <h3>网站配置管理</h3>
        </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('/admin/confs/create')}}"><i class="fa fa-plus"></i>新增网站配置</a>
                    <a href="{{url('/admin/confs')}}"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <form action="{{url('admin/confs/changecontent')}}" method="post">
                {{csrf_field()}}
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">排序</th>
                    <th class="tc" width="5%">ID</th>
                    <th>标题</th>
                    <th>名称</th>
                    <th>内容</th>
                    <th>操作</th>
                </tr>

                @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrd(this,{{$v->conf_id}})" value="{{$v->conf_order}}">
                    </td>
                    <td class="tc">{{$v->conf_id}}</td>
                    <td>
                        <a href="#">{{$v->conf_title}}</a>
                    </td>
                    <td>{{$v->conf_name}}</td>
                    <td>
                        <input type="hidden" name="conf_id[]" value="{{$v->conf_id}}">
                        {!! $v->_html !!}
                    </td>
                    <td>
                        <a href="{{url('admin/confs/'.$v->conf_id.'/edit')}}">修改</a>
                        <a href="javascript:;" onclick="delConfs(this,{{$v->conf_id}})">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="btn_group">
                <input type="submit" value="提交">
                <input type="button" class="back" onclick="history.go(-1)" value="返回" >
            </div>
            </form>
        </div>
    </div>
    <!--搜索结果页面 列表 结束-->
<script>
    function changeOrd(obj,conf_id){
        var conf_order = $(obj).val();
        $.post("{{url('admin/confs/changeord')}}", {'conf_id':conf_id,'conf_order':conf_order,'_token':'{{csrf_token()}}'}, function(data){
            // console.log(data);
            if(data.status == 0){
                layer.msg(data.msg, {icon: 5});
            } else {
                layer.msg(data.msg, {icon: 6});
            }
        });
    }

    //删除
    function delConfs(obj,conf_id){
        //询问框
        // alert(conf_id);
        layer.confirm('您确定要删除该分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //点完确定发异步请求，完成删除动作
            $.post("{{url('admin/confs/')}}/"+conf_id, {'_method':'delete', '_token':"{{csrf_token()}}"}, function(data){
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