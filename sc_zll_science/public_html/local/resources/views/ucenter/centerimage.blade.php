@extends('muban')

@section('body')


<!--右侧内容-->
        <div class="right" style="width: 750px;">
            <div class="atitle">
                照片管理</div>
            <div class="abox">
                <p class="red">
                    <strong>【提示信息】</strong></p>
                <p>
                    有照片的教员被关注度超出没照片会员的7倍</p>
                <p>
                    有照片的教员成功找到家教的比例比没照片的会员高出约6倍</p>
                <p>
                    有照片的教员被搜索的比例比没照片的教员高出11倍</p>
                <p>
                    一张自信的照片将为您带来更多机会
                </p>
                <p>
                    （1）自信、生动的照片会给你带来更多的关注，为增强效果请不要上传卡通照、合影照、婴孩照、脸部很小的照片，照片大小不超过500k， 支持格式有：jpg、gif、png等。(<a href="http://www.tuyaya.com/" target="_blank" class="STYLE1">照片处理工具</a>)</p>
                <table width="100%" border="0" cellpadding="6" cellspacing="0">
                    <tbody>
                        <tr bgcolor="#f1fafc">
                            <td height="30" colspan="6" align="center" valign="middle">                                
                                    <img id="Image1" src="{{$data->photo}}" style="height:145px;width:115px;border-width:0px;" />
                  </div>
                            </td>
                        </tr>
                        <tr bgcolor="#f1fafc">
                            <td height="40" colspan="6" align="left" valign="top">
                                请选择上传的照片文件：
                                <form method="POST" action="" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input name="images" type="file" id="images" />&nbsp; &nbsp;
                    <input type="hidden" id="uid" name="id" value="{{$data->uid}}">
                                <input type="submit" name="Button3"  value=" 上 传 " id="Button3" class="button" />
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
      </div>
        </div>
    </div>


@endsection('body')