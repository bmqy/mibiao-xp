<?php
require_once("admin/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$webname?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/static/style.css" media="all" />
    <link rel="icon" href="<?=empty($favicon) ? "/static/favicon.ico" : $favicon?>" type="image/x-icon" />
    <?=$tongji_code?>
</head>
<body>
<div class="invoice">
  <div class="header">
      <img src="<?=$logo?>" style="height: 100px">
    <h1><?=$webname?></h1>
  </div>
  <div class="content">
      <div class="order-info">
          <?=$info_1?>
      </div>

      <div class="store-info">
          <?=$info_2?>
      </div>

      <?php if (!empty($available_domains)): ?>
          <h2>待售列表</h2>
          <table>
              <tr>
                  <th>域名</th>
                  <th>备注</th>
                  <th>平台</th>
                  <th>价格</th>
              </tr>
              <?php foreach ($available_domains as $domain): ?>
                  <tr class="item" title="心怡域名，请带价骚扰">
                      <td><?php echo $domain['domain_name']; ?></td>
                      <td><?php echo $domain['description']; ?></td>
                      <td><?php echo $domain['platform']; ?></td>

                      <td> <a href="<?php echo $domain['platform_url']; ?>">￥<?php echo $domain['price']; ?></a></td>

                  </tr>
              <?php endforeach; ?>
              <tr>
                  <th colspan="4"></th>
              </tr>
              <tr class="item">
                  <td colspan="3" style="text-align: right;"><strong>总价：</strong></td>
                  <td><strong>￥<?=$available_domains_total_price?></strong></td>
              </tr>
          </table>
      <?php endif; ?>

      <?php if (!empty($sold_domains)): ?>
          <h2>已售域名</h2>
          <table>
              <tr>
                  <th>域名</th>
                  <th>备注</th>
                  <th>平台</th>
                  <th>价格</th>
              </tr>
              <?php foreach ($sold_domains as $domain): ?>
                  <tr class="item">
                      <td><?php echo $domain['domain_name']; ?></td>
                      <td><?php echo $domain['description']; ?></td>
                      <td><?php echo $domain['platform']; ?></td>
                      <td>￥<?php echo $domain['price']; ?></td>
                  </tr>
              <?php endforeach; ?>
              <tr>
                  <th colspan="4"></th>
              </tr>
              <tr class="item">
                  <td colspan="3" style="text-align: right;"><strong>总价：</strong></td>
                  <td><strong>￥<?=$sold_domains_total_price?></strong></td>
              </tr>
          </table>
      <?php endif; ?>

      <?php if (!empty($reserved_domains)): ?>
          <h2>保留域名</h2>
          <table>
              <tr>
                  <th>域名</th>
                  <th>备注</th>
                  <th>平台</th>
                  <th>价格</th>
              </tr>
              <?php foreach ($reserved_domains as $domain): ?>
                  <tr class="item">
                      <td><?php echo $domain['domain_name']; ?></td>
                      <td><?php echo $domain['description']; ?></td>
                      <td><?php echo $domain['platform']; ?></td>
                      <td>￥<?php echo $domain['price']; ?></td>
                  </tr>
              <?php endforeach; ?>
              <tr>
                  <th colspan="4"></th>
              </tr>
              <tr class="item">
                  <td colspan="3" style="text-align: right;"><strong>总价：</strong></td>
                  <td><strong>￥<?=$reserved_domains_total_price?></strong></td>
              </tr>
          </table>
      <?php endif; ?>

      <div class="shopping-tips">
      <?=$info_3?>
  </div>

  <div style="margin-top: 20px" id="qrcode-box">
      <div style="float: right;">
        <img src="<?=$mp_qrcode?>" alt="公众号" width="128px" height="128px">
      </div>
  </div>
    <div class="clear"></div>
</div>

<div class="footer">
    <a href="https://github.com/bmqy/mibiao-xp">[米表]</a> 魔改自 <a href="https://github.com/Laogesix/xp_mb">@小票米表</a>
</div>
</body>
</html>
