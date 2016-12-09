@extends('layouts/admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 栏目列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
         <div class="result_wrap">
        <div class="result_title">
            <h3>栏目管理</h3>
        </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('/admin/category/create')}}"><i class="fa fa-plus"></i>新增栏目</a>
                    <a href="{{url('/admin/category')}}"><i class="fa fa-refresh"></i>更新排序</a>
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
                        <th>栏目名称</th>
                        <th>标题</th>
                        <th>点击</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $c)
                    <tr>
                        <td class="tc">
                            <input type="text" name="ord[]" onchange="changeOrd(this,{{$c->cate_id}})" value="{{$c->cate_order}}">
                        </td>
                        <td class="tc">{{$c->cate_id}}</td>
                        <td>
                            <a href="#"><?php echo str_repeat('+', $c->lev)?>{{$c->cate_name}}</a>
                        </td>
                        <td>{{$c->cate_title}}</td>
                        <td>{{$c->cate_view}}</td>
                        <td>
                            <a href='{{url("admin/category/$c->cate_id/edit")}}'>修改</a>
                            <a href="javascript:;" onclick="delCate(this,{{$c->cate_id}})">删除</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </table>
    
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>
    function changeOrd(obj,cate_id){
        var cate_ord = $(obj).val();
        $.post("{{url('admin/cate/changeord')}}", {'cate_id':cate_id,'cate_ord':cate_ord,'_token':'{{csrf_token()}}'}, function(data){
            // console.log(data);
            if(data.status == 0){
                layer.msg(data.msg, {icon: 5});
            } else {
                layer.msg(data.msg, {icon: 6});
            }
        });
    }

    //删除
    function delCate(obj,cate_id){
        //询问框
        // alert(1);
        layer.confirm('您确定要删除该分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //点完确定发异步请求，完成删除动作
            $.post("{{url('admin/category/')}}/"+cate_id, {'_method':'delete', '_token':"{{csrf_token()}}"}, function(data){
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