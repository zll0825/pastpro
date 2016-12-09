@extends('layouts/admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文章添加
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap"> 
        <div class="result_title">
            <h3>快捷操作</h3>
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
        </div>
         <div class="result_content">
            <div class="short_wrap">
                    <a href="{{url('/admin/article')}}"><i class="fa fa-fw fa-list-ul"></i>全部文章</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('/admin/article')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120">栏目：</th>
                        <td>
                            <select name="art_cateid">
                                <option value="">==请选择==</option>
                                @foreach($data as $d)
                                <option value="{{$d->cate_id}}"><?php echo str_repeat('--', $d->lev)?>{{$d->cate_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="art_title">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td>
                            <input type="text" name="art_editor">
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                        </td>
                    </tr>
                    <tr>
                        <th>标签：</th>
                        <td>
                            <input type="text" class="lg" name="art_tag">
                            <p>如果有多个标签，请用空格隔开</p>
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="art_description"></textarea>
                        </td>
                    </tr>
                    <tr>
<script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
<style>
.uploadify{display:inline-block;}
.uploadify-button{border:none; border-radius:5px; margin-top:8px;}
table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
</style>
                        <th>封面图：</th>
                        <td>
                            <input type="text" class="lg" id="filepath" name="art_thumb">
                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                        </td>
<script type="text/javascript">
    <?php $timestamp = time();?>
    $(function() {
        $('#file_upload').uploadify({
            'buttonText' : '上传图片',
            'formData'     : {
                'timestamp' : '<?php echo $timestamp;?>',
                '_token'     : "{{csrf_token()}}"
            },
            'swf'      : "{{asset('resources/org/uploadify/uploadify.swf')}}",
            'uploader' : "{{url('/admin/upload')}}",
            'onUploadSuccess' : function(file, data, response) {
                $('#filepath').val(data);
                $('#thumb').attr('src', data);
            }
        });
    });
</script>           
                    </tr>
                     <tr>
                        <th></th>
                        <td>
                            <img src="" id="thumb" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th>常用封面图</th>
                        <td>
                            <select name="often" id="often" >
                                <option value="/uploads/often/default.jpg">请选择</option>
                                <option value="/uploads/often/php.jpg">php</option>
                                <option value="/uploads/often/mysql.jpg">mysql</option>
                                <option value="/uploads/often/linux.jpg">linux</option>
                                <option value="/uploads/often/javascript.jpg">javascript</option>
                                <option value="/uploads/often/laravel.jpg">laravel</option>
                                <option value="/uploads/often/life.jpg">life</option>
                                <option value="/uploads/often/world.jpg">world</option>
                            </select>
                        </td>
<script>
    $('#often').change(function(){
        var item = $("#often option:selected").val();
        $('#thumb').attr('src',item);
        $('#filepath').val(item);
    });
</script>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>文章内容：</th>
                        <td>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
<script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;"></script>
<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>
<style>
    .edui-default{line-height: 28px;}
    div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
    {overflow: hidden; height:20px;}
    div.edui-box{overflow: hidden; height:22px;}
</style>
                        </td>
                    </tr>

                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </form>
    </div>
@endsection('content')