@extends('layouts/admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 友情链接列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
         <div class="result_wrap">
        <div class="result_title">
            <h3>友情链接管理</h3>
        </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('/admin/links/create')}}"><i class="fa fa-plus"></i>新增友情链接</a>
                    <a href="{{url('/admin/links')}}"><i class="fa fa-refresh"></i>更新排序</a>
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
                        <th>名称</th>
                        <th>标题</th>
                        <th>链接</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $l)
                    <tr>
                        <td class="tc">
                            <input type="text" name="ord[]" onchange="changeOrd(this,{{$l->link_id}})" value="{{$l->link_order}}">
                        </td>
                        <td class="tc">{{$l->link_id}}</td>
                        <td>
                            <a href="#">{{$l->link_name}}</a>
                        </td>
                        <td>{{$l->link_title}}</td>
                        <td>{{$l->link_url}}</td>
                        <td>
                            <a href='{{url("admin/links/$l->link_id/edit")}}'>修改</a>
                            <a href="javascript:;" onclick="delCate(this,{{$l->link_id}})">删除</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </table>
    
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>
    function changeOrd(obj,link_id){
        var link_order = $(obj).val();
        $.post("{{url('admin/links/changeord')}}", {'link_id':link_id,'link_order':link_order,'_token':'{{csrf_token()}}'}, function(data){
            // console.log(data);
            if(data.status == 0){
                layer.msg(data.msg, {icon: 5});
            } else {
                layer.msg(data.msg, {icon: 6});
            }
        });
    }

    //删除
    function delCate(obj,link_id){
        //询问框
        // alert(1);
        layer.confirm('您确定要删除该分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //点完确定发异步请求，完成删除动作
            $.post("{{url('admin/links/')}}/"+link_id, {'_method':'delete', '_token':"{{csrf_token()}}"}, function(data){
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