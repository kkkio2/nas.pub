<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '贡献者';
$content = '
以下是本社区的贡献者名单，排名不分先后。

#### 赞助者


#### 社区维护


#### 网站功能开发者


#### Logo 设计


#### 如何贡献？

有钱出钱，有力出力

Github 项目地址： [nas.pub](https://github.com/kkkio2/nas.pub) Fork 以后提交你的改进，我们会根据情况合并到主线中去，并将你列入贡献者名单。

#### 如何赞助？

![微信](http://source.codeloving.com/nasPub/pay/wechat-pay.png)

![支付宝](http://source.codeloving.com/nasPub/pay/ali-pay.png)
';
?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <?= Markdown::process($content, 'gfm') ?>
        </div>
    </div>
</div>