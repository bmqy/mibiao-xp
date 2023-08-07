<?php
//获取前端传递的参数domain_ids
$domain_ids = $_REQUEST['domain_ids'];


?>

<link rel="stylesheet" href="//unpkg.com/layui@2.6.8/dist/css/layui.css"/>
<script src="//unpkg.com/layui@2.6.8/dist/layui.js"></script>
<script src="//cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<form class="layui-form layui-form-pane" action="javascript:;" style="margin-top: 20px;">


    <div class="layui-form-item">
        <label class="layui-form-label">状态</label>
        <div class="layui-input-block">
            <select name="status" lay-verify="required">
                <option value="available" >在售</option>
                <option value="sold" >已售</option>
                <option value="reserved">保留</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <button class="layui-btn" id="save">保 存</button>
    </div>

</form>

<script>
    //保存
    $('#save').on('click', function () {
        $.ajax({
            type: "POST",
            url: "domains.php?do=movedmains",
            data: {
                "status": $('select[name="status"]').val() || '',
                domain_ids: "<?= $domain_ids ?>"
            },
            async: true,
            success: function (state) {
                layer.msg(state == 200 ? "保存完成" : "新增失败,请检查配置", function () {
                    let index=parent.layer.getFrameIndex(window.name); //关闭当前窗口
                    parent.location.reload();//刷新父页面，注意一定要在关闭当前iframe层之前执行刷新
                    parent.layer.close(index);
                });
            }
        })
    })


</script>
