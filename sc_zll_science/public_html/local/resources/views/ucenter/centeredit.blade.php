@extends('muban')

@section('body')


        <!--右侧内容-->
        <form method="post">
            {{csrf_field()}}

        <div class="right" style="width: 750px;">
            <div class="atitle">
                简历修改</div>
            <div class="abox">
                <table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td valign="middle" height="25" align="center">
                                <span class="zt1">您所填信息越详细就越有利于检索，也就越容易获得学员的</span><span class="zt1">预约。</span>
                            </td>
                        </tr>
                        <tr class="titlebg">
                            <td height="25" align="center">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>基 本 信 息</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="center">
                                <table width="100%" border="0" align="left" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="trbgc">
                                            <td width="150px;" height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                真实姓名：
                                            </td>
                                            <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="zsxm">{{$data->name}}</span>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                性别：
                                            </td>
                                            <td width="31%" height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="xb">{{$data->gender}}</span>
                                            </td>
                                            <td width="14%" align="right" valign="middle" bgcolor="#FFFFFF">
                                                身份证/护照:
                                            </td>
                                            <td width="42%" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="sfzh">{{$data->idnum}}</span>
                                            </td>
                                        </tr>

                                        
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                年龄：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="lzsf">{{$data->age}}</span>
                                                &nbsp;
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                学历：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="mqsf">@if($data->edu == 1)
                                                    小学
                                                    @elseif($data->edu == 2)
                                                    初中
                                                    @elseif($data->edu == 3)
                                                    高中
                                                    @elseif($data->edu == 4)
                                                    本科
                                                    @elseif($data->edu == 5)
                                                    研究生
                                                    @elseif($data->edu == 6)
                                                    博士
                                                    @endif</span>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td height="25" colspan="4" align="left" valign="middle" bgcolor="#FFFFFF">
                                                【注意】要修改基本信息，请携带相关证件到服务中心，或致电010-62642730 62643630 由工作人员审核后为您修改！
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="left">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>联 系 方 式</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                      
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                电 话/手 机：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="mobile" type="text" id="mobile" maxlength="50" size="22" class="zcinput" value="{{$data->mobile}}">
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                E_mail：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="email" type="text" id="email" maxlength="50" size="22" class="zcinput" value="{{$data->email}}">
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="25" align="left" width=90 valign="middle" bgcolor="#FFFFFF">
                                                住址：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="address" type="text" id="address" size="22" class="zcinput" value="{{$data->address}}">
                                            </td>
                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="titlebg">
                            <td height="25" align="center">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>@if($data->role==1)
                                                    家 教 信 息 
                                                    @else 个 人 信 息
                                                    @endif</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" height="25" align="left">
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody> 
                                        @if($data->role==1)
                                        <tr class="trbgc">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                               可教授科目
                                            </td>
                                            <td colspan=3 width="34%" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input size= 70 type="text" name="goodat" id="" class="zcinput" value="{{$data->goodat}}"/>
                                            </td>
                                        </tr>
                                        @endif
                                        <tr class="trbgc1">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                自我描述<br>
                                                特长展示
                                            </td>
                                            <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <textarea name="intro" id="intro" class="zcinput" rows="6" cols="24">{{$data->intro}}</textarea>
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                @if($data->role==1)
                                                <span class="yel">
                                                    展示实力，增加你的魅力！比如你竞赛中获得过什么奖项，取得过什么出色的成绩，有哪些过硬的证书之类。</span>
                                                @else
                                                <span class="yel">简单自我介绍和自己的基本情况，比如某个学科不擅长，某些知识点不理解等等</span>
                                                @endif
                                                <span class="green">【请不要使用空格，尽量使用逗号来代替
                                                    ("，")请控制在600字以内，超过文字被自 动删除.】</span>
                                            </td>
                                        </tr>
                                        
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <strong class=" p14 red">注意：</strong><strong class=" p12 red">为了保证信息的有效性，修改信息后，我们的工作人员会对你的资料进行重新审核，请慎重！</strong>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input type="submit" value=" 提 交 " class="button">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    </div>
@endsection('body')