<form class="layui-form layui-form-pane" method="POST" action="javascript:;">

    <!-- 基本设置 -->
    <fieldset class="layui-elem-field layui-field-title">
        <legend>基本设置</legend>
    </fieldset>

    <div class="layui-form-item">
        <label class="layui-form-label">网站名称</label>
        <div class="layui-input-inline">
            <input type="text" name="sitename" value="<?=$webname?>" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">网站Logo</label>
        <div class="layui-input-inline" style="width:400px;">
            <input type="text" name="logo" value="<?=$logo?>" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">网站Favicon</label>
        <div class="layui-input-inline" style="width:400px;">
            <input type="text" name="favicon" value="<?=$favicon?>" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">信息1</label>
        <div class="layui-input-inline" style="width:400px;">
            <textarea name="info_1" placeholder="请输入内容" class="layui-textarea"><?=$info_1?></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">信息2</label>
        <div class="layui-input-inline" style="width:400px;">
            <textarea name="info_2" placeholder="请输入内容" class="layui-textarea"><?=$info_2?></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">信息2</label>
        <div class="layui-input-inline" style="width:400px;">
            <textarea name="info_3" placeholder="请输入内容" class="layui-textarea"><?=$info_3?></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">公众号</label>
        <div class="layui-input-inline" style="width:400px;">
            <input name="info_3" placeholder="请输入二维码链接" class="layui-input" value="<?=$mp_qrcode?>" />
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">百度统计</label>
        <div class="layui-input-inline" style="width:400px;">
            <textarea name="tongji_code" placeholder="百度统计xxx部分：https://hm.baidu.com/hm.js?XXXXXXXXXX" class="layui-textarea"><?=$tongji_code?></textarea>
        </div>
    </div>
</form>