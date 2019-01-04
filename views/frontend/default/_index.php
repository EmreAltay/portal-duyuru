<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Duyurular';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title; ?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

 

    <div class="row">
        <div class="col-lg-9">
            <?php $i=1; foreach($duyurular as $value){ ?>   
                    <div class="panel panel-primary">
                        <div class="panel-heading panel-primary duyuru" id="<?php echo $i; ?>"><h3><?php echo $value["konu"]; ?></h3></div>
                     <div class="<?php echo $i; ?> content" style="display:none;">
                          <div class="panel-body"><?php echo $value["duyuru"]; ?><hr /><?php echo $value["tarih"];?></div>
                      <div class="panel-footer"><b><?php echo $value["ad"]." ".$value["soyad"]; ?></b></div>
                     </div>

                    </div>                                          

                
             <?php $i++; } ?>
        </div>
    </div>

    </div>


